<x-app-layout>
    <x-slot name="header">
    投稿画面
    </x-slot>
 
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Book Memo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--css-->
        <link href="/css/style.css" rel="stylesheet">

    
    </head>
    <body class="antialiased">
    <div class='wrapper'>
        <h1>Book Memo</h1>
    　
       <form action="/reviews" method="POST">
            @csrf
            <div class="title">
                <h2>読んだ本</h2>
                
                <select name="review[book_id]" id="selectform">
                     @foreach($books as $book)
                        <option value="{{ $book->id }}">
                             {{$book->name}}
                        </option>
                    @endforeach    
                </select>
              
              
        
            </div>
             <div class="post-datetime">
                <h2>読了日</h2>
                <input type="date" name="review[Finished_date]" placeholder="○○○○年○月○日"/>
            </div>
            <div class="score">
                <h2>満足度</h2>
                <input type="number" name="review[score]" min="0" max="100"/>
            </div>
            
            <div class="coment">
                <h2>一言コメント</h2>
                <input type="text" name="review[comment]" placeholder="面白かった。"/>
            </div>
            <div class="body">
                <h2>レビュー</h2>
                <textarea name="review[body]" placeholder="自由記載"></textarea>
            </div>
            <input type="submit" value="保存する"/>
        </form>
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </div>
</body>
</html>

</x-app-layout>