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
<body class="bg-amber-50">
    <div class="flex flex-row flex-wrap justify-between h-full m-2 sm:m-6 bg-lime-900 rounded-2xl drop-shadow-2xl border-2 border-black">
        <div class="flex flex-col justify-end h-full bg-lime-900 rounded-2xl m-2 sm:m-6">
            <div>
                <p class="text-4xl font-bold text-red-800">Flitserz</p>
            </div>

            <div class="flex flex-wrap sm:flex-row md:flex-col m-2 sm:m-6 justify-evenly min-w-[70%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/over">Over ons</a>  
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-lime-100 text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-1 sm:m-6 bg-amber-50 rounded-xl drop-shadow-2xl md:w-4/6 bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/Achtergrond_Foto.JPG') }}')">
            <div class="bg-lime-700 m-1 sm:m-6 sm:w-fit drop-shadow-2xl rounded-2xl">
                <div class="flex flex-row justify-start">
                    <b><p class="text-2xl font-mono text-lime-100 pt-6 pl-6">Welkom bij</p></b>
                    <b><p class="text-3xl font-bold text-red-800 pt-5 pl-2">Flitserz</p></b>
                    <b><p class="text-2xl font-mono text-lime-100 pt-6 pl-2 pr-6">voor alle IT-problemen</p></b>
                </div>
                <div class="m-3 sm:m-6 text-lime-100 text-l">
                    <b><h3 class="text-xl text-red-800">Flitserz, omdat het snel beter kan.</h3></b>
                    <b>    Met een professionele service helpen wij u bliksemsnel bij alle IT-problemen.</b><br>
                </div>
            </div>
            <div class="bg-amber-100 m-1 sm:m-6 sm:w-fit shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Waarom Flitserz?</p></b>
                <div class="m-3 sm:m-6">
                    <b><h3 class="text-xl">Goede, ervaren, professionele ICT'ers</h3></b><br>
                    <b>    Flitserz biedt een premium service; vast pakket diensten voor vaste prijs.</b><br>
                    <b>    Voordeligste keuze vergeleken met anderen.</b><br><br>
                    <b>    * Wij komen op afspraak bij u thuis.</b><br>
                    <b>    * Snelle betrouwbare dienstverlening.</b><br>
                    <b>    * Persoonlijk en vertrouwelijk.</b>
                </div>
            </div>
            <div class="bg-amber-100 m-1 sm:m-6 sm:w-fit shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Gratis diagnose!</p></b>
                <div class="m-3 sm:m-6">
                    <b><h3 class="text-xl">Gratis diagnose.</h3></b>
                    <b>    In goed overleg met u onderzoeken wij uw internet-apparatuur om problemen vast te stellen.</b><br>
                    <b>    Dat geldt voor alle apparaten zoals smartphone, PC, tablet, laptop, smartwatch.</b><br><br>
                    <b>    Het stellen van de diagnose is gratis. Wij geven ook gratis aan hoe problemen opgelost kunnen worden.</b><br>
                    <b>    Om gericht onderzoek te doen hebben wij veel aandacht voor uw ervaringen en vragen.</b><br><br>

                    <b><h3 class="text-xl">Maak een afspraak en wij nemen zo snel mogelijk contact met u op.</h3></b><br>
                    <div class="flex justify-center">
                        <button class="px-6 py-1 bg-lime-600 hover:bg-lime-500 text-black rounded-lg border-2 border-lime-900 hover:border-lime-800 shadow-xl">
                            <a class="pl-6 md:pl-0 md:pt-6 text-black text-lg" href="/contact">Contact op nemen</a>
                        </button>   
                    </div>
                    <b><h3 class="text-xl">Opgelet</h3></b>
                    <b>    Flitserz is alleen actief in Gooi en Vechtstreek.</b><br>
                    <b>    En een enkele gemeenten hier buiten.</b><br>
                    <b>    Geef svp duidelijk aan in welke gemeente u woont.</b><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>