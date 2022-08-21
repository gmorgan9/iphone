<?php

//creating response array
$response = array();

if($_SERVER['REQUEST_METHOD']=='POST'){

    // //getting values
    // $teamName = $_POST['name'];
    // $memberCount = $_POST['member'];

    include("../includes/DbOperation.php");

    //inserting values 
    if($result == true){
        $response['error']=false;
        $response['message']='Team added successfully';
    }else{

        $response['error']=true;
        $response['message']='Could not add team';
    }

}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}
echo json_encode($response);