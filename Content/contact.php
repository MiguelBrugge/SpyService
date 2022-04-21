<body class="backgroundcolor darkbluebold">
        <div class="row justify-content-md-center mt-5">
           
            <div class="col-2 contacttitel">
                Bezoek adres
                <div class="bezoekAdrestekst">
                    Van Moerkerkstraat 21 <br>
                    1024 DG Amsterdam
                    <br></br>
                    Tel. 020 123 456 78<br>
                    info@spyservice-int.nl
                    <br></br>
                    KvK. 123 456 789
                </div>
            </div>
            
            <div class="col-3 contacttitel ml-4 mr-4">
                contactformulier
                <div class="bg-white pt-2 mt-4 pb-4">
                    <form method="post" class="mt-4">
                        <input class="contactform mt-5" type="text" placeholder="Name" name="naam" required>
                        <br>
                        <input class="contactform" type="email" placeholder="Email" name="email"required>
                        <br>
                        <input class="contactform" type="number" placeholder="Telefoonnummer" name="telefoonnr"required>
                        <br>
                        <textarea class="contactform message" placeholder="Message" name="bericht" required></textarea>
                        <br>
                        <input class="contactbutton" class="Verstuur" type="submit" name="verstuur" value="Verstuur"> 
                    </form>
                </div>
            </div>
            
            <div class="col-3 contacttitel">
                locatie
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.5902199862126!2d4.815785615854574!3d52.37784997978757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e24d27cc29cb%3A0xffa85b213c783cb2!2sVan%20Moerkerkenstraat%2021%2C%201064%20KC%20Amsterdam!5e0!3m2!1snl!2snl!4v1647597443077!5m2!1snl!2snl" width="100%" height="88%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                </div>

        </div>
        
        <?php
      
            if(isset($_POST['verstuur'])) {
                
                $naam = htmlspecialchars($_POST["naam"]);
                $email = htmlspecialchars($_POST["email"]);
                $bericht = htmlspecialchars($_POST["bericht"]);
                $telefoonnr = htmlspecialchars($_POST["telefoonnr"]);

                echo"Naam: $naam<br>";
                
                echo"Email: $email<br>";
                
                echo"Bericht: $bericht<br>";
                
                echo"Tel: $telefoonnr<br>";
                
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                echo"Ip: $ip";
            }
        ?>

</body>