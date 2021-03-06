<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use App\Models\ProductCapacity;
use App\Models\ProductRnD;
use Illuminate\Http\Request;
use App\Models\ProductCertification;
use App\Models\ProductQuality;
use App\Models\ProductTradeCapacity;

class VendorProductsController extends Controller
{
    public function topSale($id)
    {
        $productSales = Admin::with('productsWithSold')->where('id', $id)->get();
       // dd($productSales);
        $productTops = Admin::with('productsWithTop')->where('id', $id)->get();

        //dd($productTops);
        return view('pages.vendor_home',compact('productSales','productTops'));
    }

    public function overview($id)
    {

        $ProductTradeCapacity = ProductTradeCapacity::where('admin_id', $id)->orderBy('id','desc')->get();
        $ProductQualitys = ProductQuality::where('admin_id', $id)->orderBy('id','desc')->get();
        $productcertifications = ProductCertification::where('admin_id', $id)->orderBy('id','desc')->get();
        $productTops = Admin::with('productsWithTop')->where('id', $id)->get();
        $capacities = ProductCapacity::where('admin_id', $id)->orderBy('id','desc')->get();
        $productrnd = ProductRnD::where('admin_id', $id)->orderBy('id','desc')->get();
        return view('pages.shop',compact(
            'productcertifications',
            'ProductQualitys',
            'ProductTradeCapacity',
            'productTops',
            'capacities',
            'productrnd'
        ));
    }
}
