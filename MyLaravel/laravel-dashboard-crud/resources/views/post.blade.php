{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')

    {{-- yang pakai desain --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                {{-- jika diklik maka akan menuju ke kategori yang sama --}}
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }}</a> </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name}}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
    
            
        
                <a href="/posts" class="d-block mt-3">Kembali ke Post</a>

            </div>
        </div>
    </div>


    {{-- yang lama sebelum di desain 
    <article>
       
        <h1 class="mb-5">{{ $post->title }}</h1>

        {{-- jika diklik maka akan menuju ke kategori yang sama --}}
        {{-- <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }}</a> </p> --}}
        {{-- <h5>{{ $post["author"] }}</h5> --}}

        {{-- {{ $post->body }} --}}

        {{-- cara body agar bisa dua pragraft dan bisa masukan tag html --}}
        {{-- {!! $post->body !!} --}}

    {{-- </article> --}}

    {{-- <a href="/blog" class="d-block mt-3">Kembali ke Post</a> --}} 
@endsection