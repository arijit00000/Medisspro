function formSubmit(URL, formData){

        $.ajax({
            type:"POST",
            url:URL,
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                        icon:"success",
                        title: "Great",
                        text: "Inquiry Successfully Submit !!",
                        confirmButtonText:"Ok",
                    }).then((result) => { // consuming call back
                        console.log(result)
                        if (result.isConfirmed) {
                            window.location.reload()
                        }})
                }
                else{
                    Swal.fire({
                        icon:"error",
                        title: "Oops...",
                        text: "Wait For Sometime",
                        confirmButtonText:"Ok"
                    })
                    resetForm()
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

function deleteRecord(URL, CSRF){
    $.ajax({
        type:"POST",
        url:URL,
        data: {_token: CSRF},
        dataType: "json",
        success:function(resultData){
            Swal.fire({
                title: 'Deleted',
                text: 'Record has been deleted successfully',
                icon: 'success'
            }).then((result)=> {
            console.log(result)
            if (result.isConfirmed) {
                window.location.reload()
            }})
        }
    })
}