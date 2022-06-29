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
    <div class="flex flex-row flex-wrap justify-between min-h-full m-6 bg-dark-purpleblue rounded-2xl drop-shadow-2xl border-2 border-black">
        <div class="flex flex-col justify-end h-full bg-dark-purpleblue rounded-2xl md:m-6">
            <div>
                <p class="text-4xl font-bold text-red-700">Flitserz</p>
            </div>

            <div class="flex flex-wrap flex-row md:flex-col m-6 justify-evenly min-w-[60%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/over">Over ons</a>  
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-6 bg-white rounded-xl drop-shadow-2xl md:w-5/6">
            <div class="bg-purple-600 m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-white m-6">gegroet bij Flitserz</p></b>
                <div class="m-6 text-white text-l">
                    <b class="whitespace-pre"><h3 class="text-xl">U wil is wet !!</h3></b>
                    <b class="whitespace-pre">    Wij staan open voor alle IT problemen.</b><br>
                    <b class="whitespace-pre">    U bent de baas, en wij zijn slechts een tool voor uw multietool.</b><br><br>

                    <b class="whitespace-pre"><h3 class="text-xl">Flitserz, omdat het snel beter kan.</h3></b>
                    <b class="whitespace-pre">    Wij zijn uit op een snelle en professionele service voor iedereen.</b>
                </div>
            </div>
            <div class="bg-white m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-6">Waarom ons ?</p></b>
                <div class="m-6">
                    <b class="whitespace-pre"><h3 class="text-xl">Goede ICTer's en voordelig ?!</h3></b>
                    <b class="whitespace-pre">    Wij van Flitserz bieden een premium service aan.</b><br>
                    <b class="whitespace-pre">    Momenteel zijn we de voordeligste keuzen vergeleken met onze concurrenten.</b><br>
                    <b class="whitespace-pre">    Echt waar zoek maar op ;D !!!</b><br>
                    <b class="whitespace-pre">    Wij maken zelfs gebruik van Arctic thermalpaste en premium thermalpads.</b>
                </div>
            </div>
            <div class="bg-white m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-6">Gratis diagnose!</p></b>
                <div class="m-6">
                    <b class="whitespace-pre"><h3 class="text-xl">Wat is een gratis diagnose ?!</h3></b>
                    <b class="whitespace-pre">    Onderzoek doen naar het gewilde apparaat, en mogelijke problemen vast stellen.</b><br>
                    <b class="whitespace-pre">    Aangeven hoe wij dit kunnen oplossen voor u, en waarom.</b><br>
                    <b class="whitespace-pre">    Luisteren naar uw verhaal, om gericht onderzoek te doen.</b><br>
                    <b class="whitespace-pre">    Vragen beantwoorden die er bij komen kijken.</b><br><br>

                    <b class="whitespace-pre"><h3 class="text-xl">Maak een afspraak en wij nemen zo snel mogelijk contact met u op :D</h3></b>
                    <button class="px-6 py-1 bg-violet-300 hover:bg-violet-400 text-black rounded-lg border-2 border-violet-400 hover:border-violet-500 shadow-xl">
                        <a class="pl-6 md:pl-0 md:pt-6 text-black text-lg hover:text-xl" href="/contact">Contact opnemen</a>
                    </button>   
                </div>
            </div>
        </div>
    </div>
</body>
</html>