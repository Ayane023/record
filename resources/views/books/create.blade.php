<x-app-layout>
    <x-slot name="header">
    本の投稿画面
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
    　
       <form action="/books" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="book-title">
                <h2>タイトル</h2>
                <input type="text" name="book[name]" placeholder="タイトル"/>
            </div>
            <div class="book-author">
                <h2>著者</h2>
                <input type="text" name="book[author]" placeholder="著者"/>
            </div>
            <div class="book-publisher">
                <h2>出版社</h2>
                <input type="text" name="book[publisher]" placeholder="出版社"/>
            </div>
            <div class="book-img">
                <h2>本の画像</h2>
                <input type="file" name="image">
            </div>
            <div class="book-author">
                 <select name="book[category_id]" id="selectform">
                     @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                             {{$category->name}}
                        </option>
                    @endforeach    
                </select>
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