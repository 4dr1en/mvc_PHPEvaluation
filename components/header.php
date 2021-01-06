<header>
    <div id="h__left">
        <a href="/">
            <img src="public/img/logo.png" alt="logo" id="mainLogo">
            <h1>Lithotérapie.fr</h1>
        </a>
    </div>

    <div id="h__right">
        <nav>
            <ul>
                <li><a href="products">Our products</a></li>
                <?php
                    if(isset($_SESSION['id'])){
                        if($_SESSION['id'] === "1"){
                            print('<li><a href="logsboard">admin</a></li>');
                        }
                    ?>
                        <li><a href="profile">my account</a></li>
                        <li><a href="logout">log out</a></li>
                        <li><a href="#">My basket</a></li>
                    <?php 
                    }
                    else{
                    ?>
                        <li><a href="register">sign up</a></li>
                        <li><a href="" id="btnLogin">connect</a></li>
                    <?php
                    }
               
                ?>

            </ul>
        </nav>
    </div>
</header>