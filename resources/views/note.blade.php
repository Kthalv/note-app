<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $note->title }}</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>


<body class="bg-white p-6">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Note Page</h1>
       
        <div class="mt-2">
            <div class="py-4 flex items-center border-b border-gray-600 px-3">
                <div class="flex-1 pr-8">
                    <div class="bg-gray-200 rounded-xl py-4 px-4">
                        <p><strong>Title:</strong> {{ $note->title }}</p>
                        <p><strong>Description:</strong> {{ $note->description }}</p>
                        <p><strong>Content:</strong> {{ $note->content }}</p>
                        <p><strong>Created At:</strong> {{ $note->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $note->updated_at }}</p>


                        <div class="flex space-x-4 mt-4">
                            <form action="{{ route('showAllNotes', [$note->id]) }}" method="GET">
                                <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit">Back</button>
                            </form>
                           
                            <form action="{{ route('editNote', ['id' => $note->id]) }}" method="GET">
                                <button class="w-28 py-1 px-8 bg-gray-400 text-white rounded-xl" type="submit">Edit</button>
                            </form>


                            <form action="{{ route('deleteNote', ['id' => $note->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');">
                                @csrf
                                @method('delete')
                                <button class="w-28 py-1 px-11 bg-red-400 text-white rounded-xl" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
