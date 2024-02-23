<?php
$Name=filter_input(INPUT_POST,'Name');
$Email =filter_input(INPUT_POST,'Email');
$Contact =filter_input(INPUT_POST,'Contact');
$Address =filter_input(INPUT_POST,'Address');
if(!empty('Name')){
    if(!empty('Email')){
        $host="localhost";
        $dbName = "root";
        $dbEmail = "";
        $dbContact = "";
        $dbAddress = "";
        $dbname="fooddonate";

        $conn= new mysqli ( $host, $dbName , $dbEmail , $dbContact ,  $dbAddress ,$dbname=);
        if(mysqli_connection_error()){
            die('connection error (' mysqli_connection_error().')' 
            . mysqli_connection_error()); 
        }
        else{
            $sql= "INSERT INFO account(Enter Your Name,Enter Your Email,Enter Your Contact,Enter Your Address)
            values("$Name","$Email","$Contact","$Address")";
            if($conn->query($sql)){
                echo="New record is inserted successfully";
            }
            else{
                echo  "Error:" .$sql ."<br>" .$conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo(" Your Email should not be empty");
        die();

}
else{
    echo(" Your name should not be empty");
    die();

}
?>
