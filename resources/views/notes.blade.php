<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES PAGE</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <style>
        body {
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode {
            background-color: #1a202c;
            color: white;
        }
        .dark-mode .bg-gray-600 {
            background-color: #2d3748;
        }
        .dark-mode .bg-white {
            background-color: #4a5568;
        }
    </style>
</head>
<body class="bg-white p-6">
   
    <div class="flex justify-between items-center">
     <button id="Notes Page" class="py-2 px-4 bg-gray-800 text-white rounded-xl">Notes Page</button>
        <button id="toggleDarkMode" class="py-2 px-4 bg-gray-800 text-white rounded-xl">Dark Mode</button>
    </div>

     <!-- Search Input Section -->
     <div class="lg:w-2/4 mx-auto py-1 px-1 bg-gray-600 rounded-xl">
        <div class="mb-1 flex items-center">
        <button id="searchButton" class="bg-gray-600 text-white rounded-r-lg py-3 px-4 hover:bg-gray-700 transition">Search</button>
            <input type="text" id="searchInput" placeholder="Search notes..." class="flex-1 border border-gray-300 text-black rounded-l-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
        </div>
    </div>
    </div>

    <br>

    <div class="lg:w-2/4 mx-auto py-8 px-4 bg-gray-600 rounded-xl">
        <h1 class="text-white font-bold text-5xl text-center mb-8">Welcome to Notes!</h1>
        <h3 class="text-white text-3xl text-center mb-8">Create your Notes here! Just click the button below to get started!</h3>
    </div>
    
    <br>

    <div class="lg:w-2/4 mx-auto py-1 px-1 bg-gray-600 rounded-xl">
        <form action="{{ route('createNote') }}" method="GET">
            <button class="py-4 px-4 w-28 bg-white text-black rounded-xl" type="submit">Create Note</button>
        </form>
    </div>

    <br>

    <div class="mt-2">
        <div class="py-4 flex items-center border-b border-gray-600 px-3">
            <div class="flex-1 pr-8">
              <p class="text-gray-500">
                <div id="notesContainer" class="bg-gray-600 rounded-xl py-4 px-4">
                    @foreach ($notes as $note)
                        <div class="note-item mb-4">
                            <h2 class="text-lg text-white font-semibold">Title: {{$note->title}}</h2>
                            <h3 class="text-lg text-white">Description: {{$note->description}}</h3>
                            <p class="text-white">Content: {{$note->content}}</p>
                            <div class="mt-2">
                                <form action="{{ route('viewNote', ['id' => $note->id])}}" method="GET" class="inline">
                                    <button class="w-28 py-1 px-8 bg-green-400 text-black rounded-xl" type="submit">View</button>
                                </form>
                                <form action="{{ route('editNote', ['id' => $note->id]) }}" method="GET" class="inline">
                                    <button class="w-28 py-1 px-8 bg-gray-400 text-black rounded-xl" type="submit">Edit</button>
                                </form>
                            </div>
                            <hr class="my-4">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('searchButton').addEventListener('click', function() {
        const query = document.getElementById('searchInput').value;
        fetch(`/search?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                const notesContainer = document.getElementById('notesContainer');
                notesContainer.innerHTML = '';


                if (data.length === 0) {
                    notesContainer.innerHTML = '<p class="text-white">No notes found.</p>';
                    return;
                }


                data.forEach(note => {
                    const noteElement = document.createElement('div');
                    noteElement.innerHTML = `
                        <h2 class="text-lg text-white font-semibold py-4 px-4">Title: ${note.title}</h2>
                        <h3 class="text-lg text-white py-4 px-4">Description: ${note.description}</h3>
                        <div class="py-4 px-4 text-white border-solid">
                            <form action="/notes/${note.id}" method="GET">
                                <button class="w-28 py-1 px-8 bg-white text-black rounded-xl" type="submit">View</button>
                            </form>
                            <form action="/notes/${note.id}/edit"method="GET">
                                <button class="w-28 py-1 px-8 bg-white text-black rounded-xl" type="submit">Edit</button>
                            </form>
                        </div>
                        <hr>
                    `;
                    notesContainer.appendChild(noteElement);
                });
            })
            .catch(error => console.error('Error:', error));
    });
    </script>


    <script>
        const toggleDarkMode = document.getElementById('toggleDarkMode');
        toggleDarkMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });


        function filterNotes() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const notes = document.querySelectorAll('.note-item');


            notes.forEach(note => {
                const title = note.querySelector('h2').textContent.toLowerCase();
                if (title.includes(searchInput)) {
                    note.style.display = '';
                } else {
                    note.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>



