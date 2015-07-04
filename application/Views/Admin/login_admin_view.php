<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>ОЛОЛОША TEAM</title>
		<link rel="stylesheet" type="text/css" href="/css/admin_login.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	</head>
<body>
<div id="container">
	<div id="header"></div>
	<div id="content" style="padding: 0;">
		{% if error_mes %}<div class="warning">{{error_mes}}</div>{% endif %}
		<div class="box login">              
		    <div class="heading">
		      <h1><img src="view/image/lockscreen.png" alt=""> Введите логин и пароль</h1>
		    </div>
		    <div class="content" style="min-height: 150px; overflow: hidden;">
		      <form method="post" id="form">
		        <input type="text" name="username" value="" style="margin: 10px 3px;width: 178px;text-align: center;">
		        <input type="password" name="password" value="" style="margin: 10px 3px;width:178px; text-align: center;">
		        <table style="width: 100%;">
		          <tbody><tr>  
		          </tr>
		          <tr>
		            <td>
					<a style="float: left;" class="button forgotten" href="/forgotpassword">Забыли пароль?</a>
					<a onclick="$('#form').submit();" class="button login">Войти</a></td>
		          </tr>
		 		  </tbody>
		 		</table>
		 	  </form>
		 	 </div>
		</div>
	</div>
</div>
 <script type="text/javascript">
$('#form input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#form').submit();
	}
});
</script> 
</body>
</html>