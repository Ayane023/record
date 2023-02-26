<x-app-layout>
    <x-slot name="header">
    一覧表示
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
        
        <p class="">{{ $review->user->name }}さんの書庫</p>
    　
    　
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </div>
</body>
</html>

</x-app-layout>