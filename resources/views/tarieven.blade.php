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

        <div class="flex flex-row flex-wrap justify-evenly m-6 bg-white rounded-xl drop-shadow-2xl md:w-4/6">
            <div class="bg-purple-600 m-6 shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-white m-6">Tarieven</p></b>
                <div class="m-6 text-white">
                    <table>
                        <tr class="border-2 border-green-700">
                            <th class="border-2 border-green-700">APK Basic</th>
                            <td class="border-2 border-green-700">--:--</td>
                        </tr>
                        <tr class="border-2 border-green-700">
                            <th class="border-2 border-green-700">APK Pro</th>
                            <td class="border-2 border-green-700">--:--</td>
                        </tr>
                        <tr>
                            <th class="border-2 border-green-700">APK Deluxe</th>
                            <td class="border-2 border-green-700">--:--</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="bg-white m-6 shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono m-6">Uur tarieven.</p></b>
                <div class="m-6">
                    Bij Flitserz werken we op uurtarieven.<br>
                    Vanaf het eerste half uur tellen we per half uur het halve uurtarief.<br><br>
                    <table>
                        <tr>
                            <th>Uur tarief</th>
                            <td>--:--</td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>