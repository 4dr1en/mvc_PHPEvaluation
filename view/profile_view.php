<main>
    <div id="imgProfile">
        <img src="/public/img/profile.webp" alt="image profile">
    </div>
    <div id="userInfos">
        <div>
            <p class="infoTitle">Firstname</p>
            <p class="infoContent"> <?= $_SESSION['user']['firstname']?> </p>
        </div>
        <div>
            <p class="infoTitle">Lastname</p>
            <p class="infoContent"> <?= $_SESSION['user']['lastname']?> </p>
        </div>
        <div>
            <p class="infoTitle">Gender</p>
            <p class="infoContent"> <?= $_SESSION['user']['gender']?> </p>
        </div>
        <div>
            <p class="infoTitle">Email</p>
            <p class="infoContent"> <?= $_SESSION['user']['email']?> </p>
        </div>
        <div>
            <p class="infoTitle">Phone number</p>
            <p class="infoContent"> <?= $_SESSION['user']['phone']?> </p>
        </div>
    </div>
</main>