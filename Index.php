<html lang="en">

<head>
  <title></title>
  <link rel="stylesheet" href="CSS/Styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>



    <?php

        include("content/menu.php");

        $paginanaam;

	    if(isset($_GET["pagina"])){
            $paginanaam = $_GET["pagina"];
        }else{
            $paginanaam = "home";
        }
        
        include("Content/$paginanaam.php");

    ?>

</body>
</html>