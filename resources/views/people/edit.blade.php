<!-- resources/views/people/edit.blade.php -->

@extends('layouts.default')
@section('content')



  <div class="flex flex-col justify-center items-center">
    
    <h1 class="text-black font-bold m-2 text-xl">Edit {{ $person->name }} {{ $person->last_name }}</h1>

  <div class="flex">
    <form class="justify-items-center max-w-xs mx-auto bg-gray-100 rounded-lg px-4 pt-8 pb-6 w-72 grid grid-cols-1 flex justify-center" action="/people/{{ $person->id }}">
      @csrf
      <div>
        <label for="name">Name:</label><br>
        <input class="rounded p-2" type="text" id="name" name="name" value="{{ $person->name }}">
      </div>
      <div class="mt-3">
        <label for="last_name">Last Name:</label><br>
        <input  class="rounded p-2" type="text" id="last_name" name="last_name" value="{{ $person->last_name }}">
      </div>
      <div class="mt-3">
        <label for="phone">Phone:</label><br>
        <input class="rounded p-2"  type="text" id="phone" name="phone"value="{{ $person->phone }}">
      </div>
      <div class="mt-3">
        <label for="email">E-mail:</label><br>
        <input class="rounded p-2"  type="email" id="email" name="email" value="{{ $person->email }}" >
      </div>
      <div class="mt-3">
        <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold rounded h-8 px-4">
          Update
        </button>
      </div>
    </form>
  </div>
  <button class="bg-cyan-500 hover:bg-cyan-600 rounded h-8 m-5">
    <a class="text-white font-bold m-4" href="/">Back</a>
  </button>
</div>
  
    @endsection