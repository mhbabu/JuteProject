<?php

namespace App\Modules\Vendor\Controllers;

use App\Category;
use App\Libraries\Encryption;
use App\Modules\Vendor\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class VendorController extends Controller
{

    public function vendorList()
    {
        return view("Vendor::vendorList");
    }

    public function createVendor()
    {
        return view("Vendor::createVendor");
    }


    public function storeVendor(Request $request, $vendorId='')
    {
        $rules = [
            'vendor_name' => 'required',
            'status' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
        ];

        if(!empty($vendorId)){
            $decodedVendorId = Encryption::decodeId($vendorId);
            $vendor = Vendor::find($decodedVendorId);
        }else{
            $vendor = new Vendor();
            $rules = [
                'email' => 'required |unique:users'
            ];
        }
        $this->validate($request,$rules);
        $vendor->vendor_name = $request->get('vendor_name');
        $vendor->status = $request->get('status');
        $vendor->address = $request->get('address');
        $vendor->email = $request->get('email');
        $vendor->phone = $request->get('phone');
        $vendor->website = $request->get('website');
        $vendor->save();
        $message = 'Vendor is successfully stored.';
        if(!empty($vendorId))
            $message = 'Vendor is successfully updated.';
        Session::flash('success',$message);
        return redirect('vendor/list');

    }

    public function getVendorList()
    {
        $vendors = Vendor::orderBy('vendor_name','asc')->get(['id','vendor_name','address','email','phone','website','status']);
        return Datatables::of($vendors)
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
                $str.='<a title="Vendor_Edit" href="/vendor/edit/' . Encryption::encodeId($data->id) . '"class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i>  Edit</a> ';
                $str.='<a onclick="return confirm(\'Are you sure want to delete this vendor?\')" title="Vendor_Delete" href="/vendor/delete/' . Encryption::encodeId($data->id) . '"class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> ';
                return $str;
            })
            ->rawColumns(['status','action'])
            ->make (true);
    }


    public function editVendor($vendorId)
    {
        $decodedVendorId = Encryption::decodeId($vendorId);
        $singleVendor = Vendor::find($decodedVendorId);
        return view('Vendor::editVendor', compact('singleVendor'));
    }


    public function deleteVendor($vendorId)
    {
        $decodedCategoryId = Encryption::decodeId($vendorId);
        Vendor::where('id',$decodedCategoryId)->delete();
        Session::flash('success','Vendor is successfully deleted.');
        return redirect()->back();
    }
}
