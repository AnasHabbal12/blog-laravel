@extends('layouts.app')
@section('content')
<!--message-->
@if (session() -> has('message'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session() -> get('message') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
@endif



<!--Header-->
<div class="container m-auto text-center pt-15 pd-5 ">
    <h1 class="text-6xl font-bold">{{$post -> title}}</h1>
    <div class="mt-2">
        By: <span class="text-gray-500 italic">{{ $post -> user -> name }}</span>
        on: <span class="text-gray-500 italic">{{ date('d-m-Y',strToTime( $post -> updated_at ))}}</span>
    </div>

</div>
<div class="container m-auto pt-15 pd-5 ">
    <div class="flex h-96 w-96">
        <img class="object-cover w-full" src="/images/{{ $post -> image_path }}" alt="">
    </div>
    <div class="text-l text-grgay-700 py-8 leading-6">
        {{$post -> description}}
    </div>
    @if(AUTH::user() && Auth::user() -> id == $post -> user_id )
        <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <a href="/blog/{{ $post -> slug }}/edit" class="bg-green-700 text-green-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Edit Post</a>


        <form action="/blog/{{ $post -> slug }}" method="POST">
            @csrf
            @method('delete')

                <button type="submit" class="bg-red-700 text-red-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Delete Post</button>
            </div>
        </form>
    @endif
</div>

@endsection
