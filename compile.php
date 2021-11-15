<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>E Learning</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css">

   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">





	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
html,body,#tab,div.content,iframe{
    border:0;
    height:100%;
    margin:0;
    padding:0;
    width:100%;
}
body{
	background: linear-gradient(to bottom, white 0%,grey 100%);
	}
#t1{
    border:2px solid black;
    height:50%;
    padding:25px 5px 5px 5px;
    position:relative;
    vertical-align:top;
    width:50%;
		background: linear-gradient(to bottom, white 0%,grey 100% );
}
div.tag{
    position:absolute;
    right:5px;
    top:5px;
	
}
ul{
	list-style-type:none;
	margin:0;
	background-color:transparent;
}
li{
	display:inline-block;
	padding: 6px 3%;
	margin-bottom:0px;
	font-family:arial;
	text-decoration:none;
	font-size:20px;
}
li :hover{
	background-color:transparents;
	border-bottom:solid 2px blue;
	color:white;
	padding:6px 3%;
	border-radius:5px 5px 0px 0px;
	opacity: 0.4;
	filter: alpha(opacity=50);
	background-color:black;
	}
li a{
	text-decoration:none;
	color:black;
	}
input{ 
	border-radius:5px 0px 0px 5px;
	border:solid 2px black;
	padding:3.5px;
	margin-left:50px;
	background-color:transparent;
	padding:5px;
	}
.i{
	border-radius:0px 5px 5px 0px;
	border:solid 2px;
	border-color:black;
	padding:1.5px;
	padding-top:3px;
	padding-bottom:5px;
	}
#ta{
	margin-left:80%;
	margin-top:-35px;
	}
#hid1{
	color:blue;
	text-align:center;
	}
#ex1{
	border:solid 10px;
	border-color:black blue;
	text-align:center;
	margin:0% 30%;
	}
pre{
	color:lightgrey;
	}
#ig{
	border:solid 0px black;
	border-radius:50px;
	}
	

	</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<a href="index.php"><h1 style="color: white;margin-top: 10px;" id="myhead">E Learning</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Login Start------->

			<!-- <div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" enctype="multipart/form-data" action="imgdemo.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Language Name :</label>
								<input type="text" name="languagename" class="form-control">


								<label><i class="fa fa-lock fa-2x"></i>Language Description  :</label>
								<input type="text" name="languagedesc" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Language Image :</label>
								<input type="file" name="languageimg" class="form-control">

								<button id="btn-login" type="submit">Add Course</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>
 -->
         <!---Login Ends------->





<!-- 
<div>
	<img src="C:\Users\sunil\Pictures\wallpaper\be_all.jpg">
</div> -->
<script>
window.onload=function(){
    var html=document.getElementById("html"),
        css=document.getElementById("css"),
        js=document.getElementById("js"),
        output=document.getElementById("output"),
        working=false,
        fill=function(){
            if(working){
                return false;
            }
            working=true;
            var document=output.contentDocument,
                style=document.createElement("style"),
                script=document.createElement("script");
            document.body.innerHTML=html.textContent;
            style.innerHTML=css.textContent.replace(/\s/g,"");
            script.innerHTML=js.textContent;
            document.body.appendChild(style);
            document.body.appendChild(script);
            working=false;
        };
    html.onkeyup=fill;
    css.onkeyup=fill;
    js.onkeyup=fill;
}
</script>

<table id="tab">
            <tr>
                <td id="t1">
                    <div class="tag">HTML (Body)</div>
                    <div id="html" class="content" contenteditable></div>
                </td>
                <td id="t1">
                    <div class="tag">CSS</div>
                    <div id="css" class="content" contenteditable></div>
                </td>
            </tr>
            <tr>
                <td id="t1">
                    <div class="tag">JavaScript</div>
                    <div id="js" class="content" contenteditable></div>
                </td>
                <td id="t1">
                    <div class="tag">Output</div>
                    <iframe id="output"></iframe>
                </td>
            </tr>
        </table>



 			<!---programming languages Section Start	----->

			
</body>
</html>