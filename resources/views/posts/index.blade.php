<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>
			            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
		            </h2>
                    <p class='body'>{{ $post->body }}</p>
                    <a href='/posts/{{ $post->id }}/edit'>編集</a>
                    <form action='/posts/{{ $post->id }}' id='form_{{ $post->id }}' method='post'>
                        @csrf
                        @method('DELETE')
                        <button type='button' onclick='deletePost({{ $post->id }})'>削除</button>
                    </form>
                </div>
            @endforeach
        </div>
	    <div class='paginate'>
	        {{ $posts->links() }}
	    </div>
	    <div class='footer'>
	        <a href='/posts/create'>投稿作成</a>
	    </div>
	    <script>
            function deletePost(id) {
		        'use strict'
		                    
		        if (confirm('本当にこの投稿を削除しますか？')){
		        document.getElementById(`form_${id}`).submit();
		        }
		    };
	    </script>
    </body>
</html>
