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

        <div class="flex flex-row flex-wrap justify-evenly m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl min-w-min md:w-4/6 bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/bg_diensten.jpg') }}')">
            <div class="bg-lime-700 m-1 sm:m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-lime-100 m-1 sm:m-6">APK</p></b>
                <div class="m-3 sm:m-6 text-l text-lime-100">
                    <b><h3 class="text-xl">APK Basic</h3></b>
                    <b>    Wat hoort er bij een basic APK ?</b><br>
                    <b>    Wij zorgen er voor dat de software van u laptop/desktop helemaal up-to-date is.</b><br>
                    <b>    En zorgen we ervoor dat er geen virussen op staan, ook als u niet wist dat er een opstond.</b><br>
                    <b>    Ook kunnen we overige rommel van u pc weg halen.</b><br><br>
                    <b><h3 class="text-xl">APK Pro</h3></b>
                    <b>    Is een basic APK plus de laptop/desktop word stof vrij en schoon gemaakt.</b><br>
                    <b>    met uitleg wat we doen en hebben gedaan.</b><br><br>
                    <b><h3 class="text-xl">APK Deluxe</h3></b>
                    <b>    Wat hoort er bij een Deluxe APK ?</b><br>
                    <b>    De basic en pro APK worden uitgevoerd, en de thermale paste/pads worden vervangen van u desktop/laptop.</b><br>
                    <b>    Installeren we wat handige tools voor het zelfstandig kunnen updaten in de toekomst.</b><br>
                    <b>    Met uitleg over deze tools.</b><br><br>
                    <b>Wij gebruiken <a class="text-xl" href="/tarieven">dit</a> als bron voor de kosten.</b>                   
                </div>
            </div>
            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Hulp bij het bouwen van u desktop</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>-   Wij kunnen assisteren bij het bouw proces.</b><br>
                    <b>-   Wij kunnen het proces compleet over nemen, en alles netjes gebruik klaar maken.</b><br>
                    <b>-   Wij kunnen helpen met het modificeren/upgraden van u desktop/laptop.</b><br>
                    <b>-   En als extra kunnen wij u zelfs les geven in het bouwen/installeren van een desktop/laptop.</b><br><br>
                    <b>Wij hanteren een <a class="text-xl" href="/tarieven">uur tarief</a> voor de kosten berekening. (thermale paste voor CPU inbegrepen)</b>
                </div>  
            </div>
            
            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Advies geven en diagnose stellen</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>Wat kan Fitserz voor u hier in betekenen ?</b><br>
                    <b>-   Als u zelf niet weet wat er aan de hand is met u apparaat,</b><br> 
                    <b>    kunt u Flitserz inhuren voor een diagnose op het aangegeven probleem.</b><br>
                    <b>-   Het informeren wat er momenteel aan de hand is, en de oplossing(en) voor u op tafel leggen.</b><br>
                    <b>-   Wij maken dan een offerte met de handelingen en de kosten die hierbij komen kijken.</b><br><br>
                    <b>Wij gebruiken <a class="text-xl" href="/tarieven">dit</a> als bron voor de kosten.</b>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Hulp bij het uitzoeken, installeren en instellen van elektronica.</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b><h2 class="text-xl">Wat kan Fitserz voor u hier in betekenen ?</h2></b>
                    <b>-   Het helpen uitzoeken van een gepast apparaat gebaseerd op u prijs en wensen.</b><br>
                    <b>-   Een eerlijke mening geven over de gekozen apparaten, dus de voordelen en nadelen benadrukken.</b><br>
                    <b>-   De beste prijs voor het gekozen apparaat vinden.</b><br>
                    <b>-   Wanneer u het apparaat (al) binnen hebt, installeren wij het volledig voor u.</b><br>
                    <b>-   Wij kunnen aanpassingen maken, bijv instellingen aan passen.</b><br><br>
                    <b><h2 class="text-xl">Wat kunt u verwachten van Flitserz ?</h2></b>
                    <b>    Als eerste willen wij meegeven dat Flitserz niks verdiend aan het product dat wij speciaal voor u aanraden/uitzoeken.</b><br>
                    <b>    Wij zoeken enkel naar de beste opties voor u, gebaseerd op u verzoek(en). Bijv prijs, functionaliteit en kwaliteit.</b><br>
                    <b>    De keuzen van het product ligt dus bij u, wij doen enkel onderzoek plegen van uit een professioneel oog.</b><br>
                    <b>    Dus wij consulten alleen over de mogelijkheden met u.</b><br>
                    <b>    Daarom vragen wij alleen het uur tarief voor het adviseren, informeren, bijleren, installeren en instellen.</b><br>
                    <b>    De gratis diagnose geld ook voor adviseren.</b><br>
                    <b>    Wij luisteren dus eerst naar u verhaal, beschrijving en voorkeuren.</b><br>
                    <b>    Wanneer we u begrijpen gaan we de tijd opnemen, en zo snel mogelijk zoeken terwijl u mee kijkt. (en uitleg krijgt)</b><br><br>
                    <b>Wij gebruiken <a class="text-xl" href="/tarieven">dit</a> als bron voor de kosten.</b>
                </div>
            </div>
        </div>
    </div>
</body>
</html>