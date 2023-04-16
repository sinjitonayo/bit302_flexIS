<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>HELP STIKOM - FlexIS</title>
</head>

<body>
    <section class="min-h-screen w-full relative"
        style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(/assets/images/bg.jpg); background-position: center; background-size: cover;">
        <div class="w-2/3 text-white top-1/2 left-1/2 text-center -translate-x-1/2 -translate-y-1/2 absolute">
            <div
                class="bg-transparent backdrop-blur-xl hover:shadow-2xl rounded-lg px-10 hover:shadow-cyan-950 transition-all duration-200 grid grid-cols-2 gap-16 py-20">
                <div class="">
                    <div class="">
                        <img class="justify-center h-full w-full object-cover pointer-events-none"
                            src="{{ asset('assets/images/banner.png') }}" alt="Banner" />
                    </div>
                </div>
                <div class="">
                    <h2 class="text-5xl mb-20 font-semibold">WELCOME BACK</h2>
                    
                    <form class="mb-0 space-y-6 px-10" action="postLogin" method="POST">
                        @csrf
                        <div class="">
                            <label for="id" class="block text-sm font-medium text-white">
                                Email
                            </label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"
                                    class="w-full bg-white border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 text-black"
                                    placeholder="Insert Email" autocomplete="off">
                            </div>
                        </div>
                        <input type="hidden" name="aksi" value="add">

                        <div class="">
                            <label for="password" class="block text-sm font-medium text-white">
                                Password
                            </label>
                            <div class="mt-1">
                                <input type="password" id="password" name="password"
                                    class="w-full bg-white border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500  text-black"
                                    type="text" placeholder="Insert password" autocomplete="none">
                            </div>
                        </div>

                        <div class="form-control">
                            <label class="cursor-pointer label justify-start">
                                <input type="checkbox" checked="checked" class="checkbox checkbox-xs rounded-none" />
                                <span class="label-text ml-4">Remember me</span>
                            </label>
                        </div>

                        <div class="mb-3">
                            <div class="mt-1">
                                <button type="submit"
                                    class="flex py-3 px-20 mx-auto bg-sky-900 text-white rounded-md justify-center">Login</button>
                            </div>
                        </div>

                        <div class="">
                            <a href="" class="text-sm italic text-white">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
