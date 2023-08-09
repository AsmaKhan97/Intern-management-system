<?php
include('security.php');
include('includes/dbcon.php');

if(isset($_POST['updateinternprofile']))
{
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
        header('Location: updateintern.php?error=invalidCharacters');
        exit;
    }

    else if(!empty($newname) && !empty($newemail)){
        // Check if email already exists (excluding the current user's email)
        $existingEmailQuery = "SELECT email FROM user WHERE email = '$newemail' AND email != '$_SESSION[name]'";
        $existingEmailResult = mysqli_query($con, $existingEmailQuery);
        
        if (mysqli_num_rows($existingEmailResult) > 0) {
            header('Location:updateintern.php?error=emailExists');
            exit;
        }

        $imageName = $image['name'];
        $fileType = $image['type'];
        $fileSize = $image['size'];
        $fileTmpName = $image['tmp_name'];
        $filleError = $image['error'];

        $fileImageData = explode('/', $fileType);
        $fileExtension = $fileImageData[count($fileImageData)-1];

        if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg') {
            if($fileSize < 5000000){
                $fileNewName = "upload/".$imageName;
                $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

                if($uploaded) {
                    $loggedInUser = $_SESSION['name'];

                    $sql = "UPDATE user SET name='$newname', email='$newemail', contact='$newcontact', password='$newpassword', image='$imageName'
                    WHERE email ='$loggedInUser'";

                    $results = mysqli_query($con, $sql);
                    header('Location:updateintern.php?success=userUpdated');
                    exit;
                }
            } else {
                header('Location:updateintern.php?error=invalidFileSize');
                exit;
            }
        } else {
            header('Location:updateintern.php?error=invalidFileType');
            exit;
        }  
    } else {
        header('Location:updateintern.php?error=emptyNameAndEmail');
        exit;
    } 
}
?>
