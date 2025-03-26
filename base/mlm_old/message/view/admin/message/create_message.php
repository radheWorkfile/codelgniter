<!-- /***************************************************************************************************
 * Copyright (c) 2020. by Codepeople India
 * This project is developed and maintained by Codepeople India.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Bidush Sarkar
 * Developed for: Codepeople India
 **************************************************************************************************/ -->

 <div class="row">

            <form action="<?php echo base_url('message/index');?>" method="POST">

                <div class="form-group">

                    <div class="form-group col-sm-12">

                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle text-primary" style="width:25%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select Members</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:25%; padding:0.5rem 2rem;">
                    <input type="text" id="searchBox" class="form-control" placeholder="Search Members..." style="margin-bottom: 10px;">
                    <div class="form-check" id="memberListContainer">
                    <?php foreach($memberList as $mem): ?>
                    <div class="member-item">
                    <input class="form-check-input" type="checkbox" name="multipleMem[]" value="<?php echo $mem['id']; ?>" id="mem_<?php echo $mem['id']; ?>" data-member-id="<?php echo $mem['id']; ?>">
                    <label class="form-check-label" for="mem_<?php echo $mem['id']; ?>">
                    <?php echo $mem['name'] . ' (' . $mem['id'] . ')'; ?>
                    </label>
                    <br></div>
                    <?php endforeach; ?>
                    </div>
                    </div>
                    </div>
                    
                    </div>

                
                <div class="col-sm-12">
                <label>Enter Message</label>
                <textarea class="form-control" id="editor" name="message"></textarea>
                </div>
                </div>

                <div class="col-sm-12"><br/>
                <input type="submit" class="btn btn-success" value="Submit" onclick="this.value='processing...';" id="submit-button">
                </div>

            </form>
            
</div>






