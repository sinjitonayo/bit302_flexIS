<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>
<body>
    <section class="min-h-screen w-full relative"
        style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(/assets/images/bg.jpg); background-position: center; background-size: cover;">
        <div class="w-1/2 text-white top-1/2 left-1/2 text-center -translate-x-1/2 -translate-y-1/2 absolute font-[]">
            <div class="bg-transparent backdrop-blur-md py-8 shadow rounded-lg px-10">
                <div class="">
                    <img class="justify-center h-full w-full object-cover" src="{{ asset('assets/images/logo.png') }}"
                        alt="Logo" />
                </div>
                <p class="mt-4">This is admin dashboard
                </p>

                <a href="{{ url('session') }}">
                    <button
                        class="mt-8 bg-sky-900 rounded-full w-1/4 p-2 text-lg text-white hover:shadow-md hover:shadow-sky-400 hover:scale-105 transition-all duration-300">Login Now</button></a>


            </div>

    </section>
</body>
</html>