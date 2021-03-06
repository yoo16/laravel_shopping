@extends('layouts.user')

@section('content')

<div id="item-detail">
  <div class="card">
    <div class="card-header">
      <img src="{{ asset('images/item_'.$item->value['id'].'.jpg') }}" alt="">
    </div>

    <div class="card-body">
      <h4 class="h4">商品名</h4>
      {{ $item->value['name'] }}
      <h4 class="h4">価格</h4>
      ¥{{ number_format($item->value['price']) }}
    </div>

    @guest
    @else
    <div class="card-footer">
      <a href="{{ route('cart.add', ['id' => $item->value['id']]) }}" class="btn btn-outline-info">カートに入れる</a>
    </div>
    @endguest
  </div>
</div>
@endsection