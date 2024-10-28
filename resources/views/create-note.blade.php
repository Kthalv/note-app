<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body class="bg-white p-6">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Create Notes</h1>
        <form action="{{ route('storeNote') }}" method="POST" class="mb-6">
            @csrf
            @method('POST')


            <div class="mb-4">
                <label class="text-white" for="title">Title:</label>
                <input class="py-3 px-4 bg-gray-300 rounded-xl w-full" type="text" id="title" name="title" required>
            </div>


            <div class="mb-4">
                <label class="text-white" for="description">Description:</label>
                <input class="py-3 px-4 bg-gray-300 rounded-xl w-full" type="text" id="description" name="description" required>
            </div>


            <div class="mb-4">
                <label class="text-white" for="content">Content:</label>
                <textarea class="py-3 px-4 bg-gray-300 rounded-xl w-full" id="content" name="content" required maxlength="10000"></textarea>
            </div>


            <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl hover:bg-green-500 transition-colors duration-300" type="submit">Save Note</button>
            <a class="text-white ml-4" href="{{ route('showAllNotes') }}">Back to Notes</a>
        </form>
    </div>
</body>
</html>
