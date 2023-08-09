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
        <h2 class="m-0 font-weight-bold text-primary"> List of CV
      
 </h2>
</div>
<div class="card-body">
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
     // Fetch the data from the cv_table
$sql = "SELECT id, cv_name, user_id, timestamp FROM cv_table";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'  width='100%' cellspacing='0'>";
    echo "<tr><th>ID</th><th>CV Name</th><th>Date and Time</th><th>Download CV</th><th>Delete CV</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["cv_name"]."</td>";
        
        echo "<td>".$row["timestamp"]."</td>";
        echo "<td class='text-center'>";
        echo "<a href='download.php?id=".$row["id"]."' class='btn btn-success'>Download</a>  ";
        echo "</td>";
		echo "<td class='text-center'
		>";
        echo "<a href='delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No CV data found.";
}

// Close the database connection
$con->close();
?>


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