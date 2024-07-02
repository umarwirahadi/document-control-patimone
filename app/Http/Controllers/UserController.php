<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use App\Models\User;
use App\Models\UserAccess;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        try {
            return view('useraccess.index',['title'=>'Master','title2'=>'Data','title3'=>'Users']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create(){
        try {
            $engineers=Engineer::all();
            $html=view('useraccess.create',compact('engineers'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(Request $request){
    try {
        if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('user.index');
        $request->validate(
                ['name'=>'required|string|unique:users,name',
                'engineer_id'=>'required',
                'level'=>'required']);
                $user=User::create([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'engineer_id'=> $request->engineer_id,
                    'level'=> $request->level,
                    'password'=> Hash::make('patimone1234'),
                ]);
                $user->assignRole('user');
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$user],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id){

    }
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    public function generatePass(){
        $str=rand(1,17);
        return response()->json($str);
    }

    public function assign($id){
        try {
            if(!request()->ajax()) return redirect()->route('user.index');
            $user=User::find($id);
            $html=view('useraccess.assign',compact('user'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeAssign(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('user.index');
            $validated =$this->validate($request,[
                'package_id'=>['required',Rule::unique('user_accesses')->where(function($query) use ($request){
                    return $query->where('user_id',$request->user_id)->Where('package_id',$request->package_id);
                })],
                'level'=>'required'],[],['package_id'=>'Package']);
                if($validated){
                    $package_ids = (array) $request->package_id;
                    foreach( $package_ids as $package_id ) {
                        $data_to_sync[] = [ 'id' => Uuid::uuid4()->toString(),'package_id'=>$package_id,'status'=>'1','level'=>$request->level ];
                    }
                    $user=User::find($request->user_id)->packages()->sync($data_to_sync,false);

                    $data=UserAccess::where('user_id',$user->id)->get();
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$data],200);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function destroyAssign($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('user.index');
                    $userAssign=UserAccess::findOrFail($id);
                    $id=$userAssign->user_id;
                    $result=$userAssign->delete();
                    if($result){
                        $data=UserAccess::where('user_id',$id)->get();
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>$data],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function fetch(Request $request)
    {
        try {
            if(!$request->ajax()) return route('user.index');
            $users=User::latest()->get();

            return Datatables::of($users)->addIndexColumn()->addColumn('action',function($row){
                $edit       =route('user.edit',$row->id??'');
                $destroy    =route('user.destroy',$row->id);
                $assign     =route('user.assign.create',$row->id);

                $btn= '<button type="button" data-url="'.$edit.'" data-toggle="tooltip" title="Edit user" class="btn btn-default btn-table rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-edit"></i></button>
                       <button type="button" data-url="'.$assign.'" data-toggle="tooltip" title="package user" class="btn btn-default btn-table rounded-0 assign-form" id="assign-'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-box-open"></i></button>
                       <button type="button" data-url="" data-toggle="tooltip" title="Assign role user" class="btn btn-default rounded-0 role-form" id="role_'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-box-open"></i></button>
                       <button type="button" data-url="'.$destroy.'" class="btn btn-default rounded-0 delete" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i></button>';
                return $btn;
            })->rawColumns(['action','status'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function changepassword(Request $request){
        try {
            if(!$request->ajax()) return route('profile.me');
            $request->validate(['password' => 'required|confirmed|min:8','current_password'=>['required',function($attribute,$value,$fail){
                /* check if incorect current password */
                if(!\Hash::check($value,auth()->user()->password)){
                    return $fail(__('The current password is incorrect.'));
                }
            }]]);
            $me=User::findOrFail(auth()->user()->id);
            $me->password = Hash::make($request->password);
            $me->save();
            return response()->json(['success'=>true,'message'=>'Password changed..!','data'=>$me],200);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
