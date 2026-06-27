<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 24px;
        }

        .card {
            max-width: 720px;
            padding: 24px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
        }

        .field {
            margin-bottom: 16px;
        }

        .field label {
            display: block;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .field span {
            display: block;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: #f9f9f9;
        }

        .actions {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 4px;
            background-color: #1d4ed8;
            color: #fff;
        }

        .button.secondary {
            background-color: #6b7280;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Camera Details</h2>

        <div class="field">
            <label>ID</label>
            <span>{{ $camera->id }}</span>
        </div>

        <div class="field">
            <label>Name</label>
            <span>{{ $camera->name }}</span>
        </div>

        <div class="field">
            <label>Source Type</label>
            <span>{{ $camera->source_type }}</span>
        </div>

        <div class="field">
            <label>Stream URL</label>
            <span>{{ $camera->stream_url }}</span>
        </div>

        <div class="field">
            <label>Status</label>
            <span>{{ $camera->status ? 'Active' : 'Inactive' }}</span>
        </div>

        <div class="actions">
            <a class="button secondary" href="{{ route('cameras.index') }}">Back to Camera List</a>
        </div>
    </div>
</body>

</html>
