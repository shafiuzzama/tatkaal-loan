$(document).ready(function(){
  
    $('.sale_return_search').on('keyup',function(){
    //   $("#result").html('');
      var text=$(this).val();
      $.get("sale-search-product", {text: text} , function(data){
         
            $("#sale_return").html(data.data);
            // var rowCount = $("#result tr").length;
            // if(rowCount>0){
            //     $('.showbarcode').prop('disabled', false);
            // }
        });
  })
})


$(document).on('keyup','.salesreturen_amount',function(){
    var product_id=calculateTotal("salesreturn_body tr");
  var subtotal=$('#product_total_price').val();
  get_record(subtotal,product_id);
   
})
//delete product row
$(document).on('click','.delete_row',function(){
    $(this).closest('tr').remove();
    var product_id=calculateTotal("salesreturn_body tr");
  var subtotal=$('#product_total_price').val();
  get_record(subtotal,product_id);
})


function get_record(subtotal,product_id){
    var count=0;
   $('.salesreturen_amount').each(function(){
       if($(this).val() == ''){
           count++;
       }
   });
   if(count == '0'){
       
       $('#salesreturnBtn').prop('disabled', false);
       var grand_total=0;
         var total_tax=0;
    var total_discount=0;
    var total_Shipping=0;
       $('.salesreturen_amount').each(function(i){
       if(i == '0'){
          total_tax=parseInt($(this).val())*subtotal/100;
         
          $('.salesreturn_tax_total').text("Rs "+total_tax);
          $('#salesreturn_tax_total').val(total_tax);
       }
        if(i == '1'){
            total_discount=parseInt($(this).val())*subtotal/100;
            $('.salesreturn_discount_total').text("Rs "+total_discount);
            $('#salesreturn_discount_total').val(total_discount);
        }
        if(i == '2'){
             total_Shipping=parseInt($(this).val());
             $('.salesreturn_shipping_total').text("Rs "+total_Shipping);
             $('#salesreturn_shipping_total').val(total_Shipping);
        }
        
   });

    grand_total=(parseInt(subtotal)+total_tax-total_discount+total_Shipping);
    $('.salesreturn_grand_total').text("Rs "+grand_total);
    $('#salesreturn_grand_total').val(grand_total);
    
   }
   else
   {
       $('.salesreturn_grand_total').text('Rs 0.00');
        $('.salesreturn_tax_total').text('Rs 0.00');
        $('.salesreturn_discount_total').text('Rs 0.00');
        $('.salesreturn_shipping_total').text('Rs 0.00');
        
         $('#salesreturn_grand_total').val(0);
         $('#salesreturn_tax_total').val(0);
         $('#salesreturn_discount_total').val(0);
         $('#salesreturn_shipping_total').val(0);
         $('#salesreturnBtn').prop('disabled', true);
   }
}

$(document).on('click','#salesreturnBtn',function(e){
    e.preventDefault();
        var customer_id=$('.customer_id').val();
        var subtotal= $('#product_total_price').val();
        var total_tax=$('.salesreturen_amount').val();
        var total_discount= $('.salesreturen_amount').val();
        var shipping_charge= $('.salesreturen_amount').val();
        var grandTotal= $('#salesreturn_grand_total').val();
        var discription= $('#discription').val();
        var product_id=calculateTotal("salesreturn_body tr");
         
 $(this).html('Sending..');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $.ajax({
          data: {customer_id,subtotal,total_tax,total_discount,shipping_charge,grandTotal,discription,product_id},
          url: "sales-return-add",
          type: "POST",
          dataType: 'json',
          success: function (data) {
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
})