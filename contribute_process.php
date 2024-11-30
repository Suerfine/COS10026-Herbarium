<?php
    $plantName = $_POST['plantName'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $species = $_POST['species'];

    //message to be sent back to the contribute page;
    $msg="";

    if ((!empty($plantName))||(!empty($family))||(!empty($genus))
    ||(!empty($species))||(!empty($herbariumImg))||(!empty($herbariumLeafImg))){
        
        if (isset($_FILES["herbariumImg"]) && $_FILES["herbariumImg"]["error"]===0 && 
            isset($_FILES["herbariumLeafImg"]) && $_FILES["herbariumLeafImg"]["error"]===0){
            
            //creates path names to where the image will be saved.
            $herbariumImgPath="images\user_images\contribute\herb\\".$_FILES["herbariumImg"]["name"];
            $herbariumLeafImgPath="images\user_images\contribute\leaf\\".$_FILES["herbariumImg"]["name"];
            //moved the uploaded image to the path name defined above. 
            if(!(move_uploaded_file($_FILES["herbariumImg"]["tmp_name"], $herbariumImgPath)
                && move_uploaded_file($_FILES["herbariumLeafImg"]["tmp_name"],$herbariumLeafImgPath))){
                $msg="Image uncesfully moved.";
            }

            include("conn.php");
            if(!$conn){
                die('failed to connect to db'.mysqli_connect_error());
            }else{
                $INSERT = "INSERT into contribution (plant_name, plant_family, plant_genus, 
                plant_species, herbarium_img, fresh_leaf_img) values(?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssss", $plantName, $family, $genus, $species, $herbariumImgPath, $herbariumLeafImgPath);
                
                if ($stmt->execute()){
                    $msg="Contribution data succesfully saved";
                }else{
                    $msg="Failed to insert data";
                }
                $stmt->close();
                $conn->close();
            }
            }else{
                $msg="Failed to upload images";
            }
    }
    else{
        $msg="Requires all fields";
    }
    header("location:contribute.php?msg=$msg");
?>
