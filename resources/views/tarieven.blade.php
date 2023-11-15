<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/tarieven pop-up.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">


</head>
    <body class="h-screen bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/BG-HomePage.jpeg') }}')">
        <div class="flex grid justify-center flex-col  w-screen bg-white bg-opacity-80">
            <!-- dit is de nav bar ===================================== -->
            <div class="flex sm:flex-row sm:justify-between h-1/4 pt-10 px-20 flex-col justify-evenly">
                <div class="flex justify-center pb-5 pt-34 sm:pt-0 sm:pb-0"><a href=""><button class="hover:bg-green-600 bg-green-500 px-6 rounded-xl">Flitserz</button></a></div>
                <div class="flex flex-row justify-center">
                    <div><a href="/"><button class="hover:bg-green-600 bg-green-500 pl-6 pr-3 rounded-l-xl">Home</button></a></div>
                    <div><a href="/tarieven"><button class="hover:bg-green-600 bg-green-500 px-3">Tarieven</button></a></div>
                    <div><a href="/contact"><button class="hover:bg-green-600 bg-green-500 pr-6 pl-3 rounded-r-xl">Contact</button></a></div>
                </div>
                <div class="flex justify-center pt-5 sm:pt-0"><a href="/over"><button class="hover:bg-green-600 bg-green-500 px-6 rounded-xl">Socials</button></a></div>
            </div>
            <!-- dit is einde nav bar =================================== -->
            <div class="flex flex-row py-4 justify-evenly sm:w-screen">
                <div><h1><b class="text-xl sm:text-4xl">Tarieven</b></h1></div>
                <div><button class="bg-yellow-400 w-26 h-8 rounded-xl hover:bg-yellow-500"><b class="text-center text-xl sm:text-2xl px-1 sm:px-5">Contact Opnemen</b></button></div>
            </div>

            <div class="flex flex-col pt-20">
                <div class="flex justify-center">
                    <div class="flex justify-center bg-green-500 w-full sm:w-1/2 rounded-t-lg bg-gradient-to-t from-green-800 to-green-500"><b class="text-white text-2xl pb-1">Reiniging</b></div>
                </div>

                <div class="flex justify-center pt-4">
                    <div class="flex flex-row w-screen sm:w-1/2 ">
                        <div class="flex flex-col w-3/4 sm:w-2/3 pr-3 sm:pr-4">

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl mb-4 h-full bg-gradient-to-l from-green-800 to-green-500">
                                <p class="flex flex-col">
                                    <div class="flex flex-row justify-center px-2 pt-1">
                                        <b class="text-white">Laptop Reineging</b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">General Diagnostics</b><b class="text-white text-1xs hover:text-sm"><a href="/tarieven/1">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij en cool leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij, cool en geoptimaliseerd leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl mb-4 h-full bg-gradient-to-l from-green-800 to-green-500">
                                <p class="flex flex-col">
                                    <div class="flex flex-row justify-center px-2 pt-1">
                                        <b class="text-base text-white">Desktop Reineging</b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">General Diagnostics</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij en cool leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Stof vrij, cool en geoptimaliseerd leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl h-full bg-gradient-to-l from-green-800 to-green-500">
                                <p class="flex flex-col">
                                    <div class="flex flex-row justify-center px-2 pt-1">
                                        <b class="text-base text-white">Telefoon/Tablet Reineging</b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">General Diagnostics</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Schoon en geoptimaliseerd leven</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                </p>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/4 sm:w-1/3">

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl mb-4 h-full bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">FREE !</b>
                                    <b class=" text-center text-1xs sm:text-base">49,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class=" text-center text-1xs sm:text-base">79,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class=" text-center text-1xs sm:text-base">69,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl mb-4 h-full bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">FREE !</b>
                                    <b class="text-center text-1xs sm:text-base">49,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">79,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">69,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl h-full bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">FREE !</b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            
            <div class="flex flex-col pt-20">
                <div class="flex justify-center">
                    <div class="flex justify-center bg-green-500 w-full sm:w-1/2 rounded-t-lg bg-gradient-to-t from-green-800 to-green-500"><b class="text-white text-2xl pb-1">Software</b></div>
                </div>

                <div class="flex justify-center pt-4">
                    <div class="flex flex-row w-screen sm:w-1/2 ">
                        <div class="flex flex-col w-3/4 sm:w-2/3 pr-3 sm:pr-4">

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl mb-4 h-full bg-gradient-to-l from-green-800 to-green-500">
                                <p class="flex flex-col">
                                    <div class="flex flex-row justify-center px-2 pt-1">
                                        <b class="text-white">Laptop/Desktop Software</b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Wachtwoord herstellen</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Software Updates</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Performance Optimization</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                    <div class="flex flex-row justify-between px-1 sm:px-2">
                                        <b class="text-2xs sm:text-base text-white">Backup and Data Protection</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                    </div>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl h-full bg-gradient-to-l from-green-800 to-green-500">
                                <div class="flex flex-row justify-center px-2 pt-1">
                                    <b class="text-white">Telefoon/Tablat Software</b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Wachtwoord herstellen</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Software Updates</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Performance Optimization</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Data overzetten naar nieuwe aparaat</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col w-1/4 sm:w-1/3">
                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl mb-4 h-full bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">35,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">35,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">40,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">129,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl h-full bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">35,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">19,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">19,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            
            <div class="flex flex-col pt-20">
                <div class="flex justify-center">
                    <div class="flex justify-center bg-green-500 w-full sm:w-1/2 rounded-t-lg bg-gradient-to-t from-green-800 to-green-500"><b class="text-white text-2xl pb-1">Hardware</b></div>
                </div>

                <div class="flex justify-center pt-4">
                    <div class="flex flex-row w-screen sm:w-1/2 ">
                        <div class="flex flex-col w-3/4 sm:w-2/3 pr-3 sm:pr-4 mb-4">

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl mb-4 h-full bg-gradient-to-l from-green-800 to-green-500">
                                <div class="flex flex-row justify-center px-2 pt-1">
                                    <b class="text-white">Adviseren</b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Adviseren en consulting voor Telefoon</b><b class="text-white text-1xs hover:text-sm pr-1"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Adviseren en consulting voor Tablet</b><b class="text-white text-1xs hover:text-sm pr-1"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Adviseren en consulting voor Laptop</b><b class="text-white text-1xs hover:text-sm pr-1"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-1 sm:px-2">
                                    <b class="text-2xs sm:text-base text-white">Adviseren en consulting voor Desktop</b><b class="text-white text-1xs hover:text-sm pr-1"><a href="">Click details</a></b>
                                </div>
                            </div>
                            
                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl mb-4 h-full bg-gradient-to-l from-green-800 to-green-500">
                                <div class="flex flex-row justify-center px-2 pt-1">
                                    <b class="text-white">Hardware upgrades Laptop</b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Geheugen (RAM) Upgrades</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Opslag upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Batterij vervanging/upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Wi-Fi-kaart Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                            </div>

                            <div class="bg-green-500 rounded-r-xl rounded-bl-xl h-full bg-gradient-to-l from-green-800 to-green-500">
                                <div class="flex flex-row justify-center px-2 pt-1">
                                    <b class="text-white">Hardware upgrades Desktop</b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Geheugen (RAM) Upgrades</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Opslag upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Grafische kaart (GPU) Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Wi-Fi-kaart Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Processor (CPU) Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Voeding Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Moederbord Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                                <div class="flex flex-row justify-between px-2">
                                    <b class="text-2xs sm:text-base text-white">Koeling Upgrade</b><b class="text-white text-1xs hover:text-sm"><a href="">Click details</a></b>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-col mb-4 w-1/4 sm:w-1/3 ">

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl mb-4 h-fit bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">39,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">39,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">39,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">39,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl mb-4 h-fit bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                            <div class="bg-green-500 rounded-b-xl rounded-tl-xl h-fit bg-gradient-to-r from-green-800 to-green-500">
                                <p class="flex flex-col text-white">
                                    <b class="text-center pt-1">Tarieven</b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                    <b class="text-center text-1xs sm:text-base">29,- <b class="text-white text-1xs sm:text-base">incl BTW</b></b>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>
        @if (session()->has('GeneralDiagnostics'))
            <?php echo "<script> window.addEventListener('DOMContentLoaded', (event) => { setTimeout(function() { alert('Een gratis diagnose houdt in dat we onderzoeken wat het probleem is, of er eventuele onderliggende kwesties zijn, en wat Flitserz voor u kan betekenen. We verstrekken ook informatie over de geschatte kosten van de benodigde diensten.'); }, 500); });</script>"; ?>
        @endif
    </body>
</html>



<!-- <body class="bg-amber-50">
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
                    <b>    149,-</b>
                </div>
            </div>
        </div>
    </div>
</body> -->