<header id="header-out">
        <nav class="navbar flexbox ">
                <?php
                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-left.php");
                ?>
                <div class="header-right">
                        <?php
                                if (isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] === 'true'){
                                        echo '<div class="navbar-links">';
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-in.php");
                                        echo '</div>';
                                }
                                else { 
                                        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-out.php");
                                }
                        ?>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-mobile.php"); ?>
        </nav>
</header>
