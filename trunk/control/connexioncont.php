<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="./style.css" />
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
  <form id="form" method="post" action="./model/checkconnect.php" >
    <fieldset>
      <legend>Connexion</legend>
      <p>
        <label for="email"> Email </label> :
        <input type="email" placeholder="Ex : example@gmail.com" name="email" id="email"/>
      </p>
      <p>
        <label for="password"> Mot de passe </label> :
        <input type="password" id="password" name="password"/>
      </p>
      <p>
        <input type="submit" value="Envoyer" />
      </p>
    </fieldset>
  </form>
  </body>
</html>
