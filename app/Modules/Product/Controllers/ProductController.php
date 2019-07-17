<?php

namespace App\Modules\Product\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use App\Modules\Product\Models\Product;
use App\Modules\SubCategory\Models\SubCategory;
use App\Modules\Vendor\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;


class ProductController extends Controller
{
    public function productList()
    {
        return view("Product::list");
    }


    public function createProduct()
    {
        $allPublishedCategories = Category::where('status',1)->pluck('name','id');
        $allPublishedSubCategories = SubCategory::where('status',1)->pluck('name','id');
        $allPublishedVendors = Vendor::where('status',1)->pluck('name','id');
        return view("Product::create",compact('allPublishedCategories','allPublishedSubCategories','allPublishedVendors'));
    }


    public function storeProduct(Request $request, $productId='')
    {
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'vendor_id' => 'required',
            'price' => 'required',
            'code' => 'required',
            'description' => 'required',
            'origin' => 'required',
            'status' => 'required'
        ]);
        if(!empty($productId)){
            $decodedProductId = Encryption::decodeId($productId);
            $product = Product::find($decodedProductId);
        }else{
            $product = new Product();
        }
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id');
        $product->sub_category_id = $request->get('sub_category_id');
        $product->vendor_id = $request->get('vendor_id');
        $product->price = $request->get('price');
        $product->code = $request->get('code');
        $product->description = $request->get('description');
        $product->origin = $request->get('origin');
        $product->status = $request->get('status');
        $product->save();
        $message = 'Product is successfully stored.';
        if(!empty($productId))
            $message = 'Product is successfully updated.';
        Session::flash('success',$message);
        return redirect('product/list');

    }

    public function getProductList()
    {
        $products = Product::leftJoin('categories','categories.id','=','products.category_id')
            ->leftJoin('sub_categories','sub_categories.id','=','products.sub_category_id')
            ->leftJoin('vendors','vendors.id','=','products.vendor_id')
            ->orderBy('products.name','desc')
            ->get([
                'products.*',
                'categories.name as category',
                'sub_categories.name as sub-category',
                'vendors.name as vendor'
            ]);

        return Datatables::of($products)
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
                $str.='<a title="Product_Edit" href="/product/edit/' . Encryption::encodeId($data->id) . '"class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i>  Edit</a> ';
                $str.='<a onclick="return confirm(\'Are you sure want to delete this product?\')" title="Product_Delete" href="/product/delete/' . Encryption::encodeId($data->id) . '"class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> ';
                return $str;
            })
            ->rawColumns(['status','action'])
            ->make (true);
    }


    public function editProduct($productId)
    {
        $decodedProductId = Encryption::decodeId($productId);
        $singleProduct = Product::find($decodedProductId);
        $allPublishedCategories = Category::where('status','1')->pluck('name','id');
        $allPublishedSubCategories = SubCategory::where('status','1')->pluck('name','id');
        $allPublishedVendors = Vendor::where('status','1')->pluck('name','id');
        return view('Product::edit', compact('singleProduct','allPublishedCategories','allPublishedSubCategories','allPublishedVendors'));
    }


    public function deleteProduct($productId)
    {
        $decodedProductId = Encryption::decodeId($productId);
        Product::where('id',$decodedProductId)->delete();
        Session::flash('success','Product is successfully deleted.');
        return redirect()->back();
    }

}
