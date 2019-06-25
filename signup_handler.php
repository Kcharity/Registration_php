<?php
if(isset($_POST['signup'])) {
    #form validation

    //grab the firstname
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        $firstname_err = "First name is required";
    };


    //grab the lastname
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        $lastname_err = "Last name is required";
    };


    //grab the email
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Email is required";
    };

    //grab the password
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password_err = "Password is required";
    };


    //grab date
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
    } else {
        $date_err = "Date is required";
    };

#create connection to the db
    #check if the connection is successful
    include 'config.php';

    $sql ="INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`, `reg_date`) VALUES (null,'$firstname','$lastname','$email','$password','$date')";

    #save user to the database
    #first check if insertion to the db is successful
    #mysql_query($conn,$sql)
    if(mysqli_query($conn,$sql)){ ;
    #if user is added successfully
    echo "user added to the db successfully";
    header( "location:index.php");
    }else{
        #if adding user is unsuccessful
        echo "failed to add the user to the database";
    }

}

?>