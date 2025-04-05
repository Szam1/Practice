$(document).on('submit','#saveStudent', function(e){
     e.preventDefault();

    var formData = new FormData(this);
    formData.append("save_student", true);

     $.ajax({
        type: "POST",
        url: "action.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            var res = jQuery.parseJSON(response);
            if(res.status == 422){
                $('#errorMessage').removeClass('d-none');
                $('#errorMessage').text(res.message);
            }
            else if(res.status == 200)
            {
                $('#errorMessage').removeClass('d-none');
                $('#errorMessage').text(res.message);

                $("#myTable").load(location.href + " #myTable");

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
     });
});

//view student

$(document).on('click','#viewStudent', function(){

    var student_id = $(this).val();
    console.log("test", student_id);

    $.ajax({
        type: "GET",
        url: "./action.php?student_id=" + student_id,
        success: function(response){
            var res = JSON.parse(response);

            if(res.status == 500){
                console.log(res.message);
            }
            else if(res.status == 200){
                console.log(res);
                $('#viewemail').text(res.data.email);
                $('#viewname').text(res.data.name);
                $('#viewphone').text(res.data.phone);
                $('#viewcourse').text(res.data.course);

                $('#viewStudentModal').modal('show');
            }
        }

    });

});

$(document).on('click', '#editStudent',function(){

    $('#student_id_input').val($(this).val());
    console.log($(this).val());
    $('#editUser').modal('show');

    var student_id = $(this).val();

    $.ajax({

        type: "GET",
        url: "./action.php?student_id=" + student_id,
        success: function(response){
            var res = JSON.parse(response);

            if(res.status == 500){
                console.log(res.message);
            }
            else if(res.status == 200){
                console.log(res);
                $('#email').val(res.data.email);
                $('#name').val(res.data.name);
                $('#phone').val(res.data.phone);
                $('#course').val(res.data.course);

                $('#errorMessageUpdate').addClass('d-none');


                $('#editUser').modal('show');
            }
        }
    

    });

});

//update student
$(document).on('submit','#updateStudent', function(e){
    e.preventDefault();

   var formData = new FormData(this);
   formData.append("update_student", true);

    $.ajax({
       type: "POST",
       url: "action.php",
       data: formData,
       processData: false,
       contentType: false,
       success: function(response){
           var res = jQuery.parseJSON(response);
           if(res.status == 422){
               $('#errorMessageUpdate').removeClass('d-none');
               $('#errorMessageUpdate').text(res.message);
           }
           else if(res.status == 200)
           {
               $('#editUser').modal('hide');
               $('#updateStudent')[0].reset();
               $("#errorMessageUpdate").removeClass('d-none');

               $("#myTable").load(location.href + " #myTable");

               Swal.fire({
                   position: "top-end",
                   icon: "success",
                   title: res.message,
                   showConfirmButton: false,
                   timer: 1500
               });
           }
       }
    });
});

$(document).on('click', '#deletestudent', function(e){
    e.preventDefault();

    if(confirm('are you sure you want to delete this data?')){
        var student_id = $(this).val();

        $.ajax({
            type: 'POST',
            url: './action.php',
            data:{
                'delete_student': true,
                'student_id': student_id
            },
            success: function(response){
                var res = jQuery.parseJSON(response);
                if(res.status == 500){
                    alert(res.message);
                }
                else{
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $('#myTable').load(location.href + 'myTable');
                }
            }
            

        });
    }
});




$(document).on('click', '#uploadImageStudent', function(e){
    e.preventDefault();

    var student_id = $(this).val();
    console.log(student_id);
    
        $.ajax({
            type: "GET",
            url: "./action.php?student_id=" + student_id,
            success: function(response){
                var res = JSON.parse(response);
    
                if(res.status == 500){
                    console.log(res.message);
                }
                else if(res.status == 200){
                    console.log(res);
                    $('#errorMessageUpdate').addClass('d-none');
                    $('#student_id_input_image').val(res.data.id);
                    $('#uploadUserModal').modal('show');
                }
            }
    
        });
    
    });

    fileImg.onchange = evt =>{
        const [file] = fileImg.files
        if(file){
            profileImage.src = URL.createObjectURL(file)
        }
    }

$(document).ready(function(e){

    $('#myTable').DataTable();

});