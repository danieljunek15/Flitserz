<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-lime-50">
    <div class="flex flex-row flex-wrap justify-between min-w-min md:w-auto min-h-full m-2 sm:m-6 bg-lime-900 rounded-2xl drop-shadow-2xl border-2 border-black">
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

        <div class="flex flex-col w-auto object-scale-down md:flex-row md:w-3/4 md:object-contain">
            <section class="flex-none sticky overflow-auto h-screen w-1/2 rounded-xl pl-4">
                <div class="flex flex-col justify-evenly bg-lime-100 rounded-xl h-fit drop-shadow-2xl w-auto md:w-full object-scale-down md:object-contain">
                    @foreach ($reviewData as $row)
                    <div class="bg-lime-700 m-1 sm:m-6 drop-shadow-2xl rounded-2xl object-scale-down md:object-contain">

                        <div class="flex flex-row">
                            <b><p class="text-xl font-mono text-lime-100 m-3 sm:m-6">{{ $row->name }}</p></b><b><h5 class="text-l font-mono text-lime-100 m-3 sm:m-6">{{ $row->rating }}/10</h5></b>
                        </div>

                        <div class="m-3 sm:m-6 text-lime-100 text-l">
                            {{ $row->content }}
                        </div>
                        <div class="ml-6 mb-5 text-lime-900">
                            {{ $row->created_at }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>  
            <div class="flex flex-col item-center sm:justify-center pb-6 md:pl-0 w-fit md:w-auto">
                <div class="m-1 sm:m-6 bg-white rounded-xl drop-shadow-2xl w-auto bg-cover bg-no-repeat" style="background-image: url('{{ asset('img/bg_review.jpg') }}')">
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
                            
                            <label for="name" class="text-lime-50">Naam :</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="bg-lime-100 border-2 border-black rounded-xl hover:border-red-600 shadow-xl"><br><br>
                            
                            <label for="rating" class="text-lime-50">Rating :</label>
                            <select name="rating" id="rating" class="bg-lime-100 border-2 border-black rounded-xl hover:border-red-600 shadow-xl">
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
                            
                            <textarea name="content" rows="8" class="bg-lime-100 w-full border-2 border-black rounded-xl hover:border-red-600 shadow-xl p-2" placeholder="Laat u feedback achter">{{ old('content') }}</textarea><br><br>

                            <input type="submit" name="submit" class="px-6 py-1 bg-lime-600 hover:bg-lime-500 text-black rounded-lg border-2 border-lime-900 hover:border-lime-800 shadow-xl">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>