<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body class="flex flex-col">

    <button>
        <a href="/ui/review">Reviews</a>
    </button>

    @foreach ($data as $row)
    <div class="bg-purple-600 m-6 shadow-2xl rounded-2xl w-4/12">
        <b><p class="text-2xl font-mono text-white m-6">{{ $row->name }}</p></b>
        <div class="m-6 text-white">
            <table>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Naam</th>
                    <td class="border-2 border-green-700">{{ $row->name }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">E-mail</th>
                    <td class="border-2 border-green-700">{{ $row->email }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Tel-nummer</th>
                    <td class="border-2 border-green-700">{{ $row->telnummer }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Gemeente</th>
                    <td class="border-2 border-green-700">{{ $row->gemeente }}</td>
                </tr>
                <tr class="border-2 border-green-700">
                    <th class="border-2 border-green-700">Vraag</th>
                    <td class="border-2 border-green-700">{{ $row->vragen }}</td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">Status</th>
                    <td class="border-2 border-green-700">{{ $row->status }}</td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">Aangemaakt</th>
                    <td class="border-2 border-green-700">{{ $row->created_at }}</td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">DELETE</th>
                    <td class="border-2 border-green-700">
                        <b><a href="{{ url("/ui/ticked/delete/{$row->id}") }}" class="text-red-900">DELETE</a></b>
                    </td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">CLOSED</th>
                    <td class="border-2 border-green-700">
                        <a href="{{ url("/ui/ticked/update/{$row->id}") }}" class="text-green-600">STATUS closed ZETTEN</a>
                    </td>
                </tr>
                <tr>
                    <th class="border-2 border-green-700">OPEN</th>
                    <td class="border-2 border-green-700">
                        <a href="{{ url("/ui/ticked/updateAgen/{$row->id}") }}" class="text-green-600">STATUS open ZETTEN</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endforeach
</body>
</html>