<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Assignment;
use App\Models\Email;
use Datatables;
use Illuminate\Validation\Rule;

class EngineerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('engineer.index',['title'=>'Engineer']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('engineer.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('engineer.index');
            $validated =$this->validate($request,
            ['full_name'=>'required|unique:engineers,full_name',
            'nickname'=>'required',
            'initial'=>'required|unique:engineers,initial']);
            if($validated){
                $engineer=Engineer::create($request->all());
                if($engineer) {
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$engineer],200);             
                }
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function storePhoto(Request $request)
    {
        try {
            $request->validate(['photo_profile'=>'required|image|mimes:jpg,jpeg,png|max:2048']);
            $file=$request->file('photo_profile');
            $filename=time().'.'.$request->photo_profile->extension();
            $file->move('storage/photo',$filename);
            $engineer=Engineer::findOrFail($request->engineer_id);
            $engineer->photo_profile=$filename;
            $engineer->save();
            return response()->json(['success'=>true,'message'=>'photo profile updated..!']);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        try {
            $engineer=Engineer::findOrFail($id);
            return view('engineer.show',['title'=>'Show data','data'=>$engineer,'emails'=>Email::where('engineer_id',$engineer->id)->get()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('engineer.index');
            $engineer=Engineer::findOrFail($id);
            $html=view('engineer.edit',$engineer)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('position.index');
                $request->validate(
                    ['full_name'=>'required',
                    'nickname'=>'required',
                    'initial'=>'required']);
                    $engineer=Engineer::findOrFail($id);
                    $engineer->full_name=$request->full_name;
                    $engineer->nickname=$request->nickname;
                    $engineer->phone1=$request->phone1;
                    $engineer->phone2=$request->phone2;
                    $engineer->initial=$request->initial;
                    $engineer->type=$request->type;
                    $engineer->description=$request->description;
                    $engineer->status=$request->status;
                    $engineer->save();

                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$engineer],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('engineer.index');
                    $engineer=Engineer::findOrFail($id);
                    $result=$engineer->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }


    public function assignment($engineer_id){
        try {
            $engineer=Engineer::findOrFail($engineer_id);
            $positions=Position::orderBy('position_code')->get();
            $html=view('engineer.assignment',compact('engineer','positions'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function assignmentStore(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('engineer.index');
            $validated =$this->validate($request,
            ['engineer_id'=>'required',
            'position_id'=>['required',Rule::unique('assignments')->where(function($query) use ($request){
                return $query->where('engineer_id',$request->engineer_id)->Where('position_id',$request->position_id);
            })]],[],['engineer_id'=>'name','position_id'=>'position']);
            if($validated){
                $assignment=Assignment::create($request->all());
                if($assignment) {
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$assignment],200);             
                }
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function fetch(Request $request)
    {
        try {
            if(!$request->ajax()) return route('engineer.index');
            // $engineers=Engineer::latest()->get();
            $engineers=Engineer::WithPositionAssignment()->get();
            return Datatables::of($engineers)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('engineer.edit',$row->id);
                $destroy=route('engineer.destroy',$row->id);
                $addEmail=route('engineer.show.email',$row->id);
                $assignment= route('engineer.assignment',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-warning btn-sm rounded-0 add-email" data-url="'.$addEmail.'" id="show'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-location-arrow"></i> Add email</button>
                       <button type="button" class="btn btn-success btn-sm rounded-0 assignment" data-url="'.$assignment.'" id="assignment'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-check-circle"></i> Assignment</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('full_name',function($row){
                $show=route('engineer.show',$row->id);
                $fullName='<a href="'.$show.'" class="text text-bg-blue">'.$row->full_name.'</a>';
                return $fullName;
            })->editColumn('status',function($row){
                return $row->status == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">InActive</span>';
                    })
            ->rawColumns(['action','full_name','status'])->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /* for email */ 
    public function createEmail($engineer_id){
        try {            
            $html=view('engineer.email.create',['engineer_id'=>$engineer_id])->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function createEmail2($engineer_id){
        try {            
            $html=view('engineer.email.show',['engineer_id'=>$engineer_id,'emails'=>Email::where('engineer_id',$engineer_id)->get()])->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeEmail(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('engineer.index');
            $validated =$this->validate($request,
            ['email'=>'required|email|unique:emails,email',
            'status'=>'required']);
            if($validated){
                $email=Email::create($request->all());
                if($email) {
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$this->getEmail($email->engineer_id)],200);
                }
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function editEmail($id){
        try {
            if(!request()->ajax()) return redirect()->route('engineer.index');
            $email=Email::findOrFail($id);
            $html=view('engineer.email.edit',$email)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateEmail(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('engineer.index');
                $request->validate(
                    ['email'=>'required',
                    'status'=>'required']);
                    $email=Email::findOrFail($id);
                    $email->email=$request->email;
                    $email->status=$request->status;
                    $email->description=$request->description;
                    $email->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$this->getEmail($email->engineer_id)],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroyEmail($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('engineer.index');
                    $email=Email::findOrFail($id);
                    $result=$email->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>$this->getEmail($email->engineer_id)],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    protected function getEmail($engineer_id){
        try {
            $engineerEmails=Email::where('engineer_id','=',$engineer_id)->get();
            $HTML='';
            foreach ($engineerEmails as $key => $value) {
                $no=$key+1;
                $edit=route('engineer.email.edit',$value->id);
                $destroy=route('engineer.email.destroy',$value->id);
                $status=$value->status == 1 ? '<span class="badge accent-primary">Active</span>' :'<span class="badge accent-danger">InActive</span>';
                $HTML .='<tr>
                <td>'.$no.'</td>
                <td>'.$value->email.'</td>
                <td>'.$status.'</td>
                <td>
                    <button type="button" class="btn btn-xs btn-primary rounded-0 edit-form" data-id="" data-url="'.$edit.'"><i class="fas fa-pencil-alt"></i> edit</button>
                    <button type="button" class="btn btn-xs btn-danger rounded-0 delete" id="destroy'.$value->id.'" data-url="'.$destroy.'" data-id="'.$value->id.'"><i class="fas fa-times"></i> delete</button>
                </td>                
                </tr>';
            }
            return $HTML;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function select2(Request $request){        
        if($request->ajax() && $request->method() <> 'POST') return false;
        if($request->search == ''){
            $engineers=Engineer::engineer()->get();
        } else {
            $engineers=Engineer::engineer()->where(function($query) use($request){
                $query->where('full_name', 'LIKE','%'.$request->search.'%')->orWhere('nickname','LIKE','%'.$request->search.'%')->orWhere('initial','LIKE','%'.$request->search.'%');
            })->get();
        }
        $response=array();
        foreach($engineers as $engineer){
            $response[]=array('id'=>$engineer->id,'text'=>$engineer->full_name,'caption'=>$engineer->full_name);
        }
        return response()->json($response);
    }


}
