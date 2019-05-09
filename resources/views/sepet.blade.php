@extends('layouts.master')
@section('title','Sepet')
@section('content')
    <div class="container">
        <div class="bg-content">
            <h2>Sepet</h2>
            @include('layouts.partials.alert')
            @if(count(Cart::content())>0)
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th colspan="2">Ürün</th>
                        <th>Adet Fiyatı</th>
                        <th>Adet</th>
                        <th>Tutar</th>
                    </tr>
                    @foreach(Cart::content() as $urunCartItem)
                        <tr>

                            <td style="width: 120px">
                                <a href="{{route('urun',$urunCartItem->id)}}">
                                    <img src="http://lorempixel.com/120/100/food/2">
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    {{$urunCartItem->name}}
                                </a>

                            </td>
                            <td>{{$urunCartItem->price}} TL</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-default">-</a>
                                <span style="padding: 10px 20px">{{$urunCartItem->qty}}</span>
                                <a href="#" class="btn btn-xs btn-default">+</a>
                            </td>

                            <td class="text-right">
                                {{$urunCartItem->subtotal}} TL
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="4" class="text-right">Alt Toplam</th>
                        <td class="text-right">{{Cart::subtotal()}} TL</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-right">KDV</th>
                        <td class="text-right">{{Cart::tax()}}TL</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-right">Genel Toplam</th>
                        <td class="text-right">{{Cart::total()}} TL</td>
                    </tr>
                </table>
                <div>
                    <a href="#" class="btn btn-info pull-left">Sepeti Boşalt</a>
                    <a href="#" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
                </div>
            @else
                <p>Sepetinizde Ürün Yok!</p>
            @endif
        </div>
    </div>
@endsection