<?php
 include('security.php');

 include('includes/dbcon.php');
 include('includes/header.php');
 include('includes/navbar.php');
include('includes/nav2.php');



?>

        <!-- Content Wrapper add it-->
   

<!-- Modal -->

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Intern </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
           <label>Name</label>
           <input type="text" name="name" class="form-control" id="name" required maxlength="20" placeholder="Enter Name" >
           <small id="nameError" style="color: red;"></small>

          </div>
          <script>
    document.getElementById('name').addEventListener('input', function() {
        var nameInput = this.value;
        var nameError = document.getElementById('nameError');

        if (nameInput.length > 20) {
            nameError.textContent = 'name must be limited to 20 characters.';
        } else if (/[^a-zA-Z0-9_-]/.test(nameInput)) {
            nameError.textContent = 'name must not contain special characters.';
        } else {
            nameError.textContent = '';
        }
    });
    </script>
        <div class="form-group">
           <label>Email</label>
           <input type="email" name="email" class="form-control" id="email" required maxlength="20" placeholder="Enter email">
           <small id="emailError" style="color: red;"></small>
          </div>
          <script>
    document.getElementById('email').addEventListener('input', function() {
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
           <input type="text" name="contact" id="contact" class="form-control" id="contact" required maxlength="11" placeholder="Enter Contact Number">
           <span id="contact-error" style="color: red;"></span>
           <script>
        document.getElementById("contact").addEventListener("input", function() {
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
           <input type="password" name="password" class="form-control"  required maxlength="11" placeholder="Enter password">
        </div>
        <div class="form-group">
           <label>Confirm Password</label>
           <input type="password" name="confirmpassword" class="form-control"  required maxlength="11" placeholder="Enter confirm password">
        </div>
        <input type="hidden" name="usertype" value="user">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save </button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">
    <!-- datatables example-->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary"> Intern Profile
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
<h5>Add Intern Profile</h5>
</button>
 </h3>
</div>
<div class="card-body">

<?php
if(isset($_GET['error']))
                  {
   
                    if($_GET['error'] == 'invalidCharacters')
                    {
                      
                       ?>
                        <h2 class="bg-danger text-white">Invalid Characters</h2>
                        <hr>
                       <?php
                  } }?>


  <?php
 if(isset($_SESSION['success']) && $_SESSION['success'] !='')
 {
  echo '<h2 class="bg-primary text-white">' .$_SESSION['success'].'</h2>';
  unset($_SESSION['success']);
 }
 if(isset($_SESSION['status']) && $_SESSION['status'] !='')
 {
  echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
  unset($_SESSION['status']);
 }
?>
    <div class="table-responsive">
      <?php
     $query = "SELECT * FROM user";
     $query_run = mysqli_query($con, $query);
      ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Id</th>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                 <!--   <th>Password</th>
                    <th>Usertype</th>     -->
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
              while($row = mysqli_fetch_assoc($query_run))
              {
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                   <!-- <td><?php //echo $row['password']; ?></td>
                    <td><?php //echo $row['usertype']; ?></td> -->
                    <!-- <td> 
                    <img src="<?php //echo "../user/upload/".$row['image'];?>" width="40px" alt="Image">  
                    </td>    -->

                  

                  <td>    
                  <form action="register_edit.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                  </form>
                </td>
                  <td>
                  <form action="code.php" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id'];  ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button></td>
                   </form>
              </td>
                </tr> 
                <?php
              }
            }
            else
            {
              echo "No record found";
            }
            ?>
              </tbody>
        </table>

    </div>
    </div>
    </div>
    </div>
</div>

<!-- container fluid -->

<?php
    include('includes/script.php');
   include('includes/footer.php');
    ?>