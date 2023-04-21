<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <?php 
              // echo "<pre>";
              // print_r($usersDataById['Data']);
              // echo "</pre>";
              ?>
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $usersDataById['Data'][0]->username ;?>" name="username" id="username">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $usersDataById['Data'][0]->email;?>" name="email" id="email">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <?php $explodename = explode(" ",$usersDataById['Data'][0]->name);  ?>
                      <input type="text" class="form-control" value="<?php echo $explodename[0];?>" name="name" id="name">
                    </div>
                    
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $usersDataById['Data'][0]->mobile;?>" name="mobile" id="mobile">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                    <input type="file" class="form-control"  name="prof_pic" id="prof_pic">
                      <input type="hidden" class="form-control"  name="prof_pic_old" value="<?php echo $usersDataById['Data'][0]->prof_pic; ?>" id="prof_pic_old">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <button name="btn-update" type="submit">Update</button>
                      
                      <!-- <select name="" id=""></select> -->
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>