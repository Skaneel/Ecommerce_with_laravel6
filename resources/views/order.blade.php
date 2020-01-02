@extends('master')
@section('title', 'Оформить заказ' )
@section('content')
<div class="starter-template">
                            <h1>Подтвердите заказ:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Общая стоимость заказа: <b>71990 руб.</b></p>
            <form action="http://internet-shop.tmweb.ru/basket/place" method="POST">
                <div>
                    <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                телефона: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="KsFyg96qmWyupqBV6lWK8dG2niR3a9y9XknYenwA">                    <input type="submit" class="btn btn-success" value="Подтвердить заказ">
                </div>
            </form>
        </div>
    </div>
    </div>

 @endsection   


