//Global variables


$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href === url || url.href.indexOf(this.href) === 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
//

function CallAPI(method, url, onResult, onError, postData) {
    $.ajax(
        {
            url: Base_URL + url,
            type: method,
            contentType: "application/json;charset=utf-8",
            data: postData,
            success: function (data) {  
                onResult(data); 
            },
            error: function (data) {  
                if (typeof (onError) === 'function') 
                    onError(data); 
            }
        });
}
//
function MessageBoxOK(msg) {

    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: lang === 'en' ? 'Success':'Успешно действие',
        // (string | mandatory) the text inside the notification
        text: msg,
        // (string | optional) the image to display on the left
        image: '',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out (milliseconds)
        time: 3000,
        // (string | optional) the class name you want to apply directly to the notification for custom styling
        class_name: 'gritter-item-wrapper gritter-success',
    });

    // $('body').append('<div class="alert alert-block alert-success" style="position: fixed;top: 50%;left: 50%;margin-left: -200px; z-index:9999;"><button data-dismiss="alert" class="close" type="button"><i class="icon-remove"></i></button><p><i class="icon-ok"></i> ' + msg + '</p><p></p><button class="btn btn-small btn-success" data-dismiss="alert"> OK </button></div>')
}

function MessageBoxError(msg) {
    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: lang === 'en' ? 'Error':'Грешка',
        // (string | mandatory) the text inside the notification
        text: msg,
        // (string | optional) the image to display on the left
        image: '',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out (milliseconds)
        time: 3000,
        // (string | optional) the class name you want to apply directly to the notification for custom styling
        class_name: 'gritter-item-wrapper gritter-error',
    });

    //$('body').append('<div class="alert alert-block alert-error" style="position: fixed;top: 50%;left: 50%;margin-left: -200px; z-index:9999;"><button data-dismiss="alert" class="close" type="button"><i class="icon-remove"></i></button><p><i class="icon-remove"></i> ' + msg + '</p><p></p><button class="btn btn-small btn-danger" data-dismiss="alert"> OK </button></div>')
}
//
$(document).ready(function() {
    $('#tbl_catalog').dataTable({
//        "bProcessing": true,
        "responsive": true,
//        "serverSide": true,
        "ajax":{
            url :Base_URL + "catalog/getCatalogs", // json datasource
//            type: "POST",  // type of method  ,GET/POST/DELETE
            error: function(){
              
            }
          },
          "createdRow": function ( row, data, index ) {
            $('td', row).eq(3).html('<div class="frame"><img height="85" width="195" src="' + Base_URL +'assets/images/catalogs/'+data.image_name +'" alt="'+data.name+'" /></div>');
            $('td', row).eq(4).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
            $('td', row).eq(6).text(data.is_public === '1' ? 'YES':'NO');
        },
        aaSorting : [[5, 'desc']],
        "columns": [
                { "data": "catalog_id" },
                { "data": "category_id" },
                { "data": "name" },
                { "data": "image_name" },
                { "data": "language_id" },
//                { "data": "user_id" },
//                { "data": "agegroup_id" },
                { "data": "date_added" },
                { "data": "is_public" },
                { "data": "actions" }
              ]
        });
    //
    $('#tbl_movies').dataTable({
//        "bProcessing": true,
        "responsive": true,
//        "serverSide": true,
        "ajax":{
            url :Base_URL + "dashboard/getMovies", // json datasource
//            type: "POST",  // type of method  ,GET/POST/DELETE
            error: function(){
              
            }
          },
          "createdRow": function ( row, data, index ) {
            $('td', row).eq(5).html('<img height="42" width="95" src="' + Base_URL +'assets/images/' +data.catalog_id + '/'+data.image_name +'" alt="'+data.name+'" />');
            $('td', row).eq(6).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
            $('td', row).eq(7).text(data.is_public === '1' ? 'YES':'NO');
        },
        aaSorting : [[9, 'desc']],
        "columns": [
                { "data": "link_id" },
                { "data": "url" },
                { "data": "source_id" },
                { "data": "title" },
                { "data": "catalog" },
                { "data": "image_name" },
                { "data": "language_id" },
                { "data": "is_public" },
                { "data": "date_added" },
                { "data": "actions" }
              ]
    });
    // 
    $('#tbl_agegroup').DataTable( {
        "responsive": true,
        "ajax":{
            url :Base_URL + "dashboard/getAgegroup", // json datasource
//            type: "POST",  // type of method  ,GET/POST/DELETE
            error: function(){
              
            }
          },
          "createdRow": function ( row, data, index ) {           
            $('td', row).eq(3).text(data.is_public === '1' ? 'YES':'NO');
        },
        "columns": [
                { "data": "id" },
                { "data": "title" },
                { "data": "description" },
                { "data": "is_public" },
                { "data": "actions" }
              ]
        
    });    
    //
    $('#tbl_songs').DataTable( {
        "responsive": true,
//        "serverSide": true,
        "ajax":{
            url :Base_URL + "dashboard/getSongs", // json datasource
//            type: "POST",  // type of method  ,GET/POST/DELETE
            error: function(){
              
            }
          },
          "createdRow": function ( row, data, index ) {
            $('td', row).eq(5).html('<img height="42" width="95" src="' + Base_URL +'assets/images/' +data.catalog_id + '/'+data.image_name +'" alt="'+data.name+'" />');
            $('td', row).eq(6).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
            $('td', row).eq(7).text(data.is_public === '1' ? 'YES':'NO');
        },
        aaSorting : [[9, 'desc']],
        "columns": [
                { "data": "link_id" },
                { "data": "url" },
                { "data": "source_id" },
                { "data": "title" },
                { "data": "catalog" },
                { "data": "image_name" },
                { "data": "language_id" },
//                { "data": "agegroup_id"},              
                { "data": "is_public" },
                { "data": "date_added" },
                { "data": "actions" }
              ]
    } );    
    //    
    $('#tbl_users').DataTable( {
        "responsive": true,
//        "serverSide": true,
        "ajax":{
            url :Base_URL + "dashboard/getUsers", // json datasource
//            type: "POST",  // type of method  ,GET/POST/DELETE
            error: function(){
              
            }
          },
//          "createdRow": function ( row, data, index ) {
//            $('td', row).eq(5).html('<img height="42" width="95" src="' + Base_URL +'assets/images/catalogs/'+data.image_name +'" alt="'+data.name+'" />');
//            $('td', row).eq(6).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
//            $('td', row).eq(7).text(data.is_public === '1' ? 'YES':'NO');
//        },
        "columns": [
                { "data": "id" },
                { "data": "email" },
                { "data": "username" },
                { "data": "last_login" },
//                { "data": "is_admin" },
                { "data": "actions" }
              ]
    } );
    //Catalog actions
    $("body").on("click", ".DeleteCatalog", function () {
        var catalog_id = $(this).attr('data-id');
        alert("Are you sure to delete this catalog?");
        $.ajax({
            url: Base_URL + "catalog/delete/" + catalog_id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    MessageBoxOK("You are deleted catalog item successly!");
                    setTimeout(function(){ window.location.reload(); }, 1000); 
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //
//    $("#editUser").validate({
//        debug: false,
//            rules: {
//                
//                password: {
//                    required: false,
//                    minlength: 8
//                },
//                email: {
//                    required: true,
//                    email: true,
//                    remote: {
//                        url: Base_URL + "dashboard/checkEmailExists",
//                        type: "post",
//                        data: {
//                            email: function() {
//                                return $( "#email" ).val();
//                            }
//                        }
//                    }
//                },
//                username: {
//                    required: true,
//                    minlength: 4,
//                    remote: {
//                        url: Base_URL + "dashboard/checkUsernameExists",
//                        type: "post",
//                        data: {
//                            username: function() {
//                                return $( "#username" ).val();
//                            }
//                        }
//                    }
//
//                }
//            },
//            messages: {
//                
//                password: {
//                    required: "Provide a password"
//                    
//                },
//                email: {
//                    required: "Please enter a valid email address"
//                    
//                },
//                username: {
//                    required: "Please enter a username"
//                }
//               
//            },
//            // the errorPlacement has to take the table layout into account
//            errorPlacement: function(error, element){
//                error.addClass('error');
//                error.appendTo(element.parent());
//            },
//            // specifying a submitHandler prevents the default submit, good for the demo
//            submitHandler: function(form) {
//                form.submit();
//            }
//
//    });
    //
    $("#addNewCatalog").validate({
          rules: {
                    name: "required",
                    category_id: "required",
                    image_name: {
                              required: true,
                              extension: "png|jpe?g|gif"
                            }
                  },
          messages: {
                    name: "Please specify your name",
                    category_id: "Please select category"
                  }
    });
    //
    $("#editCatalogForm").validate({
        rules: {
            name: { required: true },
            category_id: { required: true },
            image_name: { required: false }
        },
        messages: {
            name: "Please specify your name",
            category_id: "Please select category"
        }
    });
    //Movies actions
    $("#editMovieForm").validate({
        rules: {
            name: { required: true },
            category_id: { required: true },
            image_name: { required: false }
        },
        messages: {
            name: "Please specify your name",
            category_id: "Please select category"
        }
    });
    //
    $("#language_id").change(function () {
        var language_id = $(this).val();
        var category_id = $(this).attr('data-category-id');
        $.ajax({
            url: Base_URL + "dashboard/getCatalogs/" + language_id + "/" + category_id,
            method: "GET",
            success: function(data) {
                $("#catalog_id").html(data);
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //
    $("body").on("click", ".Deletemovies", function () {
        var link_id = $(this).attr('data-id');
        alert("Are you sure to delete this movie?");
        $.ajax({
            url: Base_URL + "dashboard/deleteMovie/" + link_id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    MessageBoxOK("You are deleted movie successly!");
                    setTimeout(function(){ window.location.reload(); }, 1000);                    
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //Songs actions
    $("#editSongsForm").validate({
        rules: {
            name: { required: true },
            category_id: { required: true },
            image_name: { required: false }
        },
        messages: {
            name: "Please specify your name",
            category_id: "Please select category"
        }
    });
    //
    $("body").on("click", ".Deletesongs", function () {
        var link_id = $(this).attr('data-id');
        alert("Are you sure to delete this song?");
        $.ajax({
            url: Base_URL + "dashboard/deleteSong/" + link_id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    MessageBoxOK("You are deleted song successly!");
                    setTimeout(function(){ window.location.reload(); }, 1000);                     
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //
    $("body").on("click", ".DeleteAgegroup", function () {
        var id = $(this).attr('data-id');
        alert("Are you sure to delete this Age group?");
        $.ajax({
            url: Base_URL + "dashboard/deleteAgegroup/" + id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    MessageBoxOK("You are deleted Age group successly!");
                    setTimeout(function(){ window.location.reload(); }, 1000);
                     
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //
    $("body").on("click", ".DeleteUser", function () {
        var id = $(this).attr('data-id');
        alert("Are you sure to delete this user?");
        $.ajax({
            url: Base_URL + "dashboard/deleteUser/" + id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    $("#okmessage").text(" User is deleted successfuly! ");
                    $("#messageOK").show();
                    $("#messageError").hide();
                    window.location.reload();                 
                }
            },
            error: function(data) {
                $("#errormessage").text("Error while updating! Please try later!");
                $("#messageError").show();
                $("#messageOK").hide();
            }
        });
        return false;
    });
    //
    $('body').on("click", ".edit-role", function(){
        var role_id = $(this).attr('id');
        var user_id = $(this).attr('data-user-id');
        var jsonVar = '{role_id:'+role_id+'; user_id:'+user_id+'}';       

        if ($(this).is(':checked')) {
            CallAPI("POST", "api/roles/create/"+user_id+"/"+role_id, function () { MessageBoxOK(" Role added "); },function () { MessageBoxError("Error while updating! Please try later!"); }, JSON.stringify(jsonVar) );
        }
        else
        {
            CallAPI("DELETE", "api/roles/delete/"+user_id+"/"+role_id, function () { MessageBoxOK(" Role removed " ); },function () { MessageBoxError("Error while updating! Please try later!"); } );
        }
                //
    });
    //
    $('#change-pass').click(function(){
            var oldpass = $('#old-password').val();
            var newpass = $('#password').val();
            var cpass = $('#cpassword').val();
            var jsonVar = new Array(oldpass, newpass, cpass);

            CallAPI("POST", "profile/changepass", function (e) {
                if(e === 'ok')
                {
                    $("#okmessage").text(" Password changed ");
                    $("#messageOK").show();
                    $("#messageError").hide();
                }
                else if(e === 'error:short')
                {
                    $("#messageError").show();
                    $("#errormessage").text("The Password is too short! Please try again!");
                    $("#messageOK").hide();
                }
                else if(e === 'error:match')
                {
                    $("#messageError").show();
                    $("#errormessage").text("The passwords don't match! Please try again!");
                    $("#messageOK").hide();
                }
                else if(e === 'error:while')
                {
                    $("#messageError").show();
                    $("#errormessage").text("Error while updating! Please try again!");
                    $("#messageOK").hide();
                }
                else if(e === 'error:user')
                {
                    $("#messageError").show();
                    $("#errormessage").text("Can't find user with that password! Please try again!");
                    $("#messageOK").hide();
                }

            },function () { 
                $("#messageError").show();
                $("#errormessage").text("Error while updating! Please try later!");
                $("#messageOK").hide();
            
        }, JSON.stringify(jsonVar) );

        });
    //
    $('body').on("change", "#source_id", function() {
        var video_id = $("#url").val(),
        url = null,
        source_id = $(this).find(':selected').attr('data-name');
        if(video_id.length === 0) { return; }
        switch(source_id) {
            case 'youtube':
                url = "http://www.youtube.com/watch?v=" + video_id;
                $.getJSON("https://noembed.com/embed?callback=?",
                    {"format": "json", "url": url}, function (youtube) {
                        if(youtube.hasOwnProperty('error')) {
                            alert('There is not such video!');
                        } else {
                            $("#title").val(youtube.title);        
                            $("#video-tumb").html('<img src="' + youtube.thumbnail_url + '"  width="270" height="170" />');                   
                        }
                     console.log(youtube);
                });
                break;
            case 'vimeo':
                url = 'http://vimeo.com/api/v2/video/' + video_id + '.json?callback=?';
                $.getJSON(url, {format: "json"}, function(vimeo) {
                    $("#title").val(vimeo[0].title);
                    $("#video-tumb").html('<img src="' + vimeo[0].thumbnail_medium + '"  width="270" height="170" />');
                    console.log(vimeo);
                })
                    .error(function(xhr,thrownError) { 
                       if(xhr.status === 404) {
                            alert('There is not such video!');
                        } 
            });

                break;
        }
        console.log(source_id);
        

        

        
    });
    //
    
});