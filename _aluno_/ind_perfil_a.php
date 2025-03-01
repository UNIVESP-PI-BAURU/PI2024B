<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: ind_login_a.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Conectando interesses</title>
  <meta http-equiv="content-language" content="pt-br">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2017.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-safety.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">

    <style>
        .body {
            background-color: white;
        }
        .box {
            
            padding-left: 7%;
            background-color: white;
        }
        .w3-col {
            background-color: white;
        }
        .w3-row {
            background-color: white;
        }
        .h2 {
            padding-left: 5%;
            padding-top: 3%;
            padding-bottom: 2%;
        }
        .btnSubmit {
            margin-left: 10%;
        }

    </style>
	
</head>
		
<body>

<!-- corpo da pagina -->
<div class="w3-container">
    <div class="w3-content" style="max-width:1800px;margin-top:5px">

            <!--header-->
            <section class="header w3-show">
            <?php include '../_inc_/inc_header.html';?>
            </section>
            <!--fim header-->

            <!--navbar-->
            <section class="navbar w3-show">
            <?php include '../_inc_/inc_navbar.html';?>
            </section>
            <!--fim navbar-->

            <!--main--><!--pagina inicial do sistema-pagina diferente das demais-->
            <section class="main w3-show">
                <?php include 'inc_perfil_a.php';?>
            </section>
            <!--fim main-->

            <!--footer-->
            <section class="footer w3-show">
            <?php include '../_inc_/inc_footer.html';?>
            </section>
            <!--fim footer-->

    </div>
</div>
<!-- fim corpo da pagina -->

<!--scripts final codigo-->

    <!--menu toglle -->
    <script>
        function myFunction() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
        }
    </script>
    <!--fim menu toglle -->

<!--fim scripts final codigo-->

</body>
</html>