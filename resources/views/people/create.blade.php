<!-- resources/views/people/create.blade.php -->
@extends('layouts.default')
@section('content')
<body>
  <div class="flex flex-col justify-center items-center">
    
      <h1 class="text-black font-bold m-2 text-xl">Add New Person</h1>

    <div class="flex">
      <form class="justify-items-center max-w-xs mx-auto bg-gray-100 rounded-lg px-4 pt-8 pb-6 w-72 grid grid-cols-1 flex justify-center" action="/people" method="post">
        @csrf
        <div>
          <label for="name">Name:</label><br>
          <input class="rounded p-2" type="text" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mt-3">
          <label for="last_name">Last Name:</label><br>
          <input  class="rounded p-2" type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
        </div>
        <div class="mt-3">
          <label for="phone">Phone:</label><br>
          <input class="rounded p-2"  type="text" id="phone" name="phone" placeholder="Enter Phone">
        </div>
        <div class="mt-3">
          <label for="email">E-mail:</label><br>
          <input class="rounded p-2"  type="email" id="email" name="email" placeholder="Enter E-mail">
        </div>
        <div class="mt-3">
          <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold rounded h-8 px-4">
            Save
          </button>
        </div>
      </form>
    </div>
    <button class="bg-cyan-500 hover:bg-cyan-600 rounded h-8 m-5">
      <a class="text-white font-bold m-4" href="/">Back</a>
    </button>
  </div>
</body>
@endsection
