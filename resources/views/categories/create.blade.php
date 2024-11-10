<x-layout>

    <div class="container mx-auto p-4 max-w-4xl">
        <h1 class="text-2xl text-left mb-3 font-bold mt-24">Create New Category</h1>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="text-white font-semibold mb-6 bg-red-600 rounded-md w-full px-6 py-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-bold mb-2">Category Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" 
                           class="px-4 py-2 border rounded-md w-full" placeholder="Enter category name" required>
                </div>

                <div class="flex justify-between items-center">
                    <!-- Submit Button -->
                    <button type="submit" class="bg-slate-700 text-white px-4 py-2 rounded-md hover:bg-slate-200 transition duration-300">
                        Add Category
                    </button>

                    <!-- Back Button -->
                    <a href="{{ route('categories.index') }}" class="text-slate-600 hover:text-slate-800">
                        Back to Category List
                    </a>
                </div>
            </form>
        </div>
    </div>

</x-layout>
