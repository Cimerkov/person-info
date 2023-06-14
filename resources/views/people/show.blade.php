<!-- resources/views/people/show.blade.php -->
@extends('layouts.default')
@section('content')

<div class="flex justify-center items-center">
  <div class="bg-gray-100 w-96 h-96 flex flex-col justify-center mt-5 mb-5">
    <h1 class="font-bold text-2xl ml-16">{{ $person->name }} {{ $person->last_name }}</h1>
    
    <p class="text-xl ml-16"><strong>Phone:</strong> {{ $person->phone }}</p>
    <p class="text-xl ml-16"><strong>Email:</strong> {{ $person->email }}</p>
    
    <div class="flex justify-center mt-3">
      <button class="bg-yellow-500 hover:bg-yellow-600 rounded h-10 mr-3">
        <a class="m-3 text-white font-bold" href="/people/{{ $person->id }}/edit">Edit</a>
      </button>
      
      <form action="/people/{{ $person->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 hover:bg-red-700 rounded h-10 w-16 text-white font-bold">Delete</button>
      </form>
    </div>
  </div>
</div>

<div class="flex justify-center mb-7">
  <button class="bg-cyan-500 hover:bg-cyan-600 rounded h-8 m-5">
    <a class="text-white font-bold m-4" href="/">Back</a>
  </button>
</div>

@endsection

