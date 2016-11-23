<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tenant;

class TenantsController extends Controller
{
    function index() {

		//$tenants = Tenant::all();

    	//return view('admin.tenants', compact('tenants'));

        //$tenants = Tenant::all();

        return view('tenants');
    }

    function detail($id) {

		$tenant = Tenant::find($id);
		//print_r($tenant);
		//exit();

    	return view('tenant_details', compact('tenant'));
    }

    function tenants() {

        $tenants = Tenant::all();

        //print_r($tenants);
        //exit();

        return json_encode($tenants);
    }
}
