
$(document).on('submit', '#saveStudent', function(e){
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
                $("#errorMessage").removeClass('d-none');
                $("#errorMessage").text(res.message);
            } else if(res.status == 200){
                $('#addUser').modal('hide');
                $('#saveStudent')[0].reset();
                $('#myTable').load(location.href + ' #myTable');
                Swal.fire({
                    position: "centered",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                  });
            }
        }
    });
});