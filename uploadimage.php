<?php



$allow = array("jpg", "jpeg", "gif", "png");

$todir = 'views/uploads/';
echo ($_FILES["file"]["name"]);
echo("What!What");

if ( $_FILES['file']['tmp_name'] ) // is the file uploaded yet?
{
    echo ("inside if");
    $info = explode('.', strtolower( $_FILES['file']['name']) ); // whats the extension of the file

    if ( in_array( end($info), $allow) ) // is this file allowed
    {
        if ( move_uploaded_file( $_FILES['file']['tmp_name'], $todir . basename($_FILES['file']['name'] ) ) )
        {
            // the file has been moved correctly
            echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        }
    }
    else
    {
        // error this file ext is not allowed
         echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
}