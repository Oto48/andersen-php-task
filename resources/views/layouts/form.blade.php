<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <form action="/" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <div>
            <h2>Messages:</h2>
            @if($data)
                <ul>
                    @foreach($data as $item)
                        <li>
                            <strong>Name:</strong> {{ $item['name'] }}<br>
                            <strong>Email:</strong> {{ $item['email'] }}<br>
                            <strong>Message:</strong> {{ $item['message'] }}<br>
                            <strong>Created at:</strong> {{ $item['created_at'] }}<br><br>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No messages.</p>
            @endif
        </div>
    </body>
</html>