<?php


//Incluindo Configuration no arquivo
include('config.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="IMG/g.png" heigth="50px" width="50px" /></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url('IMG/ban.png');
			box-sizing: border-box;
			background-repeat: no-repeat;
			background-position: center;
			background-size:100%;
		}
		.login{
			background-color:#F8F8FF;
			width: 450px;
			right: 400px;
			position: absolute;
			float: right;
			padding: 30px;
			margin-top: 80px;
			border-radius: 5px;
			display: inline-block;
			font-family: 'Calibri', cursive;

			

		}
		
		
		.login input{
			width: 100%;
			margin-top: 10px;
			border:2px solid #18a15a;
			border-radius: 5px;
			padding: 10px 0px 10px;

		}
		.a[type="button"]{
			width: 90%;

	        height: 50px;
			background-color:#ffffff;
			border: 0;
			color:#1c1c1c;
			letter-spacing: 1px;
			font-size: 18px;
			font-family: 'arial', cursive; 
			margin-top: 20px;


		}
		.logo1{
			width: -100px;
			height: 100px;
			transform: translate(-200%);
			margin-top: 2%
		}
		.logo{
			font-size: 45px;


			}
		.b{
			font-size: 27px;
			color: #757572;

			}

		.img{
			width: 6%;
			float: left;

			}

		.a:hover{

				background-color: #dbdbdb;
			}
            
		.fun{
			margin-left:200px;
			margin-top:200px;
		}

		.imgButton{
			height:100%;
            width:400px;
			margin-left:0px;
			margin-top:30px;}
		.imgLog{
			margin-left:100px;
		}
		.imgLogo{
			margin-left:50px;
			margin-top:50px;
		}
		
	</style>


 </head>
 <body>
 <div class="imgLogo"><img src="IMG/art.png" heigth="200px" width="200px"></div>		

 <form>

 <div class="login">

	 <div class="imgLog"><img src="IMG/art.png" heigth="200px" width="200px"></div>
		<div class="logo">
			<p><b>Sacie sua fome! </b></p>
		</div>
		<div class="b">

			<p>Deseja continuar?</p>
        </div> 
        <div class="imgButton">
          <div class="panel panel-default">
                <?php
                if($login_button == '')
                {
                    echo '<div class="panel-heading">Seja Bem Vindo Usuario</div><div class="panel-body">';
                    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
                    echo '<h3><a href="logout.php">Sair</h3></div>';
                }
                else
                {
                    echo '<div align="center">'.$login_button . '</div>';
                }
                ?>           
	</div>
	
		

		</form>
	</div>
  </div>
  <div class="fun"><img src="IMG/fun.png"  width="600px" height="600"></div>
 </body>
</html>