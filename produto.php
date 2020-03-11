<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Produto</title>
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      font-family: montserrat;
      box-sizing: border-box;
    }


    body{
      min-height: 127vh;
      background: linear-gradient(#964b00,#964b00);
    }

    #a{
      margin-left: 10px;

    }

    .login-form{
      width: 50%;
      background: linear-gradient(100deg,#754c2d,#804c22);
      height: 120%;
      padding: 80px 40px;
      border-radius: 8px;
      position: absolute;
      left: 50%;
      top: 63%;
      transform: translate(-50%,-50%);



    }

    .login-form h1{
      text-align: center;
      margin-bottom: 40px;
    }

    #vo{
      color: #ecf0f1;
      margin-left:10px;

    }
    #vo : hover{
     color: black;
    }

    #img{
    margin-bottom: 5px;
    margin-left: 7px;
    }
     #img2{

    margin-left: 7px;
    }
    #img3{
      margin-bottom: 3px;
      margin-left: 7px;
    }
    #img4{
      margin-bottom: 5px;
      margin-left: 7px;
    }
    #img5{
      margin-bottom: 5px;
      margin-left: 7px;
    }
    #img6{
      margin-bottom: 5px;
      margin-left: 7px;
    }

    </style>


		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>



  <body>
      
      <a href="index.html" id="a"><img src="https://image.flaticon.com/icons/svg/2087/2087671.svg" height="30" width="30"></a>

      <form action="Cadastrar.php" class="login-form" method="GET">
        <h1>Cadastrar Produtos</h1>

        
    <img src="https://image.flaticon.com/icons/svg/1477/1477728.svg" width="40" height="40" id="img4">
<div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="rfg" name="rfg" placeholder="Nome da refrigerante">
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="val" name="val" placeholder="$Preço">
        </div>
</div>
    <img src="https://image.flaticon.com/icons/svg/1651/1651868.svg" width="40" height="40" id="img5">
 <div class="form-row">
       <div class="form-group col-md-6">
          <input type="text" class="form-control" id="crv" name="crv" placeholder="Nome da Cerveja">
          </div>
          <div class="form-group col-md-2">
          <input type="text" class="form-control" id="valu" name="valu" placeholder="$Preço">
        </div>
</div>
    <img src="https://image.flaticon.com/icons/svg/113/113339.svg" width="40" height="40" id="img6">
	 <div class="form-row">
    <div class="form-group col-md-6">
          <input type="text" class="form-control" id="tiraGosto" name="tiraGosto" placeholder="Nome do tira gosto">
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value" name="value" placeholder="$Preço">
        </div>
</div>


   


    <div>
  <label >Antes de enviar os produtos, certifique-se de que escreveu corretamente e de forma coerente</label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>


      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>