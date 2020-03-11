<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pedido</title>
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

      <form action="Cadastrar.php" class="login-form" method="POST">
        <h1>Fazer Pedido</h1>


        <div class="form-group col-md-3">
          <img src="https://image.flaticon.com/icons/svg/490/490357.svg" width="42" height="43" id="img2">
          <input type="number" class="form-control" id="ms" name="ms" placeholder="Mesa">
        </div>

        
    <img src="https://image.flaticon.com/icons/svg/1477/1477728.svg" width="40" height="40" id="img4">
 <div class="form-row">
  <div class="form-group col-md-7">
      <select class="form-control" id="rfg" name="rfg">
        <option>Refrigerante...</option>
        <option value="gua1l">Guarána 1l</option>
        <option value="gua2l">Guarána 2l</option>
        <option value="coca1l">Coca Cola 1l</option>
        <option value="coca2l">Coca Cola 2l</option>
        <option value="fan1l">Fanta 1l</option>
        <option value="fan2l">Fanta 2l</option>
        <option value="caj1l">Cajuina 1l</option>
        <option value="caj2l">Cajuina 2l</option>
        <option value="soda1l">Soda 1l</option>
        <option value="soda2l">Soda 2l</option>
        <option value="n">Nenhum</option>
        


      </select>
    </div>
          <div class="form-group col-md-2">
      <select class="form-control" id="qtdC" name="qtdC">
        <option>Qtd...</option>
        <option value="qtd0">0</option>
        <option value="qdt1">1</option>
        <option value="qtd2">2</option>
        <option value="qtd3">3</option>
        <option value="qtd4">4</option>
        <option value="qtd5">5</option>
        <option value="qtd6">6</option>
        <option value="qtd7">7</option>
        <option value="qtd8">8</option>
        <option value="qtd9">9</option>
      </select>
    </div>

    <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value1" name="value1" onclick="prc()" placeholder="$0,00">
        </div>
</div>


    <img src="https://image.flaticon.com/icons/svg/1651/1651868.svg" width="40" height="40" id="img5">
 <div class="form-row">
  <div class="form-group col-md-7">
      <select class="form-control" id="crv" name="crv">
        <option>Cerveja...</option>
        <option value="crv1">Bohemia</option>
        <option value="crv2">Legitima</option>
        <option value="crv3">Petra</option>
        <option value="crv4">Crystal</option>
        <option value="crv5">Skol</option>
        <option value="crv6">Brahma</option>
        <option value="crv7">Skol Beats</option>
        <option value="crv8">Heineken</option>
        <option value="n">Nenhuma</option>
      </select>
    </div>
      <div class="form-group col-md-2">
      <select class="form-control" id="qtdD" name="qtdD">
        <option>Qtd...</option>
        <option value="qtd0">0</option>
        <option value="qdt1">1</option>
        <option value="qtd2">2</option>
        <option value="qtd3">3</option>
        <option value="qtd4">4</option>
        <option value="qtd5">5</option>
        <option value="qtd6">6</option>
        <option value="qtd7">7</option>
        <option value="qtd8">8</option>
        <option value="qtd9">9</option>
      </select>
    </div>
    <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value2" name="value2" onmouseover="prc()" placeholder="$0,00">
        </div>
</div>



    <img src="https://image.flaticon.com/icons/svg/113/113339.svg" width="40" height="40" id="img6">
	 <div class="form-row">
  <div class="form-group col-md-7">
      <select class="form-control" id="tiraGosto" name="tiraGosto">
        <option>Tira Gosto...</option>
        <option value="tr1">Baião</option>
        <option value="tr2">Frango Assado</option>
        <option value="tr3">Boi Assado</option>
        <option value="tr4">Linguiça Assada</option>
        <option value="tr5">Porco Assado</option>
        <option value="tr6">Filé Trinchado</option>
        <option value="tr7">Tripa</option>
        <option value="tr8">Camarão</option>
        <option value="n">Nenhum</option>    
      </select>
    </div>
          <div class="form-group col-md-2">
      <select class="form-control" id="qtdE" name="qtdE">
        <option>Qtd...</option>
        <option value="qtd0">0</option>
        <option value="qdt1">1</option>
        <option value="qtd2">2</option>
        <option value="qtd3">3</option>
        <option value="qtd4">4</option>
        <option value="qtd5">5</option>
        <option value="qtd6">6</option>
        <option value="qtd7">7</option>
        <option value="qtd8">8</option>
        <option value="qtd9">9</option>
      </select>
    </div>
    <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value3" name="value3" placeholder="$0,00">
        </div>
</div>

    <img src="https://image.flaticon.com/icons/svg/113/113339.svg" width="40" height="40" id="img6">
	 <div class="form-row">
  <div class="form-group col-md-7">
      <select class="form-control" id="tiraGostoA" name="tiraGostoA">
        <option>Tira Gosto 2...</option>
        <option value="trg1">Baião</option>
        <option value="trg2">Frango Assado</option>
        <option value="trg3">Boi Assado</option>
        <option value="trg4">Linguiça Assada</option>
        <option value="trg5">Porco Assado</option>
        <option value="trg6">Filé Trinchado</option>
        <option value="trg7">Tripa</option>
        <option value="trg8">Camarão</option>
        <option value="n">Nenhum</option>   
      </select>
    </div>
          <div class="form-group col-md-2">
      <select class="form-control" id="qtdF" name="qtdF">
        <option>Qtd...</option>
        <option value="qtd0">0</option>
        <option value="qdt1">1</option>
        <option value="qtd2">2</option>
        <option value="qtd3">3</option>
        <option value="qtd4">4</option>
        <option value="qtd5">5</option>
        <option value="qtd6">6</option>
        <option value="qtd7">7</option>
        <option value="qtd8">8</option>
        <option value="qtd9">9</option>
      </select>
    </div>
    <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value4" name="value4" onclick="prc()" placeholder="$0,00">
        </div>
        <h3>Valor Total</h3>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="value5" name="value5" placeholder="$0,00">
        </div>
</div>

   


    <div>
  <label >Antes de enviar o pedido, certifique-se de que escreveu corretamente e de forma coerente</label>
  </div>
  <button type="submit" class="btn btn-primary">Fazer pedido</button>
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
      <script>
          functiom prc(){
        var comboRefrigerante = document.getElementById("value1").value;
        var comboCerveja = document.getElementById("value2").value;
        var comboTiraGosto = document.getElementById("value3").value;
        var comboTiraGosto2 = document.getElementById("value4").value;

        var comboQtd1 = document.getElementById("qdtC").value;
        var comboQtd2 = document.getElementById("qdtD").value;
        var comboQtd3 = document.getElementById("qdtE").value;
        var comboQtd4 = document.getElementById("qdtF").value;
        
        var vl5 = comboRefrigerante + comboCerveja + comboTiraGosto + comboTiraGosto2; 

        document.getElementById("value5").value = vl5;
          }
      </script>


  </body>
</html>