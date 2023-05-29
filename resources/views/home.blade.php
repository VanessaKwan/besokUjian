@extends('layout.master')

@section('title', 'Home')

@section('sub', 'Book List')


@section('content')
    <div class="grid grid-cols-3 gap-2">
        @foreach ($books as $book)
            <div class="w-[16vw] h-[24vw] rounded border border-black">
                <img class="w-full" src="{{ $book->image }}" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                    <p>by</p>
                    <p> {{ $book->author }} </p>

                    {{-- <div  class="w-[4vw] h-[2vw] bg-blue-500 flex rounded text-white">
                        <a href="/detail/{{ $book->id }}" class="m-auto"> Detail </a>
                    </div> --}}
                    <a href="/detail/{{ $book->id }}" class="m-auto"> Detail </a>

                </div>
            </div>
        @endforeach
    </div>

@endsection
