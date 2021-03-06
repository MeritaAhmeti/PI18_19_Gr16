<?php 
include('kontakto.php'); 
include('loginprocess.php'); 

?>

<html manifest="manifest.appcache">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/content.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/dropdown.css">
        <link rel="stylesheet" href="CSS/gallery.css">
        <link rel="stylesheet" href="CSS/puzzle.css">
        <link rel="stylesheet" href="CSS/login.css">


        <title>Classical-Art</title>
    
    </head>
    
    <body>
        
        <div class="top-bar">
            
            <div id="rectangle"></div>
            <div id="contact"><p>Tel: 11111 2222222222 | Mail: <a href="mailto:info@classicalart.com"/>info@classicalart.com</p></a></div>

            <div class="search-bar">
                <?php 
                include_once ('loginprocess.php'); 

                if(!isset($_SESSION["loggedin"]))
                {
                    echo '<a href="login.php"><button>Login</button></a>';
                    echo '<a href="register.php"><button>Register</button></a>';

                }
                else
                {
                    echo '<span>Welcome, you are logged in as <b>'. $_SESSION["username"].'</b></span>';
                    echo '<a href="logout.php"><button>Logout</button></a>';

                }
                ?>
                <form>
                    <input type="text" placeholder="Search" name="Search">
                    <img src="Fotot/Search-button.png"/>
                </form>

            </div>

        </div>
    
        <header>
            
            <div class="logo">
                <h1>Classical Art</h1>
                <h4>Free PSD Website Template</h4>
            </div>
            
            <div class="menu">
                <ul class="nav">
                    <li><a id="v" href="index.php">HOME</a></li>
                    <li><a id="v" href="forma.php">BUY TICKETS</a></li>
                    <li><a id="v" href="curiosities.php">CURIOSITIES</a></li>
                    <li><a id="v" href="#">DROPDOWN</a>
                        <ul class="sub-menu">
                            <li><a href="loja.php">GAME</a></li>
                            <li><a href="paintings.php">PAINTINGS</a></li>
                            <li><a href="posts.php">POST</a></li>
                            <li><a href="admincp.php">ADMINCP</a></li>
                        </ul>    
                    </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                </ul>
            </div>
            
        </header>

        <div class="main">
            <div class="login-container">
                <div id="login-header">
                    <h1>Log In</h1>
                    <h5>Don't have an account? <a href="register.php">Register</a></h5>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <h4 style="display: inline;">Username:</h4>
                    <?php 
                        if($username_err != ''): ?>
                            <div class="login-alert" style="display: inline;">
                                <?php echo "*".$username_err ?>
                            </div>
                    <?php endif; ?>
                        <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>"style="margin: 20px 0px;"></br>
                        <h4 style="display: inline;">Password:</h4>
                    <?php 
                        if($password_err != ''): ?>
                            <div class="login-alert" style="display: inline;">
                                <?php echo "*".$password_err ?>
                            </div>
                    <?php endif; ?>
                    </h4>
                        <input type="Password" name="password" placeholder="Password" style="margin: 20px 0px;"></br>
                        <input type="checkbox" name="rememberme">
                        <h4 style="display: inline;">Remember Me</h4>
                        <input type="submit" name="login" value="LOGIN">
                    </form> 
                    <?php
                    if(isset($_POST["rememberme"]))
                    {
                        if(isset($_POST['username']))
                        {
                            $_SESSION['user']= $_POST['username'];
                            $cookie_name = "user";
                            $cookie_value = $_SESSION['user'];
                            setcookie($cookie_name, $cookie_value, time() +3600, "/"); // 86400 = 1 day
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    
<footer>
    
  <div class="bllok">
    <p class="FROM_THE_BLOG">FROM THE BLOG</p>
    <p class="Blog_Post_Title"><?php echo $_SESSION["subjecti2"]; ?></p>
    <p class="Posted_by_Admin">Posted by <?php echo $_SESSION["username2"]; ?> on <?php echo $_SESSION["created_at"]; ?></p>
    <p class="blog_post"><?php echo $_SESSION["posti2"]; ?></p>
    <p class="Read"><a href="https://www.beazley.ox.ac.uk/sculpture/styles/classical.htm">Read More » </a></p>
      
  </div>
    
 </div>
            <div class="bllok">
            <p class="Quick_Links">QUICK LINKS</p>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Category:Classical_art">» Wikipedia: Classical Art</p></a>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Ancient_Greek_art">»  Ancient Greek Art</p></a>
            <p class="Lorem"><a href="https://www.pinterest.com/natalyapall/classical-art/">»  Classical Art Photos</p></a>
            <p class="Lorem"><a href="https://www.theguardian.com/artanddesign/jonathanjonesblog/2014/aug/14/top-10-ancient-greek-artworks-jonathan-jones">»  Top 10 Ancient Greek ArtWorks</p></a>
            <p class="Lorem"><a href="http://www.keralaculture.org/classical-arts/25">»  Classical Art Forms</p></a>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Classicism">»  Wikipedia : Classicism</p></a>
            <p class="Lorem"><a href="http://www.interlude.hk/front/the-classical-age-in-music-and-the-arts/">»  The Classical Age in Music and Arts</p></a>
            
            </div>

            <div class="bllok">
            <p class="Latest_Tweets">LATEST TWEETS</p>
            <p class="tweet"><span class="namehere"><a href="https://twitter.com/erbliniberisha"> @Erblin </a></span> The purpose of art is washing the dust of daily life out off our souls. 1 day ago</p>
            <p class="tweet"><span class="namehere"><a href="https://twitter.com/erbliniberisha"> @Erblin </a></span> Classical Art stands for form. Romantic Art stands for content. 1 day ago</p>
            </div>

            <div class="bllok">
                <p class="contact_us">CONTACT US</p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="email" name="email" placeholder="Email"><br>
                    <input type="message" name="message" placeholder="Message"><br>
                    <input type="submit" name="submit" value="submit">
                    <?php 
                        if($msg != ''): ?>
                            <div class="alert">
                                <?php echo $msg ?>
                            </div>
                    <?php endif; ?>
                </form>
            </div>

            </footer>
    
    <div class="copyright">
                <p>Copyright &copy; 2012 Domain Name - All rights reserved <span class="template">Template by OS templates</span></p>
            </div>

</body>
</html>
