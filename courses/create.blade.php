<x-app-layout>
    <!-- Header Slot -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Course') }}
        </h2>
    </x-slot>

    <!-- Main Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('courses.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                        
                <label for="title">Course Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter course title">
            </div>
                           
                        <div class="mb-3 mt-3">
                <label for="credit_hrs">Credit Hours</label>
                <input type="number" name="credit_hrs" class="form-control" id="credit_hrs" placeholder="Enter credit hours">
            </div>
                        
            
                        <input type="hidden" name="id" value="@isset($data->id) {{$data->id}} @endisset">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
