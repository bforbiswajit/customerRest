<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conn = mysql_connect("localhost", "root", "biswajit_2014");
$db = mysql_select_db("test",$conn);

function _get($data)
{
    if($data[1] == "POST")
    {
        if(isset($data[0]['id']))
        {
            $query = "select * from customer where id = {$data[0]['id']}";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result, MYSQLI_ASSOC))
            {
                $jsonData[] = $row;
            }
            return $jsonData;
        }
        else
        {
            $query = "select * from customer";// where id = {$data[0]['id']}";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result, MYSQLI_ASSOC))
            {
                $jsonData[] = $row;
            }
            return $jsonData;
        }
    }
    else {
        return array('reply' => "Sorry, Method Not Supported.");
    }
}

function _post($data)
{
    if($data[1] == "POST")
    {
        $query = "insert into customer values('id', '{$data[0]['fName']}', '{$data[0]['lName']}', '{$data[0]['email']}', '{$data[0]['age']}')";
        mysql_query($query);
        return array('data' => "Data Added Successfully.");
    }
}

function _delete($data)
{
    if(isset($data[0]['id']))
    {
        $query = "delete from customer where id = {$data[0]['id']}";
        mysql_query($query);

        return array('reply' => "Customer Details Deleted Successfully.");
    }
    else {
        return array('reply' => "Please Provide Customer ID.");
    }
}

function _update($data)
{
    if(isset($data[0]['id']) && isset($data[0]['fName']) && isset($data[0]['lName']) && isset($data[0]['email']) && isset($data[0]['age']))
    {
        $query = "update customer set fName = '{$data[0]['fName']}', lName = '{$data[0]['lName']}', email = '{$data[0]['email']}', age = '{$data[0]['age']}' where id = '{$data[0]['id']}'";
        mysql_query($query);
        
        return array('reply' => "Customer Details Updated Successfully.");
    }
 else {
        echo "Sorry, Failed to update.";
    }
}
