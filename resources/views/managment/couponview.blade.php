@extends('layouts.master')
@section('title','書籍觀看')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div>



    <div class='container'>
        <h2  class="text-center & text-success" ><strong>檢視折價券</strong></h2>
        @foreach($coupons as $coupon)

            <div class="form-group">
                <label>標題</label>
                <p>{{$coupon->title}}</p>
            </div>
            <div class="form-group">
                <label>內容</label>
                <p >{{$coupon->content}}</p>
            </div>
            <div class="form-group">
                <label>起始時間</label>
                <p>{{$coupon->start}}</p>
                <div class="form-group">
                <label>結束時間</label>
                <p>{{$coupon->end}}</p>
            </div>
                <div class="form-group">
                    <label>折扣金額</label>
                    <p>{{$coupon->discount}}元</p>
                </div>
                <div class="form-group">
                    <label>至少購物金額</label>
                    <p >{{$coupon->lowestprice}}元</p>
                </div>

            <div class="form-group">
                <img src="{{url('../storage/coupon/'. $coupon->picture)}}" >
            </div>
        @endforeach
    </div>
</div>
</div>
</html>
@endsection