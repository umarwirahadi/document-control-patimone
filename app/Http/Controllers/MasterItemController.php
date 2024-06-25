<?php

namespace App\Http\Controllers;

use App\Models\MasterItem;
use Illuminate\Http\Request;
use Datatables;

class MasterItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        try {
            return view('item.index',['title'=>'Master','title2'=>'Utility','title3'=>'items']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create()
    {
        try {
            $html=view('item.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()<>'POST') return redirect()->route('item.index');
            $validated =$this->validate($request,['item_code'=>'required',
            'item_name'=>'required',
            'item_category'=>'required']);
            if($validated){
                $item=MasterItem::create(['item_code'=>$request->item_code,'item_name'=>$request->item_name,'item_category'=>$request->item_category,'item_description'=>$request->item_description,'item_status'=>1]);
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$item],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('item.index');
            $item=MasterItem::findOrFail($id);
            $html=view('item.edit',$item)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('item.index');
                $request->validate(
                    ['item_code'=>'required',
                    'item_name'=>'required',
                    'item_category'=>'required',
                    'item_status'=>'required']);
                    $item=MasterItem::findOrFail($id);
                    $item->item_code=$request->item_code;
                    $item->item_name=$request->item_name;
                    $item->item_category=$request->item_category;
                    $item->item_description=$request->item_description;
                    $item->item_status=$request->item_status;
                    $item->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$item],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('item.index');
                    $item=MasterItem::findOrFail($id);
                    $result=$item->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function fetch()
    {
        try {
            if(!request()->ajax()) return route('item.index');
            $items=MasterItem::oldest()->get();
            return Datatables::of($items)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('item.edit',$row->id??'');
                $destroy=route('item.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('item_status',function($data){
                if($data->item_status==1){
                    $status='<span class="badge badge-success">Active</span>';
                } else {
                    $status='<span class="badge badge-danger">Not Active</span>';
                }
                return $status;
            })
            ->rawColumns(['action','item_status'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
