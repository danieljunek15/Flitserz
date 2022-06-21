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

            <div class="flex flex-wrap flex-row md:flex-col m-6 justify-evenly md:min-w-[60%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/over">Over ons</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/showRevieuw">Reviews</a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap justify-evenly m-6 bg-white rounded-xl drop-shadow-2xl md:w-4/6">
            <div class="bg-purple-600 m-6 drop-shadow-2xl rounded-2xl">
                <b><p class="text-2xl font-mono text-white m-6">Contact op nemen</p></b>
                <div class="m-6 text-l text-white">
                    <b>Vragen ?</b><br>
                    Heeft u vrage of wilt u contact opnemen met Flitserz ?<br>
                    Vul het contact formulier in en wij zullen zosnel mogelijk contact met u opnemen<br><br>
                    <b>Opgelet</b><br>
                    Flitserz is alleen actief in Gooi en Vechtstreek,<br>
                    en een enkele gemeenten hier buiten.<br>
                    Geef dus duidelijk aan in welke gemeente u zich bevind.<br>
                </div>
            </div>

            <div class="bg-white m-6 shadow-xl rounded-2xl">
                <b>
                    <p class="text-2xl font-mono m-6">Contact formulier</p>
                </b>
                <form action="/contact/create" method="POST">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                    <div class="m-6 text-l">
                        <label for="name">Naam :</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="border-2 border-black rounded-xl hover:border-violet-800 shadow-xl"><br><br>
                        <label for="email">E-mail :</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="border-2 border-black rounded-xl hover:border-violet-800 shadow-xl"><br><br>
                        <label for="telnummer">Tel-num :</label>
                        <input type="telnummer" name="telnummer" value="{{ old('telnummer') }}" class="border-2 border-black rounded-xl hover:border-violet-800 shadow-xl"><br><br>
                        <label for="gemeente">Gemeente :</label>
                        <input type="text" name="gemeente" value="{{ old('gemeente') }}" class="border-2 border-black rounded-xl hover:border-violet-800 shadow-xl"><br><br>
                        <textarea name="vragen" value="{{ old('vragen') }}" rows="8" class="w-full border-2 border-black rounded-xl hover:border-violet-800 shadow-xl p-2" placeholder="Kunt u uitgebreid uitleggen waarmee Flitserz u vandienst kan zijn?">{{ old('vragen') }}</textarea><br><br>
                        <input type="submit" name="submit" class="px-6 py-1 bg-violet-300 hover:bg-violet-400 text-black rounded-lg border-2 border-violet-400 hover:border-violet-500 shadow-xl">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>