<main>
    <?php
        if($newUserRegistered){
            ?>
            <p>congratulations your account has been successfully created,<br> <a href="index">return to home</a></p>
            <?php
        }  
    ?>
    <h2>Registration</h2>
    <?php
        if(count($txtErrors)) {
            print('<div id="errorsForm">');
            foreach ($txtErrors as $error) {
                print('<p>'.$error.'</p>');
            }
            print('<div id="closeErrors">X</div></div>');
        }
    ?>
    <form action="register" method="post" id="register">
        <div>
            <label for="firstname">Your first name</label><input type="text" name="firstname" id="firstname">
            <label for="lastname">You last name</label><input type="text" name="lastname" id="lastname">

            <p>Your gender</p>
            <div id="gender">
                <input type="radio" name="gender" value='female' id="female"><label for="female">Female</label>
                <input type="radio" name="gender" value='male' id="male"><label for="male">Male</label>
                <input type="radio" name="gender" value='ns' id="other"><label for="other">Other</label>
            </div>
            
            <label for="email">Your email</label><input type="email" name="email" id="email">

            <label for="phone">Your phone number</label><input type="tel" name="phone" id="phone">

            <label for="pwd1">Your strong password</label><input type="password" name="pwd1" id="pwd1">
            <label for="pwd2">Please retype your password</label><input type="password" name="pwd2" id="pwd2">        
        </div>
        <input type="hidden" name="registration" value='1'>
        <input type="submit" value="Send">
    </form>
</main>



