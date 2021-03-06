<?php include '_dbconnect.php';?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8ba1bf8786.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   

    <title>jasonactivity</title>
</head>

<body>
    <!-- <?php include 'includes/_header.php'; ?> -->
    <div class="container-fluid  py-3 team">

        <h2 class="text-center"><i class="fas fa-users"></i> Our Team</h2>
        <?php $select_query="SELECT * FROM `mydemo`";
            // print_r($select_query);
            $result=mysqli_query($con,$select_query);
            print_r($result) ?>

    </div>
    <div class="container-fluid cont-background">

        <div class="row ">
            <?php
            

            //here we wd fetch data from database 
            
            
           

            //put fetch data into arrays 
            $array_data=array();
            while($fetched_rows=mysqli_fetch_assoc($result)){
                $array_data[]=$fetched_rows;

            }
            //now encode arrayadata into json format and 
            $file_Pointer=fopen('employee.json','w');
            //write data into jason file 
            if(!fwrite($file_Pointer,json_encode($array_data))){
                echo'error';
            }
            else{
                echo "data retrieve gracefully";
            }
            //fclose($file_Pointer);
            //now decode json file data and use in cards 

            $jsonData = file_get_contents("employee.json");
            $json = json_decode($jsonData, true);
           

            foreach ($json as $team_member) {

                $output = '<div class="col md-4  my-2">
                <div class="card " style="width:18rem;">
                    
                    <img src="' . $team_member['profile_photo'] . '"; class="card-img-top" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">' . $team_member['fullname'] . '</h5>
                        <h4>' . $team_member['designation'] . '</h4>
                       
                        
                        
                        <p class="card-text">' . $team_member['description'] . '</p>
                            
                    </div>
                </div>
            </div>';
                echo $output;
            }


            ?>



        </div>
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


</body>

</html>