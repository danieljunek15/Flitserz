<!DOCTYPE html>
<html lang="en">
<head>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ $success }}
    </div>
@endif

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="">
    <div class="flex flex-row flex-wrap justify-between min-h-full m-2 sm:m-6 bg-dark-purpleblue rounded-2xl drop-shadow-2xl border-2 border-black">
        <div class="flex flex-col justify-end h-full bg-dark-purpleblue rounded-2xl m-2 sm:m-6">
            <div>
                <p class="text-4xl font-bold text-red-700">Flitserz</p>
            </div>

            <div class="flex flex-wrap sm:flex-row md:flex-col m-2 sm:m-6 justify-evenly min-w-[60%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/over">Over ons</a>  
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl md:w-4/6">
            <div class="bg-purple-600 m-1 sm:m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-white m-1 sm:m-6">Welkom bij Flitserz</p></b>
                <div class="m-3 sm:m-6 text-white text-l">
                    <b><h3 class="text-xl">U wil is wet !!</h3></b>
                    <b>    Wij staan open voor alle IT-problemen.</b><br>
                    <b>    U bent de baas, en wij zijn slechts een tool voor uw multitool.</b><br><br>

                    <b><h3 class="text-xl">Flitserz, omdat het snel beter kan.</h3></b>
                    <b>    Wij zijn uit op een snelle en professionele service voor iedereen.</b>
                </div>
            </div>
            <div class="bg-white m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Waarom ons?</p></b>
                <div class="m-3 sm:m-6">
                    <b><h3 class="text-xl">Goede ICT'ers en voordelig?!</h3></b>
                    <b>    Wij van Flitserz bieden een premium service aan.</b><br>
                    <b>    Momenteel zijn we de voordeligste keuzen vergeleken met onze concurrenten.</b><br>
                    <b>    Echt waar zoek maar op ;D !!!</b><br>
                    <b>    Wij maken zelfs gebruik van Arctic thermalpaste en premium thermalpads.</b>
                </div>
            </div>
            <div class="bg-white m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Gratis diagnose!</p></b>
                <div class="m-3 sm:m-6">
                    <b><h3 class="text-xl">Wat is een gratis diagnose ?!</h3></b>
                    <b>    Onderzoek doen naar het gewilde apparaat, en mogelijke problemen vast stellen.</b><br>
                    <b>    Aangeven hoe wij dit kunnen oplossen voor u, en waarom.</b><br>
                    <b>    Luisteren naar uw verhaal, om gericht onderzoek te doen.</b><br>
                    <b>    Vragen beantwoorden die er bij komen kijken.</b><br><br>

                    <b><h3 class="text-xl">Maak een afspraak en wij nemen zo snel mogelijk contact met u op.</h3></b><br>
                    <div class="flex justify-center">
                        <button class="px-6 py-1 bg-violet-300 hover:bg-violet-400 text-black rounded-lg border-2 border-violet-400 hover:border-violet-500 shadow-xl">
                            <a class="pl-6 md:pl-0 md:pt-6 text-black text-lg hover:text-xl" href="/contact">Contact opnemen</a>
                        </button>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>