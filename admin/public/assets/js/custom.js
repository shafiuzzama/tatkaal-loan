
        
$('.delete_record').on('click',function(){

var id=$(this).attr("data-id");
var table_name=$(this).attr("data-table");
$.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         $.ajax({
            type:'POST',
            url:'/admin/delete-record',
            data:{id,table_name},
            success:function(response) {
            	    if(response.status === true){
            	    	toastr.success(response.message);
            	    	window.location.reload();
            	    }
            	    else
            	    	toastr.error(response.message);
            },
            error: function (msg) {
               console.log(msg);
               var errors = msg.responseJSON;
            }
         });

})

//for chage status

    $(".check").change(function () {
      var id=$(this).attr("data-id");
      var table=$(this).attr("data-table");
      var status=$(this).val();
    $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         
            $.ajax({
            type:'POST',
            url:'/admin/change-status',
            data:{id,table,status},
            success:function(response) {
            	    if(response.status === true){
            	    	toastr.success(response.message);
            	    	window.location.reload();
            	    }
            	    else
            	    	toastr.error(response.message);
            },
            error: function (msg) {
               console.log(msg);
               var errors = msg.responseJSON;
            }
         });

  });
  
  //change country
  

    $('.country_list').on('change', function() {
            var country_id = this.value;
            $("#state-dropdown").html('');
             $("#city-dropdown").html('');
             $("#locality-dropdown").html('');
          $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
            $.ajax({
                url:'/admin/states-by-country',
                type: "POST",
                data: {
                    country_id: country_id
                },
                cache: false,
                success: function(result){
                   
                   $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result, function (key, value) {
                           
                            $("#state-dropdown").append('<option value="' + value.id + '">' +value.state_name + '</option>');
                        });
                       
                }
            });
    });
    
    //change state
    
   
        $('.state_list').on('change', function() {
            
            var state_id = this.value;
            $("#city-dropdown").html('');
             $("#locality-dropdown").html('');
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
            $.ajax({
                url:'/admin/city-by-state',
                type: "POST",
                data: {
                    state_id: state_id
                },
                cache: false,
                success: function(result){
                   
                  $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(result, function (key, value) {
                           
                            $("#city-dropdown").append('<option value="' + value.id + '">' +value.city_name + '</option>');
                        });
                       
                }
            });
    });
    
    
       //city change
        $('.city_list').on('change', function() {
            
            var city_id = this.value;
            $("#locality-dropdown").html('');
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
            $.ajax({
                url:'/admin/locality-by-city',
                type: "POST",
                data: {
                    city_id: city_id
                },
                cache: false,
                success: function(result){
                   
                  $('#locality-dropdown').html('<option value="">-- Select Locality --</option>');
                        $.each(result, function (key, value) {
                           
                            $("#locality-dropdown").append('<option value="' + value.id + '">' +value.locality_name + '</option>');
                        });
                       
                }
            });
    });
    
  //for show barcode
 
   $(document).ready(function(){
      $('.show_field').hide();
       $('.showbarcode').prop('disabled', true);
           $('.showbarcode').on("click",function(){
           
                var product_id = $("#result tr").map(function() {
                    return $(this).attr('data-id');
                }).get();
                
                  $.get("get-product-barcode", {product_id: product_id} , function(data){
                     $("#barcode_list").html(data.data);
                   
                    });
                 
              })
             
              
   })
  
  //show list of barcode product
  $('.search_product').on('keyup',function(){
      $('.showbarcode').prop('disabled', true);
      $("#result").html('');
      var text=$(this).val();
      $.get("filter-product", {text: text} , function(data){
         
            $("#result").html(data.data);
            var rowCount = $("#result tr").length;
            if(rowCount>0){
                $('.showbarcode').prop('disabled', false);
            }
        });
  })
 
  
       function printSection() {

        var printContent = document.getElementById("printable-section").innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
      }
      
  //show product list
    $('.search_input').on('keyup',function(){
      var text=$(this).val();
      $.get("search-product", {text: text} , function(data){
            $(".showTable").html(data.data);
        });
  })

  //Order create

  $(document).on("click",'#order_create',function(event){
       event.preventDefault();
     var product_details=calculateTotal("order_product_table tr");
     var cust_id=$('#coustomer_id').val();
     var order_tax=$('#order_tax').val();
     var discount_price=$('#order_discount').val();
     var shipping_cast=$('#order_shipping').val();
     var grand_total=$('.grand_total').val();
     var total_price=$('#product_total_price').val();
            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         
            $.ajax({
                url:'/sub-admin/new-order-create',
                type: "POST",
                data: {
                    grand_total,
                    shipping_cast,
                    discount_price,
                    order_tax,
                     cust_id,
                     total_price,
                    product_details
                   
                },
                cache: false,
                success: function(result){
                   if(result.status == true){
                         setTimeout(() => {
                       var url = "https://pro.alldoneasiatic.com/public/sub-admin/order";
                  	  location.href = url;
                      },500)
                      
                     
                  	    toastr.success(result.msg);
                   }
                   else
                   {
                          setTimeout(() => {
                       var url = "https://pro.alldoneasiatic.com/public/sub-admin/order";
                  	  location.href = url;
                      },500)
                      
                  	    toastr.error(result.msg);
                   }
                }
            });
  })
  
    
  function calculateTotal(id){
    
      var subtotal=0;
      var pro_id=[];
       $("#"+id).each(function(i,v){
              var self = $(this);
              
                if (self.find('.checkbox').is(':checked')) {
                    var product_id=$(this).find('.checkbox').attr("data-id");
                   var total=$(this).find('.last').text();
                   if ($.isNumeric(total)) {
                      subtotal += parseFloat(total);
                      } 
                      pro_id.push(product_id);
                   
                }
         
            });
       $('#product_total_price').val(subtotal);
       return pro_id;
       

  }
  
  
$(document).ready(function(){
    // Check or Uncheck All checkboxes
    $(document).on('change','#checkall',function(){
          var checked = $(this).is(':checked');
          if(checked){
               $(".checkbox").each(function(){
                    $(this).prop("checked",true);
               });
          }else{
               $(".checkbox").each(function(){
                    $(this).prop("checked",false);
               });
          }
          calculateTotal("order_product_table tr");
    });
 
    // Changing state of CheckAll checkbox 
    $(document).on('click',".checkbox",function(){
 
          if($(".checkbox").length == $(".checkbox:checked").length) {
                $("#checkall").prop("checked", true);
          } else {
                $("#checkall").prop("checked", false);
          }
          calculateTotal("order_product_table tr");

    });
});


//order create js
 
//remove tr
$(document).on('click','.delete-tr',function(){
    $(this).closest('tr').remove();
    calculateTotal("order_product_table tr");
})
//Grand Total Amount
  $(document).on('keyup','#order_tax',function(){
       var subtotal=parseInt($('#product_total_price').val());
      var tax=parseInt($(this).val());
      var tax_amount=subtotal*tax/100;
      $('#tax_amount').text("Rs "+tax_amount);
       if(validateInput()){
           calculateGrandTotal();
       }
 
    })
    
  $(document).on('keyup','#order_discount',function(){
      var subtotal=parseInt($('#product_total_price').val());
      var discount=parseInt($(this).val());
      var tax_discount=subtotal*discount/100;
      $('#tax_discount').text("Rs "+tax_discount);
    if(validateInput()){
           calculateGrandTotal();
       }
   
    })
 $(document).on('keyup','#order_shipping',function(){
      var shipping=parseInt($(this).val());
      $('#tax_shipping').text("Rs "+shipping);
      if(validateInput()){
           calculateGrandTotal();
       }
 
    })
    


function validateInput() {
  var isValid = true;
  $('.order_amount').each(function() {
    if ( $(this).val() === '' )
        isValid = false;
  });
  return isValid;
}

function calculateGrandTotal(){
    var grandTotal=0;
   var subtotal= parseInt($('#product_total_price').val());
     var tax_amount= $('#tax_amount').text().replace(/Rs /g,'');
    var tax_discount= $('#tax_discount').text().replace(/Rs /g,'');
    var tax_shipping=$('#tax_shipping').text().replace(/Rs /g,'');
   var grandTotal=subtotal+parseInt(tax_amount)-parseInt(tax_discount)+parseInt(tax_shipping);
  $('#grand_total').text("Rs "+grandTotal);
  $('.grand_total').val(grandTotal);
  
}

//create payment==================================================================================

    $('.payment_create').click(function (e) {
      
        e.preventDefault();
        
        $(this).html('Sending..');
      var id=$(this).attr('data-id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#payment_form_'+id).serialize(),
          url: "payment-create",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#payment_form_'+id).trigger("reset");
              $('#createpayment_'+id).modal('hide');
              if(data.status == true){
                  
                      setTimeout(() => {
                       var url = "https://pro.alldoneasiatic.com/public/sub-admin/order";
                  	  location.href = url;
                      },500)
                      
                  	    toastr.success(data.msg);
                   }
                  else
                  {
                         setTimeout(() => {
                       var url = "https://pro.alldoneasiatic.com/public/sub-admin/order";
                  	  location.href = url;
                      },500)
                      
                  	    toastr.error(data.msg);
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });


//create paymentType

    $('.paymentTypeCreate').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#payment_type_form').serialize(),
          url: "paymentType-create",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#payment_type_form').trigger("reset");
              $('#addpayment').modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                  }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
    
    //Update paymentType

    $('.update_paymentType').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      var id=$(this).attr('data-id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#paymenttype_update_'+id).serialize(),
          url: "update-payment-type",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#paymenttype_update_'+id).trigger("reset");
              $('#editpayment_'+id).modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                   }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
    
    
//create Tax

    $('.taxCreate').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#tax_form').serialize(),
          url: "tax-create",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#tax_form').trigger("reset");
              $('#addTax').modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                  }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
     //Update Tax

    $('.update_tax').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      var id=$(this).attr('data-id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#edit_tax_form_'+id).serialize(),
          url: "update-tax",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#edit_tax_form_'+id).trigger("reset");
              $('#edittax_'+id).modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                   }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
    
    //create Currency

    $('.currencyCreate').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#currency_form').serialize(),
          url: "currency-create",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#currency_form').trigger("reset");
              $('#addcurrency').modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                  }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
    
        //Update currency

    $('.updateCurrency').click(function (e) {
        
        e.preventDefault();
        
        $(this).html('Sending..');
      var id=$(this).attr('data-id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: $('#currencyForm_'+id).serialize(),
          url: "update-currency",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#currencyForm_'+id).trigger("reset");
              $('#editpayment_'+id).modal('hide');
              if(data.status == true){
                    
                         setTimeout(() => {
                      toastr.success(data.msg);
                      },500)
                   }
                  else
                  {
                         setTimeout(() => {
                      toastr.error(data.msg);
                      },500)
                  }
           
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });
//remove product barcode row

$(document).on('click','.delete-product_row',function(){
    $(this).closest('tr').remove();
    
})

  $(document).ready(function(){
        $('#maps').click(function() {
            $('#mapslocationModal').modal('show');
            //  initAutocomplete();
        });
  });
  
        function initAutocomplete() {
            
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -33.8688, lng: 151.2195 },
          zoom: 13,
          mapTypeId: "roadmap",
        });
       
        // Create the search box and link it to the UI element.
        const input = document.getElementById("pac-input");
        $(".pac-container").css({ "z-index": "1067" });
        const searchBox = new google.maps.places.SearchBox(input);
        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.addListener("bounds_changed", () => {
             
          searchBox.setBounds(map.getBounds());
        });
        
        let markers = [];
        
        searchBox.addListener("places_changed", () => {
          const places = searchBox.getPlaces();
         
            $(".pac-container").css({ "z-index": "1067" });
          if (places.length == 0) {
            return;
          }
          
          // Clear out the old markers.
          $("#maps").val(places[0].formatted_address);
          $("#myLat").val(places[0].geometry.location.lat());
          
          $("#myLng").val(places[0].geometry.location.lng());
          
          markers.forEach((marker) => {
            marker.setMap(null);
          });
          markers = [];
          // For each place, get the icon, name and location.
          const bounds = new google.maps.LatLngBounds();
          places.forEach((place) => {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }

            markers.push(
              new google.maps.Marker({
                map,
                // icon,
                title: place.name,
                position: place.geometry.location,
              })
            );

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

//chart show dynamic years
function generateArrayOfYears() {
  var max = new Date().getFullYear()
  var min = max - 9
  var years = []

  for (var i = max; i >= min; i--) {
    years.push(i)
  }
  return years
}
var years = generateArrayOfYears();
var html='';
     $.each(years, function(index, value){
            html+=`<option value="${value}">${value}</option>`;
        });
      $('.years_list').html(html);
    
    
