@extends('layouts.app')
@section('title', '产品列表')

@section('content')
    <div class="row">
        @foreach($products as $item)
        <article>
            <img src="{{ $item->thumbnail }}" alt="">
            <h2>{{ $item->title }}</h2>
        </article>
        @endforeach
    </div>
@stop