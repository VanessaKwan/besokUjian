@extends('layout.master')

@section('title', 'Home')

@section('sub')
    {{ $category->name }}
@endsection


@section('content')
    <div class="grid grid-cols-3 gap-2">
        @foreach ($books as $book)
            <div class="w-[16vw] rounded border border-black">
                <img class="w-full" src="{{ $book->image }}" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                    <p>by</p>
                    <p> {{ $book->author }} </p>

                    <a href="/detail/{{ $book->id }}" class=""> Detail </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
