<?php


#create a database connection
$conn = mysqli_connect('localhost', 'root', "", 'Registration' );

#check connection is working
if(!$conn){
    #mysqli_connect_error():is a function that stores/contains the error msg for connection
    die("connection failed".mysqli_connect_error());

}else{
    #when connection is successful, we can proceed to create, read, update,delete(CRUD)
    echo"connection to the db successful";
}
?>