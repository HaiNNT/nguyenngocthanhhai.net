<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HaiNNT</title>   
	<link rel="icon" 
      type="image/png" 
      href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
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
	.num {
		font-weight: 400;
color: rgb(243, 77, 77);
font-size: 90px;
	}
		.numno {
		font-weight: 400;
color: black;
font-size: 40px;
	}
	</style> 
	
</head>

<body>
	<?php if($type){ ?>
	<div class="container">
		<h1>Xin cảm ơn!<br/>Bạn là người thứ <span class="num"><?=$num | 0?></span> nghĩ là tôi đẹp trai.
			<br/>Có <span class="numno"><?=$numno | "0"?></span> người không nghĩ là tôi đẹp trai</h1>
		</div>	
		<?php }else{ ?>
		<div class="container">
			<h1>Xin cảm ơn!<br/>Có <span class="num"><?=$num | 0?></span> người nghĩ là tôi đẹp trai.
				<br/>Bạn là người thứ <span class="numno"><?=$numno | 0?></span> không nghĩ là tôi đẹp trai</h1>
			</div>	
			<?php } ?>
		
</body>
</html>