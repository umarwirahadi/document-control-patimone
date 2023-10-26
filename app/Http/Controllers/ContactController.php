<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Datatables;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('contact.index',['title'=>'List of contcts']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('contact.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()<>'POST') return redirect()->route('contact.index');
            $validated =$this->validate($request,['first_name'=>'required',
            'phone_1'=>'required',
            'primary_email'=>'required',
            'type'=>'required'],[],['phone_1'=>'Phone number']);
            if($validated){
                $engineer=Contact::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$engineer],200);
            }  
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function edit($id)
    {
        try {
            if(!request()->ajax()) return redirect()->route('contact.index');
            $contact=Contact::findOrFail($id);
            $html=view('contact.edit',$contact)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('contact.index');
                $request->validate(
                    ['first_name'=>'required',
                    'phone_1'=>'required',
                    'primary_email'=>'required',
                    'type'=>'required']);
                    $contact=Contact::findOrFail($id);
                    $contact->first_name=$request->first_name;
                    $contact->last_name=$request->last_name;
                    $contact->phone_1=$request->phone_1;
                    $contact->phone_2=$request->phone_2;
                    $contact->primary_email=$request->primary_email;
                    $contact->secondary_email=$request->secondary_email;
                    $contact->type=$request->type;
                    $contact->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$contact],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('contact.index');
                    $contact=Contact::findOrFail($id);
                    $result=$contact->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }


    public function fetch(Request $request)
    {
        try {
            if(!$request->ajax()) return route('engineer.index');
            $contacs=Contact::latest()->get();
            return Datatables::of($contacs)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('contact.edit',$row->id??'');
                $destroy=route('contact.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm btn-custom rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 btn-custom delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->addColumn('fullname',function($row){
                $showEngineer=route('contact.show',$row->id);
                if($row->eng_status==0){
                    $fullName='<a href="'.$showEngineer.'">'.$row->first_name.' '.$row->last_name.'</a>';
                } else {
                    $fullName='<a href="'.$showEngineer.'">'.$row->first_name.' '.$row->last_name.'</a>';
                }
                return $fullName;
            })
            ->rawColumns(['action','fullname'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }


}
