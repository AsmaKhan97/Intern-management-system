

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                  <!--  <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">IMS INTERN </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

    

           

        

             <!--       Intern PROFILE     -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"  data-target="#collapseIntern"
                    aria-expanded="true" aria-controls="collapseIntern">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span>
                </a>
                <div id="collapseIntern" class="collapse" aria-labelledby="headingIntern" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile's Detail</h6>
                        <a class="collapse-item" href="internprofile.php">Update Profile</a>
                    </div>
                </div>
                
            </li>

            <!--      List of Cvs    -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"  data-target="#collapseCv"
                    aria-expanded="true" aria-controls="collapseCv">
                    <i class="fas fa-fw fa-folder"></i>
                    <span> Cv Builder Form</span>
                </a>
                <div id="collapseCv" class="collapse" aria-labelledby="headingCv" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Cv Detail</h6>
                        <a class="collapse-item" href="cv.php">Build Cv</a>

                        
                    </div>
                </div>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

    

      

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->


         <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
         <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="logout.php" method="POST">
           <button type="submit" name="logout_btn"class="btn btn-primary">Logout</button>

                    </form>
                  
                </div>
            </div>
        </div>
    </div>