<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function categories(){
        $categories =  Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code){
       $category =  Category::where('code', $code)->first();
        
       return view('category', compact('category'));
    }

    public function product($category, $product = null){ //если в передаваемом параметре в роутере стоит ? то когда мы его здесь принимаем, назначаем переменной значение по умолчанию
        // dump($product); //функции хелперы чтобы
        // dd($product);   //дебажить код.
        // dd(request());  //так можно посмотреть что 
        // dump(request());//пришло в запросе.
        return view('product', ['product'=> $product]);
    }
    
    public function basket(){
        return view('basket');
    }

    public function basketPlace(){
        return view('order');
    }

}
