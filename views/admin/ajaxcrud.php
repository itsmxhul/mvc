<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit Users Data 
</button> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="addnewuserform" id="addnewuserform" method="POST">
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control"  name="username" placeholder="Enter User Name" id="username">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control"  name="email" placeholder="Enter email" id="email">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control"  name="mobile" placeholder="Enter mobile" id="mobile">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="submit" class="btn btn-info" name="save"  id="save" value="Add">
            </div>
          </div>
        </form>
          </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

              <table class="table table-bordered ">
                <tr class="bg-dark light-txt">
                  <th>Sr No</th>
                  <th>UserName</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Mobile</th>
                  <th>Action</th>
                </tr>
                <tbody id="disp_users_data">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  fetch("http://localhost/bookit/api/viewalluser").then((response)=>response.json()).then((res)=>{
    // console.log(res);
    // console.log(res.Data);
    let HTMLTableData =""
    res.Data.forEach(element => {
      console.log(element); 
      // HTMLTableData +="<tr><td>"+element.username+"<td></tr>"
      HTMLTableData +=`<tr>
                          <td>${element.id}</td>
                          <td>${element.username}</td>
                          <td>${element.email}</td>
                          <td> <img src="image/${element.prof_pic}" width="50px"> </td>
                          <td>${element.mobile}</td>
                          <td> <button type="button" onclick="getdatabyid(${element.id})" class="btn btn-primary"><i> 
                          <i class="fas fa-edit"> </i>
  
</button> </td>
                          
                        
                      </tr>`
    });
    console.log(HTMLTableData);
    document.getElementById("disp_users_data").innerHTML = HTMLTableData
  })
  function getdatabyid(id) {
    console.log("called edit",id);
     let headerdata = {
  method: 'POST', // or 'PUT'
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(id),
}
      fetch("http://localhost/bookit/api/userdatabyid",{id:id}).then((response)=>response.json()).then((res)=>{
    // console.log(res);
       });
    console.log(HTMLTableData);
    document.getElementById("disp_users_data").innerHTML = HTMLTableData
  }
 

</script>