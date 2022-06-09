<!DOCTYPE html>
<html lang="en">
<head>

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
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-6 bg-white rounded-xl drop-shadow-2xl min-w-min md:w-4/6">
            <div class="bg-purple-600 m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-white m-6">APK</p></b>
                <div class="m-6 text-l text-white">
                    <b>APK Basic</b><br>
                    Software checken/updaten en feedback geven.<br><br>

                    <b>APK Pro</b><br>
                    Software checken/updaten en feedback geven.<br>
                    Handige tools voor google en window's instaleren,<br> 
                    zodat u zelf makelijk up-todate kan blijven.<br><br>

                    <b>APK Deluxe</b><br>
                    Software checken/updaten en feedback geven.<br>
                    Handige tools voor google en window's instaleren,<br> 
                    zodat u zelf makelijk up-todate kan blijven.<br><br>
                    Het schoon maken van de binnen en buiten kant van uw laptop of desktop.
                </div>
            </div>
            <div class="bg-white m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-6">Hulp bij het bouwen van uw desktop</p></b>
                <div class="m-6 text-l">
                    <b>Wat Flitserz hier in voor u kan betekenen</b><br>
                    Het assisteren bij het bouw procces.<br>
                    Het kompleet over nemen van het procces,<br>
                    en alles netjes geinstaleerd maken.<br><br>
                </div>
            </div>
            
            <div class="bg-white m-6 shadow-xl rounded-2xl">
                <b><p class="text-2xl font-mono m-6">Advies geven en diagnose stellen</p></b>
                <div class="m-6 text-l">
                    <b>Wat Flitserz hier in voor u kan betekenen</b><br>
                    Als u zelf niet weet wat er aan de hand is met uw aparaat,<br> 
                    kunt u Flitserz inhuren voor een diagnose op uw situatie.<br>
                    Het informeren aan u wat er momenteel aan de hand is na de diagnosen,<br> 
                    en de oplossing(en) voor u op tafel blood leggen.<br><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>