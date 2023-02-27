<x-app-layout>
    <x-slot name="header">
    レビュー一覧
    </x-slot>
 
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Book Memo
    </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--css-->
        <link href="/css/style.css" rel="stylesheet">

    
    </head>
    <body class="antialiased">
        <div class='wrapper'>
        <h1>Book Memo</h1>
    　　<a href='/reviews/create'>投稿する</a>
    　　<a href='/books/create'>本を登録する</a>
    　　<a href='/categories/create'>カテゴリーを登録する</a>
        <div class='posts'>
            @foreach ($reviews as $review)
                <div class='post'>
               
                     <div class='post-inner'>
                         
                    <div class='post-user-wrapper'>
                    <a class=post-user-link href="/books/{{ $review->user->id }}">
                    <p class='post-user'>{{ $review->user->name }}</p> 
                    <img class='post-user'>{{ $review->user->image_path}}</p> 
                    </a>
                    </div>
                     
                     
                    <a class=post_link href="/reviews/{{ $review->id }}">
                    <div class='post-flex'>
                        
                    <div class='post-img'>
                    <img src="{{ $review->book->image_path }}" alt="画像が読み込めません。"/>
                    </div>
                    <div class='post-content'>
                    <p class='post-author'>{{ $review->book->author }}</p> 
                    <p class='post-ttl'>{{ $review->book->name }}</p> 
                    <p class='post-score'>満足度：{{ $review->score }}・</p> 
                    
                    </div>
                    </div>
                    <p class='post_coment_letter'>一言コメント</p>
                    <p class='post-coment'>{{ $review->comment }}</p>
                     </a>
                    <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
@csrf
@method('DELETE')
<button type="button" onclick="deleteReview({{ $review->id }})">delete</button>
</form>

        </div>
            
    
               
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
        
        
</div>
<script>
    function deleteReview(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
 </script>
</body>
</html>

</x-app-layout>