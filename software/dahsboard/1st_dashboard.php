 <style>
    .bg-info-1{background-color:#664fd0;}
    .bg-info-2{background-color:#0064ff;}
    .border-info-1{border:1px solid #664fd0;}
    .border-info-2{border:1px solid #0064ff;}
    </style>

                    <div class="row my-4">
                    <div class="col-md-6 sm-12">
                            <p class="text-info fw-bold fs-2"style="margin-top:-0.2rem;">Welcome to <span class="text-light"><?php echo $memb->name.' ( '.config_item('customer_extention') . $this->session->customer_id. ' ) ';?></span> </p>
                    </div>
                    <div class="col-md-6 sm-12">
                        <button class="bg-warning text-white py-2 px-3 mx-2 rounded shadow text-shadow fw-bold"><a href="<?php echo base_url('customer/booking/sold');?>"class="text-white">+ Our Property</a></button>
                        <button class="bg-danger text-white py-2 px-3 mx-2 rounded shadow conBooking text-shadow fw-bold"><a href="<?php echo base_url('site/customerlogin');?>" class="text-white">+ Confirm Booking</a></button>
                        <button class="bg-primary text-white py-2 px-3 mx-2 rounded shadow text-shadow fw-bold"><a href="<?php echo base_url('customer/booking/request');?>" class="text-white">+ Request Booking</a></button>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-md-8"style="padding:0rem 0.2rem 0rem 2.5rem;">

                        <div class="row my-3">

                        <div class="col-md-4 my-2">
                        <div class="border border-success p-1 rounded">
                        <div class="d-flex rounded bg-success py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Total Project</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-4 my-2">
                        <div class="border border-danger p-1 rounded">
                        <div class="d-flex rounded bg-danger py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Project Amount</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-4 my-2">
                        <div class="border border-warning p-1 rounded">
                        <div class="d-flex rounded bg-warning py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Paid Amount</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-4 my-2">
                        <div class="border border-info p-1 rounded">
                        <div class="d-flex rounded bg-info py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Remaining Amount</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-4 my-2">
                        <div class="border-info-1 p-1 rounded">
                        <div class="d-flex rounded bg-info-1 py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Total Amount</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-4 my-2">
                        <div class="border-info-2 p-1 rounded">
                        <div class="d-flex rounded bg-info-2 py-1 px-3 shadow">
                        <div class="w-75 pt-2">
                        <p class="text-white"><span class="text-shadow">Total Amount</span></p>
                        <p class="text-white">1</p>
                        </div>
                        <div class="w-25">
                        <i class="fa fa-user bg-light p-3 mt-3 rounded-circle"></i>
                        </div>
                        </div>
                        </div>
                        </div>

                        </div>
                        

                        <div class="row">
                            <div class="col-md-12">
                                            <div class="panel">
            <header class="panel-heading text-whitte">
            Task Statistics
            <span class="tools pull-right">
            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
            <a class="close-box fa fa-times" href="javascript:;"></a>
            </span>
            </header>

            <div class="panel-body">
            <div class="row w-states" id="mobile-nav-padding">


            <div class="col-12">
            <div class="panel">
            <div class="panel-body">
            <div style="background-color: #5bc0de; padding: 12px; color: white; font-size: 15px;"><strong class="text-white">Latest News</strong></div>
            <div class="table-responsive" style="background-color:rgb(255, 255, 255); margin-top: -8px; padding: 14px; color: black; font-size: 12px; font-family: 'FontAwesome';">

            <span><?php echo $news->description; ?></span>

            </div>
            </div>
            </div>
            </div>


            </div>
            </div>
            <!-- Latest news section end.-->


                                </div>
                           
                            </div>
                        </div>


                    </div>


                    <div class="col-md-4 mb-2"style="margin-top:-1rem;">
                    <div class="card">

                    <div class="text-center py-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="rounded-circle border p-1 border border-3 border-info" style="height:10rem;" alt="">
                    </div>

                    <h6 class="text-center text-success text-shadow"><span class="border border-1 border-success rounded px-3 py-1"><?php echo config_item('customer_extention') . $this->session->customer_id ?></span></h6>
                    
                    <div class="d-flex px-4">
                        <div class="w-50">
                         <p class="fs-4 fw-bold"><i class="fa fa-user text-dark" aria-hidden="true"></i> &nbsp;Name :</p>
                         <p class="fs-4 fw-bold"><i class="fa fa-user-plus text-dark" aria-hidden="true"></i> Father Name :</p>
                         <p class="fs-4 fw-bold"><i class="fa fa-envelope text-dark" aria-hidden="true"></i> Email-Id :</p>
                         <p class="fs-4 fw-bold"><i class="fa fa-phone text-dark" aria-hidden="true"></i> Mobile :</p>
                        </div>
                        <div class="w-50 text-end">
                         <p class="fs-4"><?php echo $memb->name?$memb->name:'N/A';?></p>
                         <p class="fs-4"><?php echo $memb->father_name?$memb->father_name:'N/A';?></p>
                         <p class="fs-4"><?php echo $memb->email?$memb->email:'N/A';?></p>
                         <p class="fs-4">+91 <?php echo $memb->phone?$memb->phone:'N/A';?></p>

                        </div>  
                    </div>

                    <div class="d-flex justify-content-center">
                        
                       <p><img src="axxets/icon/fasebook.png" class="cursor-pointer" style="height:4rem;" alt=""></p>
                       <p><img src="axxets/icon/Instagram.png" class="cursor-pointer"style="height:4rem;" alt=""></p>
                       <p><img src="axxets/icon/teligram.png" class="cursor-pointer"style="height:4rem;" alt=""></p>
                       <p><img src="axxets/icon/whatsapp.png" class="cursor-pointer" style="height:4rem;" alt=""></p>
                        
                    </div>

                    </div>
                    </div>


                    </div>