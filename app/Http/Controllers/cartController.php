<?php

namespace App\Http\Controllers;

use App\Models\cartids;
use App\Models\carts;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class cartController extends Controller
{
    public function details($id){
        $details = Products::find($id);
        return view('details',compact('details'));
    }

    public function addcart(Request $request,$id){
        $addcart = $request -> validate([
            'p_mass' => 'required'
        ]);

        $cart = new carts();
        $cart->p_id = $id;
        $cart->u_id = Auth::id();
        $cart->mass = $addcart['p_mass'];
        $cart->c_status = "Pending";
        $cart->c_id = 0;
        $cart->save();

        if ($cart) {
            return redirect()->route('index')->with('addsuccess','Add to Cart Successfully');
        }
    }
    

    public function cartlist(){
        $cartlist = carts::join('products',"carts.p_id","=","products.id")
        ->where("u_id",Auth::id())
        ->where("c_status","Pending")
        ->get();

        return view("cartlist",compact('cartlist'));
    }

    public function checkout(){
        $cart_id = carts::selectRaw("MAX(c_id) as total_id")->first();

        $id = $cart_id->total_id + 1;
        

        $checkout = carts::where("carts.c_id","0")
        ->where("c_status","Pending")
        ->where("u_id",Auth::id())
        ->update([
            "c_status" => "Complete",
            "c_id" => $id
        ]);
        if ($checkout) {
            $cart_order = new cartids();
            $TRD = "Express";
            $number = rand(1000000000,9999999999);
            $cart_order->Trade_number = $TRD . $number;
            $cart_order->save();
                
                if ($cart_order) {
                    return redirect()->route("index")->with("Buysuccess","Buy Successfully");
                }
        }
    }

    public function history(){
        $items = carts::join('products',"carts.p_id","=","products.id")
        ->join("cartids","carts.c_id","=","cartids.id")
        ->where("u_id",Auth::id())
        ->where("c_status","Complete")
        ->get();

        return view("history",compact("items"));
    }
}
