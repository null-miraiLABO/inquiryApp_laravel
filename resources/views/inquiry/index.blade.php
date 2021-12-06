<html>
    <head>
        <title>お問い合わせ</title>
    </head>

    <body>
        <h1>お問い合わせ</h1>
        <p>this is index.php</p>
        
        <form method="post" action="/confirm">
			@csrf
			<div>
				お名前:<br>
				<input type="text" name="name"><br>
			</div>
			<div>
				メール:<br>
				<input type="text" name="mail"><br>
			</div>
			<div>
				<input type="submit" value="確認画面へ"><br>
			</div>
		</form>

    </body>
</html>