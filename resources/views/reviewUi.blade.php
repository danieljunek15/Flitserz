<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="flex flex-col">

    <button class="border-2">
        <a href="{{ url('/logout') }}"> logout </a>
    </button>

    <button>
        <a href="/ui/ticked">Tickets</a>
    </button>

    @foreach ($reviewData as $row)
    <div class="bg-purple-600 m-6 shadow-2xl rounded-2xl h-auto w-4/12">
        <b><p class="text-2xl font-mono text-white m-6">{{ $row->name }}</p></b>
        <div class="m-6 text-white">
            <table>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Naam</th>
                    <td class="border-2 border-green-700">{{ $row->name }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Rating</th>
                    <td class="border-2 border-green-700">{{ $row->rating }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Review</th>
                    <td class="border-2 border-green-700">{{ $row->content }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Status</th>
                    <td class="border-2 border-green-700">{{ $row->status }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Aangemaakt</th>
                    <td class="border-2 border-green-700">{{ $row->created_at }}</td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">DELETE</th>
                    <td class="border-2 border-green-700">
                        <b><a href="{{ url("/ui/review/delete/{$row->id}") }}" class="text-red-900">DELETE</a></b>
                    </td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">HIDDEN</th>
                    <td class="border-2 border-green-700">
                        <a href="{{ url("/ui/review/update/{$row->id}") }}" class="text-green-600">Review verbergen</a>
                    </td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">SHOW</th>
                    <td class="border-2 border-green-700">
                        <a href="{{ url("/ui/review/updateAgen/{$row->id}") }}" class="text-green-600">Review laten zien</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endforeach
</body>
</html>