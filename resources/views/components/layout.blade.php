

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-200 text-slate-900 ">

    <header>
        <nav class="flex justify-between text-xl border-b-4 p-4 bg-slate-900 text-slate-300">
            <a href={{route('home')}} class="nav-link hover:text-white">Home</a>

            <div class="px-2 gap-6">
                <a href="/login" class="nav-link px-4 hover:text-white">Login</a>
                <a href={{route('register')}} class="nav-link hover:text-white">Register</a>
            </div>
        </nav>
    </header>

    <main class="py-8 px-4 mx-auto m-w-screen-lg">
        
        {{$slot}}
        
    </main>
</body>
</html>