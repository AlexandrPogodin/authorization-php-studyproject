<?php
    include('includes/db.php');
    session_start();
    if (!isset($_SESSION['login'])){
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass' "; 
        $count = mysqli_query($lnk , $query);

        if (mysqli_num_rows($count) == 0){
            exit("Вы не зарегистрированы! <br>
                <input type='button' value='Вернуться' onclick='history.back()'>
                ");
        }else{
            setcookie('login', $login , time() + 3600);
        }
    }
    mysqli_close($lnk); //Закрываем подключение
    echo "
    <script language='JavaScript' type='text/JavaScript'>
        function redirect(){
            location = 'index.php'
        }
        setTimeout ('redirect()' , 500);
    </script>
    Добро пожаловать, " . $login . ". Идет переадресация...
    ";
?>