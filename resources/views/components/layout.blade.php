<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo app</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-black/90">
    <div class="min-h-full">
        <nav class="bg-lime-400">
            <div class="mx-auto max-x-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-evenly">


                    <div class="flex items-center">

                        <div class="flex-shrink-0 text-2xl font-semibold text-white">Welcome to <strong>ToDo</strong> App</div>
                        
                        <div class="md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link class="" href="/">Home</x-nav-link>
                                <x-nav-link class="" href="/about">About</x-nav-link>
                                <x-nav-link class="" href="/contact">Contact</x-nav-link>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>  
        </nav>

        <header class="shadow bg-gradient-to-r from-lime-500">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-xl font-bold tracking-tight text-white/80">{{ $heading }}</h1>

                <x-button class="" href="/tasks/create">Create Task</x-button>
                
            </div>
        </header>

        <hr />

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>


    </div>

</body>
</html>