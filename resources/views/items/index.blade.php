<x-layout>

    <div class="container mx-auto p-4">
        <div class="flex flex-col md:w-full">

            @session('status')
                <div class="text-white font-semibold mb-6 bg-green-600 rounded-md w-full px-6 py-2">
                    <i class="fas fa-check"></i> {{session('status')}}
                </div>

                @endsession

                
            @session('delete_status')
            <div class="text-white font-semibold mb-6 bg-red-600 rounded-md w-full px-6 py-2">
                <i class="fas fa-check"></i> {{session('delete_status')}}
            </div>

            @endsession

                @session('message')
                <div class="text-white font-semibold mb-6 bg-green-600 rounded-md w-full px-6 py-2">
                    <i class="fas fa-check"></i> {{session('message')}}
                </div>

                @endsession

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
                                    <th class="py-3 px-6 text-right">Id</th>
                                    <th class="py-3 px-6 text-right">Name</th>
                                    <th class="py-3 px-6 text-right">Description</th>
                                    <th class="py-3 px-6 text-right">Quantity</th>
                                    <th class="py-3 px-6 text-right">Price (LKR)</th>
                                    <th class="py-3 px-6 text-right">Created At</th>
                                    <th class="py-3 px-6 text-right">Updated At</th>
                                    <th class="py-3 px-6 text-right"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 text-sm font-light">
                                
                                @foreach ($items as $item)

                                <tr class="border-b border-slate-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-right whitespace-nowrap">{{$item->id}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->name}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->description}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->quantity}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->price}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->created_at}}</td>
                                    <td class="py-3 px-6 text-right text-md">{{$item->updated_at}}</td>
                                    <td class="flex flex-row">
                                        <a href="{{route('items.edit' , $item->id)}}" class="text-slate-600 hover:text-slate-800 ml-6  text-lg">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    
                                        <form action="{{route('items.destroy' , $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-600 ml-5 text-lg">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </form>
                                    </td>
                                    
                                    
                                @endforeach

                            
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>

                        {{$items->links()}}
                    </div>
                </div>
                
                <!-- Content of the card goes here -->
            </div>
        </div>
    </div>
    

</x-layout>