<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Approval;

class ApprovalController extends Controller
{
    function index() {
        return response()->json(["data" => Approval::all()]);
    }

    function create() {
        return response()->json(["data" => Approval::all()]);
    }

    function verify($token) {
        $id = Redis::get($token);
        if($id == null) {
            return response()->json(["message" => "Approval not found"]);
        }
        $approval = Approval::where('id', $id);
        if($approval) {
            Redis::del($token);
            $approval->update(['approved' => true]);
            return response()->json(["message" => "Data Approved", "data" => $approval->get()]);
        }
        return response()->json(["message" => "Approval not found"]);
    }
}
