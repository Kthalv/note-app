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
        <form action="{{ route('showAllNotes', [$note->id]) }}" method="GET"> <br>
            <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit" >Back</button> 
        </form> 
        <!-- <a href="{{ route('editNote', $note->id) }}" class="btn btn-warning">Edit</a> -->

        <form action=" {{ route('editNote', ['id' =>$note->id]) }}" method="GET">
            <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit" >Edit</button> 
        </form>

        <form action=" {{ route('deleteNote', ['id' =>$note->id]) }}" method="DELETE">
            @method('DELETE')
            @csrf 
            <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit" >Delete</button> 
        </form>
    </div>
    </div>
</div>
    </div>
</body>
</html>
