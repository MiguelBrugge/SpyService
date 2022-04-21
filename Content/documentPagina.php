<body class="backgroundcolor darkbluebold">

<div class="container">

<?php
             
             if(isset($_POST["naam"]) && isset($_POST["wachtwoord"])){
                 $naam = htmlspecialchars($_POST["naam"]);
                 $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);
             }else{
                 $naam = "";
                 $wachtwoord = "";
             }
     
                 // $versleutelen = password_hash("$naam", $password_default);
                 // echo"naam is: $versleutelen";
                 $opgeslagen_naam = '$2y$10$h2fADV6eaCokWtRY/nQcnOPRjDxa4POWaMpNRafi4p3ifr5/1qLrS';
             
                 // $versleutelen = password_hash("$wachtwoord", $password_default);
                 // echo"wachtwoord is: $versleutelen";
                 //NulNulZeven!
                 $opgeslagen_wachtwoord = '$2y$10$Dbdd8LgdlswUKtuJXle89.T2TifeKYINEFo2ICqKaHFwTrUoZo0SC';
             
                 if(isset($_POST['login'])) {
                     if(password_verify($naam, $opgeslagen_naam) && password_verify($wachtwoord, $opgeslagen_wachtwoord)){
                         
                         include("Content/geheimeDocumenten.php");
                         
                     }else{
                          include("Content/login.php");
                          echo"<div class='container'> Uw inlog gegevens kloppen niet, probeer het opnieuw! </div>";
                     }

                 }else{
                         include("Content/login.php");
                 }
         ?>
    </div>
</body>