<?php
require('conn.php');

//log user in from login page
if (isset($_POST['login']))
{
    $username= ($_POST['username']);
    $pass1= ($_POST['password']);

    if($username=="admin" && $pass1=="admin@2020"){
        header("Location: admin.php");	
    }else{
        echo '<script type="text/javascript">
             window.onload = function () { alert("Username or password incorrect..!!"); }
            </script>';
    }
    
// if(empty($username))
// {
// 	array_push($errors, "Username is required");
// }

// if(empty($pass1))
// {
// 	array_push($errors, "Password is required");
// }

// if (count($errors)==0){
// 	$password1= md5($pass1);//encript password before comparing with that from data base
// 	$result=$mysqli->query("SELECT * FROM users WHERE user_name='$username' AND password='$password1'");
// 	// $result = mysqli_query($mysqli, $query);

// 	if(mysqli_num_rows($result)==1){
// 		$row = mysqli_fetch_assoc($result);
// 		$user_id = $row['user_id'];
		
// 		$_SESSION["user_id"] = $user_id;

// 		header("Location: admin.php");		    
// 		}else{
//             // array_push($errors,"wrong username/password");
//             echo '<script type="text/javascript">
//             window.onload = function () { alert("Username or password incorrect..!!"); }
//             </script>';
// 		}   
// }
}

if (isset($_POST['submit_about'])) {
    $name = ($_REQUEST['name']);
    $desc = ($_REQUEST['description']);
    $mobile = ($_REQUEST['mobile']);
    $email = ($_REQUEST['email']);
    $image = ($_REQUEST['image']);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo '
        <script type="text/javascript">
        alert("Please upload an image."); 
        window.location.href="index.php";
  </script>';
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $mysqli->query("UPDATE about
            SET name='$name', description='$desc', phone='$mobile', email='$email', image='$target_file'
            WHERE id=1");
            echo '
			<script type="text/javascript">
				  alert("Event has been updated successfully..!"); 
				  window.location.href="index.php";
			</script>';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // echo "$name / $desc / $mobile / $email";
}


// Delete Image
if (isset($_GET['image_delete']))
{
$image_id = ($_GET['id']);
$mysqli->query("DELETE FROM portfolio_images WHERE id=$image_id;");

header("Location: admin.php#portfolio_image");
}

if(isset($_GET['logout'])){
    session_destroy();
    header('location:index.php');
    }