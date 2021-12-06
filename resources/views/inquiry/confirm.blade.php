<html>
    <head>
        <title>お問い合わせ</title>
    </head>

    <body>
        <h1>確認</h1>
        <p>this is confirm.php</p>
        <form method="post">
            <p>
                お名前:<br>    
                {{ $data['name'] }}
            </p>

            <p>
                フリガナ:<br>
                {{ $data['hurigana'] }}
            </p>

            <p>
                メール:<br>
                {{ $data['mail'] }}
            </p>

            <p>
                電話番号:<br>
                {{ $data['phoneNumber'] }}
            </p>

            <p>
                お問い合わせ内容:<br>
                {{ $data['message'] }}
            </p>

            <p>
                <input type="submit" name="return" value="戻る" >
                <input type="submit" name="fin" value="送信" >
            </p>

        </form>
    </body>
</html>