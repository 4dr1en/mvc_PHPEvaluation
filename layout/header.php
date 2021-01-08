<header>
    <div id="h__left">
        <a href="/">
            <img src="public/img/logo.png" alt="logo" id="mainLogo">
            <h1>Lithotérapie.com</h1>
        </a>
    </div>

    <div id="h__right">
        <nav>
            <ul>
                <li><a href="products">Our products</a></li>
                <?php
                    if(isset($_SESSION['id'])){
                        if($_SESSION['id'] === "1"){
                            print('<li><a href="logsboard">Admin</a></li>');
                        }
                    ?>
                        <li><a href="profile">My account</a></li>
                        <li><a href="logout">Log out</a></li>
                        <li><a href="#" id="btnCart">My Cart</a></li>
                    <?php 
                    }
                    else{
                    ?>
                        <li><a href="register">Sign up</a></li>
                        <li><a href="" id="btnLogin">Connect</a></li>
                    <?php
                    }
               
                ?>

            </ul>
        </nav>
    </div>
</header>

