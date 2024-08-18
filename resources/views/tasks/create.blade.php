@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8 mt-10">
        <h1 class="text-2xl font-semibold text-primary mb-6">Add New Task</h1>

        @if ($errors->any())
            <div class="mb-4">
                <div class="bg-danger text-white px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong> Something went wrong.
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold">Title</label>
                <input type="text" name="title" id="title"
                    class="w-full p-3 border border-lightGray rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold">Description</label>
                <textarea name="description" id="description"
                    class="w-full p-3 border border-lightGray rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
            </div>
            <div class="mb-4">
                <label for="due_date" class="block text-gray-700 font-semibold">Due Date</label>
                <input type="date" name="due_date" id="due_date"
                    class="w-full p-3 border border-lightGray rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    required>
            </div>
            <div class="mb-4">
                <label for="status" class="inline-flex items-center">
                    <input type="checkbox" name="status" id="status" value="1"
                        class="form-checkbox h-5 w-5 text-primary">
                    <span class="ml-2 text-gray-700">Mark as Completed</span>
                </label>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-primary text-white py-3 px-6 rounded-lg hover:bg-opacity-90 transition">Save Task</button>
            </div>
        </form>
    </div>
@endsection
