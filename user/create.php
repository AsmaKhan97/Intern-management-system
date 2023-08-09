<?php

include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/nav2.php');


?>


<div class="container mt-4">
    <div class="row">
       <div class="col-md-12">
       <div class="card">
        <div class="card-header">
            <h4>Insert Image in php</h4>
           </div>
            <div class="card-body">

<?php
if(isset($_SESSION['status']) && $_SESSION != '')
{
  ?>

  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  <?php
  unset($_SESSION['status']);
}

?>

            


              <form action="code.php" method="POST" enctype="multipart/form-data">
            
              <div class="form-group"> 
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                  </div>

             <div class="form-group"> 
             <label for="">Email</label>
               <input type="email" name="email" class="form-control" required placeholder="Enter Email">
                  </div>


             <div class="form-group"> 
             <label for="">Contact</label>
               <input type="text" name="contact" class="form-control" required placeholder="Enter Contact">
                  </div>

            <div class="form-group"> 
            <label for="">Password</label>
                 <input type="password" name="password" class="form-control" required placeholder="Enter Password">
                  </div>

                  <div class="form-group"> 
            <label for="">Image</label>
                 <input type="file" name="image"  class="form-control">
                  </div>

                  <div class="form-group">
                    <button type="submit" name="save_image"class="btn btn-primary">Save</button>

                    </form>


   </div>
 </div>
 </div>
 </div>
</div>







    


</div>

</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>






<?php
    include('includes/script.php');
   include('includes/footer.php');
    ?>
