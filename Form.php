<html>

<head>
	<meta charset="utf-8">
	<title>Currículo Final</title>
	<link rel="icon" type="image/icon" href="Icon.ico">
	<link rel="stylesheet" type="text/css" href="Formato.css">
</head>

<body>

	<div class="box">

	  <h1><?php echo $_POST['nome']; ?></h1>

	  <h2> <?php echo $_POST['objetivo']; ?></h2>  <br>

	  <p> <b>Telefone:</b> <?php echo $_POST['celular']; ?> </p> 
	  <p> <b>Email:</b> <?php echo $_POST['email']; ?> </p> 
	  <p> <b>Endereço:</b> <?php echo $_POST['local']; ?> </p> 
		<p> <b>LinkedIn:</b> <?php echo $_POST['linkedin']; ?> </p>
	  <p> <b>Portfólio:</b> <?php echo $_POST['portfólio']; ?> </p> <br>

	  <p> <b>Idade:</b> <?php echo $_POST['idade']; ?> </p> 
	  <p> <b>Nacionalidaded:</b> <?php echo $_POST['nacionalidade']; ?> </p> 
	  <p> <b>Status:</b> <?php echo $_POST['status']; ?> </p> 
	  <p> <b>Ocupação:</b> <?php echo $_POST['ocupação']; ?> </p> <br>


	  <h3>Formação escolar</h3>

	  <p> <b> Ensíno fundamental:</b> <?php echo $_POST['fundamental']; ?> </p> 
	  <p> <b> Ensíno médio:</b> <?php echo $_POST['médio']; ?> </p> 
	  <p> <b> Ensíno superior:</b> <?php echo $_POST['superior']; ?> </p> 
	  <p> <b> Cursando:</b> <?php echo $_POST['cursando']; ?> </p> <br>

	  <h3>Experiência profissional </h3>

	  <p class="exp"> <?php echo $_POST['exp']; ?> </p> <br>

	  <h3>Línguas</h3>

	  <p>

	    <?php

      if (isset ($_POST['lingua'])){
				echo ("Intermediário em " . $_POST['lingua']);
			} 
			else {
				echo ("Não possui conhecimento em uma segunda língua.");
			}
	    
			?>

	  </p> <br>

	  <h3>Conhecimentos</h3>

		<ol type="cicle">
	  <p> <li> <?php echo $_POST['con1']; ?> </li>
		    <li> <?php echo $_POST['con2']; ?> </li>
				<li> <?php echo $_POST['con3']; ?> </li> 
		</p>
		</ol>  <br>

	  <h3>Soft Skills</h3>
   
		<ol type="cicle">
	  <p> <li> <?php echo $_POST['sk1']; ?> </li>
	      <li> <?php echo $_POST['sk2']; ?> </li>
	      <li> <?php echo $_POST['sk3']; ?> </li>
	      <li> <?php echo $_POST['sk4']; ?></li>
	      <li> <?php echo $_POST['sk5']; ?> </li>
		</p>
	  </ol>  <br>

	    <form>
         <input type="button" value="Imprimir" onClick="window.print()"/>
        </form>

    </div>

</body>

</html>