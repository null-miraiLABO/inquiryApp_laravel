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
				企業名:<br>
				<input type="text" name="company" id="company">
			</p>
			<div id="err_company"></div>

			<p>
				お名前:<br>
				<input type="text" name="name" id="nm">
			</p>
			<div id="err_name"></div>

			<p>
				フリガナ:<br>
				<input type="text" name="hurigana" id="kana">
			</p>
			<div id="err_kana"></div>

			<p>
				メール:<br>
				<input type="text" name="mail" id="mail">
			</p>
			<div id="err_mail"></div>

			<p>
				電話番号:<br>
				<input type="text" name="phoneNumber" id="phoneNumber">
			</p>
			<div id="err_phoneNunber"></div>

			<p>
				お問い合わせ内容:<br>
				<textarea name="message" id="message"></textarea>
			</p>
			<div id="err_message"></div>

			<p>
				<button type="submit" id="next-btn">確認画面へ</button>
			</p>
		</form>

    </body>
</html>

<script>
	const button = document.getElementById('next-btn');
	button.disabled = true;

	// 各html_idを変数化
	const company = document.getElementById('company');
	const nm = document.getElementById('nm');
	const kana = document.getElementById('kana');
	const mail = document.getElementById('mail');
	const phoneNumber = document.getElementById('phoneNumber');
	const message = document.getElementById('message');
	
	// Err配列に各inputsのエラー内容を保存
	var Err = {company: "empty", name: "empty", kana: "empty", mail: "empty", phoneNumber: "", message: "empty"};
	for (key in Err){
		console.log(key + "=" + Err[key]);
	}
	
	
	// 読み込み時エラー確認
	Err.company = empty_check(company.value);
	Err.name = empty_check(nm.value);
	Err.kana = empty_check(kana.value);
	Err.mail = empty_check(mail.value);
	Err.phoneNumber = number_check(phoneNumber.value);
	Err.message = empty_check(message.value);
	ErrCheck_flag(Err);
	

	// 各inputsのエラーチェック
	company.addEventListener('change', function() {
		Err.company = empty_check(this.value);
		ErrCheck_flag(Err);
		console.log(Err.company);// test
	}, false);	
	
	nm.addEventListener('change', function() {
		Err.name = empty_check(this.value);
		ErrCheck_flag(Err);
	}, false);	
	
	kana.addEventListener('change', function() {
		Err.kana = empty_check(this.value);
		ErrCheck_flag(Err);
	}, false);	
	
	mail.addEventListener('change', function() {
		Err.mail = empty_check(this.value);
		ErrCheck_flag(Err);
	}, false);	
	
	phoneNumber.addEventListener('change', function() {
		Err.phoneNumber = number_check(this.value);
		ErrCheck_flag(Err);
	}, false);	
	
	message.addEventListener('change', function() {
		Err.message = empty_check(this.value);
		ErrCheck_flag(Err);
	}, false);	
	
	
	// エラーチェックと内容保存、エラー無かったら保存内容初期化(Err配列内)
	function empty_check(inputs){
		err_log ="false error check";

		if(inputs==""){
			err_log = "this is empty";
		}else{
			err_log = "";
		}

		return err_log;
	}
	
	function number_check(inputs){
		if(isNaN(inputs)){
			err_log = "this is not number";
		}else if(inputs==""){
			err_log = "";
		}else {
			err_log = "";
		}

		console.log(inputs);// test
		return err_log;
	}

	// エラー連想配列が空ならボタンを活性化。
	function ErrCheck_flag(){
		check_count = 0;

		for (key in Err){
			console.log(key + "=" + Err[key]);
			if (Err[key]==""){
				check_count++;
			}
		}

		console.log(check_count);// test
		if (check_count>=Object.keys(Err).length){
			button.disabled = false;
		} else {
			button.disabled = true;
		}

    	echo_err();
	}

	function echo_err(){
		const err_company = document.getElementById('err_company');
		const err_name = document.getElementById('err_name');
		const err_kana = document.getElementById('err_kana');
		const err_mail = document.getElementById('err_mail');
		const err_phoneNunber = document.getElementById('err_phoneNunber');
		const err_message = document.getElementById('err_message');

		// err_company.innerHTML = Err.company;
		err_company.textContent = Err.company;
		err_name.textContent = Err.name;
		err_kana.textContent = Err.kana;
		err_mail.textContent = Err.mail;
		err_phoneNunber.textContent = Err.phoneNunber;
		err_message.textContent = Err.message;
	}
	
</script>