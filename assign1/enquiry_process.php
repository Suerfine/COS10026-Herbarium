<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $tutorial = $_POST['tutorial'];

    if ((!empty($fname))||(!empty($lname))||(!empty($email))
    ||(!empty($street))||(!empty($city))||(!empty($state))||(!empty($postcode))
    ||(!empty($phone))||(!empty($tutorial))){
        include("conn.php");

        if(!$conn){
            die('failed to connect to db'.mysqli_connect_error());
        }
        else{
            $INSERT = "INSERT into enquiry (first_name, last_name, email, 
            street_address, `city/town`, `state`, postcode, phone_no, tutorial) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssiis", $fname, $lname, $email, 
            $street, $city, $state, $postcode, $phone, $tutorial);
           
            if ($stmt->execute()){
                echo "Enquiry data succesfully saved";
            }else{
                echo "Failed to insert data";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else{
        echo "Requires all fields";
        die();
    }
?>
