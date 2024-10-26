<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE NOTE</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">


</head>
<body>


    <body class="bg-white p-6">
    
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Create Notes</h1>
            <div class="mb-6">
                
                <form action="{{ route('storeNote') }}" method="POST">
                @method('POST')
                @csrf
                
                <label class="text-white" for="title">Title:</label>
                <input class="py-3 px-4 bg-gray-300 rounded-xl " type="text" id="title" name="title" required><br>

                <label class="text-white" for="description">Description:</label>
                <input class="py-3 px-4 bg-gray-300 rounded-xl" type="text" id="description" name="description" required><br>

                <label class="text-white"for="content">Content: </label>
                <textarea class="py-3 px-4 bg-gray-300 rounded-xl" id="text" id="content" name="content" required maxlength="10000"></textarea>
                <br>
                <br>
                <button class="w-28 py-1 px-8 bg-green-400 text-white rounded-xl" type="submit">Save Note</button>
                
                <a class="text-white" href="{{ route('showAllNotes') }}">Back to Notes</a>
                </form>
            </div>
    </div>
       
    
   
</body>
</html>
