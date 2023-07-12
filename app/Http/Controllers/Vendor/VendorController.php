<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard(){

        return view('vendor.vendor_dashboard');
    }//end method
}
