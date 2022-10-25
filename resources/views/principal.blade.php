<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Big Software</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <linl rel="stylesheet" href="/index.css">
</head>

<body class="antialiased">
    <div class="w-full h-screen grid grid-cols-[70%,30%] overflow-hidden">
        <div class="h-full ">
            <img class="h-full w-full" src="{{ URL::to('/imagens/1.png') }}">
        </div>
        <div class="flex flex-col items-center justify-center ">
            <h3 class="font-bold text-xl mb-3">O MELHOR SISTEMA DE DEBATE!</h3>
            <span class="text-center px-4 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nihil nam officia ratione necessitatibus vero dicta delectus
                totam praesentium impedit deserunt quam accusamus repellendus,
                dolorem vitae magnam consectetur perferendis minus sint?</span>

            <div class="flex flex-row gap-10">
                <a href="/login"><button class="bg-teal-900 p-1 w-32 text-white rounded-md">Entrar</button></a>
                <a href="/register"><button class="border border-teal-900 p-1 w-32  rounded-md">Registar</button></a>
            </div>
        
        </div>

    </div>
    <footer class="absolute bottom-0 w-full flex justify-center">
        <h3 class="font-semibold text-white">Ginovaldo Cumbe - Daw 2022</h3>
    </footer>

</body>

</html>