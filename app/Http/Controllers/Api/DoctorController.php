<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $doctors = DB::table('doctors')
            ->when($request->input('name'), function ($query, $doctor_name) {
                return $query->where('doctor_name', 'like', '%' . $doctor_name . '%');
            })
            ->orderBy('id', 'desc')
            // ->paginate(10);
            ->get();
        // return json 200
        // return response()->json($doctors,200);
        return response([
            'data' => $doctors,
            'message' => 'success',
            'status' => 'OK'
        ],200);
    }
}
