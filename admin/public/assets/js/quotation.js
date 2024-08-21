$(document).ready(function(){
  
    $('.quotation_product').on('keyup',function(){
    //   $("#result").html('');
      var text=$(this).val();
      $.get("quotation-search-product", {text: text} , function(data){
         
            $("#qoutation_result").html(data.data);
            // var rowCount = $("#result tr").length;
            // if(rowCount>0){
            //     $('.showbarcode').prop('disabled', false);
            // }
        });
  })
})