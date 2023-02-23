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
                <b><p class="text-2xl font-mono text-lime-100 m-1 sm:m-6">PREMIUM SERVICE</p></b>
                <div class="m-3 sm:m-6 text-l text-lime-100">
                    <b><h3 class="text-xl">APK Basic</h3></b>
                    <b>    Wat hoort er bij een basic APK ?</b><br>
                    <b>    Wij zorgen er voor dat de software van uw laptop/desktop up-to-date is.</b><br>
                    <b>    Ook zorgen we ervoor dat uw apparaat virus-vrij is.</b><br>
                    <b>    Onnodige bestanden halen we in overleg met u van uw apparaat af.</b><br><br>
                    <b><h3 class="text-xl">APK Pro</h3></b>
                    <b>    Is een basic APK plus het stofvrij maken en opschonen van de laptop/desktop.</b><br>
                    <b>    Wij doen dit altijd in overleg met u.</b><br><br>
                    <b><h3 class="text-xl">APK Deluxe</h3></b>
                    <b>    De Basic en APK-Pro worden uitgevoerd</b><br>
                    <b>    Wij vervangen de thermale paste/pads worden vervangen van de desktop/laptop.</b><br>
                    <b>    Wij installeren handige programma's voor beter gebruik van laptop of desktop.</b><br>
                    <b>    Met uitleg en korte training over deze programma's die makkelijk in gebruik zijn.</b>          
                </div>
            </div>
            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Hulp bij het bouwen van u desktop</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>-   Wij kunnen adviseren en assisteren bij het bouwproces.</b><br>
                    <b>-   Wij kunnen desgewenst het hele proces overnemen, en alles gebruiksklaar maken.</b><br>
                    <b>-   Wij kunnen adviseren en helpen met het modificeren/upgraden van u desktop/laptop.</b><br>
                    <b>-   Wij kunnen helpen en adviseren bij het installeren van een desktop/laptop.</b>
                </div>  
            </div>
            
            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Advies geven en diagnose stellen</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>Wat kan Fitserz voor u hier in betekenen ?</b><br>
                    <b>Bij de IT-problemen die u aangeeft stelt Flitserz een diagnose door onderzoek.</b><br> 
                    <b>Wij leggen uit wat er aan de hand is. Wat de oorzaak is. En hoe het probleem verholpen kan worden.</b><br><br>
                    <b>Wij bieden desgewenst een offerte aan met een kosten-indicatie. </b><br>
                </div>
            </div>

            <div class="bg-amber-100 m-1 sm:m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-1 sm:m-6">Hulp bij het uitzoeken, installeren en instellen van elektronica.</p></b>
                <div class="m-3 sm:m-6 text-l">
                    <b>-   Als u een nieuw apparaat wilt aanschaffen, geven wij desgevraagd advies</b><br>
                    <b>-   ons advies is gebaseerd op doel, functionaliteit, kwaliteit, prijs en uw persoonlijke wens</b><br><br>
                    <b>-   Wij geven objectieve informatie over voordelen en nadelen.</b><br><br>
                    <b>-   Wij kijken samen met u naar de kwaliteit-beste prijs verhouding.</b><br>
                    <b>-   Flitserz heeft geen financieel belang bij uw aankoop.</b><br>
                    <b>-   Flitserz benoemt alle (on)mogelijkheden van een nieuw apparaat.</b><br><br>
                    <b>-   Als u een apparaat hebt aangeschaft, installeren wij het volledig voor u.</b><br><br>
                    <b>-   Wij kunnen de apparatuur afstellen op uw voorkeur.</b><br><br>
                    <b><h2 class="text-xl">Wat kunt u verwachten van Flitserz ?</h2></b>
                    <b>    Wij stemmen nauwkeurig af op uw wensen, voorkeuren, bedoelingen en mogelijkheden.</b><br>
                    <b>    Wij adviseren een nieuwe aanschaf u objectief en belangeloos.</b><br>
                    <b>    Wij willen u helpen met de feitelijke aanschaf, via internet of winkel.</b><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>