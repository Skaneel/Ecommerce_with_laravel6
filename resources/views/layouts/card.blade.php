<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product ->name}}</h3> <!-- в index.blade.php из переменной $products (из таблицы) циклом вытягиваем записи в переменную $product  и затем в card.blade.php отображаем с помощью {{$product ->name}} название товара, а с помощью {{$product ->price}} цену. --> 
            <p>{{$product ->price}}</p>
            <form action="{{route('basket-add', $product)}}" method="POST">  
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>

                <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default" role="button">Подробнее</a>
                @csrf
            </form>
        </div>
    </div>
</div>






