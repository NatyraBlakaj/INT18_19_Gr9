<?php
 session_start();
?>


        
        <header>
            <table id="logoArea">
                <td id="logo">
                    <img src="../fotot/logo.png" height="100px" width="300px" alt="Logo">
                </td>
                <td id="moreOptions">
                    <a href="../src/signup.php">Sign up</a> |
                    <a href="../src/login.php">Login</a> |
                    <a href="../src/game.php">Game</a> |
                    <a href="../src/contact.php">Contact</a>
                </td>
                <td id="searchBar">
                    <form action="0">
                        <input type="search" size="15">
                        <i class="fa fa-search"></i>
                    </form>
                </td>
            </table>

            <div class="mainMenu">
                <a href="../index.php" class="active">HOMEPAGE</a>
                <a href="../src/gallery.php"  >GALLERY</a>
                <a href="../src/about.php">ABOUT</a>
                <a href="../src/portfolio.php">PORTFOLIO</a>
                <a href="../src/team.php"  >TEAM</a>
                <a href="../src/game.php"  target="blank"  >GAME</a>
				<a href="../src/login.php">LOGIN</a>
				<a href="../src/signup.php">SIGN UP</a>
            </div>
        </header>