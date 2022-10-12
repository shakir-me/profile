$(document).ready(function () {
    $("#current_password").keyup(function () {
        var current_password = $("#current_password").val();
        $.ajax({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            type: 'post',
            url: '/admin-check-current-password',
            data: { current_password: current_password },
            success: function (rep) {

                if (rep == "false") {
                    $("#check_password").html("<font color='red'>Current Password is Incorrect</font>");
                } else {
                    $("#check_password").html("<font color='green'>Current Password is correct</font>");
                }
            }, error: function () {
                alert('Error');
            }
        });
    })

    //Update vendor status active
   $(document).on("click",".updateAdminStatus",function(){
     var status = $(this).children("i").attr("status");
     var admin_id = $(this).attr("admin_id");
      //alert(admin_id);
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },


        type:'post',
        url:'/admin/update/status',
        data:{status:status,admin_id:admin_id},
        success:function(resp){

       if (resp["status"] == 0) {
     $("#admin-" + admin_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
      } else if (resp["status"] == 1) {
          $("#admin-" + admin_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
      }

            //alert(resp);
        },error:function(){
            alert("Error");
        }

      })
    
   });


    //Update section  active inactive
   $(document).on("click",".updateSectionStatus",function(){
     var status = $(this).children("i").attr("status");
     var section_id = $(this).attr("section_id");
      //alert(section_id);
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },


        type:'post',
        url:'/admin/update/section/status',
        data:{status:status,section_id:section_id},
        success:function(resp){

       if (resp["status"] == 0) {
     $("#section-" + section_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
      } else if (resp["status"] == 1) {
          $("#section-" + section_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
      }

            //alert(resp);
        },error:function(){
            alert("Error");
        }

      })
    
   });

     //appned category level

     $("#section_id").change(function(){
        var section_id=$(this).val();
        //alert(section_id);
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },


           type:'get',
           url:'/admin/append/category/level',
           data:{section_id:section_id},
           success:function(resp){
            $("#appendCategoriesLevel").html(resp);
           },error:function(){
            alert("Error");
           }
        })
     }); 




     //Update category  active inactive
    $(document).on("click",".updateCategoryStatus",function(){
      var status = $(this).children("i").attr("status");
      var category_id = $(this).attr("category_id");
       //alert(category_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/category/status',
         data:{status:status,category_id:category_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#category-" + category_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#category-" + category_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });


     //Update brand  active inactive
    $(document).on("click",".updateBrandStatus",function(){
      var status = $(this).children("i").attr("status");
      var brand_id = $(this).attr("brand_id");
       alert(brand_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/brand/status',
         data:{status:status,brand_id:brand_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#brand-" + brand_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#brand-" + brand_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });

     //Update Product  active inactive
    $(document).on("click",".updateProductStatus",function(){
      var status = $(this).children("i").attr("status");
      var product_id = $(this).attr("product_id");
       alert(product_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/product/status',
         data:{status:status,product_id:product_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#product-" + product_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#product-" + product_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });



     //Update Product  active inactive
    $(document).on("click",".UpdateAttibuteStatus",function(){
      var status = $(this).children("i").attr("status");
      var attibute_id = $(this).attr("attibute_id");
       alert(attibute_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/attibute/status',
         data:{status:status,attibute_id:attibute_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#attibute-" + attibute_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#attibute-" + attibute_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });


     //Update Product Image active inactive
    $(document).on("click",".UpdateImageStatus",function(){
      var status = $(this).children("i").attr("status");
      var image_id = $(this).attr("image_id");
       alert(image_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/image/status',
         data:{status:status,image_id:image_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#image-" + image_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#image-" + image_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });


     //Update banner active inactive
    $(document).on("click",".updateBannerStatus",function(){
      var status = $(this).children("i").attr("status");
      var banner_id = $(this).attr("banner_id");
       alert(banner_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/banner/status',
         data:{status:status,banner_id:banner_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#banner-" + banner_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#banner-" + banner_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });


      //Update filter active inactive
    $(document).on("click",".updateFilterStatus",function(){
      var status = $(this).children("i").attr("status");
      var filter_id = $(this).attr("filter_id");
       alert(filter_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/filter/status',
         data:{status:status,filter_id:filter_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#filter-" + filter_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#filter-" + filter_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });


      //Update filter value active inactive
    $(document).on("click",".updateFilterValueStatus",function(){
      var status = $(this).children("i").attr("status");
      var value_id = $(this).attr("value_id");
       alert(value_id);
       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/admin/update/value/status',
         data:{status:status,value_id:value_id},
         success:function(resp){

        if (resp["status"] == 0) {
      $("#value-" + value_id).html("<i style='font-size:30px;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
       } else if (resp["status"] == 1) {
           $("#value-" + value_id).html("<i style='font-size:30px;'  class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
       }

             //alert(resp);
         },error:function(){
             alert("Error");
         }

       })
     
    });



$("#category_id").on('change',function(){
    var category_id=$(this).val();
    //alert(category_id);

           $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },


         type:'post',
         url:'/category/filters',
         data:{category_id:category_id},
         success:function(resp){
            $(".loadFilters").html(resp.view);
        }
   });
     
    });
    





});