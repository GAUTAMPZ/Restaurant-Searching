$(document).click(function(event) { 
    if(!$(event.target).closest("#display").length && $('#display').is(":visible")){
        $('#display').hide();
    }
    else if(!$(event.target).closest("#display1").length && $('#display1').is(":visible")){
        $('#display1').hide();
    }
    else if(!$(event.target).closest("#display2").length && $('#display2').is(":visible")){
        $('#display2').hide();
    }   
});

var count=0;

$('.menu-checkbox').change(function(){
    var price = $(this).closest(".menu-div").find(".order-item-price").val();
    if($(this).is(":checked")) {
        $(this).closest('.menu-div').addClass("selected");
        $(this).closest('.menu-div').find(".quantity-input").val(1);
    } else {
        $(this).closest('.menu-div').removeClass("selected");
        $(this).closest('.menu-div').find(".quantity-input").val(0);
        $(this).closest(".menu-div").find(".order-price").val(price);
    }
    count = $('input[type="checkbox"]:checked').length;
	document.getElementById("p").innerHTML = count;
	// $(this).closest(".book-a-table-widget").find("#p").val(count);
});

$('.quantity-input').on('change',function(){
   	var qun  = $(this).val();
    var price = $(this).closest(".menu-div").find(".order-item-price").val();
   	if (qun>0) {
	   	$(this).closest('.menu-div').find('.menu-checkbox').prop("checked",true);
	    if($(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {    
	        $(this).closest('.menu-div').addClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(qun*price);
    }
    else if (qun==0 || qun<0) {
    	$(this).closest('.menu-div').find('.menu-checkbox').prop("checked",false);
	    if(!$(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {        
	        $(this).closest('.menu-div').removeClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(price);
    }
    count = $('input[type="checkbox"]:checked').length;
    document.getElementById("p").innerHTML = count;
    $(this).closest(".order_form_div_quntity").find(".quantity-input").val(qun);
}); 

$(".button-inc").on("click",function(){
    var qun = $(this).closest(".order_form_div_quntity").find(".quantity-input").val();
    var price = $(this).closest(".menu-div").find(".order-item-price").val();
    if (qun>=0) {
        qun++;
        $(this).closest('.menu-div').find('.menu-checkbox').prop("checked",true);
	    if($(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {    
	        $(this).closest('.menu-div').addClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(qun*price);
    }
    else {
        qun=0;
        $(this).closest('.menu-div').find('.menu-checkbox').prop("checked",false);
	    if(!$(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {        
	        $(this).closest('.menu-div').removeClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(price);
    }
    count = $('input[type="checkbox"]:checked').length;
    document.getElementById("p").innerHTML = count;
	$(this).closest(".order_form_div_quntity").find(".quantity-input").val(qun);
});

$(".button-dec").on("click",function(){
    var qun = $(this).closest(".order_form_div_quntity").find(".quantity-input").val();
    var price = $(this).closest(".menu-div").find(".order-item-price").val();
    if (qun>1) {
        qun--;
        $(this).closest('.menu-div').find('.menu-checkbox').prop("checked",true);
	    if($(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {    
	        $(this).closest('.menu-div').addClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(qun*price);
    }
    else {
    	qun = 0;
        $(this).closest('.menu-div').find('.menu-checkbox').prop("checked",false);
    	if(!$(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {        
	        $(this).closest('.menu-div').removeClass("selected");
	    }
	    $(this).closest(".menu-div").find(".order-price").val(price);
    }
    // else {
    //     qun = 0;
    //     $(this).closest('.menu-div').find('.menu-checkbox').prop("checked",false);
	   //  if(!$(this).closest('.menu-div').find('.menu-checkbox').is(":checked")) {        
	   //      $(this).closest('.menu-div').removeClass("selected");
	   //  }
	   // $(this).closest(".menu-div").find(".order-price").val(price);
    // }
    count = $('input[type="checkbox"]:checked').length;
    document.getElementById("p").innerHTML = count;
	$(this).closest(".order_form_div_quntity").find(".quantity-input").val(qun);
});
