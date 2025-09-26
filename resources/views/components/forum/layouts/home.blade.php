<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro de programación</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-accent">
    <div class="h-screen flex flex-col ">
        <div class="px-4">
            <nav class="flex items-center justify-between h-16 *:text-white">
                <div>
                    <a href="#" class="hover:underline">
                        Logo
                    </a>
                </div>

                <div class="flex gap-4">
                    <a href="#" class="text-sm font-semibold hover:underline">Foro</a>
                    <a href="#" class="text-sm font-semibold hover:underline">Blog</a>
                </div>

                <div>
                    <a href="#" class="text-sm font-semibold hover:underline">Log in &rarr;</a>
                </div>
            </nav>
        </div>

        <div class="relative h-full flex items-center justify-center">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu blur-3xl sm:-top-80">
                <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#b31d5b] to-[#362cc2] opacity-40 sm:left-[calc(50%-30rem)] sm:w-288.75"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>

            <div class="max-w-2xl">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="rounded-full px-4 py-2 text-sm text-gray-400 border border-gray-300">
                        Resuelve tus preguntas de programación. <a href="#" class="font-semibold text-indigo-600">Acerca
                            de &rarr;</a>
                    </div>
                </div>

                <div class="text-center">
                    <h1 class="text-5xl font-semibold text-white sm:text-7xl">Bienvenido a tu foro favorito</h1>
                    <p class="my-8 text-lg font-medium text-gray-500 sm:text-xl">Es un espacio para compartir, aprender
                        y crecer en el mundo de la programación. Únete a nuestra comunidad, participa en discusiones y
                        aprende de otros profesionales.</p>
                    <div class="flex items-center justify-center gap-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-white shadow-xs hover:bg-indigo-500">Preguntar</a>
                        <a href="#"
                            class="text-sm font-semibold text-white hover:bg-gray-500 px-4 py-2 rounded-md bg-gray-700">Login
                            &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-4xl px-4 mb-8">
        {{ $slot }}
    </div>
</body>

</html>