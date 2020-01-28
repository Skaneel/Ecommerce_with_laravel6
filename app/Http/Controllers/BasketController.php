<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BasketController extends Controller
{
	public function basket(){	
        $orderId = session('orderId');

        // if(is_null($orderId)){
			$order = Order::findOrFail($orderId);
			// dump($order);
		// }
		
		return view('basket', compact('order'));
	}

	public function basketPlace(){
		return view('order');
	}

	public function basketAdd($productId){

		$orderId = session('orderId');
		if(is_null($orderId)){
			$order = Order::create()->id;
			session(['orderId'=>$order]);
		} else {
		    $order = Order::find($orderId);
        }
        // dump($order->id);
		$order->products()->attach($productId);
		 return view('basket', compact('order'));

	}
}
