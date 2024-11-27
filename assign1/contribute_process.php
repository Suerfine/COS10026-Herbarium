<?php
    $plantName = $_POST['plantName'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $species = $_POST['species'];
    $herbariumImg = $_POST['herbariumImg'];
    $herbariumLeafImg = $_POST['herbariumLeafImg'];

    if (!empty($plantName))||(!empty($family))||(!empty($genus))
    ||(!empty($species))||(!empty($herbariumImg))||(!empty($herbariumLeafImg)){
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='herbarium';

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn){
            die('failed to connect to db'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT id from contribution Where id = ? Limit 1";
            $INSERT = "INSERT into contribution (plant_name, plant_family, plant_genus, 
            plant_species, herbarium_img, fresh_leaf_img) values(?, ?, ?, ?, ?, ?)";

            $stmt = $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("ssssbb", $id);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0){
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("issssbb", $plantName, $family, $genus, 
                $species, $herbariumImg, $herbariumLeafImg);
                $stmt->execute();
                echo "Contribution data succesfully saved";
            }
            else{
            echo "ID has already contributed";
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