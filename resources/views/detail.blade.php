@extends('layout.master')

@section('title', 'Detail')

@section('sub', 'Book Detail')


@section('content')
    <div>
        <img src="{{$book->image}}" alt="">

        <p>Title : {{$book->title}}</p> <br>

        <p>Author : {{$book->author}}</p> <br>

        <p>Publisher : {{$book->Publisher?->name}}</p> <br>

        <p>Year : {{$book->year}}</p> <br>

        <p>Synopsis :</p>

        <p>{{ $book->synopsis }}</p> <br> <br>

        @foreach ($categories as $category)
            <p>
                {{$category->name}}
            </p>
        @endforeach


    </div>
@endsection
