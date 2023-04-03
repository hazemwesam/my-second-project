<?php session_start(); 

$users_json = file_get_contents('json_project.json');
$users = json_decode($users_json,true);
$errors=[];
$errors_reg = [];

$email_reg =$_POST['email'];
$password_reg = $_POST['password'];
$id_reg = $_POST['id'];
$new_user =$_POST;
// $search_bool = FALSE;
$bool = FALSE;

// foreach($users as $u)
// {
//     if($_POST == $u)
//     {
//         $search_bool = TRUE;
//     }
// }
// echo $search_bool ;


if(!isset($_POST['id'])){
    $email = $_POST['email'] ;
    $password = $_POST['password'];
///////////////////////////////Login/////////////////////////////////
if(empty($email) || empty($password))
{
    if(empty($email))
    {
        $errors[] ="email is empty";
    }
    if(empty($password))
    {
        $errors[] ="password is empty";
    }

}
if(empty($errors))
{
    // $_SESSION['success'] = "data sent successful";
    // if(!isset($_SESSION['user'] ))
    // {
    // $_SESSION['user'] = [];
    // }
    // $_SESSION['user'][] = $_POST;
$user = $_POST;

// $user_json = json_encode($user);
for($i=0;$i<count($users);$i++)
{
    if($user['email'] == $users[$i]['email'] && $user['password'] == $users[$i]['password'])
    {
        $bool = TRUE;
        // $login_user = $users[$i];
        $_SESSION['login'] = $users[$i];
        header("location:profile.php");
    }
    
}

if($bool == false)
{
    $_SESSION['failed'] = "email or password is not correct";
    header("location:login.php");
}

}
else
{
    $_SESSION['fail'] = $errors;
    header("location:login.php");
}
}
else{
//////////////////////////////registraition//////////////////////////


if(empty($email_reg) || empty($password_reg) || empty($id_reg))
{
    if(empty($email_reg))
    {
        $errors_reg[] ="email is empty";
    }
    if(empty($password_reg))
    {
        $errors_reg[] ="password is empty";
    }
    if(empty($id_reg))
    {
        $errors_reg[] ="id is empty";
    }

}
else{

    $users[] = $new_user;
    $users_json = json_encode($users);
    file_put_contents('json_project.json',$users_json);
   
    // $_SESSION['registered'] = "registered is done";
 $_SESSION['success'] = "data sent successful";
    header("location: register.php");
}


if(!empty($errors_reg))
{
    $_SESSION['fail'] = $errors_reg;
    header("location : register.php");
}

}




?>


