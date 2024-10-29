<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT NOTE</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">


</head>
<body class="bg-white p-6">
   
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Edit Notes</h1>
            <div class="mb-6">
                <div class="bg-gray-600 rounded-xl py-4 px-4">


    <form action=" {{ route('updateNote', ['id' =>$note->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label class="text-white" for="title">Title:</label>
        <input class="py-3 px-4 bg-gray-300 rounded-xl " type="text" id="title" name="title" class="form-control" value="{{ $note->title}}" required>
        </div>


        <div class="form-group">
        <label class="text-white" for="description">Description:</label>
        <input class="py-3 px-4 bg-gray-300 rounded-xl " type="description" id="description" name="description"  class="form-control"  value="{{ $note->description }}" required>
        </div>


        <div class="form-group">
        <label class="text-white" for="content">Content</label>
        <input class="py-3 px-4 bg-gray-300 rounded-xl " type="name" id="content" name="content" class="form-control" value="{{ $note->content }}" required>
        </div>
        <br>
        <div class="text-white">
        <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit" class="btn btn-primary">Update</button>
       
       
    </form>
   
    <form action="{{ route('viewNote', [$note->id]) }}" method="GET"> <br>
        <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit" class="btn btn-secondary">Back</button>
    </form>
    </div>
</div>
</div>
</div>
</body>
</html>



