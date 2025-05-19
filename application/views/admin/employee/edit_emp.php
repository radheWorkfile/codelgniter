
    <!-- Page Area Start Here -->
    <div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area d-flex justify-content-between align-items-center">
    <!-- Left side: Text -->
    <div>
    <h3><?php echo $workingPro;?></h3>
    <ul>
    <li><a href="index-2.html">Home - <?php echo $workingPro;?></a></li>
    </ul>
    </div>

    <!-- Right side: Buttons -->
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Exam Schedule Area Start Here -->
    <div class="row"> 
    <div class="col-4-xxxl col-12" id="showForm">
    <div class="card height-auto">
    <div class="card-body">
    <div class="heading-layout1">
    <div class="item-title">
    <h3><?php echo $title;?></h3>
    </div>
    <div class="dropdown">
    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
    aria-expanded="false">...</a>

    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#"><i
    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
    </div>
    </div>
    </div>
    <form class="new-added-form" id="createItem" data-id="<?php echo $targetItem;?>" method="post">
    <div class="row">

    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Name</label>
    <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $emp_info->id?$emp_info->id:'';?>">
    <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $emp_info->name?$emp_info->name:'';?>" class="form-control">
    <i class="far fa-user"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Father Name</label>
    <input type="text" placeholder="Father Name" name="fname" id="fname" value="<?php echo $emp_info->fname?$emp_info->fname:'';?>" class="form-control">
    <i class="far fa-user"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Mobile Number</label>
    <input type="text" placeholder="Mobile Number" name="mobile" id="mobile" value="<?php echo $emp_info->mobile?$emp_info->mobile:'';?>" class="form-control">
    <i class="fas fa-mobile"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Email</label>
    <input type="email" placeholder="Emai-Id" name="email" id="email" value="<?php echo $emp_info->email?$emp_info->email:'';?>" class="form-control">
    <i class="far fa-envelope"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Date of Birth</label>
    <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" value="<?php echo $emp_info->dob?$emp_info->dob:'';?>" class="form-control air-datepicker">
    <i class="far fa-calendar-alt"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Address</label>
    <input type="text" placeholder="Address" name="address" id="address" value="<?php echo $emp_info->address?$emp_info->address:'';?>" class="form-control">
    <i class="fas fa-map"></i>
    </div>


    <div class="col-12 form-group mg-t-8 d-flex justify-content-between">
    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">
    <i class="fas fa-arrow-left text-white"></i> Back
    </button>

    <button type="submit" id="submit-btn" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
    <i class="fas fa-floppy-disk text-white"></i> Update
    </button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <input type="hidden" id="targetLIstItem" data-id="<?php echo $targetLIstItem;?>" />


    <!-- <i class="fa fa-cog actProtate" aria-hidden="true"></i> -->




