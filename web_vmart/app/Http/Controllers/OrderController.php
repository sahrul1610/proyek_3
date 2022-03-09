<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function index(){
        $data = [

            "orders" => order::orderBy("id", "DESC")->get()
        ];
        return view('/admin/pesanan', $data);
    }

}
