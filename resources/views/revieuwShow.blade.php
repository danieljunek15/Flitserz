<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="">
    <div class="flex flex-row flex-wrap justify-between min-w-min md:w-auto min-h-full m-2 sm:m-6 bg-dark-purpleblue rounded-2xl drop-shadow-2xl border-2 border-black">
        <div class="flex flex-col justify-end h-full bg-dark-purpleblue rounded-2xl m-2 sm:m-6">
            <div>
                <p class="text-4xl font-bold text-red-700">Flitserz</p>
            </div>

            <div class="flex flex-wrap flex-row md:flex-col m-2 sm:m-6 justify-evenly min-w-[60%]">
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/">Home</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/diensten">Diensten</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/tarieven">Tarieven</a>
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/over">Over-ons</a>  
                <a class="pl-6 pb-5 md:pb-0 md:pl-0 md:pt-6 text-white text-lg md:hover:text-xl" href="/contact">Contact opnemen</a>
            </div>
        </div>

        <div class="flex flex-col w-auto object-scale-down md:flex-row md:w-3/4 md:object-contain">
            <div class="flex flex-col flex-wrap justify-evenly m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl w-auto md:w-2/4 object-scale-down md:object-contain">
                @foreach ($reviewData as $row)
                <div class="bg-purple-600 m-1 sm:m-6 drop-shadow-2xl rounded-2xl object-scale-down md:object-contain">

                    <div class="flex flex-row">
                        <b><p class="text-xl font-mono text-white m-3 sm:m-6">{{ $row->name }}</p></b> <h5 class="text-l font-mono text-white m-3 sm:m-6">reviewd</h5> <b><h5 class="text-l font-mono text-white m-3 sm:m-6">{{ $row->rating }}</h5></b>
                    </div>

                    <div class="m-3 sm:m-6 text-white text-l">
                        {{ $row->content }}
                    </div>
                    <div class="ml-6 mb-5">
                        {{ $row->created_at }}
                    </div>
                </div>
                @endforeach
            </div>

            <div class="flex flex-col justify-start sm:justify-center pb-6 pr-6 w-auto md:w-auto">
                <div class="m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl w-auto">
                    <form action="/revieuw/create" method="POST">
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
                            
                            <label for="rating">Rating :</label>
                            <select name="rating" id="rating" class="border-2 border-black rounded-xl hover:border-violet-800 shadow-xl">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select><br><br>
                            
                            <textarea name="content" rows="8" class="w-full border-2 border-black rounded-xl hover:border-violet-800 shadow-xl p-2" placeholder="Laat u feedback achter">{{ old('content') }}</textarea><br><br>

                            <input type="submit" name="submit" class="px-6 py-1 bg-violet-300 hover:bg-violet-400 text-black rounded-lg border-2 border-violet-400 hover:border-violet-500 shadow-xl">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>