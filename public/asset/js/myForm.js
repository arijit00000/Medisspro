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
                        confirmButtonText:"Ok"
                    })
                    resetForm() 
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