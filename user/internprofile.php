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
        <h2 class="m-4 font-weight-bold text-primary"> My Profile
       
 </h2>
</div>
<div class="card-body" >

      

<section class="vh-100" >
  <div class="container py-1 h-800">
    <div class="row d-flex justify-content-center  h-100" >
      <div class="col-md-12 col-xl-6">

        <div class="card" >
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
    
 <img src="<?php  echo $_SESSION['image']; ?>" alt="User Image" style= "width:100px; height:100px; border-radius:50%;">  
            </div>

            <h5 class="mb-2">   <?php  echo ($_SESSION['name']); ?> <?php // echo $name; ?></h5>

            <form action="updateintern.php" method="POST">
          

            <a href="index.php" class="btn btn-secondary">Cancel</a>         
        <button type="submit" name="Update" class="btn btn-primary">Update </button>
</form>
            
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

    </div>
    </div>
    </div>
</div>

<!-- container fluid -->

<?php
    include('includes/script.php');
   include('includes/footer.php');
    ?>