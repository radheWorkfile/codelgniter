
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
    <div class="d-flex">
    <button type="button" class="btn btn-outline-primary px-4 py-3" id="actPfList"style="font-size:1.4rem;font-weight:600;">
    <i class="fa fa-plus me-2" aria-hidden="true"></i>&nbsp;&nbsp;Add Employee
    </button>
    </div>
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
    class="fas fa-times text-orange-red"></i>Close</a>
    <a class="dropdown-item" href="#"><i
    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
    <a class="dropdown-item" href="#"><i
    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
    </div>
    </div>
    </div>
    <form class="new-added-form" id="createItem" data-id="<?php echo $targetItem;?>" method="post">
    <div class="row">

    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Name</label>
    <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $emp_info->name?$emp_info->name:'';?>" class="form-control">
    <i class="far fa-clock"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Father Name</label>
    <input type="text" placeholder="Father Name" name="fname" id="fname" value="<?php echo $emp_info->fname?$emp_info->fname:'';?>" class="form-control">
    <i class="far fa-clock"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Mobile Number</label>
    <input type="text" placeholder="Mobile Number" name="mobile" id="mobile" value="<?php echo $emp_info->mobile?$emp_info->mobile:'';?>" class="form-control">
    <i class="far fa-clock"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Email</label>
    <input type="email" placeholder="Emai-Id" name="email" id="email" value="<?php echo $emp_info->email?$emp_info->email:'';?>" class="form-control">
    <i class="far fa-clock"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Date of Birth</label>
    <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" value="<?php echo $emp_info->dob?$emp_info->dob:'';?>" class="form-control air-datepicker">
    <i class="far fa-calendar-alt"></i>
    </div>
    <div class="col-12-xxxl col-lg-6 col-12 form-group">
    <label>Address</label>
    <input type="text" placeholder="Address" name="address" id="address" value="<?php echo $emp_info->address?$emp_info->address:'';?>" class="form-control">
    <i class="far fa-clock"></i>
    </div>


  <div class="col-12 subBtn mt-3 d-flex justify-content-between">
    <button type="button" class="btn btn-dark d-flex align-items-center px-5 back-btn" data-url="<?php echo $actBack;?>">
        <i class="fas fa-arrow-left text-white me-4 icon-arrow"></i>
        <i class="fas fa-sync-alt text-white me-2 d-none icon-refresh actProtate"></i>
        <span>Back</span>
    </button>

    <button type="submit" id="submit-btn" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
    <i class="fas fa-floppy-disk text-white"></i> Save
    </button>

    </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <div class="col-8-xxxl col-12" id="showList">
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
    <form class="mg-b-20">
    <div class="row gutters-8">
    <div class="col-lg-4 col-12 form-group">
    <input type="text" placeholder="Search by Name ..." class="form-control">
    </div>
    <div class="col-lg-3 col-12 form-group">
    <input type="text" placeholder="Search by Mobile No ..." class="form-control">
    </div>
    <div class="col-lg-3 col-12 form-group">
    <input type="text" placeholder="Search by Email ..." class="form-control">
    </div>
    <div class="col-lg-2 col-12 form-group s-btn">
    <button type="submit"
    class="fw-btn-fill btn-gradient-yellow"> <i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
    </div>
    </div>
    </form>
    <div class="table-responsive">
      <table class="table display data-table text-nowrap" id="listItem" data-id="<?php echo $targetLIstItem;?>">
    <thead>
    <tr class="bg-light-yellow m-0 p-0">
    <th>Si-No.</th>
    <th>Emp-Id</th>
    <th>Emp Name</th>
    <th>Mobile Number</th>
    <th>Email-Id</th>
    <th>Address</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
    </thead>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <input type="hidden" id="targetLIstItem" data-id="<?php echo $targetLIstItem;?>" />


    <script>

    $(document).ready(function () {
    $('#showForm').hide();
    $('#showList').show();
    $('#actPfList').on('click', function (e) {
    e.preventDefault(); 
    $('#showList').hide();     
    $('#showForm').show();      
    $('#actPfList').hide();      
    });
    });
    </script>
    <!-- <i class="fa fa-cog actProtate" aria-hidden="true"></i> -->




