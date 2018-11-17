<?php

session_start();
if(isset($_SESSION['username']))
{
    if ($_SESSION['status_role']=='admin')
    {
        header("Location:client/user/admin/index.php");
    }
    else if($_SESSION['status_role']=='pemilik') {

    }else if($_SESSION['status_role']=='pencari') {

    }
}
else {
   echo "hallo";
}




?>