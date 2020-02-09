@extends('layouts.master')
@section('title', 'Главная' )
@section('content')
            <h1>Все товары</h1>
            <div class="row">
    @foreach($products as $product)
    @include('layouts.card', compact('product'))
      @endforeach

    <!-- из переменной $products циклом вытягиваем записи из таблицы и затем в card.blade.php отображаем с помощью {{$product ->name}} название товара, а с помощью {{$product ->price}} цену. -->
</div>
@endsection