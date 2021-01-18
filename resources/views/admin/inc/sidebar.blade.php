<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! url('/home') !!}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{!! Auth::user()->name !!}</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/home') !!}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogo" aria-expanded="true" aria-controls="collapseLogo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Website Setting</span>
        </a>
        <div id="collapseLogo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Setting:</h6>
               <!--  <a class="collapse-item" href="{!! url('add_logo') !!}">Add Logo</a> -->
                <a class="collapse-item" href="{!! url('manage_logo') !!}">Manage Setting</a>
                <a class="collapse-item" href="{!! url('owner-profile') !!}">Welcome Speach</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#studentInfo" aria-expanded="true" aria-controls="studentInfo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Student Information</span>
        </a>
        <div id="studentInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{!! url('student-info') !!}">Student Info</a>
                <a class="collapse-item" href="{!! url('exam-result-list') !!}">Student Result</a>
                <a class="collapse-item" href="{!! url('payment_history') !!}">Payment History</a>
                 <a class="collapse-item" href="{!! url('due_payment') !!}">Due Payment</a>
            </div>
        </div>
    </li>


     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientLogo" aria-expanded="true" aria-controls="collapseClientLogo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Client</span>
        </a>
        <div id="collapseClientLogo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Logo:</h6>
                <a class="collapse-item" href="{!! url('add_client-logo') !!}">Add Client Logo</a>
                <a class="collapse-item" href="{!! url('manage_client-logo') !!}">Manage Client Logo</a>
            </div>
        </div>
    </li> 

<!-- Header Menu is no mandatory --> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Header Menus</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom menus:</h6>
                <a class="collapse-item" href="{!! url('add_menu') !!}">Add Menus</a>
                <a class="collapse-item" href="{!! url('menu') !!}">Manage Menus</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Question Setup</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              
                <a class="collapse-item" href="{!! url('question-create') !!}">Add Question</a>
                <a class="collapse-item" href="{!! url('question') !!}">Manage Question</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Slider -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sliders</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Sliders:</h6>
                <a class="collapse-item" href="{!! url('/add_slider') !!}">Add new Slider</a>
                <a class="collapse-item" href="{!! url('/manage_slider') !!}">Manage Slider</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCenter" aria-expanded="true" aria-controls="collapseCenter">
            <i class="fas fa-fw fa-cog"></i>
            <span>Center</span>
        </a>
        <div id="collapseCenter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Center:</h6>
                <a class="collapse-item" href="{!! url('/add_center') !!}">Add New Center</a>
                <a class="collapse-item" href="{!! url('/manage_center') !!}">Manage Center</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourses" aria-expanded="true" aria-controls="collapseCourses">
            <i class="fas fa-fw fa-cog"></i>
            <span>Courses</span>
        </a>
        <div id="collapseCourses" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Courses:</h6>
                <a class="collapse-item" href="{!! url('/add_courses') !!}">Add New Courses</a>
                <a class="collapse-item" href="{!! url('/manage_courses') !!}">Manage Courses</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSCInfo" aria-expanded="true" aria-controls="collapseSCInfo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Infomation</span>
        </a>
        <div id="collapseSCInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom SCInfo:</h6>
                <a class="collapse-item" href="{!! url('/add_info') !!}">Add SCInfo</a>
                <a class="collapse-item" href="{!! url('/manage_info') !!}">Manage SCInfo</a>
                <a class="collapse-item" href="{!! url('/change_b_t') !!}">Change Image</a>
            </div>
        </div>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMission" aria-expanded="true" aria-controls="collapseMission">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mission/Vission</span>
        </a>
        <div id="collapseMission" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Mission/Vission:</h6>
                <a class="collapse-item" href="{!! url('/add_mission') !!}">Add New Mission/Vission</a>
                <a class="collapse-item" href="{!! url('/manage_mission') !!}">Manage Mission/Vission</a>
            </div>
        </div>
    </li> -->


    <!-- <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFeature" aria-expanded="true" aria-controls="collapseFeature">
           <i class="fas fa-fw fa-cog"></i>
           <span>Feature</span>
       </a>
       <div id="collapseFeature" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">Custom Features:</h6>
               <a class="collapse-item" href="{!! url('/add_feature') !!}">Add New Feature</a>
               <a class="collapse-item" href="{!! url('/manage_feature') !!}">Manage Feature</a>
           </div>
       </div>
   </li> -->

    <!-- Nav Item - Post -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-cog"></i>
            <span>Posts</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Posts:</h6>
                <a class="collapse-item" href="{!! url('/add_post') !!}">Add Posts</a>
                <a class="collapse-item" href="{!! url('/manage_post') !!}">Manage Posts</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Project Pre Setup -->
    <!-- <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projectType" aria-expanded="true" aria-controls="projectType">
           <i class="fas fa-fw fa-cog"></i>
           <span>Project Type Setup</span>
       </a>
       <div id="projectType" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">Custom Project Type:</h6>
               <a class="collapse-item" href="{!! url('/add_project_type') !!}">Add new project Type</a>
               <a class="collapse-item" href="{!! url('/manage_project_type') !!}">Manage project Type</a>
               <a class="collapse-item" href="{!! url('/product-feature') !!}">Project Feature</a>
               <a class="collapse-item" href="{!! url('/product-feature-list') !!}">Project Feature</a>
           </div>
       </div>
   </li> -->

    <!-- Nav Item - Project -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <i class="fas fa-fw fa-cog"></i>
          <span>Projects</span>
      </a>
      <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Projects:</h6>
              <a class="collapse-item" href="{!! url('/add_project') !!}">Add new project</a>
              <a class="collapse-item" href="{!! url('/manage_project') !!}">Manage project</a>
          </div>
      </div>
  </li> -->

    <!-- Nav Item - Achievement Type -->
   <!--  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#achievementType" aria-expanded="true" aria-controls="achievementType">
          <i class="fas fa-fw fa-cog"></i>
          <span>Achievement Type</span>
      </a>
      <div id="achievementType" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Achievement Type:</h6>
              <a class="collapse-item" href="{!! url('/add_achievement_setup') !!}">Add Achievement Type</a>
              <a class="collapse-item" href="{!! url('/manage_achievement_setup') !!}">Manage</a>
          </div>
      </div>
  </li> -->

    <!-- Nav Item - Achievement -->
   <!--  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#achievement" aria-expanded="true" aria-controls="achievement">
          <i class="fas fa-fw fa-cog"></i>
          <span>Achievement</span>
      </a>
      <div id="achievement" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Achievement:</h6>
              <a class="collapse-item" href="{!! url('/add_achievement') !!}">Add new Achievement</a>
              <a class="collapse-item" href="{!! url('/manage_achievement') !!}">Manage Achievement</a>
          </div>
      </div>
  </li> -->

    <!-- Nav Item - Team Members -->
    <!-- <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class="fas fa-fw fa-cog"></i>
         <span>Team Members</span>
     </a>
     <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Custom Team:</h6>
             <a class="collapse-item" href="{!! url('/add_member') !!}">Add new Member</a>
             <a class="collapse-item" href="{!! url('/manage_member') !!}">Manage Member</a>
         </div>
     </div>
 </li> -->

    <!-- Nav Item - Skill -->
  <!--   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
        <i class="fas fa-fw fa-cog"></i>
        <span>Skills</span>
    </a>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Skills:</h6>
            <a class="collapse-item" href="{!! url('add_skill') !!}">Add New Skill</a>
            <a class="collapse-item" href="{!! url('manage_skill') !!}">Manage Skill</a>
        </div>
    </div>
</li> -->


    <!-- Nav Item - Service -->
    <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true" aria-controls="collapseService">
           <i class="fas fa-fw fa-cog"></i>
           <span>Services</span>
       </a>
       <div id="collapseService" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">Custom Services:</h6>
               <a class="collapse-item" href="{!! url('add_service') !!}">Add New Service</a>
               <a class="collapse-item" href="{!! url('manage_service') !!}">Manage Service</a>
           </div>
       </div>
   </li>


    <!-- Nav Item - About -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="true" aria-controls="collapseAbout">
            <i class="fas fa-fw fa-cog"></i>
            <span>About Us</span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Abouts:</h6>
                <a class="collapse-item" href="{!! url('add_about') !!}">Add Topics</a>
                <a class="collapse-item" href="{!! url('manage_about') !!}">Manage About</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Career -->
  <!--   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
            <i class="fas fa-fw fa-cog"></i>
            <span>Careers</span>
        </a>
        <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Careers:</h6>
                <a class="collapse-item" href="{!! url('/add_career') !!}">Add New Career</a>
                <a class="collapse-item" href="{!! url('/manage_career') !!}">Manage Career</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Contact -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContactSetup" aria-expanded="true" aria-controls="collapseContactSetup">
        <i class="fas fa-fw fa-cog"></i>
        <span>Contact Setup</span>
    </a>
    <div id="collapseContactSetup" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Contact Setup:</h6>
            <a class="collapse-item" href="{!! url('add_contact_setup') !!}">Add Contact Type</a>
            <a class="collapse-item" href="{!! url('manage_contact_setup') !!}">Manage Contact Type</a>
        </div>
    </div>
</li>

    <!-- Nav Item - Contact -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseContact">
            <i class="fas fa-fw fa-cog"></i>
            <span>Contact</span>
        </a>
        <div id="collapseContact" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Contacts:</h6>
                <a class="collapse-item" href="{!! url('add_contact') !!}">Add New Contact</a>
                <a class="collapse-item" href="{!! url('manage_contact') !!}">Manage Contact</a>
                <a class="collapse-item" href="{!! url('customer-message') !!}">Customer Message</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocial" aria-expanded="true" aria-controls="collapseSocial">
            <i class="fa fa-fw fa-cog"></i>
            <span>Social Media</span>
        </a>
        <div id="collapseSocial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item" href="{!! url('social-create') !!}">Add New Social Media</a>
                <a class="collapse-item" href="{!! url('social') !!}">Manage Social Media</a>
            </div>
        </div>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
