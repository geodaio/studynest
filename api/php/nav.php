<header id="header-out">
        <nav class="flexbox">
                <?php
                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-left.php");
                ?>
                <div class="header-right">
                        <?php
                                include($_SERVER['DOCUMENT_ROOT'] . "/api/php/change-lang-nav.php");
                                if (!isset($_COOKIE["loggedIn"]) && $_COOKIE["loggedIn"] === true){
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-in.php");
                                }
                                else {
                                        echo("test");
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-out.php");
                                }
                        ?>
                </div>
        </nav>
</header>
