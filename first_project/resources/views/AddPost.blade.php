<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
                @vite('resources/css/app.css')

</head>
<body>
    <div class="flex justify-center items-center mt-30">
    <form action="{{url('Post')}}" method="POST" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md space-y-4">
      @csrf
      {{-- <h2 class="text-2xl font-bold text-center text-[#C90184] mb-4">Ajouter un employé</h2> --}}

      <div>
        <label class="block text-lg font-bold mb-1">title</label>
        <input type="text" name="title" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le nom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">author</label>
        <input type="text" name="author" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le prénom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">content</label>
        <input type="email" name="content" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer l’email">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">status</label>
        <input type="text" name="status" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le poste">
      </div>

      <div class="flex justify-between pt-4">
        <button type="submit" class="bg-[#C90184] text-white px-3 py-2 rounded-md  transition">➕ Ajouter</button>
        
      </div>
    </form>
  </div>
</body>
</html>