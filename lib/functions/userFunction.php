<?php

//include database connection
include_once("db_conn.php");


//creat user Registration function

function userRegistration($userName,$userLast,$userEmail,$userPass){
    //database connection 
    $db_conn = Connection();
    //data insert query
    $insertSql = "INSERT INTO user_tbl(user_name,user_last,user_email,user_status)
    VALUES('$userName','$userLast','$userEmail',1);";

    $sqlResult = mysqli_query($db_conn , $insertSql);

    //check database connection errors
    if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }
    //if the registration result is success we can feed data into login table
    if($sqlResult > 0){
        //use MD5 method  to our password
        $newPassword = md5($userPass);

        $insertLogin = "INSERT INTO login_tbl(login_email,login_pwd,login_role,login_status)
        VALUES('$userEmail','$newPassword','user',1);";

        $loginResult = mysqli_query($db_conn ,$insertLogin);

         //check database connection errors
    if(mysqli_connect_error()){
        echo(mysqli_connect_error());
    } 
     
    return("Your Registration Success!");


    }else{
        return("Please Try Again!");
    }
}

//login function

function Authentication($userName,$userPass){
    //call database connection
    $db_conn = Connection();

    $sqlFetchUser = "SELECT * FROM login_tbl  WHERE login_email ='$userName' ;";
    $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

     //check database connection errors
     if(mysqli_connect_errno()){
        echo(mysqli_connect_error());
    }

    //convert user password into a hash value 
    $newpass = md5($userPass);

    //check the number of the rows 
    $norows = mysqli_num_rows($sqlResult);

    //validating the number of records > 0 or not
    if($norows > 0){
        //fetch the user records
        $rec = mysqli_fetch_assoc($sqlResult);

        //validate the password
        if($rec['login_pwd']==$newpass){
            // validate the user login status
            if($rec['login_status'] == 1){
               if($rec['login_role']== "admin"){
                //redirect this user admin dashboard
                header('location:lib/views/dashboard/admin.php');
               }else{
                   //redirect this user user dashboard
                header('location:lib/views/dashboard/user.php');
               }
            }else{
                return("Your Account Has Been Diactivated");
            }
        }else{
            return("Your Password Is Not Correct Try Again");
        }
    }else{
        return("No Records Are Found!");
    }

}



?>