@extends('layout.master')

@section('title', 'Publisher')

@section('sub', 'Publisher')


@section('content')
    @foreach ($publishers as $publisher)
        <a href="/publisher/{{$publisher->id}}">
            <div class="w-[full] h-[9vw] bg-red-300 border border-black">
                {{$publisher->name}}
            </div>
        </a>

    @endforeach
@endsection



{{-- @extends('layout.master')

@section('title', 'Publisher')


@section('content')
    <div class="w-full flex flex-col">
        @foreach ($publishers as $publisher)
            <div class="flex text-white">
                <div class="w-full h-fit mb-[1vw] m-auto">
                    <div class="bg-gray-400 text-[1.5vw]">
                        <div class="ml-[0.5vw]">
                            {{$publisher->name}} <br>

                            Address - {{$publisher->address}} <br>

                            Phone - {{$publisher->phone}} <br>

                            Email - {{$publisher->email}}
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-2 text-black">
                        @foreach ($publisher->Book as $book)
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

                </div>
            </div>
        @endforeach
    </div>



@endsection --}}
