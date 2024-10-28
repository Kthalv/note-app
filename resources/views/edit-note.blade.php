<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body class="bg-white p-6">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Edit Notes</h1>
        <div class="mb-6 bg-gray-600 rounded-xl py-4 px-4">
            <form action="{{ route('updateNote', ['id' => $note->id]) }}" method="POST">
                @method('PUT')
                @csrf
               
                <div class="form-group mb-4">
                    <label class="text-white" for="title">Title:</label>
                    <input
                        class="py-3 px-4 bg-gray-300 rounded-xl w-full"
                        type="text"
                        id="title"
                        name="title"
                        value="{{ $note->title }}"
                        required>
                </div>


                <div class="form-group mb-4">
                    <label class="text-white" for="description">Description:</label>
                    <textarea
                        class="py-3 px-4 bg-gray-300 rounded-xl w-full"
                        id="description"
                        name="description"
                        required>{{ $note->description }}</textarea>
                </div>


                <div class="form-group mb-4">
                    <label class="text-white" for="content">Content:</label>
                    <input
                        class="py-3 px-4 bg-gray-300 rounded-xl w-full"
                        type="text"
                        id="content"
                        name="content"
                        value="{{ $note->content }}"
                        required>
                </div>


                <div class="flex justify-between">
                    <button class="w-28 py-2 px-4 bg-green-400 text-white rounded-xl" type="submit">Update</button>
                    <a href="{{ route('viewNote', [$note->id]) }}" class="w-28 py-2 px-4 bg-gray-400 text-white rounded-xl text-center">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


