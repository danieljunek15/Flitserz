<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-amber-50">
    <div class="flex flex-row flex-wrap justify-between min-h-full m-2 sm:m-6 bg-lime-900 rounded-2xl drop-shadow-2xl border-2 border-black">
        <div class="flex flex-col justify-end h-full bg-lime-900 rounded-2xl m-2 sm:m-6">
            <div>
                <p class="text-4xl font-bold text-red-800">Flitserz</p>
            </div>

            <div class="flex flex-wrap flex-row md:flex-col m-2 sm:m-6 justify-evenly min-w-[60%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/over">Over ons</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl md:w-4/6 bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/bg_tarieven.jpg') }}')">
            <div class="bg-lime-700 m-1 sm:m-6 shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-lime-100 m-1 sm:m-6">Tarieven</p></b>
                <div class="m-3 sm:m-6 text-lime-100">
                    <b><h3 class="text-xl">Uur tarief</h3></b>
                    <b>    36,-</b><br><br><br><br>
                    <b><h3 class="text-xl">APK Deluxe</h3></b>
                    <b>    129,-</b>
                </div>
            </div>

            <div class="bg-lime-100 m-1 sm:m-6 shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-black m-1 sm:m-6">Uitleg</p></b>
                <div class="m-3 sm:m-6 text-black">
                    <b><h3 class="text-xl">Hoe werkt het uur tarief ?</h3></b>
                    <b>    Minimale afname is een half uur, vanaf daar rekenen wij 9,- per kwartier.</b><br>
                    <b>    Wij zetten een stopwatch aan om de tijd nauwkeurig bij te houden.</b><br>
                    <b>    Na dat we de taak succes vol hebben afgerond vullen we samen het factuur in.</b><br><br>
                    <b><h3 class="text-xl">Hoe werkt het APK Deluxe tarief ?</h3></b>
                    <b>    Eerst word er een diagnose gesteld en als deze naar zinnen is gaan we aan de slag.</b><br>
                    <b>    U betaald dan ook eenmalig het bedrag dat is aangegeven.</b>
                </div>
            </div>
        </div>
    </div>
</body>
</html>