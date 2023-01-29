<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Tailwind -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        

    </head>
    <body class="bg-blue-900 text-blue-100 pt-20">
        <div class="max-w-5xl mx-auto">
            <!-- Form to create a tweet -->
            <div>
                <form action="/tweets" method="POST" class="mb-20">

                    @csrf

                    <input type="text" name="body" class="mb-4 w-full p-2 border-2 border-blue-500 text-black" placeholder="What's happening?">

                    <button type="submit" class="bg-yellow-300 text-gray-800 py-3 px-6 rounded-full">
                        Tweet
                    </button>

                </form>
            </div>

            <!-- List all tweets -->
            <div>
                @foreach ($tweets as $tweet)
                    <div class="border-b-2 border-blue-500 p-2">

                        <form action="/tweets/{{ $tweet->id }}" method="POST" class="flex space-x-2">
                            @csrf
                            @method("PUT")

                            <input type="text" name="body" value="{{ $tweet->body }}" class="bg-white py-2 px-4 rounded-full text-black w-full">
                            <button type="submit" class="bg-blue-300 text-blue-900 py-3 px-4 rounded-full">Edit</button>
                        </form>

                        <form action="tweets/ $tweet->id)" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 py-2 px-2 rounded-full text-white w-full">Delete</button>
                        </form>

                    </div>
                @endforeach
            </div>

        </div>
    </body>
</html>
