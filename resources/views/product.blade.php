@extends('layouts.master')
@section('title', 'Товар')
@section('content')
    <div class="starter-template">
    <h1>iPhone X 64GB</h1>
    <h2>Мобильные телефоны</h2>
    <h2>{{$product}}</h2>
    <p>Цена: <b>71990 руб.</b></p>
    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>
    </div>
@endsection
