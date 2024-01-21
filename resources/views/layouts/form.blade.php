<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <form action="/" method="post">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name..">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="Your email..">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="message">Message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" name="message" placeholder="Write something.."></textarea>
                        @error('message')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

        <table class="data">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created at</th>
            </tr>
            @if($data)
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['message'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </body>
</html>