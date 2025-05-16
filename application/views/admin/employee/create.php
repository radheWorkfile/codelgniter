

    <!-- Page Area Start Here -->
   
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
           <div class="breadcrumbs-area d-flex justify-content-between align-items-center">
    <!-- Left side: Text -->
    <div>
        <h3>Examination</h3>
        <ul>
            <li><a href="index-2.html">Home - Create Employee</a></li>
        </ul>
    </div>

    <!-- Right side: Buttons -->
    <div class="d-flex">
        <button class="fw-btn-fill btn-gradient-yellow px-5" id="actPfList">Create</button>&nbsp;
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
                                        <h3>Add New Exam </h3>
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
                                <form class="new-added-form" id="createItem" data-id="<?php echo $targetItem;?>">
                                    <div class="row">
                                    
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name" name="name" id="name" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Father Name</label>
                                            <input type="text" placeholder="Father Name" name="fname" id="fname" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" placeholder="Mobile Number" name="mobile" id="mobile" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Email</label>
                                            <input type="email" placeholder="Emai-Id" name="email" id="email" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy"
                                                class="form-control air-datepicker">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Address</label>
                                            <input type="text" placeholder="Address" name="Address" id="Address" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12 form-group mg-t-8 d-flex justify-content-between">
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</button>
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
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
                                        <h3>All Exam Schedule</h3>
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
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Exam ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Subject ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Si-No.</th>
                                                <th>Emp-Id</th>
                                                <th>Emp Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email-Id</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1.
                                                </td>
                                                <td>Chemistry</td>
                                                <td>4</td>
                                                <td>A</td>
                                                <td>10.00 am - 11.00 am</td>
                                                <td>20/06/2019</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         


<script>
  $(document).ready(function () {
    $('#showForm').hide();
    $('#showList').show();
    $('#actPfList').on('click', function (e) {
        alert("Hello Radhe kumar");
      e.preventDefault(); 
      $('#showList').hide();     
      $('#showForm').show();      
      $('#actPfList').hide();      
    });
  });
</script>
<!-- <i class="fa fa-cog actProtate" aria-hidden="true"></i> -->




