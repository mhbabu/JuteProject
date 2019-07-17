<?php

namespace App\Modules\Category\Controllers;

use App\Category;
use App\Libraries\Encryption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{

    public function categoryList()
    {
        return view("Category::list");
    }

    public function createCategory()
    {
        return view("Category::create");
    }


    public function storeCategory(Request $request, $categoryId='')
    {
        $this->validate($request,[
            'name' => 'required',
            'status' => 'required'
        ]);
        if(!empty($categoryId)){
            $decodedCategoryId = Encryption::decodeId($categoryId);
            $category = Category::find($decodedCategoryId);
        }else{
            $category = new Category();
        }
        $category->name = $request->get('name');
        $category->status = $request->get('status');
        $category->save();
        $message = 'Category is successfully stored.';
        if(!empty($categoryId))
            $message = 'Category is successfully updated.';
        Session::flash('success',$message);
        return redirect('category/list');

    }

    public function getCategoryList()
    {
        $categories = Category::orderBy('name','asc')->get(['id','name','status']);
        return Datatables::of($categories)
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
                $str.='<a title="Category_Edit" href="/category/edit/' . Encryption::encodeId($data->id) . '"class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i>  Edit</a> ';
                $str.='<a onclick="return confirm(\'Are you sure want to delete this category?\')" title="Category_Delete" href="/category/delete/' . Encryption::encodeId($data->id) . '"class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> ';
                return $str;
            })
            ->rawColumns(['status','action'])
            ->make (true);
    }


    public function editCategory($categoryId)
    {
        $decodedCategoryId = Encryption::decodeId($categoryId);
        $singleCategory = Category::find($decodedCategoryId);
        return view('Category::edit', compact('singleCategory'));
    }


    public function deleteCategory($categoryId)
    {
        $decodedCategoryId = Encryption::decodeId($categoryId);
        Category::where('id',$decodedCategoryId)->delete();
        Session::flash('success','Category is successfully deleted.');
        return redirect()->back();
    }
}
