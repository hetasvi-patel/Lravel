@extends('template.layout')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin-top: 10px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 2px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left; /* Align content to the left */
    }
    .comment-form {
        width: 100%;
    }
    .comment-form textarea {
        width: calc(100% - 22px); /* Adjusted width for the border */
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
    }
    .comment-form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .comment-form button:hover {
        background-color: #0056b3;
    }
h4{
    margin-bottom: 12px;
    margin-top: 5px;
}
    .card {
        width: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card-content {
        padding: 20px;
    }
    .card-title {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .card-description {
        color: #555;
        font-size: 16px;
        line-height: 1.5;
    }
    .card-action {
        padding: 10px 20px;
        background-color: #f4f4f4;
        text-align: right;
    }
    .card-action a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    .card-action a:hover {
        color: #0056b3;
    }
</style>
<body>

<h5>Title:</h5>
    <p>{{ $data->title }}</p><br>
<h5>Subtitle:</h5>
    <p>{{ $data->subtitle }}</p><br>
<h5>Content:</h5>
    <p>{{ $data->body }}</p><br>

</body>
@endsection
