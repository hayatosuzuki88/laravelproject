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
	    <form action='/posts/{{ $post->id }}' method='POST'>
		@csrf
		@method('PUT')
		<div class='title'>
		    <h2>タイトル</h2>
		    <input type='text' name='post[title]' placeholder='タイトル' value='{{ $post->title }}'>
		    <p class='title_error' style='color:red'>{{ $errors->first('post.title') }}</p>
		</div>
		<div class='body'>
		    <h2>メッセージ</h2>
		    <textarea name='post[body]' placeholder='今日も1日お疲れさまでした。'>{{ $post->body }}</textarea>
		    <p class='body_error' style='color:red'>{{ $errors->first("post.body")}}</p>
		</div>
		<input type='submit' value='保存'>
	    </form>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>

