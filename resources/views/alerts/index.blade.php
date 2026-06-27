<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert List</title>
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
    <h2>Alert List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Camera</th>
            <th>Event</th>
            <th>Message</th>
            <th>Time</th>
        </tr>

        @foreach ($alerts as $alert)
            <tr>
                <td>{{ $alert->id }}</td>
                <td>{{ $alert->camera->name }}</td>
                <td>{{ $alert->event_type }}</td>
                <td>{{ $alert->message }}</td>
                <td>{{ $alert->created_at->format('d M, Y H:i A') }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
