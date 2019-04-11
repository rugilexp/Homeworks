<!--Admino prisijungimo tikrinimas-->
<?php
    session_start();
    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $uid = mysqli_real_escape_string($conn, $_POST['vardas']);
        $pwd = mysqli_real_escape_string($conn, $_POST['slaptazodis']);
        if(empty($uid) || empty($pwd)) {
            header("Location: ../index.php?=login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM login WHERE Vardas = '$uid' AND Slaptazodis = '$pwd'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if ($result_check < 1) {
                header("Location: ../index.php?=login=error");
                exit();
            } else {
                $_SESSION['vardas'] = $row['Vardas'];
                $_SESSION['slaptazodis'] = $row['Slaptazodis'];
                header("Location: ../rezervacijos/index.php");
                exit();
            }
            }
    } else {
            header("Location: ../index.php?=login=error3");
            exit();
    }
