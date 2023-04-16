<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>HELP STIKOM - FlexIS</title>
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
                <p class="mt-4">Say goodbye to the old-fashioned and complicated process of requesting flexible work
                    arrangements!
                    FlexIS is here to revolutionize the way you manage employee requests for a better work-life balance.
                    Our cutting-edge information system enables seamless communication between employees and
                    supervisors, ensuring transparency and productivity.
                    <br><br>
                    With real-time tracking and insightful data
                    analysis, FlexIS is not only a game-changer for employee satisfaction, but also for organizational
                    planning. Take your productivity and efficiency to the next level with FlexIS - the future of
                    flexible work arrangements!
                </p>

                <a href="{{ url('login') }}"><button
                        class="mt-8 bg-sky-900 rounded-full w-1/4 p-2 text-lg text-white hover:shadow-md hover:shadow-sky-400 hover:scale-105 transition-all duration-300  ">Login Now</button></a>


            </div>

    </section>
</body>

</html>
