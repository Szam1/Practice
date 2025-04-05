<!-- Modal add -->
<div class="modal fade" id="saveStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">    
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form id="saveStudent">
                <div class="errorMessage alert alert-danger d-none" id="errorMessage"></div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input  name="name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input  name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Course</label>
                    <input  name="course" class="form-control" >
                </div>
                <div class="modal-footer">
                    <button type="submit" name='submit' class="btn btn-primary">submit</button>
                </div>
             </form>      
       </div>
    </div>
  </div>
</div>


<!-- modal view student -->

<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <p id="viewemail" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <p name="name" class="form-control" id="viewname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <p  name="phone" class="form-control" id="viewphone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Course</label>
                    <p  name="course" class="form-control" id="viewcourse">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit student -->
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">    
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form id="updateStudent">
                <div class="errorMessage alert alert-danger d-none" id="errorMessage"></div>
                <input type=""hidden"" id="student_id_input" name="student_id_input">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input  name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input  name="phone" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Course</label>
                    <input  name="course" class="form-control" id="course">
                </div>
                <div class="modal-footer">
                    <button type="submit" name='submit' class="btn btn-primary">submit</button>
                </div>
             </form>      
       </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" id="uploadUserModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" id="updateImageStudentForm" entype="multipart/form-data">
        <Input type="text" name="student_id_input_image" id="student_id_input_image" class="form-data">
          <div class="container-profile">
              <img src="" alt="profile" id="profileImage" style="width:100%;">
          </div>
          <div class="path-container">
            <input type="file" name="fileImg" id="fileImg" class="form-control">
          </div>
        </Input>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>