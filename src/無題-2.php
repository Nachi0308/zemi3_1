<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>予定作成｜TO DO リスト</title>
<style type="text/css">
	body {
		background-color: #FFFFFF;
	}
	.input-area {
		margin-bottom: 20px;
	}
	input[type="message"],select {
		width: 70px;
		height: 20px;
	}
	textarea {
		width: 500px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>
</head>
<body id="top">
	<h1 class="hero contact">予定作成</h1>
	<!-- メイン -->
	<main>
		<form action="result.html">
		<p>
		<label for="month">月</label><br>
		<select name="month" id="month">
			<option value="1">1月</option>
			<option value="2">2月</option>
			<option value="3">3月</option>
			<option value="4">4月</option>
			<option value="5">5月</option>
			<option value="6">6月</option>
			<option value="7">7月</option>
			<option value="8">8月</option>
			<option value="9">9月</option>
			<option value="10">10月</option>
			<option value="11">11月</option>
			<option value="12">12月</option>
		</select>
		</p>
		<p>
		<label for="date">日</label><br>
		<select name="date" id="date">
			<option value="1">1日</option>
			<option value="2">2日</option>
			<option value="3">3日</option>
			<option value="4">4日</option>
			<option value="5">5日</option>
			<option value="6">6日</option>
			<option value="7">7日</option>
			<option value="8">8日</option>
			<option value="9">9日</option>
			<option value="10">10日</option>
			<option value="11">11日</option>
			<option value="12">12日</option>
			<option value="13">13日</option>
			<option value="14">14日</option>
			<option value="15">15日</option>
			<option value="16">16日</option>
			<option value="17">17日</option>
			<option value="18">18日</option>
			<option value="19">19日</option>
			<option value="20">20日</option>
			<option value="21">21日</option>
			<option value="22">22日</option>
			<option value="23">23日</option>
			<option value="24">24日</option>
			<option value="25">25日</option>
			<option value="26">26日</option>
			<option value="27">27日</option>
			<option value="28">28日</option>
			<option value="29">29日</option>
			<option value="30">30日</option>
		</select>
		</p>
		<p>
		<label for="subject">予定名</label><br>
		<input type="text" name="subject" placeholder="タイトル" id="subject">
		</p>
		<p>
		”重要”に追加しますか？<br>
		<label><input type="radio" name="first" value="yes" checked>はい</label><br>
		<label><input type="radio" name="first" value="no">いいえ</label>
		</p>
		<p>
		<label for="message">備考</label><br>
		<textarea name="message" id="message"></textarea>
		</p>
		<p class="input-area">
		<input type="submit" value="完了" class="btn-border">
		</p>
		</form>
	</main>
	<!-- メインここまで -->
	<!-- フッター -->
	<footer>
		<div class="gotop">
			<a href="#top"><img src="images/gotop.svg" alt="一覧に戻る"></a>
		</div>
</body>
