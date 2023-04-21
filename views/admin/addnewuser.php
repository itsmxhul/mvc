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
                <div class="col-md-8">
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control"  name="username" id="username" placeholder="username">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" name="email" id="email" placeholder="email">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control"  name="mobile" id="mobile" placeholder="mobile">
                    </div>
                    
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="file" class="form-control"  name="prof_pic" id="prof_pic">
                    </div>
                  </div>
                  
                
                  <div class="row mt-3">
                    <div class="col">
                      <button name="btn-add" type="submit">Add </button>
                      
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