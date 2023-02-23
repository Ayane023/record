<x-app-layout>
    <x-slot name="header">
    index
    </x-slot>
 
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--css-->
        <link href="/css/style.css" rel="stylesheet">

    
    </head>
    <body class="antialiased">
    <div class='wrapper'>
        <h1>Blog Name</h1>
    　
       <form action="/reviews" method="POST">
            @csrf
            <div class="title">
                <h2>読んだ本</h2>
               @foreach($books as $book)

            <label>
                {{-- valueを'$bookのid'に、nameを'配列名[]'に --}}
                <input type="checkbox" value="{{ $book->id }}" name="review[book_id]">
                    {{$book->name}}
                </input>
            </label>
            
        @endforeach    
            </div>
             <div class="">
                <h2>読了日</h2>
                <input type="date" name="review[Finished_date]" placeholder="○○○○年○月○日"/>
            </div>
            <div class="title">
                <h2>一言コメント</h2>
                <input type="text" name="review[comment]" placeholder="面白かった。"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="自由記載"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </div>
</body>
</html>

</x-app-layout>