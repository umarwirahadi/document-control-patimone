<?php

namespace App\Http\Controllers;

use App\Exports\EqProductCategoryExport;
use App\Models\EqProductCategory;
use Illuminate\Http\Request;
use Datatables;
use Maatwebsite\Excel\Facades\Excel;

class EqProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        try {
            return view('equipment.eq_product_category.index',['title'=>'Equipment','title2'=>'Utility','title3'=>'Equipment Category ']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(){
        try {
            $html=view('equipment.eq_product_category.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('eq.product.category.index');
            $validated =$this->validate($request,[
                'category_code'=>'required|unique:eq_product_category,category_code','category_name'=>['required','unique:eq_product_category,category_name'],
                'category_status'=>'required']);
                if($validated){
                    $eqCategory=EqProductCategory::create(['category_code'=>$request->category_code,'category_name'=>$request->category_name,'category_description'=>$request->category_description,'category_status'=>$request->category_status]);
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$eqCategory],200);
                }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id){
        try {
            if(!request()->ajax() && request()->method() <> 'POST') return redirect()->route('eq.product.category.index');
            $eqprodCategory=EqProductCategory::findOrFail($id);
            $html=view('equipment.eq_product_category.edit',$eqprodCategory)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id){
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('eq.product.category.index');
                $request->validate(
                    ['category_name'=>'required','category_code'=>'required']);
                    $eqprodCat=EqProductCategory::findOrFail($id);
                    $eqprodCat->category_code= $request->category_code;
                    $eqprodCat->category_name= $request->category_name;
                    $eqprodCat->category_description= $request->category_description;
                    $eqprodCat->category_status= $request->category_status;
                    $eqprodCat->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$eqprodCat],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('eq.product.category.index');
                    $eqCategory=EqProductCategory::findOrFail($id);
                    $result=$eqCategory->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetch(){
        try {
            if(!request()->ajax()) return route('eq.product.category.index');
            $categories=EqProductCategory::orderBy('created_at','asc')->get();
            return DataTables::of($categories)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('eq.product.category.edit',$row->id);
                $destroy=route('eq.product.category.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('description',function($row){
                return strip_tags($row->description);
            })
            ->editColumn('category_status',function($data){
                if($data->category_status==1){
                    $status='<span class="badge badge-success">Active</span>';
                } else {
                    $status='<span class="badge badge-danger">not Active</span>';
                }
                return $status;
            })
            ->rawColumns(['action','category_status','category_description'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function export(){
        return Excel::download(new EqProductCategoryExport,'ProductCategory.xlsx');
    }

}
