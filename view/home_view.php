<main>
    <form action="register" method="post">
        <h1>Inscription</h1>
        <label for="firstname">Votre prenom</label><input type="text" name="firstname" id="firstname">
        <label for="lastname">Votre nom</label><input type="text" name="lastname" id="lastname">

        <div><input type="radio" name="sexe" id="female"><label for="female">femme</label></div>
        <div><input type="radio" name="sexe" id="male"><label for="male">homme</label></div>
        <div><input type="radio" name="sexe" id="other"><label for="other">nspp</label></div>

        <label for="email">Adresse mail</label><input type="email" name="email" id="email">

        <label for="tel">Votre téléphone</label><input type="tel" name="tel" id="tel">

        <label for="pwd1">Votre mot de passe</label><input type="password" name="pwd1" id="pwd1">
        <label for="pwd2">Retapez le mot de passe</label><input type="password" name="pwd2" id="pwd2">

        <input type="submit" value="register">
    </form>

    <form action="login" method="post">
        <h1>Connexion</h1>
        <label for="firstname">Votre prenom</label><input type="text" name="firstname" id="firstname">

        <label for="pwd">Votre mot de passe</label><input type="password" name="pwd" id="pwd">

        <input type="submit" value="connect">
    </form>
</main>