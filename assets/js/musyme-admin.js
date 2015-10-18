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
            $('td', row).eq(5).html('<img height="42" width="95" src="' + Base_URL +'assets/images/catalogs/'+data.image_name +'" alt="'+data.name+'" />');
            $('td', row).eq(6).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
            $('td', row).eq(7).text(data.is_public === '1' ? 'YES':'NO');
        },
        "columns": [
                { "data": "link_id" },
                { "data": "url" },
                { "data": "source_id" },
                { "data": "title" },
                { "data": "catalog_id" },
                { "data": "image_name" },
                { "data": "language_id" },
//                { "data": "agegroup_id"},
//                { "data": "date_added" },
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
            $('td', row).eq(5).html('<img height="42" width="95" src="' + Base_URL +'assets/images/catalogs/'+data.image_name +'" alt="'+data.name+'" />');
            $('td', row).eq(6).html('<img height="28" width="38" src="' + Base_URL +'assets/img/'+data.language_id +'" alt="" />');
            $('td', row).eq(7).text(data.is_public === '1' ? 'YES':'NO');
        },
        "columns": [
                { "data": "link_id" },
                { "data": "url" },
                { "data": "source_id" },
                { "data": "title" },
                { "data": "catalog_id" },
                { "data": "image_name" },
                { "data": "language_id" },
//                { "data": "agegroup_id"},
//                { "data": "date_added" },
                { "data": "is_public" },
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
                { "data": "is_admin" },
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
                    alert("You are deleted catalog item successly!");
                   
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
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
    $("body").on("click", ".Deletemovies", function () {
        var link_id = $(this).attr('data-id');
        alert("Are you sure to delete this movie?");
        $.ajax({
            url: Base_URL + "dashboard/deleteMovie/" + link_id,
            method: "GET",
            success: function(data) {
                if(data === 'success') {
                    alert("You are deleted movie successly!");                  
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
                    alert("You are deleted song successly!");                  
                }
            },
            error: function(data) {
                
            }
        });
        return false;
    });
    //
    
});