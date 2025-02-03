<?php

namespace App\Http\Controllers\API\AttendanceSheet;

use App\Http\Controllers\Controller;
use App\Models\AttendanceSheet;
use Illuminate\Http\Request;

class AttendanceSheetController extends Controller
{
    public function index(){
        
        $data = AttendanceSheet::all();
        return response()->json(['message'=>$data]);
    }
}
