<?php

function getUsers()   //grab all data json as object 
{
    return json_decode(file_get_contents(filename:__DIR__.'/users.json'), TRUE);

}

function getUsersbyId($id) 
{
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id'] == $id){
            return $user;
        }
    }
    return null;

}

function createUser($data) 
{

}

//problem on update user section -- proceed with create user section
function updateUser($data, $id)    
{ 
    /*$updateUser = [];*/
    //getting users.json and store to $users
    $users = getUsers();   

    //looping all users.json  and install key as $i and new variable of value os $user
    foreach ($users as $key => $user) {
        //problem - why cant execute if otherwise Salah executed
        if ($user['id'] == $id) {
            //$users[$key] /*= $updateUser*/ = array_merge($user, $data);
            if(isset($data['name'])) {
                $users[$key]['name'] = $data['name'];
            }
        }
        echo "Error";
        
    }
    //file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));

    //putJson($users);

    //return $updateUser;

    echo "<pre>";
    var_dump($users);    
    echo "</pre>";
}
 
function deleteUser($id) 
{

}
 
/*
function putJson($users)
{
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}


function validateUser($user, &$errors)
{
    $isValid = true;
    // Start of validation
    if (!$user['name']) {
        $isValid = false;
        $errors['name'] = 'Name is mandatory';
    }
    if (!$user['username'] || strlen($user['username']) < 6 || strlen($user['username']) > 16) {
        $isValid = false;
        $errors['username'] = 'Username is required and it must be more than 6 and less then 16 character';
    }
    if ($user['email'] && !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errors['email'] = 'This must be a valid email address';
    }

    if (!filter_var($user['phone'], FILTER_VALIDATE_INT)) {
        $isValid = false;
        $errors['phone'] = 'This must be a valid phone number';
    }
    // End Of validation

    return $isValid;
}
*/


