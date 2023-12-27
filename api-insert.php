<?php 

    header("Content-Type: application/json"); 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-headers: Access-Control-Allow-headers, Content-Type, Access-Control-Allow-Methods, Authorization");

    ## DATABASE CONNECTION
    $con = mysqli_connect("localhost", "root", "", "bondstein_rest_api") or die("Connection Failed");


    $data = json_decode(file_get_contents("php://input"), true);


   if(!empty($data['pid']) && !empty($data['uid']) && !empty($data['review'])){


        ## PRODUCT ID VALIDATION
        function isValidProID($pid){
            if(is_numeric($pid)){
                return $pid;
            }else{
                $error = "Product id must be numberic";
                return $error;
            }
        }

        $product_id = isValidProID($data['pid']);

        ## USER ID VALIDATION
        function isValidUID($uid){
            if(is_numeric($uid)){
                return $uid;
            }else{
                $error = "User id must be numberic";
                return $error;
            }
        }

        $user_id = isValidUID($data['uid']);
        $review = $data['review'];


         $q = "INSERT INTO `product_review`(`id`, `product_id`, `user_id`, `review`) VALUES (NULL,'$product_id','$user_id','$review')";

         if(mysqli_query($con, $q)){
            echo json_encode(array(
                "message"=> "Valided Successfully!",
                "status"=> true
            ));
        }

   }else{
        echo json_encode(array(
            "message"=> "Please Validate Data!",
            "status"=> false
        ));
   }

?>