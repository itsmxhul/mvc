<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <table class="table table-bordered ">
                <tr class="bg-dark light-txt">
                  <th>Sr No</th>
                  <th>profile</th>
                  <th>UserName</th>
                  <th>name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Action</th>
                </tr>
                <tbody>
                  <?php $i = 1;

                  // echo"<pre>";
                  // print_r($allUsers);
                  // echo"</pre>";
                  foreach ($allUsers['Data'] as $key => $value) { ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td> <img src="image/<?php echo $value->prof_pic; ?>" width="100px" alt=""> </td>
                      <td><?php echo $value->username; ?></td>
                    
                      <td><?php echo $value->name; ?></td>
                      <td><?php echo $value->email; ?></td>
                      <td><?php echo $value->mobile; ?></td>
                      <td>
                          <a href="edituserdata?userid=<?php echo $value->id; ?>" title="Update"> <i class="fas fa-edit"></i></i></a>
                        <a href="deleteuserdata?userid=<?php echo $value->id; ?>" title="Delete"> <i class="fas fa-trash"></i></i></a>
                      </td>
                    </tr>
                  <?php $i++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>