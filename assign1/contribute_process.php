<?php
    $plantName = $_POST['plantName'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $species = $_POST['species'];

    if ((!empty($plantName))||(!empty($family))||(!empty($genus))
    ||(!empty($species))||(!empty($herbariumImg))||(!empty($herbariumLeafImg))){
        
        if (isset($_FILES["herbariumImg"]) && $_FILES["herbariumImg"]["error"]===0 && 
            isset($_FILES["herbariumLeafImg"]) && $_FILES["herbariumLeafImg"]["error"]===0){
            
            $herbariumImg = file_get_contents($_FILES["herbariumImg"]["tmp_name"]);
            $herbariumLeafImg = file_get_contents($_FILES["herbariumLeafImg"]["tmp_name"]);
        
            include("conn.php");

            if(!$conn){
                die('failed to connect to db'.mysqli_connect_error());
            }
            else{
                $INSERT = "INSERT into contribution (plant_name, plant_family, plant_genus, 
                plant_species, herbarium_img, fresh_leaf_img) values(?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssbb", $plantName, $family, $genus, $species, $herbariumImg, $herbariumLeafImg);
                
                if ($stmt->execute()){
                    echo "Contribution data succesfully saved";
                }
                else{
                echo "Failed to insert data";
                }
                $stmt->close();
                $conn->close();
            }
            }else{
                echo "Failed to upload images";
            }
    }
    else{
        echo "Requires all fields";
        die();
    }
?>
