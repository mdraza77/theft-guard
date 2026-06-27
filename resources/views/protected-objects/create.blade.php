<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Camera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 24px;
        }

        form {
            max-width: 600px;
        }

        label {
            display: block;
            margin-top: 12px;
            margin-bottom: 4px;
            font-weight: 600;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 16px;
            padding: 10px 16px;
            border: none;
            background-color: #1d4ed8;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1e40af;
        }
    </style>
</head>

<body>
    <h2>Add Protected Object</h2>

    <form action="{{ route('protected-objects.store') }}" method="POST">
        @csrf

        <div>
            <label>Camera</label>

            <select name="camera_id">
                @foreach ($cameras as $camera)
                    <option value="{{ $camera->id }}">
                        {{ $camera->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Object Name</label>

            <input type="text" name="name" placeholder="Bike">
        </div>

        <button type="submit">
            Save
        </button>

    </form>
</body>

</html>
