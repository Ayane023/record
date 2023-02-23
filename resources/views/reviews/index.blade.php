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
    　　<a href='/reviews/create'>投稿する</a>
        <div class='posts'>
            @foreach ($reviews as $review)
                <div class='post'>
                <a class=post_link href="/reviews/{{ $review->id }}">
                     <div class='post-inner'>
                    <p class='post-user'>{{ $review->user->name }}</p> 
                    <img class='post-user'>{{ $review->user->image_path}}</p> 
                    
                    <div class='post-flex'>
                        
                    <div class='post-img'>
                    <img src="{{ $review->book->image_path }}" alt="画像が読み込めません。"/>
                    </div>
                    <div class='post-content'>
                    <p class='post-author'>{{ $review->book->author }}</p> 
                    <p class='post-ttl'>{{ $review->book->name }}</p> 
                    </div>
                    </div>
                    <p class='post-coment'>{{ $review->comment }}</p>

    </div>
                </a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
</div>
</body>
</html>

</x-app-layout>