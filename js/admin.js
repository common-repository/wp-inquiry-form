jQuery(document).ready(function() {

jQuery(function(){
   jQuery('.pop').click(function(){
        jQuery('.div_form').bPopup();
    });
});
jQuery( "#popup-close" ).click(function() {
jQuery(this).closest('.et_pt_item_image').find('.hidden').delay( 800 ).hide(1000); 
});


    jQuery('.pop_show1').blur(function(e) {
    
          //var showphone = jQuery(".pop_show1").val();
          var showphone = jQuery(this).val();
     
        	var filter = /^[0-9-+]+$/;
    		if (filter.test(showphone)) {
    			jQuery('.spnPhoneStatus1').html('');
            jQuery('.spnPhoneStatus1').css('color', 'green');

    		}
    		else
    		{
    			jQuery('.spnPhoneStatus1').html('Invalid Phone Number');
            jQuery('.spnPhoneStatus1').css('color', 'red');
           event.preventDefault();
    		}
        
    });
    
    
      
    jQuery('.pop_show').blur(function(e) {
    
          //var showphone = jQuery(".pop_show1").val();
          var showphone = jQuery(this).val();
      
        	var filter = /^[0-9-+]+$/;
    		if (filter.test(showphone)) {
    			jQuery('.spnPhoneStatus').html('');
            jQuery('.spnPhoneStatus').css('color', 'green');

    		}
    		else
    		{
    			jQuery('.spnPhoneStatus').html('Invalid Phone Number');
            jQuery('.spnPhoneStatus').css('color', 'red');
            e.preventDefault();
    		}
        
    });    
    
    
    
});

/* function validatePhone() {
    var a = document.getElementById('showphone').value;
   
    var filter = /^[0-9-+]+$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
} */





if ( jQuery('input[name="zipcode"]').prop('checked') ) {
	 
    jQuery('#showzip').show();
    jQuery('#check_zip_div').show();
    jQuery('input[name="showthis"]').fadeIn();
    jQuery('input[name="zip_vali"]').fadeIn();
    jQuery('#errziplab').show();
    jQuery('input[name="zip_error"]').fadeIn();
} 
else {
	    jQuery('#showzip').hide();
	    jQuery('#check_zip_div').hide();
    jQuery('input[name="showthis"]').hide();
    jQuery('input[name="zip_vali"]').hide();
        jQuery('#errziplab').hide();
    jQuery('input[name="zip_error"]').hide();
}

//show it when the checkbox is clicked
jQuery('input[name="zipcode"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#showzip').show();
	    jQuery('#check_zip_div').show();
    jQuery('input[name="showthis"]').fadeIn();
    jQuery('input[name="zip_vali"]').fadeIn();
       jQuery('#errziplab').show();
    jQuery('input[name="zip_error"]').fadeIn();
} 
else {
	    jQuery('#showzip').hide();
	    jQuery('#check_zip_div').hide();
    jQuery('input[name="showthis"]').hide();
    jQuery('input[name="zip_vali"]').hide();
     jQuery('#errziplab').hide();
    jQuery('input[name="zip_error"]').hide();
}
});



//////////////////////////////////////////////////////////////

if ( jQuery('input[name="chaddress"]').prop('checked') ) {
	 
    jQuery('#check_add_div').show();
    jQuery('#erraddlab').show();
    jQuery('input[name="add_error"]').fadeIn();
    jQuery('input[name="address_vali"]').fadeIn();    
    jQuery('#labadd').show();
    jQuery('input[name="req_address"]').fadeIn();

} 
else {
	    jQuery('#check_add_div').hide();
	    jQuery('#labadd').hide();
    jQuery('input[name="req_address"]').hide();
    jQuery('input[name="address_vali"]').hide();
     jQuery('#erraddlab').hide();
    jQuery('input[name="add_error"]').hide();
    
}

//show it when the checkbox is clicked
jQuery('input[name="chaddress"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#labadd').show();
	    jQuery('#check_add_div').show();
    jQuery('input[name="req_address"]').fadeIn();
    jQuery('input[name="address_vali"]').fadeIn();
      jQuery('#erraddlab').show();
    jQuery('input[name="add_error"]').fadeIn();
} 
else {
	    jQuery('#check_add_div').hide();
	    jQuery('#labadd').hide();
    jQuery('input[name="req_address"]').hide();
    jQuery('input[name="address_vali"]').hide();
     jQuery('#erraddlab').hide();
    jQuery('input[name="add_error"]').hide();
}
});


//////////////////////////////////////////////////////////////////////////////////////



if ( jQuery('input[name="phone"]').prop('checked') ) {
	 
    jQuery('#showphn').show();
    jQuery('#check_phn_div').show();
    jQuery('input[name="showphone"]').fadeIn();
    jQuery('input[name="phone_vali"]').fadeIn();
    jQuery('#errphnlab').show();
    jQuery('input[name="phn_error"]').fadeIn();
} 
else {
	    jQuery('#showphn').hide();
	    jQuery('#check_phn_div').hide();
    jQuery('input[name="showphone"]').hide();
    jQuery('input[name="phone_vali"]').hide();
       jQuery('#errphnlab').hide();
    jQuery('input[name="phn_error"]').hide();
}
//show it when the checkbox is clicked
jQuery('input[name="phone"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#showphn').show();
	    jQuery('#check_phn_div').show();
    jQuery('input[name="showphone"]').fadeIn();
    jQuery('input[name="phone_vali"]').fadeIn();
      jQuery('#errphnlab').show();
    jQuery('input[name="phn_error"]').fadeIn();
} 
else {
	    jQuery('#showphn').hide();
	    jQuery('#check_phn_div').hide();
    jQuery('input[name="showphone"]').hide();
    jQuery('input[name="phone_vali"]').hide();
       jQuery('#errphnlab').hide();
    jQuery('input[name="phn_error"]').hide();
}
});


//////////////////////////////////////////////////

if ( jQuery('input[name="address_vali"]').prop('checked') ) {
	 
    jQuery('#erraddlab').show();
    jQuery('input[name="add_error"]').fadeIn();
} 
else {
	    jQuery('#erraddlab').hide();
    jQuery('input[name="add_error"]').hide();
}



//show it when the checkbox is clicked
jQuery('input[name="address_vali"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#erraddlab').show();
    jQuery('input[name="add_error"]').fadeIn();
} 
else {
	    jQuery('#erraddlab').hide();
    jQuery('input[name="add_error"]').hide();
}
});


///////////////////////////////////////////////////////////////////////////

if ( jQuery('input[name="phone_vali"]').prop('checked') ) {
	
    jQuery('#errphnlab').show();
    jQuery('input[name="phn_error"]').fadeIn();
} 
else { 
	    jQuery('#errphnlab').hide();
    jQuery('input[name="phn_error"]').hide();
}

//show it when the checkbox is clicked
jQuery('input[name="phone_vali"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#errphnlab').show();
    jQuery('input[name="phn_error"]').fadeIn();
} 
else {
	    jQuery('#errphnlab').hide();
    jQuery('input[name="phn_error"]').hide();
}
});




if ( jQuery('input[name="zip_vali"]').prop('checked') ) {
	
    jQuery('#errziplab').show();
    jQuery('input[name="zip_error"]').fadeIn();
} 
else { 
	    jQuery('#errziplab').hide();
    jQuery('input[name="zip_error"]').hide();
}

//show it when the checkbox is clicked
jQuery('input[name="zip_vali"]').on('click', function(){
	
if ( jQuery(this).prop('checked') ) {
	    jQuery('#errziplab').show();
    jQuery('input[name="zip_error"]').fadeIn();
} 
else {
	    jQuery('#errziplab').hide();
    jQuery('input[name="zip_error"]').hide();
}
});




