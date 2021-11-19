@extends('layouts.main')

@section('title-block') Редактировать блог @endsection


<div class="edica-loader"></div>
<header class="edica-header">
    @section('content')
        <main class="blog">
            <div class="container">
                <h1 class="edica-page-title" data-aos="fade-up">Редактировать блог</h1>
                <section class="featured-posts-section">
                    <div class="row">

                        <form action="{{ route ('blog-update-submit', $data->id) }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="title" value="{{$data->title}}" placeholder="Введите название" id="title" class="form-text">
                            </div>
                            <div class="form-group">
                                <label for="author">Фото</label>
                                <input type="file" name="photo" value="{{$data->photo}}" placeholder="Добавьте фото" id="photo">
                            </div>
                            <div class="form-group">
                                <label for="text">Введите текст</label>
                                <textarea name="text" placeholder="Введите текст" id="text" class="form-text">{{$data->text}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="author">Введите имя автора</label>
                                <input type="text" name="author" value="{{$data->author}}" placeholder="Введите имя" id="author" class="form-text">
                            </div>
                            <button type="submit" class="btn-dark">Изменить</button>
                        </form>

                    </div>
                </section>
            </div>
        </main>
    @endsection
</header>
