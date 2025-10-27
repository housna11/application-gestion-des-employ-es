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
        <h1 class="text-[red] text-2xl font-bold px-10 text-center">Post</h1>
        @foreach ($posts as $item)
                <p>{{ $item->title}}</p>
                <p>{{ $item->author}}</p>
                <p>{{ $item->content}}</p>
                <p>{{ $item->status}}</p>
        @endforeach
        
        <a href="{{route('Post.create')}}">        <button type="submit" class="bg-[#C90184] text-white px-3 py-2 rounded-md  transition">➕ Ajouter</button>
</a>

</body>
</html>