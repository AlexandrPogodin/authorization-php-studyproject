<?php
    if(array_key_exists('login', $_COOKIE)){header('location:index.php');die;}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studylogin project | Login</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half " align="center">
                        <figure class="image is-128x128">
                            <img class="is-rounded" src="src/av.png">
                        </figure><br>
                        <h1 class="title is-2">Hello!</h1><br>
                        <h2 class="title is-4">Welcome! Please login</h2>
                    </div>
                    <div class="column is-one-third is-offset-1" align="center">
                        <form action="handle.php" method="POST">
                            <input required class="input" type="text" placeholder="Your login" name="login"><br><br>
                            <input required class="input" type="password" placeholder="Your password" name="pass">
                            <br><br>
                            <input class="button is-primary is-outlined" type="submit" value="Login">
                        </form><br><br>
                        <p class="is-family-primary is-size-6 has-text-weight-light">Don't have an account? <a class="" href="registration.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <?php include('includes/footer.php'); ?>
    </div>
</body>

</html>