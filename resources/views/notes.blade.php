<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES PAGE</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body class="bg-white p-6">
    
    <div class="lg:w-2/4 mx-auto py-8 px-4 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8 py-4 px-4">Welcome to Notes!</h1>
        <h3 class="text-white text-3xl text-center mb-8 py-4 px-4"> Create your Notes here! Just click the button below to get started!</h3>
    </div>
    <br>
    <div class="lg:w-2/4 mx-auto py-1 px-1 bg-gray-600 rounded-xl">
            <div class="mb-1">
        <form action="{{ route('createNote') }}" method="GET">
                                @method('GET')
                                <button class="py-4 px-4 w-28 py-1 px-8 bg-white text-black rounded-xl" type="submit">Create Note</button>
        </form>
        </div>
    </div>
        <div class="mt-2">
            <div class="py-4 flex items-center border-b border-gray-600 px-3">
                <div class="flex-1 pr-8">
                    
                    <p class="text-gray-500">
                        <div class="bg-gray-600 rounded-xl py-4 px-4">
                        @foreach ($notes as $note)
                        <h2 class="text-lg text-white font-semibold">
                            <div class="py-4 px-4">  Title: {{$note->title}}</div>
                        </h2>
                        <h3 class="text-lg text-white">
                            <div class="py-4 px-4">  Description: {{$note->description}}</div>
                            <div class="py-4 px-4">  Content: {{$note->content}}</div>
                        </h3>
                            <br>

                            <div class="py-4 px-4 text-white border-solid">
                            <form action="{{ route('viewNote', ['id' => $note->id])}}" method="GET"><br>
                                <button class="w-28 py-1 px-8 bg-white text-black rounded-xl" type="submit">  View</button>

                            <form action="{{ route('editNote', ['id' =>$note->id]) }}" method="GET">
                                <button class="w-28 py-1 px-8 bg-white text-black rounded-xl" type="submit">  Edit</button> 
                            </form><br>
                            </div>
                            <hr></hr>
                        @endforeach
                        </div>
                    </p>
                </div>
            </div>
        </div>
</body>
</html>
