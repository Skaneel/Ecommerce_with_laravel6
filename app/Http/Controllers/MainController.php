<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function categories(){
        return view('categories');
    }

    public function category($category){
        return view('category', compact('category'));
    }

    public function product($product = null){ //если в передаваемом параметре в роутере стоит ? то когда мы его здесь принимаем, назначаем переменной значение по умолчанию
        // dump($product); //функции хелперы чтобы
        // dd($product);   //дебажить код.
        // dd(request());  //так можно посмотреть что 
        // dump(request());//пришло в запросе.
        return view('product', ['product'=> $product]);
    }
}
