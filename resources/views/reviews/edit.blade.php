<x-app-layout>
    <x-slot name="header">
    編集画面
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
    <form action="/reviews/{{ $review->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class='post-flex'>
                        
                <div class='post-img'>
                    <img src="{{ $review->book->image_path }}" alt="画像が読み込めません。"/>
                </div>
                <div class='post-content'>
                    <p class='post-author'>{{ $review->book->author }}</p> 
                    <p class='post-ttl'>{{ $review->book->name }}</p> 
                    <p class='post-category'>{{ $review->book->category->name }}</p>
                    <p class='post-publisher'>{{ $review->book->publisher }}</p> 
                    <div class="post-datetime">
                <h2>読了日</h2>
                <input type="date" name="review[Finished_date]" value="{{ $review->Finished_date }}"/>
            </div>
                
                </div>
                

                </div>
                 <p class='post_coment_letter'>一言コメント</p>
                     <input type="text" name="review[comment]" value="{{ $review->comment }}"/>
                <div class="body">
                <h2>レビュー</h2>
                <input type="text" name="review[body]" value="{{ $review->body }}"/>
            </div>
                    
                    <input type="submit" value="保存する"/>
        </form>

        <div class="footer">
            <a href="/index">戻る</a>
        </div>
    </div>

    </div>
    

    
        
</div>
</body>
</html>

</x-app-layout>