<?php

include('includes/dbcon.php');

 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 include('includes/nav2.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                   
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Admin Profile Card  -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-xs font-weight-bold text-primary text-uppercase mb-12">
                                            <a href="adminprofile.php" style="text-decoration:none;">  Admin Profile</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 <?php
                      $admin_num_query = "SELECT * from user WHERE usertype='admin'";
                      $admin_num_query_run = mysqli_query($con, $admin_num_query);

                      if($admin_total = mysqli_num_rows($admin_num_query_run))
                      {
                         echo '<h4 class="mb-0"> '.$admin_total.'</h4>';
                      }
                      else
                      {
                        echo " No Admin";
                      }

                                              ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Intern List Card  -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                
                                              <a href="register.php" style="text-decoration:none;">  Interns Profile</a></div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                
                                            <?php
                      $intern_num_query = "SELECT * from user WHERE usertype='user'";
                      $intern_num_query_run = mysqli_query($con, $intern_num_query);

                      if($intern_total = mysqli_num_rows($intern_num_query_run))
                      {
                         echo '<h4 class="mb-0"> '.$intern_total.'</h4>';
                      }
                      else
                      {
                        echo " No Admin";
                      }
                                              ?>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- List of Cvs Card  -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <a href="viewcv.php" style="text-decoration:none;"> List of Cvs</a>
                                            </div>
                                                    <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                        

                                                    <?php
                     // $cv_num_query = "SELECT * from user WHERE id";
                    //  $cv_num_query_run = mysqli_query($con, $cv_num_query);

                    //  if($cv_total = mysqli_num_rows($cv_num_query_run))
                     // {
                       //  echo '<h4 class="mb-0"> '.$cv_total.'</h4>';
                      //}
                      //else
                      //{
                        //echo " No Cv Here";
                      //}

                                              ?>


                                                    </div>
                                                </div>
                                               
                                       
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                      <!--  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>   

                    <!-- Content Row -->

                     </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           


 
   

            

    <?php
    include('includes/script.php');
   include('includes/footer.php');
    ?>

   
   

   
