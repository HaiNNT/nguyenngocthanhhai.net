<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HaiNNT</title>   
	<link rel="icon" 
      type="image/png" 
      href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<style type="text/css">
	h1 { 
		font-weight: 300;
		font-size: 45px;
		color: rgb(180, 180, 180);
		text-align: center;
		cursor: default;
	}
	.container{
		margin-top: 100px;
	}
	.row{
		text-align: center;
	}
	#co {
		top: 300px;
		left: 500px;
	}
	#khong {
		top: 300px;
		left: 700px;
		z-index: 99;
	}
	.free {
		position: absolute;
	}
	body{
		font-family: 'Roboto';
		background-color: #eee;
		-webkit-user-select: none;
		user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
	}
	.nice-button.red {
		background-color: rgb(248, 141, 141);
		border: 1px #F0887E solid;
		box-shadow: 0px 7px 0px rgb(209, 118, 118), 0px 7px 15px rgba(0,0,0,0.4);
	}
	.nice-button {
		background-color: rgb(142, 209, 116);
		padding: 10px 44px;
		width: 70px;
		color: #FFFFFF;
		text-decoration: none;
		font-size: 21px;
		font-weight: 300;
		text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
		border-radius: 10px;
		border: 1px #48C227 solid;
		box-shadow: 0px 7px 0px rgb(109, 179, 99), 0px 7px 15px rgba(0,0,0,0.4);
		cursor: pointer;
		transition: all 0.1s;
		-webkit-transition: all 0.1s;
		-moz-transition: all 0.1s;
		-ms-transition: all 0.1s;
		-o-transition: all 0.1s;
	}
	.nice-button:active {
		box-shadow: 0px 4px 0px rgb(109, 179, 99), 0px 7px 10px rgba(0,0,0,0.4);
		margin-top: 3px;
	}
	</style> 
	
</head>

<body>
	<div class="container">
		<h1>Xin chào!<br/><?= $info ?> có nghĩ là tôi rất đẹp trai không?</h1>
		<div class="row">
			<a id="co" class="nice-button free" onclick="ihiusdhfiusdhfaosfausgfiagiyasduih();" >Có</a>
			<a id="khong" class="nice-button free red" onclick="zxciaushdiGIGFOUS();" >Không</a>
		</div>
		<h1 id="colen" style="display: none; margin-top: 200px;">Cố lên!</h1>
	</div>
	<script type="text/javascript">
	var count = 0;
	function random1(){
		return Math.floor((Math.random()*500)+1);
	}
	function random2(){
		return Math.floor((Math.random()*1000)+1);
	}
	function move(obj){
		count++;
		obj.css("position","absolute");
		obj.css("top", random1() + "px");
		obj.css("left",random2() + "px");
		if (count == 5) {
			$('#colen').html('Cố lên!').fadeIn();
		} else if (count == 10) {
			$('#colen').fadeOut(function() {
				$('#colen').html('Còn chút nữa thôi! Cố lên!');
				$('#colen').fadeIn();
			});
		} else if (count == 15) {
			$('#colen').fadeOut(function() {
				$('#colen').html('Mệt chưa? Ráng lên đi!');
				$('#colen').fadeIn();
			});
		} else if (count == 20){
			$('#colen').fadeOut(function() {
				$('#colen').html('Thôi, nhấn Có đi.');
				$('#colen').fadeIn();
			});
		}
	}
	$(document).ready(function(){
		$("#khong").mouseenter(function(){
			//move($(this));
		});
	});
	function ihiusdhfiusdhfaosfausgfiagiyasduih() {
		$.ajax({
			url: 'process',
			type: 'post',
			data: {action: 'oijsdjoieohfaoYgyuUYGufyUTFufGYUiybgIGgyGYgyGYkigbyIYBGbkyIYGbkyiIBbiuIBUbiuieufhsodufhbdjvbsdf'}
		}).done(function(msg) {
			document.write(msg);
		});
	}
	function zxciaushdiGIGFOUS() {
		$.ajax({
			url: 'process',
			type: 'post',
			data: {action: 'sfsoifhosijfowihwhtiuhg9whwr8g93884hg9wh9w8h9wr8gh9s8hg9shg9s8hg9sehg9w8eht9w8erhw9'}
		}).done(function(msg) {
			document.write(msg);
		});
	}
	</script>
<div><?= JENKINS_BUILD_NUMBER ?> <br> <?= JENKINS_REVISION_NUMBER ?></div>
</body>
</html>

