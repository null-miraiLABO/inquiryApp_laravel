<html>
    <head>
        <title>お問い合わせ</title>
    </head>

    <body>
        <h1>お問い合わせ</h1>
        <p>this is index.php</p>
        
        <form method="post" action="/confirm">
			@csrf
			<p>
				お名前:<br>
				<input type="text" name="name">
			</p>
			<p>
				フリガナ:<br>
				<input type="text" name="hurigana">
			</p>
			<p>
				メール:<br>
				<input type="text" name="mail">
			</p>
			<p>
				電話番号:<br>
				<input type="text" name="phoneNumber">
			</p>
			<p>
				お問い合わせ内容:<br>
				<textarea name="message"></textarea>
			</p>
			<p>
				<input type="submit" value="確認画面へ">
			</p>
		</form>

    </body>
</html>