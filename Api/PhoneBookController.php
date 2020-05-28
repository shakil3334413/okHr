<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PhoneBookController extends Controller
{
    public function index(){
        $employeeData = DB::table('employees')->select('name','email','phone','officeEmail','designation','department','presentAddrss','emergencyContactphone')->get();
        // return $employeeData;
        return response()->json([
            'success' => true,
            'phonebook' => $employeeData
        ]);
    }
}
