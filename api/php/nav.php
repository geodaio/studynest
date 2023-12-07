<header id="header-out">
        <nav class="navbar flexbox ">
                <?php
                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-left.php");
                ?>
                <div class="header-right">
                        <?php
                                if (isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] === 'true'){
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-in-mobile.php");
                                }
                                else {
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-out.php");
                                }
                        ?>
                </div>
        </nav>
</header>
