 <?php
    $page ='¡Contáctanos!';

?>

<style>
.sp {
        font-size: 10pt;
    }

    .en {
        font-size: 7pt;
        font-style: italic;
    }

</style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>

    
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>
	Contacte con nosotros
	</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
   <div class="container">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">


</head>
<body>

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm" name ="myForm" class="form-horizontal" role="form" method="post">

            <img src="https://aicap.es/images/logo_aicap.png " class="logo_aicap"/> <br> <br>


            <div class="form-group">
      <label for="nombre " class="col-sm-3 control-label">
		  <span class="sp"> Nombre </span> 
		  <span class="en"> / First name : </span>
			  
			  </label>
      <div class="col-sm-8">
       <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" >
  
      </div>
     </div>
            <div class="form-group">
				<label for="apellido" class="col-sm-3 control-label">
					<span class="sp">Apellido </span>
					<span class="en"> / Last name :</span>
					
				</label>
            <div class="col-sm-8">
			<input id="apellido" type="text" class="form-control" placeholder="Apellido">
     </div>
     </div>
			

            <div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email :</label>
            <div class="col-sm-8">
			<input id="email" type="text" class="form-control" placeholder="Ejemplo@gmail.com">
            </div>
            </div>
			

            <div class="form-group">
            <label for="teléfono" class="col-sm-3 control-label"> 
				<span class="sp">Teléfono</span>
				<span class="en"> / Phone nr :  </span>
				</label>
            <div class="col-sm-8">
			<input id="teléfono" type="text" class="form-control" placeholder="+34_xxx_xxx">
            <br> 
	
            </div>
            </div>

            <div style="text-align:center;">
            <label for="subject" >
				<span class="sp">¿Qué me interesa?  </span>
				<span class="en"> / I am interested in :</span>
				
				</label>
				
				<br> <br>

			<textarea id="subject" rows="2" class= "form-control" placeholder="Type Message"></textarea><!--textarea tag should be closed (In this coding UI textarea close tag cannot be used)-->
<br><br>
            </div>
            


			<fieldset>
            <div style="text-align:center;">
                <label for="encontro" >
					<span class="sp">¿Cómo nos ha encontrado?</span> 
					<span class="en"> / How did you find us? </span> 
				
				</label><br> <br>
                <div class="col-sm-12">
                <input type="checkbox" name="formDoor[]" id="internet" value="internet" /> <label for="internet" > Internet &nbsp &nbsp</label>
                <input type="checkbox" name="formDoor[]" id="conocidos" value="	conocidos" > <label for="conocidos">
					<span class="sp"> Conocidos</span> 
					<span class="en"> / Already known : </span> 
					&nbsp &nbsp</label> 

                <input type="checkbox" name="formDoor[]" id="otros" value="otros"/> <label for="otros">
					<span class="sp"> Otros </span>
					<span class="en"> / Others </span>
					</label> 
                <br> <br>
                </div>
            </div>
			</fieldset>

            <div style="text-align:center;">
			<button type="button"  class="btn btn-primary btn-lg"   onclick="sendEmail()" value="Send An Email">Enviar</button>
            </div>
		</form>
	</center>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">
        function sendEmail() {
			
		
			
            var name = $("#name");
            var apellido = $("#apellido");
            var email = $("#email");
            var teléfono = $("#teléfono"); 
            var subject = $("#subject");

			var checkbox = $('input[type=checkbox]:checked').attr('value');
			



            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(apellido) && isNotEmpty(teléfono) && isNotEmpty(subject)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       apellido: apellido.val(),
                       email: email.val(),
                       teléfono: teléfono.val(),
                       subject: subject.val(),
					   //checkbox: checkbox.val()




                   }, success: function (response) {
                        $('#myForm')[0].reset();
						window.close();
					   //alert('Mensaje enviado con éxito/ Message sent with success');
                   } 
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
		
    </script>

</body>
</html>
      