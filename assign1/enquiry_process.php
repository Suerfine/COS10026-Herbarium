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

    if (!empty($id))||(!empty($plant_name))||(!empty($plant_family))||(!empty($plant_genus))
    ||(!empty($plant_species))||(!empty($herbarium_img))||(!empty($fresh_leaf_img)){
        include("conn.php");

        if(!$conn){
            die('failed to connect to db'.mysqli_connect_error());
        }
        else{
            $INSERT = "INSERT into contribution (first_name, last_name, email, 
            street_address, 'city/town', 'state', postcode, phone_no, tutorial) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssiis", $fname, $lname, $email, 
            $street, $city, $state, $postcode, $phone, $tutorial);
            $stmt->execute();

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
