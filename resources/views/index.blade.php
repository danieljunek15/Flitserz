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
    <body class="h-screen bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/BG-HomePage.jpeg') }}')">
        <div class="h-full w-screen ">
            <!-- dit is de nav bar ===================================== -->
            <div class="flex sm:flex-row sm:justify-between h-1/4 pt-10 px-20 bg-green-100 bg-opacity-80 flex-col justify-evenly">
                <div class="flex justify-center"><a href=""><button class="hover:bg-green-600 bg-green-500 px-6 rounded-xl">Flitserz</button></a></div>
                <div class="flex flex-row justify-center">
                    <div><a href="/"><button class="hover:bg-green-600 bg-green-500 pl-6 pr-3 rounded-l-xl">Home</button></a></div>
                    <div><a href="/tarieven"><button class="hover:bg-green-600 bg-green-500 px-3">Tarieven</button></a></div>
                    <div><a href="/contact"><button class="hover:bg-green-600 bg-green-500 pr-6 pl-3 rounded-r-xl">Contact</button></a></div>
                </div>
                <div class="flex justify-center"><a href="/over"><button class="hover:bg-green-600 bg-green-500 px-6 rounded-xl">Socials</button></a></div>
            </div>
            <!-- dit is einde nav bar =================================== -->
            <div class="flex justify-between bg-green-100 bg-opacity-80 w-screen">
                <div class="flex flex-col md:justify-start justify-center w-screen">
                    <p class="flex sm:pl-44 pb-4 md:justify-start justify-center">
                        <b class="md:text-start sm:text-6xl text-xl text-center">
                            Welkom bij Flitserz, <br>
                            Voor al uw IT problemen <br>
                        </b>
                    </p>
    
                    <div class="flex md:justify-start sm:flex-row sm:pl-44 flex-col">
                        <a class="flex justify-center" href="/contact"><button class="hover:bg-yellow-600 bg-yellow-500 px-6 rounded-xl">Offerte Aanvragen</button></a>
                        
                        <p class="flex justify-center test-sm text-gray-500 italic">
                            Psst! Wij garanderen tevredenheid!
                        </p>
                    </div>
                    
                </div>

                
            </div>

            <div class="w-screen flex justify-center md:pr-44 md:justify-end pb-60 h-14 bg-gradient-to-t from-white bg-green-100 bg-opacity-80">
                <div class="">
                    <img class="" src="{{ asset('img/ProfileWebsite.png') }}" alt="">
                </div>
            </div>

            <div class="flex flex-col justify-between bg-white bg-opacity-80">
                <div class="h-14 bg-gradient-to-b from-white"></div>

                <p class="w-screen flex flex-row-reverse md:justify-start justify-center md:pr-44 text-center">
                    <b class="sm:text-6xl pb-2 text-xl ">
                        Waarom Flitserz? <br>
                    </b>
                </p>
                
                <div class="flex md:flex-row md:justify-between md:px-44 flex-col">

                    <!-- BLOK 1 -->
                    <div class="flex justify-center pb-14">
                        <div class="h-40 w-72 bg-gradient-to-r from-green-800 to-green-400 rounded-r-xl rounded-bl-xl">
                            <div class="flex flex-row">
                                <b class="text-2xl text-yellow-300 p-2">01</b>
                                <p class="pt-3 pl-3"><b>Bij u thuis.</b></p>
                            </div>
                            <p class="text-white px-3 pb-3"><b>U hoeft voor onze diensten uw huis niet te verlaten, want wij komen vertrouwlijk bij u over de vloer, lekker simpel!</b></p>
                        </div>
                    </div>

                    <!-- BLOK 2 -->
                    <div class="flex justify-center pb-14">
                        <div class="h-40 w-72 bg-gradient-to-r from-green-800 to-green-400 rounded-r-xl rounded-bl-xl">
                            <div class="flex flex-row">
                                <b class="text-2xl text-yellow-300 p-2">02</b>
                                <p class="pt-3 pl-3"><b>No cure? No Pay!</b></p>
                            </div>
                            <p class="text-white px-3 pb-3"><b>Als het ons niet lukt om een oplossing te vinden, dan zeggen wij dit spoedig en vragen dan ook geen betaling!</b></p>
                        </div>
                    </div>

                    <!-- BLOK 3 -->
                    <div class="flex justify-center">
                        <div class="h-40 w-72 bg-gradient-to-r from-green-800 to-green-400 rounded-r-xl rounded-bl-xl">
                            <div class="flex flex-row">
                                <b class="text-2xl text-yellow-300 p-2">03</b>
                                <p class="pt-3 pl-3"><b>Vertrouwlijk.</b></p>
                            </div>
                            <p class="text-white px-3 pb-3"><b>Wij bieden een GRATIS diagnose omdat wij voor kwaliteit en transparantie bekend willen staan!</b></p>
                        </div>
                    </div>

                </div>

                <div class="h-14 bg-gradient-to-t from-white"></div>
            </div>

            <div class="h-1/4 bg-green-500 bg-opacity-80">
                <div class="h-1/2 bg-gradient-to-b from-white"></div>
                <div class="h-1/2 bg-gradient-to-t from-green-500 bottom-0">
                </div>
            </div>

            <div class="flex flex-col justify-start h-96 bg-cover bg-no-repeat bg-white" style="background-image: url('{{ asset('img/wave.svg') }}')">
                <div>
                    <p class="flex justify-center pb-12 ">
                        <b class="sm:text-6xl text-xl ">
                            Wat vinden wij belangrijk? <br>
                        </b>
                    </p>
    
                    <p class="flex justify-center">
                        <b class="text-center text-gray-200 md:w-1/2 sm:w-screen md:pr-0 md:pl-0 pr-6 pl-6 ">
                            Ons bedrijf staat bekend om kwaliteit en transparantie, 
                            en om deze reputatie te behouden bieden wij een gratis diagnose aan iedereen die hier intresse in heeft.
                            Wij willen graag onze klanten helpen en laten weten dat een goede diagnose hierbij van essentieel belang is!
                        </b>
                    </p>
                </div>


            </div>

            <div class="flex flex-col justify-evenly md:px-60 px-6 bg-white pb-44">

                <div class="flex md:justify-start justify-center pb-12">
                    <b class="sm:text-6xl text-xl">
                        Ons aanbod
                    </b>
                </div>

                <div class="flex flex-row justify-between ">
                    <b class="w-3/4">
                        Wij bieden u diensten aan die u kunnen helpen bij het bouwproces,
                        het modificeren of upgraden van uw apparaat en het installeren van nieuwe aparatuur.
                        Wij nemen het gehele proces van A tot Z over en maken alles gebruiksklaar.
                    </b>
                    <img class="h-2/3 md:h-3/3" src="{{ asset('img/LightBulbWebsite.png') }}" alt="">
                </div>

                <div class="flex flex-row justify-between pt-12">
                    <img class="h-2/3 md:h-3/3" src="{{ asset('img/MedicalLaptopWebsite.png') }}" alt="">
                    <b class="w-3/4">
                        Als u problemen ervaart met uw apparatuur, stelleb wij een gratis diagnose.
                        Hierna leggen wij uit wat er aan de hand is, wat de oorzaak is en natuurlijk hoe het probleem verholpen kan worden.
                    </b>
                </div>

                <div class="flex flex-row justify-between pt-12">
                    <b class="w-3/4">
                        Als u nieuwe electronica wilt aanschaffen, adviseren wij u op basis van uw benodigdheden.
                        Wij helpen u de beste kwaliteit-beste prijs verhouding te vinden. 
                        Wij hebben geen financieel belang bij uw aankoop, en benoemen alle (on)mogelijkheden van het apparaat.

                    </b>
                    <img class="h-2/3 md:h-3/3" src="{{ asset('img/CyberMindWebsite.png') }}" alt="">
                </div>

                <div class="flex flex-row justify-between pt-12">
                    <img class="h-2/3 md:h-3/3" src="{{ asset('img/SpeedClockWebsite.png') }}" alt="">
                    <b class="w-3/4">
                        Tot slot installeren wij het nieuwe apparaat volledig voor u en kunnen wij het afstelleb op uw voorkeur.
                        Onze diensten zijn erop gericht om u te helpen bij al uw techniesche uitdagingen, en u te voorzien van professioneel advies en assistentie!
                    </b>
                </div>

            </div>
        </div>
    </body>
</html>


<!-- 
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
</body> -->