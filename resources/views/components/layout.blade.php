

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-200 text-slate-900 ">

    <header>
        <nav class="flex justify-between text-xl border-b-4 p-4 bg-slate-900 text-slate-300">
            <a href={{route('home')}} class="nav-link hover:text-white">Home</a>

            @auth
                <div class="relative grid place-items-center"
                     x-data="{open:false}"   >
                    <button @click="open = !open" type="button" class="round-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    <div x-show="open" @click.outside="open=false" class="text-sm font-semibold py-3 px-6 bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden text-black">
                        <p class="name border-b-2 border-black text-center">{{auth()->user()->name}}</p>

                        <a href={{route('inventory')}} class="block hover:bg-slate-100 pl-4 pr-8 py-2 mb-2 mt-3">Inventory</a>

                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="block hover:bg-slate-100 pl-4 pr-8 py-2 text-red-500">Logout</button>
                        </form>
                    </div>

                </div>


            @endauth

            @guest
                
            <div class="px-2 gap-6">
                <a href={{route('login')}} class="nav-link px-4 hover:text-white">Login</a>
                <a href={{route('register')}} class="nav-link hover:text-white">Register</a>
            </div>

            @endguest

        </nav>
    </header>

    <main class="py-8 px-4 mx-auto m-w-screen-lg">
        
        {{$slot}}
        
    </main>
</body>
</html>