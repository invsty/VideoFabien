<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <a class='navbar-brand' href='#'>Vidéo2000</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor02' aria-controls='navbarColor02' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>

    <div class='collapse navbar-collapse' id='navbarColor02'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
                <a class='nav-link' href='index.php'>Tous les films<span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='user_pref.php'>Mes films préférés</a>
            </li>
            <?php if(isset($_SESSION['pseudo'])) : ?>
                <li class='nav-item'>
                    <a class='nav-link disabled' href='user_pref.php'>Bonjour <?= $_SESSION['pseudo']; ?>
                        <?php if (!empty($_SESSION['avatar'])) : ?>
                            <img src='<?= $_SESSION['avatar']; ?>' width="40px">
                        <?php endif; ?>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='index.php?deconnect=true'>Deconnectez-Vous.</a>
                </li>
            <?php else : ?>
                <li class='nav-item'>
                    <a class='nav-link' href='registration.php'>Incrivez-Vous</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='connect.php'>Connectez-Vous</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class='form-inline my-2 my-lg-0'>
            <input class='form-control mr-sm-2' type='text' placeholder='Recherche'>
            <button class='btn btn-secondary my-2 my-sm-0' type='submit'>Envoyer</button>
        </form>
    </div>
</nav>