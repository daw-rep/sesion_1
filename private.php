<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Hola <?php echo $_SESSION['username']; ?></h1>
         <form action="login.php" method ="POST">
            <input type="submit" name="logout" value="LOGOUT"/>
        </form>
    </body>
</html>
