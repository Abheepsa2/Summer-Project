<?php
$conn = mysqli_connect('localhost', 'root', '','sproject', 3306);
if ($conn) {
    echo "Database connected successfully.";
} else {
    echo"database conection unsucessful";
    echo mysqli_connect_error($conn); //this function prints db errors
} 


//     $sql = "INSERT INTO patient_register
//             ( id ,firstname,lastname, address,number,gender,email,password,confirmpassword)
//             VALUES
//             ($firstname, $lastname,$address,$contact)
            
//         ";

// //executing a SQL query
// $query = mysqli_query($conn, $sql); //this function returns true or false

// if ($query) {
//     //success
//     echo "Data Inserted Successfully.";
// } else {
//     echo mysqli_error($conn); //this function prints db errors
// }
//     echo $firstname."  ". $lastname."  " . $address."  " . $contact."  " . $gender."  " . $password."  " . $conpassword;

?>