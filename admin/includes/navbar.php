

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                  <!--  <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">IMS Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

        

             <!--       Admin PROFILE     -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"  data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Detail</h6>
                        <a class="collapse-item" href="adminprofile.php">Update Profile</a>
                    </div>
                </div>
                
            </li>

            <!--       Inters PROFILE     -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="register.php" data-toggle="collapse"  data-target="#collapseIntern"
                    aria-expanded="true" aria-controls="collapseIntern">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Interns Profile</span>
                </a>
                <div id="collapseIntern" class="collapse" aria-labelledby="headingIntern" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Intern's Detail</h6>
                        <a class="collapse-item" href="register.php">Add Intern</a>
                    </div>
                </div>
                
            </li>
            <!--      List of Cvs    -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"  data-target="#collapseCv"
                    aria-expanded="true" aria-controls="collapseCv">
                    <i class="fas fa-fw fa-file"></i>
                    <span>List of Cv</span>
                </a>
                <div id="collapseCv" class="collapse" aria-labelledby="headingCv" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cv's Detail</h6>
                        <a class="collapse-item" href="viewcv.php">View Cv</a>
                    </div>
                </div>
                
            </li>

          

            <!-- Divider -->
            <hr class="sidebar-divider">

    

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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