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
                <p class="text-4xl font-bold text-red-700">Flitserz</p>
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

        <div class="flex flex-row flex-wrap justify-evenly m-1 sm:m-6 bg-amber-50 rounded-xl drop-shadow-2xl md:w-4/6 bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/bg_over_ons.jpg') }}')">
            <div class="bg-lime-700 m-1 sm:m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-lime-100 m-1 sm:m-6">Over ons Flitserz</p></b>
                <div class="m-3 sm:m-6 text-l text-lime-100">
                    <b><h3 class="text-xl">Wie zijn wij</h3></b>
                    <b>    Flitserz is een jong huis aan huis ICT oplossing voor jong en oud.</b><br>
                    <b>    Als u niet uit huis kan, te oud bent om u computer naar een winkel te brengen.</b><br>
                    <b>    Of u heeft betere dingen te doen en wilt liever iemand langs laten komen.</b><br>
                    <b>    Dan zijn wij de oplossing voor u.</b><br>
                    <b>    Wij zijn de premium huis aan huis IT oplossing voor u.</b><br><br>
                    <b><h3 class="text-xl">Wat is het doel van Flitserz</h3></b>
                    <b>    Flitserz streeft er naar om de beste, voordeligste en vriendelijkste IT oplossing te worden van u buurt.</b><br>
                    <b>    Wij zijn uit op klantvriendelijk ondernemen, en u tevredenheid van onze service.</b><br>
                    <b>    De wereld om ons heen een stukje slimmer en beter maken elke dag weer,</b><br>
                    <b>    door u de beste service te geven dat menselijk mogelijk is.</b><br>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Klant vriendelijk</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>Omdat Flitserz een jong bedrijf is willen wij zo goed mogelijk communicatie hebben tussen u en ons.</b><br>
                    <b>Wij hanteren daarom een "No fix no pay" beleid.</b><br>
                    <b>Flitserz bied een gratis diagnose aan, voor iedereen die dit graag wilt.</b><br>
                    <b>Na de diagnose word er aangegeven wat er mogelijk is en of het opgelost kan worden.</b><br>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Ideologie van Flitserz</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>Wij sluiten niemand uit, en willen alle technische problemen aanpakken voor u.</b><br>
                    <b>No fix no pay. Als het ons niet lukt een oplossing te vinden,</b><br>
                    <b>dan zeggen wij dit zo snel mogelijk om u en onze tijd niet te verspillen.</b><br>
                    <b>Wij vragen dan ook geen betaling.</b><br>
                    <b>Omdat het uitleggen van een technische probleem soms erg lastig kan zijn,</b><br>
                    <b>kunnen we gratis langs komen om een diagnose te stellen op u probleem.</b><br>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <div class="flex flex-row justify-between max-w-[95%]">
                    <b><p class="text-2xl font-mono m-1 sm:m-6">Onze IT'er</p></b>
                    <a href="https://www.linkedin.com/in/daniël-van-den-brink-4a21651a3/" class="pt-8"><img class="drop-shadow-2xl rounded-3xl border-4 border-lime-900 hover:border-red-600" src="{{ asset('img/Profiel_Foto.jpg') }}" width='200' height='200'></a>
                </div>
                <div class="m-3 sm:m-6 text-l">
                    <b><h3 class="text-xl">Wie ben ik ?</h3></b>
                    <b>    Mijn naam is Daniël van den Brink, en ben 21 jaar oud.</b><br>
                    <b>    Momenteel ben ik naast mijn opleiding bij de Bit academie, ook de trotse eigenaar van Flitserz.</b><br>
                    <b>    Samen met Flitserz ben ik gelokaliseerd in Gooi en Vechtstreek.</b><br>
                    <b>    Momenteel ben ik de expert van het Flitserz IT team.</b><br>
                    <b>    Wanneer u contact met ons maakt en een afspraak wilt ben ik de gene die langs komt.</b><br>
                    <b>    Mijn expertise is erg breed in de IT, en sta open voor elke taak.</b><br>
                    <b>    Kom maar op. :D</b><br>
                    <b>    Als er een ding is dat ik niet kan afslaan, dan is dat een lekker kopje koffie of thee.</b><br><br>
                    <b><h3 class="text-xl">Wat is mijn doel ?</h3></b>
                    <b>    Mijn doel is om u te helpen optimaal gebruik te kunnen maken van u apparaat.</b><br>
                    <b>    Een goede uitleg geven, en iedereen die er voor openstaat bij te leren over het apparaat.</b><br>
                    <b>    Zodat ook u beter weet hoe het werkt.</b><br>
                    <b>    Mijn doel is dus om u te helpen en wijzer te maken. :D</b><br>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Bedrijf info van Flitserz</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>Naam: Flitserz</b><br>
                    <b>Kvk-num: 84729333</b><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>