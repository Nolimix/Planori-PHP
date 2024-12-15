<header>
    <link rel="stylesheet" type="text/css" href="src/styles/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9346ae6440.js" crossorigin="anonymous"></script>
    <script src="scripts/header.js"></script>
    <div class="container">
        <a class="header icon" href="/">
<!--            <img src="https://static.planori.lethom.fr/img/logo.webp" alt="Planori logo">-->
            <img src="../resources/img/logo.webp" alt="Planori logo">
            <h1>&nbsp;Planori</h1>
        </a>
        <div class="menu">
            <nav>
<!--                <a href="index"><i class="fa-solid fa-home">&nbsp;</i><p class="hidden">Home</p></a>-->
                <a href="my-calendar.php" class="active"><i class="fa-solid fa-calendar">&nbsp;</i><p class="hidden">Mon planning</p></a>
                <a href="everyone-calendar.php" class=""><i class="fa-solid fa-users-viewfinder">&nbsp;</i><p class="hidden">Planning général</p></a>
                <a href="configuration" class=""><i class="fa-solid fa-gear">&nbsp;</i><p class="hidden">Configuration</p></a>
                <a href="help" class=""><i class="fa-solid fa-headset">&nbsp;</i><p class="hidden">Assistance</p></a>
            </nav>
            <i class="separator vertical"></i>
            <div class="account">
                <div class="connected">
                    <a href="account">
<!--                        <img id="account.avatar" src="https://static.planori.lethom.fr/img/default-avatar.webp" alt="Avatar">-->
                        <img id="account.avatar" src="../resources/img/logo.webp" alt="Avatar">
                        <p id="account.username">Username</p>
                    </a>
                </div>
                <div class="disconnected hidden">
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>
