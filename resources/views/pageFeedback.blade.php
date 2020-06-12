@extends('layouts.app')

@section('pageTitle')
    Обратная связь
@endsection


@section('pageContent')

    <div class="pageFeedbackContent">

        <form action="{{ route('feedback-form') }}" method="post">

            @csrf
            <h4 class="pageFeedbackHeader">Здесь вы можете внести замечания, а также выразить пожелания относительно работы сайта</h4>
            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="theme">Тема сообщения</label>
                <input type="text" name="theme" placeholder="Тема сообщения" id="theme" class="form-control">
            </div>

            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea name="message" id="message" placeholder="Введите текст сообщения" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success pageFeedbackButton">Отправить</button>
        </form>
    </div>
@endsection