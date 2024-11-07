<x-layout>

    <div class="container mx-auto p-4">
        <div class="flex flex-col md:w-full">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-200 p-4 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-800">Items</h1>
                    <a href="{{url('items/create')}}" class="bg-slate-600 text-white px-4 py-2 rounded-md hover:bg-slate-700 transition duration-300">
                        Add Item
                    </a>
                </div>

                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-slate-100">
                            <thead class="bg-gray-200 text-slate-800 uppercase text-sm leading-normal">
                                <tr>
                                    <th class="py-3 px-6 text-left">Id</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Description</th>
                                    <th class="py-3 px-6 text-left">Quantity</th>
                                    <th class="py-3 px-6 text-left">Price</th>
                                    <th class="py-3 px-6 text-left">Created At</th>
                                    <th class="py-3 px-6 text-left">Updated At</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 text-sm font-light">
                                <!-- Example row -->
                                <tr class="border-b border-slate-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                                    <td class="py-3 px-6 text-left">Sample Item</td>
                                    <td class="py-3 px-6 text-left">Sample description</td>
                                    <td class="py-3 px-6 text-left">10</td>
                                    <td class="py-3 px-6 text-left">$99.99</td>
                                    <td class="py-3 px-6 text-left">2024-01-01</td>
                                    <td class="py-3 px-6 text-left">2024-01-02</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Content of the card goes here -->
            </div>
        </div>
    </div>
    

</x-layout>