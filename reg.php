<?php
    include('includes/db.php');
    session_start();
    if (!isset($_SESSION['login'])){
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM `users` WHERE `login` = '$login' "; 
        $count = mysqli_query($lnk , $query);

        if (mysqli_num_rows($count) != 0){
            exit("Такой пользователь уже зарегистрирован! <br>
                <form action='exit.php' method='POST'>
                    <input type='submit' value='Авторизация'>
                </form>
                ");
        }else{
            setcookie('login', $login , time() + 3600);

            if (isset($_POST["login"])) {
                if($_SESSION['secure'] == '1'){
                   $query ="INSERT INTO `users` VALUES(NULL, '$login' , '$pass')";
                   $sql = mysqli_query($lnk, $query);
                   unset($_SESSION["secure"]);
                   echo 'Вы успешно зарегистрированы <br>';
                }
               if ($sql) {

               } else {
                 echo 'Произошла ошибка: ' . mysqli_error($connection);
               }
             }


        }
    }
    mysqli_close($lnk); //Закрываем подключение
    echo "
    <script language='JavaScript' type='text/JavaScript'>
        function redirect(){
            location = 'index.php'
        }
        setTimeout ('redirect()' , 10);
    </script>
    Добро пожаловать, " . $login . ". Идет переадресация...
    ";
?>