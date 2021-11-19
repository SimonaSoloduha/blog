@extends('layouts.main')

@section('title-block') {{ $data->title }} @endsection


<div class="edica-loader"></div>
<header class="edica-header">
    @section('content')
        <main class="blog">
            <div class="container">
                <h1 class="edica-page-title" data-aos="fade-up">{{ $data->title }}</h1>
                <section class="featured-posts-section">
                    <div class="row">

                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Автор: {{ $data->author }}</p>
                                <a href="#" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $data->title }}</h6>
                                </a>
                                <p class="blog-post-category">{{ $data->text }}</p>
                                <a href="{{ route('blog-update', $data->id)}}" class="blog-post-permalink">Редактировать</a>
                            </div>

                    </div>
                </section>
            </div>
        </main>
    @endsection
</header>
