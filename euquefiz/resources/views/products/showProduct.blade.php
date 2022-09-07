@extends('layouts.layout')
<p>{{$product->product_name}}</p>
<p>{{$product->slug}}</p>
<p><img src="{{$product->image}}"></p>
<p>{{$product->price}}</p>
<p>{{$product->description}}</p>

