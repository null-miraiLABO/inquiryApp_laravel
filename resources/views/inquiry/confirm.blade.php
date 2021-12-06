<html>
    <head>
        <title>お問い合わせ</title>
    </head>

    <body>
        <h1>確認</h1>
        <p>this is confirm.php</p>
        <form method="post" action="/thanks">
			@csrf
            <p>
                お名前:<br>    
                {{ $data['name'] }}
                <input type="hidden" name="name" value="{{ $data['name'] }}">
            </p>

            <p>
                フリガナ:<br>
                {{ $data['hurigana'] }}
                <input type="hidden" name="hurigana" value="{{ $data['hurigana'] }}">
            </p>

            <p>
                メール:<br>
                {{ $data['mail'] }}
                <input type="hidden" name="mail" value="{{ $data['mail'] }}">
            </p>

            <p>
                電話番号:<br>
                {{ $data['phoneNumber'] }}
                <input type="hidden" name="phoneNumber" value="{{ $data['phoneNumber'] }}">
            </p>

            <p>
                お問い合わせ内容:<br>
                {{ $data['message'] }}
                <input type="hidden" name="message" value="{{ $data['message'] }}">
            </p>

            <p>
                <input type="submit" name="return" value="戻る" >
                <input type="submit" name="fin" value="送信" >
            </p>

        </form>
    </body>
</html>