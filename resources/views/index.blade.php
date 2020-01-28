@extends('master')
@section('title', 'Главная' )
@section('content')
<div class="starter-template">
    <h1>Все товары</h1>
    <div class="row">
        @foreach($products as $product)
        @include('card', compact('product'))
        @endforeach
        <!-- из переменной $products циклом вытягиваем записи из таблицы и затем в card.blade.php отображаем с помощью {{$product ->name}} название товара, а с помощью {{$product ->price}} цену. -->
    </div>
</div>

<?php  
dump($products);
?>

@endsection