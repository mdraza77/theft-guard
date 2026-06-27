<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 24px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 960px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        a.button {
            display: inline-block;
            margin-bottom: 16px;
            padding: 8px 14px;
            background-color: #1d4ed8;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h2>Camera List</h2>

    <a class="button" href="{{ route('cameras.create') }}">Add Camera</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Stream URL</th>
        </tr>

        @foreach ($cameras as $camera)
            <tr>
                <td><a style="text-decoration: none"
                        href="{{ route('cameras.show', $camera->id) }}">{{ $camera->id }}</a></td>
                <td>{{ $camera->name }}</td>
                <td>{{ $camera->source_type }}</td>
                <td>{{ $camera->stream_url }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
