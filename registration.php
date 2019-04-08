<?php
session_start();
$_SESSION['secure']='1';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studylogin project | Registration</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-one-third is-offset-4" align="center">
                        <h2 class="title is-4">Welcome!</h2><br><br>
                        <form action="reg.php" method="POST">
                            <input required class="input" type="text" placeholder="Your login" name="login"><br><br>
                            <input required class="input" type="password" placeholder="Your password" name="pass">
                            <br><br>
                            <input class="button is-success is-outlined" type="submit" value="Sign up">
                        </form><br><br>
                        <p class="is-family-primary is-size-6 has-text-weight-light">Already have an account? <a class=""
                                href="index.php">Login</a></p>
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