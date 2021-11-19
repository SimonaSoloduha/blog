@extends('layouts.main')

@section('title-block')Добавить блог@endsection

@section('content')
    <div>Добавить блог</div>

    @if($errors->any())
        <div class="alert-dark">
            <ul>
                @foreach($errors->all() as $errors)
                    <li>
                        {{ $errors }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route ('blog-add-submit') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name="title" placeholder="Введите название" id="title" class="form-text">
        </div>
        <div class="form-group">
            <label for="author">Фото</label>
            <input type="file" name="photo" placeholder="Добавьте фото" id="photo">
        </div>
        <div class="form-group">
            <label for="text">Введите текст</label>
            <textarea name="text" placeholder="Введите текст" id="text" class="form-text"></textarea>
        </div>
        <div class="form-group">
            <label for="author">Введите имя автора</label>
            <input type="text" name="author" placeholder="Введите имя" id="author" class="form-text">
        </div>
        <button type="submit" class="btn-dark">Отправить</button>
    </form>
@endsection
