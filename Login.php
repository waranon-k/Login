<!DOCTYPE html>
<html>
<head>
<style>
.clearfix:after,
form:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.container { margin: 25px auto; position: relative; width: 900px; }
#content {
	background: #f9f9f9;
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	box-shadow: 0 1px 0 #fff inset;
	border: 1px solid #c4c6ca;
	margin: 0 auto;
	padding: 25px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	width: 400px;
}
#content h1 {
	color: #7E7E7E;
	font: bold 25px Helvetica, Arial, sans-serif;
	letter-spacing: 0.1em;
	line-height: 10px;
	margin: 10px 0 30px;
}

#content h1:after {
	content: "";
	height: 1px;
	position: absolute;
	top: 10px;
	width: 27%;
}

#content form { margin: 0 20px; position: relative }
#content form input[type="text"],
#content form input[type="password"] {
	border-radius: 3px;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	transition: all 0.5s ease;
	background: #eae7e7 url(https://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	width: 80%;
}
#content form input[type="text"]:focus,
#content form input[type="password"]:focus {
	box-shadow: 0 0 2px #ed1c24 inset;
	background-color: #fff;
	border: 1px solid #ed1c24;
	outline: none;
}
#username { background-position: 10px 10px !important }
#password { background-position: 10px -52px !important }
#content form input[type="submit"] {
	background: rgb(254,231,154);
	border-radius: 30px;	
	box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	border: 1px solid #D69E31;
	color: #85592e;
	cursor: pointer;
	float: left;
	font: bold 15px Helvetica, Arial, sans-serif;
	height: 35px;
	margin: 20px 0 35px 15px;
	position: relative;
	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
	width: 120px;
}
#content form input[type="submit"]:hover {
	background: rgb(254,193,81);
	
}
#content form div a {
	color: #004a80;
    float: right;
    font-size: 12px;
    margin: 30px 15px 0 0;
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
	<section id="content">
		<form action="SQL-Login.php" method="POST">
			<h1>Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
  
			<div>
				<input type="submit" value="LogIn" />
                <a href="ForgotPass.php">Forgot password?</a>
				<a href="Regis.php">Register</a>
				
				
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
