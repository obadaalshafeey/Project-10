<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Posts (Laravel 8 Livewire CRUD with Jetstream & Tailwind CSS - ItSolutionStuff.com)
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded my-3">Create New Post</button>
            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Name</th> 
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Descrption</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                    <tr>
                        <td class="border px-4 py-2">{{ $room->id }}</td>
                        <td class="border px-4 py-2">{{ $room->img }}</td>
                        <td class="border px-4 py-2">{{ $room->name }}</td>
                        <td class="border px-4 py-2">{{ $room->price }}</td>
                        <td class="border px-4 py-2">{{ $room->des }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $room->id }})" class="bg-blue-500 hover:bg-blue-700font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $room->id }})" class="bg-red-500 hover:bg-red-700 font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>