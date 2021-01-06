<main>
    <?php
        if($newUserRegistered){
            ?>
            <p>congratulations your account has been successfully created,<br> <a href="index">return to home</a></p>
            <?php
        }  
        else var_dump($txtErrors);
    ?>
    <form action="register" method="post">
        <h1>Registration</h1>
        <label for="firstname">Your first name</label><input type="text" name="firstname" id="firstname">
        <label for="lastname">You last name</label><input type="text" name="lastname" id="lastname">

        <div><input type="radio" name="gender" value='female' id="female"><label for="female">female</label></div>
        <div><input type="radio" name="gender" value='male' id="male"><label for="male">male</label></div>
        <div><input type="radio" name="gender" value='ns' id="ns"><label for="other">other</label></div>

        <label for="email">Your email</label><input type="email" name="email" id="email">

        <label for="phone">Your phone number</label><input type="tel" name="phone" id="phone">

        <label for="pwd1">Your strong password</label><input type="password" name="pwd1" id="pwd1">
        <label for="pwd2">please retype your password</label><input type="password" name="pwd2" id="pwd2">

        <input type="hidden" name="registration" value='1'>
        <input type="submit" value="register">
    </form>
</main>



