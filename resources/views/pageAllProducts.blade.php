@extends('layouts.app')

@section('pageTitle')
    Все товары
@endsection

@section('pageContent')

    <h1>Все товары</h1>

    @foreach($data as $el)

        <div class="alert alert-info">

            <h3>{{ $el->name  }}</h3>
            <p><small>Цена: {{ $el->price }}</small></p>
            <p><small>Доступное количество: {{ $el->quantity }}</small></p>
            <p><small>Описание: {{ $el->description }}</small></p>
            <p><small>Дата добавления товара: {{ $el->created_at }}</small></p>

        </div>

    @endforeach

@endsection