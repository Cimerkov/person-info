@extends('layouts.default')

@section('content')
<div class="overflow-x-auto">
    <div class="pb-3">
        <button class="bg-cyan-500 hover:bg-cyan-600 rounded h-10 mt-3">
            <a class="text-white font-bold m-5" href="/people/create">Add New Person</a>
        </button>
    </div>
    <div class="inline-block min-w-full overflow-x-auto">
        <div class="shadow sm:rounded-lg border-b border-gray-200">
            <table class="container sm:table-auto min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 sm:px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-2 sm:px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                        <th class="px-2 sm:px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                        <th class="px-2 sm:px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-2 sm:px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($people as $person)
                    <tr>
                        <td class="px-2 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $person->name }}</td>
                        <td class="px-2 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $person->last_name }}</td>
                        <td class="px-2 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $person->phone }}</td>
                        <td class="px-2 sm:px-4 py-2 sm:py-3 whitespace-nowrap text-cyan-700 hover:text-cyan-900">{{ $person->email }}</td>
                        <td class="px-2 sm:px-4 py-2 sm:py-3 whitespace-nowrap">
                            <div class="flex flex-wrap gap-2">
                                <button class="bg-cyan-500 hover:bg-cyan-600 rounded h-10 mt-3">
                                    <a class="m-3 text-white font-bold" href="/people/{{ $person->id }}">View</a>
                                </button>
                                <button class="bg-yellow-500 hover:bg-yellow-600 rounded h-10 mt-3">
                                    <a class="m-3 text-white font-bold" href="/people/{{ $person->id }}/edit">Edit</a>
                                </button>
                                <form action="/people/{{ $person->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 rounded h-10 w-16 mt-3 text-white font-bold">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
