<?php

namespace App\Http\Controllers;

use App\Models\AssignmentLetter;
use App\Models\AttachmentFile;
use App\Models\CorrespondenceType;
use App\Models\DocumentReference;
use App\Models\Documenttype;
use App\Models\Engineer;
use App\Models\Letter;
use App\Models\LetterSource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Datatables;
use Ramsey\Uuid\Uuid;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class LetterController extends Controller
{
    protected $data_package;
    public function __construct()
    {
        $this->middleware('auth');
        $this->data_package = auth()->user();
    }
    public function index(){
        try {
            $data=auth()->user();
            $data->load('access');
            return view('letters.index',['title'=>'Correspondence','title2'=>'Incoming','title3'=>'List','data'=>$data]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(Request $request){
        try {
            if(!Session::has('letter_id')){
                $this->validate($request,['type'=> 'required']);
                $letter = $this->generateLetter($request->all());
                activity()->performedOn($letter)->log('create');
                Session::put('letter_id', $letter['id']);
            }


            $packages=auth()->user()->load('access');
            if(count($packages->access) > 0 ){
                foreach ($packages->access as $val) {
                    $datapackage[]=[$val->package_id];
                }
            }
            $refferences=Letter::find(Session::get('letter_id'));
            // $refferences->load('assignments.engineer');
            $engineers=Engineer::engineer()->get();
            return view('letters.create',['title'=>'Correspondence','title2'=>'Incoming','title3'=>'Create','engineers'=>$engineers,'lettersource'=>LetterSource::active()->whereIn('package_id',$datapackage)->get(),'correspondencetype'=>CorrespondenceType::whereIn('package_id',$datapackage)->get(),'data'=>$refferences,'letter_id'=>Session::get('letter_id')]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function generateLetter($data=null){
        try {

            $letter=Letter::create(['type'=>$data['type'],
                'letter_source_id'=>'-',
                'package_id'=>'-',
                'correspondence_type_id'=>'-',
                'document_no'=>'000000',
                'letter_date'=>date('Y-m-d'),
                'attention_to'=>'',
                'delivery_date'=>date('Y-m-d'),
                'document_control_date'=>date('Y-m-d'),
                'assign_to'=>'',
                'due_date'=>date('Y-m-d'),
                'status'=>'0']);
            return $letter;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getContentTemplate(Request $request){
        try {
            if(!$request->ajax() || $request->method() != 'POST') abort(404);
            $validated =$this->validate($request,['id'=>'required','from'=>'required','letter_date'=>'required'],[],['letter_date'=>'Document date']);
            if($validated){
                $source=LetterSource::find($request->from);
                $corespondenceTemplate=CorrespondenceType::find($request->id);
                $letter_date= Carbon::createFromFormat('d-M-y', $request->letter_date);
                if($source->unit == 1) {
                    if($corespondenceTemplate){
                        $letter_no=str_replace('YY',$letter_date->format('y'),$corespondenceTemplate->content_template);
                        return response()->json(['to_attention'=>$corespondenceTemplate->to_attention,'ref_no'=>$letter_no]);
                    } else {
                        return response()->json();
                    }
                } else {
                    /* make condition by hard code */
                    $source_name=$source->source_name;
                    $corres_type=$corespondenceTemplate->correspondence_type;
                    switch ($source_name) {
                        case 'PMU-P6':
                            if($corres_type == 'L to ENGR' || $corres_type == 'L to CTR') {
                                $letter_no_y=str_replace('YYYY',date('Y'),'UM.006/04/MM/PKG6-PTB/YYYY');
                                $letter_no=str_replace('MM',monthToRoman(date('m')),$letter_no_y);
                            } else {
                                $letter_no='';
                            }
                            break;

                        default:
                            # code...
                            $letter_no= '';
                            break;
                    }
                    return response()->json(['to_attention'=>$corespondenceTemplate->to_attention,'ref_no'=>$letter_no]);
                }

            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function addReference(){
        try {
            $html=view('letters.reference.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function autoCompleteSearchRefNumber(Request $request){
        try {
            if(!$request->ajax() && $request->method()!='POST') return false;
            $request->validate(['term'=>'required|string']);
            $keyword='%'.$request->term.'%';
            $results=Letter::select('id','letter_ref_no','letter_date','subject')->where('letter_ref_no','like',$keyword)->orWhere('subject','like',$keyword)->limit(50)->get();
            $response=array();
            if($results) {
                foreach ($results as $key => $result) {
                    $response[]=['value'=>$result->id,'label'=>$result->letter_ref_no,'date'=>$result->letter_date,'subject'=>$result->subject];
                }
            }
            return response()->json($response);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeReference(Request $request){
        try {
            if(!$request->ajax() && $request->method()!='POST') return false;
            $request->validate(['letter_id'=>'required|string','letter_id_reference'=>'required','autocomplete_select_reference'=>'required','source'=>'required']);
            /*
            ***
            get original data from letter table
            ***
            */
            $letter=Letter::findOrFail($request->letter_id_reference);
            $reference=DocumentReference::create(['letter_id'=>$request->letter_id,'letter_id_reference'=>$request->letter_id_reference,'reference_number'=>$request->autocomplete_select_reference,'source'=>$request->source,'subject'=>$request->subject,'package_id'=>$letter->package_id]);
            $references=DocumentReference::where('letter_id',$reference->letter_id)->get();
            if($reference) {
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$this->getTemplateReference($references)],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function editReference($id){
        try {
            if(!request()->ajax()) return false;
            $reference=DocumentReference::findOrFail($id);
            $html=view('letters.reference.edit',compact('reference'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateReference(Request $request, $id){
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('letter-source.index');
                $attachment=DocumentReference::findOrFail($id);
                $attachment->letter_id_reference=$request->letter_id_reference;
                $attachment->reference_number=$request->autocomplete_select_reference;
                $attachment->source=$request->source;
                $attachment->subject=$request->subject;
                $attachment->status='2';
                $attachment->save();
                $references=DocumentReference::where('letter_id',$attachment->letter_id)->get();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$this->getTemplateReference($references)],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroyReference($letter_id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('letter.index');
            $documentRef=DocumentReference::findOrFail($letter_id);
            $id=$documentRef->letter_id;
            $result=$documentRef->delete();
            if($result){
                $references=DocumentReference::where('letter_id',$id)->get();
                return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>$this->getTemplateReference($references)],200);
            }
            return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    private function getTemplateReference($data){
        /*
        generate HTML template for JS, easy to you to manage route from PHP
        */
        $HTML='';
        foreach ($data as $key => $reference) {
            $view_data =route('letter.edit.reference',$reference->id);
            $edit_data =route('letter.edit.reference',$reference->id);
            $destroy_data =route('letter.destroy.reference',$reference->id);
            $source=$reference->source == 'CTR' ? '<span class="badge badge-danger">CTR</span>':(($reference->source == 'ENG') ? '<span class="badge badge-success">ENG</span>': '<span class="badge badge-info">EMP</span>');
            $HTML .='<tr>
              <td>'.($key + 1).'</td>
              <td>'.$reference->reference_number.'</td>
              <td>'.$reference->subject.'</td>
              <td>'.$source.'</td>
              <td>
                <button type="button" data-id="' . $reference->id.'" id="view_'.$reference->id.'" data-url="'.$view_data.'" class="btn btn-xs btn-info btn-view-reference" title="view document"><span class="fas fa-search"></span></button>
                <button type="button" data-id="' . $reference->id.'" id="edit_'.$reference->id.'" data-url="'.$edit_data.'" class="btn btn-xs btn-primary btn-edit-reference" title="edit reference"><span class="far fa-edit"></span></button>
                <button type="button" data-id="' . $reference->id.'" id="destroy_'.$reference->id.'" data-url="'.$destroy_data.'" class="btn btn-xs btn-danger btn-delete-reference" title="delete reference"><span class="fas fa-times"></span></button>
              </td>
            </tr>';
        }
        return $HTML;
    }

    public function addAttachment(){
        try {
            $documentTypes=Documenttype::active()->get();
            $html=view('letters.attachment.create',compact('documentTypes'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeAttachment(Request $request){
        try {
            if(!$request->ajax() && $request->method()!='POST') return false;
            $request->validate(['letter_id'=>'required|string','file_name'=>'required']);
            $attachment=AttachmentFile::create(['letter_id'=>$request->letter_id,'document_type_id'=>$request->document_type_id,'file_name'=>$request->file_name,'file_link1'=>$request->file_link1,'file_link2'=>$request->file_link2,'file_link3'=>$request->file_link3,'description'=>$request->description,'type'=>$request->type]);
            $attachments=AttachmentFile::where('letter_id',$attachment->letter_id)->get();
            if($attachment) {
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$this->getTemplateAttachment($attachments)],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function editAttachment($id){
        try {
            if(!request()->ajax()) return false;
            $attachment=AttachmentFile::findOrFail($id);
            $documentTypes=Documenttype::active()->get();
            $html=view('letters.attachment.edit',compact('attachment','documentTypes'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function updateAttachment(Request $request,$id){
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('letter.index');
                $attachment=AttachmentFile::findOrFail($id);
                // $attachment->letter_id_reference=$request->letter_id_reference;
                // $attachment->reference_number=$request->autocomplete_select_reference;
                $attachment->file_name=$request->file_name;
                $attachment->document_type_id=$request->document_type_id;
                $attachment->file_link1=$request->file_link1;
                $attachment->file_link2=$request->file_link2;
                $attachment->file_link3=$request->file_link3;
                $attachment->type=$request->type;
                $attachment->description=$request->description;
                // $attachment->tags=$request->tags;
                $attachment->save();
                $attachments=AttachmentFile::where('letter_id',$attachment->letter_id)->get();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$this->getTemplateAttachment($attachments)],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function destroyAttachment($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('letter.index');
            $attachment=AttachmentFile::findOrFail($id);
            $id=$attachment->letter_id;
            $result=$attachment->delete();
            if($result){
                $attachments=AttachmentFile::where('letter_id',$id)->get();
                return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>$this->getTemplateAttachment($attachments)],200);
            }
            return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function getTemplateAttachment($attachments){
        /*
        generate HTML template for JS, easy to you to manage route from PHP
        */
        $HTML='';
        foreach ($attachments as $key => $attachment) {
            $view_data =route('letter.edit.attachment',$attachment->id);
            $edit_data =route('letter.edit.attachment',$attachment->id);
            $destroy_data =route('letter.destroy.attachment',$attachment->id);
            $links='';
            $attachment->file_link1 ? $links .='<a href="'.$attachment->file_link1.'" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 1,</a>':'';
            $attachment->file_link2 ? $links .='<a href="'.$attachment->file_link2.'" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 2,</a>':'';
            $attachment->file_link3 ? $links .='<a href="'.$attachment->file_link3.'" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 3</a>':'';

            $HTML .='<tr>
              <td>'.(++$key).'</td>
              <td>'.$attachment->file_name.'</td>
              <td>'.$attachment->documentType->document_type_name.'</td>
              <td>'.$links.'</td>
              <td>
                <button type="button" data-id="' . $attachment->id.'" id="edit_'.$attachment->id.'" data-url="'.$edit_data.'" class="btn btn-xs btn-primary btn-edit-attachment" title="edit attachment"><span class="far fa-edit"></span></button>
                <button type="button" data-id="' . $attachment->id.'" id="destroy_'.$attachment->id.'" data-url="'.$destroy_data.'" class="btn btn-xs btn-danger btn-delete-attachment" title="delete attachment"><span class="fas fa-trash"></span></button>
              </td>
            </tr>';
        }
        return $HTML;
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('letter.index');
            $validated =$this->validate($request,['letter_id'=>'required','letter_source_id'=>'required','correspondence_type'=>'required',
                'letter_ref_no'=>'required','letter_date'=>'required','received_date'=>'required',
                'attention_to'=>'required','subject'=>'required','response_required'],[],['letter_source_id'=>'from/source']);
                if($validated){
                    $letter=Letter::findOrFail($validated['letter_id']);
                    try {
                        $letter->update([
                            'letter_source_id'=>$request->letter_source_id,
                            'correspondence_type'=>$request->correspondence_type,
                            'document_no'=>'1',
                            'letter_ref_no'=>$request->letter_ref_no,
                            'letter_date'=>Carbon::createFromFormat('d-M-y', $request->letter_date)->format('Y-m-d'),
                            'received_date'=>Carbon::createFromFormat('d-M-y', $request->received_date)->format('Y-m-d'),
                            'received_by'=>$request->received_by,
                            'attention_to'=>$request->attention_to,
                            'subject'=>$request->subject,
                            'response_required'=>$request->response_required,
                            'reference'=>$request->reference,
                            'pic_letter_out'=>$request->pic_letter_out,
                            'attachment'=>$request->attachment,
                            'attachment_type'=>$request->attachment_type,
                            'cc_to_letter_out'=>$request->cc_to_letter_out,
                            'delivery_date'=>$request->delivery_date,
                            'document_control_date'=>$request->document_control_date,
                            // 'assign_to'=>implode(",",$request->assign_to),
                            // 'for_reference'=>isset($request->for_reference) ? implode(",",$request->for_reference):'',
                            'due_date'=>Carbon::createFromFormat('d-M-y', $request->received_date)->format('Y-m-d'),
                            'engineer_ref_no'=>$request->engineer_ref_no,
                            'engineer_res_date'=>$request->engineer_res_date,
                            'rev'=>$request->rev,
                            'status'=>'1',
                            'description'=>$request->description
                        ]);

                        /* put data id into variable */
                        $letter_id=$letter->id;

                        /* create assignment for letter as action and reference */
                        /* take for action */
                        if(isset($request->assign_to)){
                            foreach ($request->assign_to as $key => $value) {
                                AssignmentLetter::updateOrCreate(['engineer_id'=>$value,'letter_id'=>$letter_id],['id'=>Uuid::uuid4()->toString(),'action'=>'1','priority'=>$key+1,'status'=>'1','created_by'=>auth()->user()->id,'name'=>'assign']);
                            }
                        }

                        /* take for reference */
                        if(isset($request->for_reference)){
                            foreach ($request->for_reference as $key => $value) {
                                AssignmentLetter::updateOrCreate(['engineer_id'=>$value,'letter_id'=>$letter_id],['id'=>Uuid::uuid4()->toString(),'action'=>'2','priority'=>$key + 1,'status'=>'1','created_by'=>auth()->user()->id,'name'=>'reference']);
                            }
                        }
                        /*
                        release session id letter if success

                        to be confirmd, if letter status equal with 1 than release

                        */
                        // Session::forget('letter_id');
                        return response()->json(['success'=>true,'message'=>'Record was Created/Updated','data'=>$letter],200);
                    } catch ( \Illuminate\Database\QueryException $e) {
                        return response()->json(['success'=>false,'message'=>'Ups...! something goes wrong, create data failed..!','data'=>$e->getMessage()],200);
                    }
                }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit($id){
        try {
            $packages=auth()->user()->load('access');
            foreach ($packages->access as $val) {
                $datapackage[]=[$val->package_id];
            }
            $letter=Letter::with(['references','assignments'])->findOrFail($id);
            // $letter->with('assignments');

            return response()->json($letter);
            // $engineers=Engineer::engineer()->get();
            // return view('letters.edit',['title'=> 'Edit Incoming','engineers'=>$engineers,'lettersource'=>LetterSource::active()->whereIn('package_id',$datapackage)->get(),'correspondencetype'=>CorrespondenceType::whereIn('package_id',$datapackage)->get(),'letter'=>$letter]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id){

    }

    public function destroy($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('letter.index');
                    $letter=Letter::findOrFail($id);
                    $result=$letter->delete();
                    if($result){
                        Session::forget('letter_id');
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function copyAssignTo($letter_id,$type){
        if(!request()->ajax()) return false;
        $assigns=DB::table('assignment_letters')
                ->join('emails','assignment_letters.engineer_id','=','emails.engineer_id')
                ->select('emails.email','assignment_letters.letter_id','emails.status')
                ->where('assignment_letters.letter_id','=',$letter_id)->where('emails.status','=','1')->where('assignment_letters.action','=',$type)
                ->orderBy('assignment_letters.priority')
                ->get();
        $string='';
        foreach ($assigns as $assign) {
            $string .=$assign->email.',';
        }
        $newString=rtrim($string,',');
        return response()->json($newString);
    }

    public function generatePDF($letter_id){
        try {
            $letter=Letter::find($letter_id);
            $engineers=Engineer::withPositionAssignment()->orderBy('engineers.created_at')->get();
            $pdf=PDF::loadView('letters.pdf.letterin',compact('engineers','letter'));
            return $pdf->download();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function closeLetter(Request $request,$letter_id){
        if(!$request->ajax() && $request->method() <> 'POST') return false;
        if(Session::has('letter_id') == $letter_id){
            Session::forget('letter_id');
            return response()->json(['success'=>true,'message'=>'Document closed..!','data'=>null],200);
        } else {
            return response()->json(['success'=>false,'message'=>'Document still open..!','data'=>null],200);
        }
    }

    public function fetchLetter()
    {
        try {
            if(!request()->ajax()) return route('letter.index');

            $letters=DB::table('letters')->select('letters.id','letters.document_no','letters.letter_date','letter_ref_no','letters.received_date','letters.subject','letters.rev','letters.status','letter_sources.source_name')
                     ->leftJoin('letter_sources','letter_sources.id','=','letters.letter_source_id')->get();
            return Datatables::of($letters)
            ->addIndexColumn()
            ->editColumn('status',function($data){
                if($data->status == 1 ){
                    $status='<span class="badge badge-primary">open</span>';
                } else if($data->status == 2 ) {
                    $status='<span class="badge badge-success">close</span>';
                } else if($data->status == 3){
                    $status='<span class="badge badge-danger">due date</span>';
                } else {
                    $status='<span class="badge badge-warning">Draft</span>';
                }
                return $status;
            })->editColumn('letter_date',function($row){
                return Carbon::createFromFormat('Y-m-d', $row->letter_date)->format('d-M-Y');
            })
            ->addColumn('action',function($row){
                $edit=route('letter.edit',$row->id??'');
                $destroy=route('letter.destroy',$row->id);
                $btn= '<a href="'.$edit.'" class="btn btn-info btn-sm rounded-2 btn-table" ><i class="fas fa-pencil-alt"></i></a>
                       <button type="button" class="btn btn-danger btn-sm rounded-2 btn-table delete-data" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i></button>';
                return $btn;
            })->rawColumns(['action','status'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetchTransmittal()
    {
        try {
            if(!request()->ajax()) return route('letter.index');
            // $transmittals=Letter::transmittal(auth()->user()->package_id)->get();
            $transmittals=DB::table('letters')->select('letters.id','letters.document_no','letters.letter_date','letter_ref_no','letters.received_date','letters.subject','letters.rev','letters.status','letter_sources.source_name')
                     ->leftJoin('letter_sources','letter_sources.id','=','letters.letter_source_id')->whereIn('')->get();
            return Datatables::of($transmittals)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('package.edit',$row->id??'');
                $destroy=route('package.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 btn-custom edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 btn-custom delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('status',function($data){
                if($data->status == 1 ){
                    $status='<span class="badge badge-primary">open</span>';
                } else if($data->status == 2 ) {
                    $status='<span class="badge badge-success">close</span>';
                } else if($data->status == 3){
                    $status='<span class="badge badge-danger">due date</span>';
                } else {
                    $status='<span class="badge badge-warning">Draft</span>';
                }
                return $status;
            })->editColumn('letter_date',function($row){
                return Carbon::createFromFormat('Y-m-d', $row->letter_date)->format('d-M-Y');
            })
            ->rawColumns(['action','status'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
