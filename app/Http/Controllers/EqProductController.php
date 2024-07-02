<?php

namespace App\Http\Controllers;

use App\Models\EqProduct;
use App\Models\EqProductCategory;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Datatables;

class EqProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        try {
            return view('equipment.eq_product.index',['title'=>'Equipment','title2'=>'Product','title3'=>'List of Product ']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create(){
        try {
            return view('equipment.eq_product.create',['title'=>'Equipment','title2'=>'Product','title3'=>'Add new Product','categories'=>EqProductCategory::where('category_status','=','1')->get()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('eq.product.index');
            $validated =$this->validate($request,['name'=>'required','qty'=>'required|min:0']);
            if($validated){
                $this->generateCode($request);
                $product=EqProduct::create([
                    'eq_product_category_id'=>$request->eq_product_category_id,
                    'code'=>$request->code,
                    'name'=>$request->name,
                    'date'=>$request->date,
                    'qty'=>$request->qty,
                    'unit'=>$request->unit,
                    'brand_name'=>$request->brand_name,
                    'model_name'=>$request->model_name,
                    'warranty'=>$request->warranty,
                    'warranty_expired'=>$request->warranty_expired,
                    'specification'=>$request->specification,
                    'remark'=>$request->remark,
                    'references'=>$request->references,
                    'package_id'=>$request->package_id,
                    'link1'=>$request->link1??'',
                    'link2'=>$request->link2??'',
                    'link3'=>$request->link3??''
                ]);
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$product],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function generateCode($request){
        $HTMLCodeTemplate='PP.CC.YYYY.NNN-XXX';
        $HTMLCode='';
        $category=EqProductCategory::findOrFail($request->eq_product_category_id)->category_code ?? '-';
        $package=Package::findOrFail($request->package_id)->package_code ?? '-';
        $date=Carbon::parse($request->eq_date)->format('Y');
        $HTMLCode .=$package.'.'.$category.'.'.$date.'.'.'001';
        /* belum selesai */
        dd($HTMLCode);
    }

    public function fetch(){
        try {
            if(!request()->ajax()) return route('eq.product.category.index');
            $products=EqProduct::orderBy('created_at','asc')->get();
            return DataTables::of($products)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('eq.product.category.edit',$row->id);
                $destroy=route('eq.product.category.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('specification',function($row){
                return strip_tags($row->specification);
            })->editColumn('eq_product_category_id',function($row){
                return $row->category->category_name;
            })
            ->editColumn('package_id',function($row){
                return $row->package->package_name;
            })
            ->rawColumns(['action','specification','eq_product_category_id','package_id'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
