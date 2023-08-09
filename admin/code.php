<?php
include('security.php');
include('includes/dbcon.php');
error_reporting(E_ALL);

if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
   $cpassword = $_POST['confirmpassword'];
   $usertype = $_POST['usertype'];
  

   $emailquery = " select * from user where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);
 // Check for special characters in name and email fields
 if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name) ||
    preg_match('/[\'^£$%&*()}{#~?><>,|=_+¬-]/', $email) ||
    preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $contact)
) {
    header('Location: register.php?error=invalidCharacters');
    exit;
}

if($emailcount>0){
	
    $_SESSION['status'] = "Email Already Exist";
    header('Location: register.php');
}else{

if($password === $cpassword)
{
    $query = "INSERT INTO user (name,email,contact,password,confirmpassword,usertype) VALUES ('$name','$email','$contact','$password','$cpassword', '$usertype') ";
$query_run = mysqli_query($con,$query);

if($query_run)
{
  //echo "Saved";
  $_SESSION['success'] = "Intern Profile Added";
  header('Location: register.php');
}
else
{
    $_SESSION['status'] = "Intern Profile Not Added";
    header('Location: register.php');
}
}
else 
{ $_SESSION['status'] = "Password And Confirm Password Does Not Match";
    header('Location: register.php');}
}}













if(isset($_POST['updatebtn']))
{

    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    $contact = $_POST['edit_contact'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];


     // Check for special characters in name and email fields
     if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name) ||
        preg_match('/[\'^£$%&*()}{#~?><>,|=_+¬-]/', $email) ||
        preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $contact)
    ) {
        header('Location: register.php?error=invalidCharacters');
        exit;
    }




    //by  me
    $emailquery = " select * from user where email='$email' ";
    $query = mysqli_query($con,$emailquery);
    
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount>0){
        
        $_SESSION['status'] = "Email Already Exists";
        header('Location: register.php');
    }
    else{
    //by me

    $query ="UPDATE user SET name='$name',email='$email',contact='$contact',password='$password',usertype='$usertypeupdate' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      $_SESSION['success'] = " Data Is Updated";
      header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = " Data Is Not Updated";
        header('Location: register.php');
    }
}
}



if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM user WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if( $query_run)
    {
      $_SESSION['success'] = " Data Is Deleted";
      header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = " Data Is Not Deleted";
        header('Location: register.php');
    }
}







if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query ="SELECT * FROM user WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_fetch_array($query_run))
    {
      $_SESSION['name'] = $email_login;
      header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email Id Or Password Is Invalid";
        header('Location: login.php');
    }
}






if(isset($_POST['updateadmin']))
{

    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    $contact = $_POST['edit_contact'];
    $password = $_POST['edit_password'];
    $confirmpassword = $_POST['edit_confirmpassword'];
  

    $query ="UPDATE user SET name='$name',email='$email',contact='$contact',password='$password',confirmpassword='$confirmpassword',usertype='$usertypeupdate' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      $_SESSION['success'] = " Data Is Updated";
      header('Location: adminprofile.php');
    }
    else
    {
        $_SESSION['status'] = " Data Is Not Updated";
        header('Location: adminprofile.php');
    }
}




if (isset($_POST['updateadminprofile'])) {
    $newname = $_POST['updateUsername'];
    $newemail = $_POST['useremail'];
    $newcontact = $_POST['usercontact'];
    $newpassword = $_POST['userpassword'];
    $image = $_FILES['image'];
// Check for special characters in name and email fields
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $newname) ||
    preg_match('/[\'^£$%&*()}{#~?><>,|=_+¬-]/', $newemail) ||
    preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $newcontact)
) {
    header('Location: updateadmin.php?error=invalidCharacters');
    exit;
}

   else if(!empty($newname) && !empty($newemail)) {

      // Check if email already exists (excluding the current user's email)
      $existingEmailQuery = "SELECT email FROM user WHERE email = '$newemail' AND email != '$_SESSION[name]'";
      $existingEmailResult = mysqli_query($con, $existingEmailQuery);
      
      if (mysqli_num_rows($existingEmailResult) > 0) {
          header('Location:updateadmin.php?error=emailExists');
          exit;
      }


        $imageName   =  $image['name'];
        $fileType    =  $image['type'];
        $fileSize    =  $image['size'];
        $fileTmpName = $image['tmp_name'];
        $filleError  = $image['error'];

        $fileImageData =  explode('/', $fileType);
        $fileExtension = $fileImageData[count($fileImageData) - 1];


        if ($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg') {
            if ($fileSize < 5000000) {
                $fileNewName = "upload/" . $imageName;

                $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

                if ($uploaded) {
                    $loggedInUser = $_SESSION['name'];

                    $sql = "UPDATE user SET name='$newname',email='$newemail',contact='$newcontact',password='$newpassword',image='$imageName'
                    WHERE email ='$loggedInUser'";

                    $results = mysqli_query($con, $sql);


                    header('Location:updateadmin.php?success=userUpdated');
                    exit;
                }
            } else {
                header('Location:updateadmin.php?error=invalidFileSize');
                exit;
            }
            exit;
        } else {
            header('Location:updateadmin.php?error=invalidFileType');
            exit;
        }
    } else {
        header('Location:updateadmin.php?error=emptyNameAndEmail');
        exit;
    }
}

?>
