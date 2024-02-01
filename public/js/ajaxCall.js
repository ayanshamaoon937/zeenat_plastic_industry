$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#update_profile").submit(function (event) {
    event.preventDefault();


    // $("#edit_profile_btn").attr("disabled", true);
    // $("#edit_profile_btn").html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    var ajax_data = new FormData();
    ajax_data.append('name', $("#name").val());
    ajax_data.append('phone', $("#phone").val());
    ajax_data.append('picture', $('#picture')[0].files[0]);


    $.ajax({
        url: '/update_profile',
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    window.location.href='/profile';
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {
                    // {{--window.location.href='{{session('location')}}';--}}
                });
            }


            $("#edit_profile_btn").attr("disabled", false);
            $("#edit_profile_btn").html("Update Profile");
        }//succes
    });//ajax


});
$("#update_password").submit(function(e){
    e.preventDefault();

    if($("#new_password").val().length < 8){

        Swal.fire('Alert','Password must me at least 8 characters!','error').then((result)=>{

            return;

        });
        return;
    }

    if($("#new_password").val() != $("#confirm_password").val()){

        Swal.fire('Alert','New Password and Confirm Password not match!','error').then((result)=>{

            return;

        });
        return;
    }

    var ajax_data = new FormData();
    ajax_data.append('old_password',$("#old_password").val());
    ajax_data.append('new_password',$("#new_password").val());

    $("#update_password_btn").attr("disabled", true);
    $("#update_password_btn").html(`Please wait <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        type:"POST",
        url:"/update_password",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function(data) {

            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    $("#update_password").trigger("reset");
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {

                });
            }

            $("#update_password_btn").attr("disabled", false);
            $("#update_password_btn").html('Update Password');

        }
    });
});


// ************************* Settings Management **********************
$("#update_website_details").submit(function (event) {
    event.preventDefault();


    $("#update_settings_btn1").attr("disabled", true);
    $("#update_settings_btn1").html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    var ajax_data = new FormData();
    ajax_data.append('site_name', $("#site_name").val());
    ajax_data.append('phone_number', $("#phone_number").val());
    ajax_data.append('email', $("#email").val());
    ajax_data.append('location', $("#location").val());
    ajax_data.append('timing', $("#timing").val());
    ajax_data.append('logo', $("#logo")[0].files[0]);

    $.ajax({
        url: '/update_website_details',
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {


            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    window.location.href='/settings';
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {
                    // {{--window.location.href='{{session('location')}}';--}}
                });
            }

            $("#update_settings_btn1").attr("disabled", false);
            $("#update_settings_btn1").html("Update");
        }//succes
    });//ajax


});
$("#update_social_links").submit(function (event) {
    event.preventDefault();


    $("#update_settings_btn2").attr("disabled", true);
    $("#update_settings_btn2").html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    var ajax_data = new FormData();
    ajax_data.append('facebook_link', $("#facebook_link").val());
    ajax_data.append('linkedin_link', $("#linkedin_link").val());
    ajax_data.append('twitter_link', $("#twitter_link").val());
    ajax_data.append('youtube_link', $("#youtube_link").val());

    $.ajax({
        url: '/update_social_links',
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {


            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    window.location.href='/settings';
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {
                    // {{--window.location.href='{{session('location')}}';--}}
                });
            }

            $("#update_settings_btn2").attr("disabled", false);
            $("#update_settings_btn2").html("Update");
        }//succes
    });//ajax


});
$("#update_images").submit(function (event) {
    event.preventDefault();


    $("#update_settings_btn3").attr("disabled", true);
    $("#update_settings_btn3").html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    var ajax_data = new FormData();
    ajax_data.append('ceo_image', $("#ceo_image")[0].files[0]);
    ajax_data.append('about_image1', $("#about_image1")[0].files[0]);
    ajax_data.append('about_image2', $("#about_image2")[0].files[0]);
    ajax_data.append('about_image3', $("#about_image3")[0].files[0]);

    $.ajax({
        url: '/update_images',
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {


            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    window.location.href='/settings';
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {
                    // {{--window.location.href='{{session('location')}}';--}}
                });
            }

            $("#update_settings_btn3").attr("disabled", false);
            $("#update_settings_btn3").html("Update");
        }//succes
    });//ajax

});

// ---------------------- Product Images

$("#user_verification_images").submit(function (event) {
    event.preventDefault();

    var parentElement = document.getElementById('parentElement');

    var childElements = parentElement.getElementsByClassName('upload__img-box');

    var totalfiles  = childElements.length;

    if (totalfiles == 0) {

        swal("Select Images", "Please select images!", "error");
        return;
    }

    var ajax_data = new FormData();

    for (var index = 0; index < totalfiles; index++) {

        ajax_data.append("files[]", uploadProductImg[index]);
    }

    $("#upload_images").attr("disabled", true);
    $("#upload_images").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "update_product_images",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.status == "true" || data.status == true) {
                Swal.fire({
                    icon: data.icon,
                    title: 'Success',
                    text: data.message,
                }).then(() => {
                    window.location.href='/add_products';
                });
            } else {
                Swal.fire({
                    icon: data.icon,
                    title: 'Failed',
                    text: data.message,
                }).then(() => {
                    // {{--window.location.href='{{session('location')}}';--}}
                });
            }

            $("#upload_images").attr("disabled", false);
            $("#upload_images").html('Upload');

        }//success
    });//ajax

});

function deleteImage(id,type){

    let title='';
    if(type==0){
        title='to delete this image';
    }else if(type==1){
        title='to delete all images';
    }else {

    }

    Swal.fire({
        title: 'Are you sure '+title+' ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            $("#delete_user"+id).attr("disabled", true);
            // $("#delete_user"+package_id).html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

            var ajax_data = new FormData();
            ajax_data.append('id', id);
            ajax_data.append('type', type);

            $.ajax({
                url: '/delete_product_image',
                type: "POST",
                processData: false,
                contentType: false,
                data: ajax_data,
                success: function (data) {

                    if (data.status == "true" || data.status == true) {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Success',
                            text: data.message,
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Failed',
                            text: data.message,
                        }).then(() => {
                            // {{--window.location.href='{{session('location')}}';--}}
                        });
                    }

                    $("#delete_user"+id).attr("disabled", false);

                }//success
            });//ajax

        }
    });

}
