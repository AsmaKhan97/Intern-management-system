<?php
include('security.php');
include('includes/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/nav2.php');
?>

<div class="container-fluid">
    <!-- datatables example-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
        </div>
        <div class="card-body">
         <?php
         if(isset($_GET['success']))
         {
            if($_GET['success'] == 'userUpdated'){
                ?>
                <small class="alert alert-success">User Updated Successfully</small>
                <hr>
                <?php
            }

         }
                  if(isset($_GET['error']))
                  {
   
                    if($_GET['error'] == 'invalidCharacters')
                    {
                      
                       ?>
                        <small class="alert alert-danger">Invalid Characters</small>
                        <hr>
                       <?php
                    }
                   else if($_GET['error'] == 'emailExists')
                    {
                      
                       ?>
                        <small class="alert alert-danger">Email already exists</small>
                        <hr>
                       <?php
                    }
        else if($_GET['error'] == 'emptyNameAndEmail')
         {
           
            ?>
             <small class="alert alert-danger">Name and email is required</small>
             <hr>
            <?php
         }
         else if($_GET['error'] == 'invalidFileType')
         {
            ?>
            <small class="alert alert-danger">Invalid File Type, Only Images allowed</small>
          <hr>
          <?php
         }
         
         
         else if($_GET['error'] == 'invalidFileSize'){
            ?>
            <small class="alert alert-danger">Maximum 5mb Image Size Allowed</small>
         <hr>
         <?php
         }
         }


?>

<?php
// if(isset($_SESSION['success']) && $_SESSION['success'] !='')
 //{
  //echo '<h2 class="bg-primary text-white">' .$_SESSION['success'].'</h2>';
  //unset($_SESSION['success']);
 //}
 //if(isset($_SESSION['status']) && $_SESSION['status'] !='')
 //{
  //echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
  //unset($_SESSION['status']);
 //}
?>




 
   <form action="code.php" method="post" enctype="multipart/form-data">
                <?php
                $currentUser = $_SESSION['name'];
                $sql = "SELECT * FROM user WHERE email='$currentUser'";
                $gotResults = mysqli_query($con, $sql);

                if ($gotResults && mysqli_num_rows($gotResults) > 0) {
                    while ($row = mysqli_fetch_array($gotResults)) {
                        ?>
                  <div class="form-group">
    <label for="updateUsername">Name</label>
    <input type="text" name="updateUsername" id="updateUsername" maxlength="20" value="<?php echo $row['name']; ?>" class="form-control" required placeholder="Enter Name">
    <small id="usernameError" style="color: red;"></small>
</div>

<script>
    document.getElementById('updateUsername').addEventListener('input', function() {
        var updateUsernameInput = this.value;
        var usernameError = document.getElementById('usernameError');

        if (updateUsernameInput.length > 20) {
            usernameError.textContent = 'Username must be limited to 20 characters.';
        } else if (/[^a-zA-Z0-9_-]/.test(updateUsernameInput)) {
            usernameError.textContent = 'Username  not contain special characters.';
        } else {
            usernameError.textContent = '';
        }
    });
</script>

<div class="form-group">
    <label for="useremail">Email</label>
    <input type="email" name="useremail" id="useremail" class="form-control" maxlength="20" value="<?php echo $row['email']; ?>" required placeholder="Enter email">
    <small id="emailError" style="color: red;"></small>
</div>

<script>
    document.getElementById('useremail').addEventListener('input', function() {
        var emailInput = this.value;
        var emailError = document.getElementById('emailError');

        if (emailInput.length > 20) {
            emailError.textContent = 'Email must be limited to 20 characters.';
        } else if (/[^a-zA-Z0-9@._-]/.test(emailInput)) {
            emailError.textContent = 'Email must not contain special characters.';
        } else {
            emailError.textContent = '';
        }
    });
</script>

<div class="form-group">
    <label for="usercontact">Contact Number</label>
    <input type="text" name="usercontact" id="usercontact" class="form-control" value="<?php echo $row['contact']; ?>" maxlength="11" placeholder="Enter Contact Number" required>
    <span id="contact-error" style="color: red;"></span>

    <script>
        document.getElementById("usercontact").addEventListener("input", function() {
            var contact = this.value;
            var errorSpan = document.getElementById("contact-error");
            var regex = /^[0-9]{1,11}$/;

            if (!regex.test(contact)) {
                errorSpan.textContent = "Invalid contact number. Please enter 11 digits without special characters.";
            } else {
                errorSpan.textContent = "";
            }
        });
    </script>
</div>

<div class="form-group">
    <label for="userpassword">Password</label>
    <input type="password" name="userpassword"  class="form-control" maxlength="11" value="<?php echo $row['password']; ?>" placeholder="Enter password" required>
</div>

                        <div class="form-group"> 
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                           
                        </div>
                        <a href="internprofile.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="updateinternprofile" class="btn btn-primary">Update</button>
                    <?php
                    }
                }
                ?>
            </form>
        </div>
    </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');
?>
