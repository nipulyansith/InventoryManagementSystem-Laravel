<x-layout>

    <div class="container mx-auto p-4 max-w-4xl">
        <h1 class="text-2xl text-left mb-3 font-bold mt-24">Categories</h1>

        <!-- Flash Message -->
        @if (session('status'))
            <div class="text-white font-semibold mb-6 bg-green-600 rounded-md w-full px-6 py-2">
                <i class="fas fa-check"></i> {{ session('status') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4 flex justify-between items-center">
                <h2 class="text-xl font-bold mb-4">Category List</h2>
                
                <!-- Add New Category Button -->
                <a href="{{ route('categories.create') }}" class="bg-slate-300 text-black px-4 py-2 rounded-md hover:bg-slate-200 transition duration-300">
                    Add Category
                </a>
            </div>

            <table class="min-w-full bg-slate-100">
                <thead class="bg-gray-300 text-slate-800 text-sm">
                    <tr>
                        <th class="py-3 px-6 text-left">Category Name</th>
                        <th class="py-3 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    @foreach ($categories as $category)
                        <tr class="border-b border-slate-200">
                            <td class="py-3 px-6">{{ $category->name }}</td>
                            <td class="py-3 px-6 text-right">
                                <!-- Delete Button -->
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 ml-8 mr-8 text-xl">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-layout>
