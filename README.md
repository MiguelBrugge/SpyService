# SpyService
This is the SpyService website I made for Front-End Development. The coding languages I used are HTML, CSS and PHP for this project.

### Login Page

On the Document page you can see you need to login to be able to see the secret documents.
![image](https://user-images.githubusercontent.com/103996305/164533351-8fb06990-0f3b-4fe4-af2c-8c1463e9b67a.png)

I have hashed the password using php in the code. You will not be able to see the secret documents without knowing the password because the password is hashed. ![image](https://user-images.githubusercontent.com/103996305/164533532-903eb52d-c2d7-472c-ae30-29608eba012f.png)

The hashing is done using the password_hash() function from php. After you have hashed the password and copied the hash you van verify the hash and compare it to the 
```Php
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
```



