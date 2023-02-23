<x-app-layout>
    <x-slot name="header">
    show
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
    
                <div class='post-flex'>
                        
                <div class='post-img'>
                    <img src="{{ $review->book->image_path }}" alt="画像が読み込めません。"/>
                </div>
                <div class='post-content'>
                    <p class='post-author'>{{ $review->book->author }}</p> 
                    <p class='post-ttl'>{{ $review->book->name }}</p> 
                    <p class='post-category'>{{ $review->book->category->name }}</p>
                    <p class='post-publisher'>{{ $review->book->publisher }}</p> 
                    <p class='post-datetime'>読了日：{{ $review->Finished_date }}</p>
                </div>
                </div>
                    <p class='post-body'>{{ $review->body }}</p>
<div class="footer">
            <a href="/index">戻る</a>
        </div>
    </div>
    

    
        
</div>
</body>
</html>

</x-app-layout>