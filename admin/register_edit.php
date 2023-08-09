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
        <h6 class="m-0 font-weight-bold text-primary"> Edit Intern Profile
 </h6>
</div>
<div class="card-body">
<?php
if(isset($_GET['error']))
                  {
   
                    if($_GET['error'] == 'invalidCharacters')
                    {
                      
                       ?>
                        <small class="alert alert-danger">Invalid Characters</small>
                        <hr>
                       <?php
                    }}
?>




    <?php 
    if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    

    $query ="SELECT * FROM user WHERE id='$id' ";
    $query_run = mysqli_query($con,  $query);
    foreach($query_run as $row)
    {
      ?>
<form action="code.php" method="POST">
    <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">
<div class="form-group">
           <label>Name</label>
           <input type="text" name="edit_name" id="edit_name" class="form-control" maxlength="20" required value="<?php echo $row['name'] ?>" placeholder="Enter Name">
           <small id="edit_nameError" style="color: red;"></small>

        </div>
        <script>
    document.getElementById('edit_name').addEventListener('input', function() {
        var edit_nameInput = this.value;
        var edit_nameError = document.getElementById('edit_nameError');

        if (edit_nameInput.length > 20) {
            edit_nameError.textContent = 'Username must be limited to 20 characters.';
        } else if (/[^a-zA-Z0-9_-]/.test(edit_nameInput)) {
            edit_nameError.textContent = 'Username  not contain special characters.';
        } else {
            edit_nameError.textContent = '';
        }
    });
</script>
        <div class="form-group">
           <label>Email</label>
           <input type="email" name="edit_email" id="edit_email" class="form-control" maxlength="20" required value="<?php echo $row['email'] ?>" placeholder="Enter email">
           <small id="emailError" style="color: red;"></small>

        </div>
        <script>
    document.getElementById('edit_email').addEventListener('input', function() {
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
           <label>Contact Number</label>
           <input type="text" name="edit_contact"  id="edit_contact"class="form-control" maxlength="11" required value="<?php echo $row['contact'] ?>" placeholder="Enter Contact Number">
           <span id="contact-error" style="color: red;"></span>

           <script>
        document.getElementById("edit_contact").addEventListener("input", function() {
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
           <label>Password</label>
           <input type="password" name="edit_password" class="form-control" maxlength="11" required value="<?php echo $row['password'] ?>" placeholder="Enter password">
        </div>
        <div class="form-group">
           <label>Usertype</label>
          <select name="update_usertype" class="form-control">
          <option value="user">User</option>
            <option value="admin">Admin</option>

          </select>
        </div>
        <a href="register.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" name="updatebtn" class="btn btn-primary"> Update</button>
        </form>
        <?php
    }
}
?>
   
</div>
</div>
</div>
</div>
<?php
    include('includes/script.php');
   include('includes/footer.php');
    ?>













