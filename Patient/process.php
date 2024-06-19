<?php 
require_once('registration.php');
?>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'sproject', 3306);
if ($conn) {
        echo "Database connected successfully.";
    } else {
        echo"database conection unsucessful";
        echo mysqli_connect_error($conn); //this function prints db errors
    } 
if (
    isset($_POST, $_POST['email'], $_POST['password'])
    && !empty($_POST['email']) && !empty($_POST['password'])
) {
    $email = $_POST['email'];
    $userPass = $_POST['password'];

    $sql = "SELECT * FROM patient_register 
            WHERE email = '$email' AND password = '$userPass' 
            ";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) <= 0) {
        echo"no data";
        header('location:patient-login.php');
        exit;
    } else {
        $row = mysqli_fetch_assoc($query);
                            if (
                           $row['email'] == $email &&
                            $row['password'] == $userPass)
                            {
            
                             echo " sucessful login";
                             header('location: profile.php');
                               exit;
                               } else {
                                 echo" enter  correct details ";
                                  header('location:patient-login.php');
                                          exit;
                                            }
               }
} else {
   echo " fill the value";
    header('location:patient-login.php');
    exit;
}
?>

 