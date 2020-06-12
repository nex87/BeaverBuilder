@extends('layouts.app')

@section('pageTitle')
    Добавить товар
@endsection

@section('pageContent')
<div class="pageAddProductContent">

<form action="{{ route('addProduct-form') }}" method="post">

    @csrf
    <h4 class="pageAddProductHeader">Форма добавления товара</h4>
    <div class="form-group">
        <label for="name">Введите наименование товара</label>
        <input type="text" name="name" placeholder="Наименование" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Цена</label>
        <input type="text" name="price" placeholder="Цена товара" id="price" class="form-control">
    </div>

    <div class="form-group">
        <label for="quantity">Количество</label>
        <input type="text" name="quantity" placeholder="Введите количество единиц" id="quantity" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description"  placeholder="Введите текст описания" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success pageFeedbackButton">Добавить</button>
</form>
</div>



@endsection