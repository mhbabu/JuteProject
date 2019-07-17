<?php

namespace App\Modules\SubCategory\Controllers;

use App\Category;
use App\Libraries\Encryption;
use App\Modules\SubCategory\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class SubCategoryController extends Controller
{

    public function subCategoryList()
    {
        return view("SubCategory::list");
    }

    public function createSubCategory()
    {
        $allPublishedCategories = Category::where('status','1')->pluck('name','id');
        return view("SubCategory::create", compact('allPublishedCategories'));
    }


    public function storeSubCategory(Request $request, $subCategoryId='')
    {
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required'
        ]);
        if(!empty($subCategoryId)){
            $decodedCategoryId = Encryption::decodeId($subCategoryId);
            $subCategory = SubCategory::find($decodedCategoryId);
        }else{
            $subCategory = new SubCategory();
        }
        $subCategory->name = $request->get('name');
        $subCategory->category_id = $request->get('category_id');
        $subCategory->status = $request->get('status');
        $subCategory->save();
        $message = 'SubCategory is successfully stored.';
        if(!empty($subCategoryId))
            $message = 'SubCategory is successfully updated.';
        Session::flash('success',$message);
        return redirect('sub-category/list');

    }

    public function getSubCategoryList()
    {
        $subCategories = SubCategory::leftJoin('categories','categories.id','=','sub_categories.category_id')
            ->orderBy('sub_categories.name','desc')
            ->get([
                'sub_categories.*',
                'categories.name as category'
            ]);
        return Datatables::of($subCategories)
            ->addColumn('serial', function(){
                return '';
            })
            ->editColumn('status',function ($data){
                if($data->status == 1){
                    return '<label class="badge badge-primary">Active</label>';
                }
                return '<label class="badge badge-danger">Inactive</label>';
            })
            ->addColumn('action',function($data){
                $str = '';
                $str.='<a title="SubCategory_Edit" href="/sub-category/edit/' . Encryption::encodeId($data->id) . '"class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i>  Edit</a> ';
                $str.='<a onclick="return confirm(\'Are you sure want to delete this sub-category?\')" title="SubCategory_Delete" href="/sub-category/delete/' . Encryption::encodeId($data->id) . '"class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> ';
                return $str;
            })
            ->rawColumns(['status','action'])
            ->make (true);
    }


    public function editSubCategory($subCategoryId)
    {
        $decodedSubCategoryId = Encryption::decodeId($subCategoryId);
        $singleSubCategory = SubCategory::find($decodedSubCategoryId);
        $allPublishedCategories = Category::where('status','1')->pluck('name','id');
        return view('SubCategory::edit', compact('singleSubCategory','allPublishedCategories'));
    }


    public function deleteSubCategory($subCategoryId)
    {
        $decodedSubCategoryId = Encryption::decodeId($subCategoryId);
        SubCategory::where('id',$decodedSubCategoryId)->delete();
        Session::flash('success','SubCategory is successfully deleted.');
        return redirect()->back();
    }
}
