<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("rest.php");

$path = str_replace("customerREST/", "", $_SERVER['REQUEST_URI']);
if(strstr($path, "?"))
{
    //$paramList = explode("?", $path)[1];
    $functionName = str_replace("/", "_", explode("?", $path)[0]);
}
 else {
    $functionName = str_replace("/", "_", $path);
}

if(isset($_SERVER['HTTP_ACCEPT']))
{
    $acceptHeader = $_SERVER['HTTP_ACCEPT'];
}
else
{
    $acceptHeader = "";
}

if($acceptHeader != "")
{
    $data = $_REQUEST;
    $method = $_SERVER['REQUEST_METHOD'];
    
    
    // Delete using DELETE Method
    /*if($method == "DELETE")
    {
        $query = "delete from customer where id = {$_REQUEST['id']}";
        mysql_query($query);

        print_r(array('reply' => "Customer Details Deleted Successfully Using DELETE Method."));
    }*/
    
    $response = call_user_func($functionName, array($data, $method));
    
    print_r(json_encode($response));
}
 else {
    echo "Sorry, No Header Specified.";
}
