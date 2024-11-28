<?php
    $plantName = $_POST['plantName'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $species = $_POST['species'];
    $herbariumImg = $_POST['herbariumImg'];
    $herbariumLeafImg = $_POST['herbariumLeafImg'];

    if (!empty($plantName))||(!empty($family))||(!empty($genus))
    ||(!empty($species))||(!empty($herbariumImg))||(!empty($herbariumLeafImg)){
        include("conn.php");

        if(!$conn){
            die('failed to connect to db'.mysqli_connect_error());
        }
        else{
            $INSERT = "INSERT into contribution (plant_name, plant_family, plant_genus, 
            plant_species, herbarium_img, fresh_leaf_img) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("issssbb", $plantName, $family, $genus, 
            $species, $herbariumImg, $herbariumLeafImg);
            $stmt->execute();
            
            if ($stmt->execute()){
                echo "Contribution data succesfully saved";
            }
            else{
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
