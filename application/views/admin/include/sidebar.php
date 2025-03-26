<!-- get currect controller class using thsi  -->
<?php $getClass=$this->router->fetch_class();?>
<!-- get currect controller class using thsi  -->

           <div class="sidebar-wrapper" data-simplebar="true">
            
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="<?php echo base_url('site');?>" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


                <li class="<?php echo ($getClass == 'admin/employee') ? 'active show' : ''; ?>">
                <a href="<?php echo base_url('employee/');?>" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Employee</div>
                </a>
                <ul>
                <li><a href="<?php echo base_url('admin/employee');?>"><i class='bx bx-radio-circle'></i>Create Employee</a></li>
                <li><a href="app-chat-box.html"><i class='bx bx-radio-circle'></i>Manage Employee</a></li>
                </ul>
                </li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->