<?php /*
Plugin Name:WP Inquiry Form
Plugin URI: http://www.vivacityinfotech.net
Description: Simple WP Inquiry form for your blog posts or pages.
Author: vivacityinfotech		
Authero URI: http://www.vivacityinfotech.net
Version: 1.3
Requires at least: 4.0 or later
		
*/
/*  
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.*/


?>
<!-------------------------------------------------   popup css ------------------------------------------------------>
<style type="text/css">
 div#div_form {
    background-color: #FFFFFF;
    padding: 10px;
    width: 60%;
}
div#div_form label {
    display: block;
    font-size: 70%;
    font-weight: bold;
    margin: 2% 2%;
}
div#div_form input.form_text {
    background: none repeat scroll 0 0 #FFFFFF;
    display: block;
    height: 20%;
    margin: 0 3%;
    width: 90%;
}
div#div_form textarea {
    background: none repeat scroll 0 0 #FFFFFF;
    height: 40%;
    margin-left: 3%;
    width: 95%;
}
div#div_form input.submit_button {
    display: block;
    height: 50px;
    margin: 3%;
    width: !important;
}
div#div_form span.req {
    color: #268DA3;
    font-size: 20%;
}
#form_tile{
font-size: 100%;
}
.b-close{
font-size: 100% !important;
}

</style>

<!-------------------------------------------------   popup css ends------------------------------------------------------>



<?php
ob_start();
error_reporting(0);

add_filter('plugin_row_meta', 'RegisterPluginLinks_form',10, 2);
function RegisterPluginLinks_form($links, $file) {
	if ( strpos( $file, 'wp-inquery_form.php' ) !== false ) {
		$links[] = '<a href="#">FAQ</a>';
		$links[] = '<a href="mailto:support@vivacityinfotech.com">Support</a>';
		$links[] = '<a href="http://bit.ly/1icl56K">Donate</a>';
	}
	return $links;
	}
//menu show in dashborad
function wif_init_admin_actions() {
			add_menu_page("wp-main_form", "WP Inquiry form",'manage_options', "wp-main_form", "wif_admin_form_settings",'dashicons-admin-generic' );
		}

add_action('admin_menu', 'wif_init_admin_actions');
  
  // settings update function
  function wif_admin_form_settings() {
  ?>	
  <div id="wif_wrapper">
  <div class="main_left postbox">  
<?php  

/////////////////////////////////////// Update options from admin panel////////////////////////////////////////////////////

echo "<h1>" .  'WP Inquiry Form Settings' . "</h1>";   
 if($_POST['hidden_value'] == 'Y') {  
        //Form data sent  
        if( $_POST['show_from']){
       
        update_option('show_from', $_POST['show_from']);

        }else{
         update_option('show_from','no');     
        }
      

        if( $_POST['post_ty']){
        update_option('post_ty', $_POST['post_ty']);  
        
        }else{
         update_option('post_ty','');     
        }		 
		 
		  
		  if( $_POST['chaddress']){
        update_option('chaddress', $_POST['chaddress']);  
        
        }else{
         update_option('chaddress','');     
        } 
        
	 
        if( $_POST['address_vali']){
        update_option('address_vali', $_POST['address_vali']);  
        
        }else{
         update_option('address_vali','');     
        }
        
        if( $_POST['phone_vali']){
        update_option('phone_vali', $_POST['phone_vali']);  
        
        }else{
         update_option('phone_vali','');     
        }
        
          if( $_POST['zip_vali']){
        update_option('zip_vali', $_POST['zip_vali']);  
        
        }else{
         update_option('zip_vali','');     
        }
		 
	     if( $_POST['zipcode']){
       
        update_option('zipcode', $_POST['zipcode']);

        }
        else{
         update_option('zipcode','');     
        }

          if( $_POST['phone']){
       
        update_option('phone', $_POST['phone']);

        }
        else{
         update_option('phone','');     
        }        
        
        if( $_POST['req_heading']){
       
        update_option('req_heading', $_POST['req_heading']);

        }else{
         update_option('req_heading','Request Form for this Post');     
        }
        
        if( $_POST['showthis']){
       
        update_option('showthis', $_POST['showthis']);
         
        }else{
         update_option('showthis','Zipcode');     
        }
        
         if( $_POST['showphone']){
       
        update_option('showphone', $_POST['showphone']);
         
        }else{
         update_option('showphone','phone');     
        }
         
        if( $_POST['req_Email_name']){
        update_option('req_Email_name', $_POST['req_Email_name']);  
        
        }else{
         update_option('req_Email_name','Your Email');     
        } 
  
       if( $_POST['req_name']){
        update_option('req_name', $_POST['req_name']);  
        
        }else{
         update_option('req_name','Your Name');     
        } 
         if( $_POST['req_address']){
        update_option('req_address', $_POST['req_address']);  
        
        }else{
         update_option('req_address','Your Address');     
        } 
  
        if( $_POST['req_message_name']){
        update_option('req_message_name', $_POST['req_message_name']);  
        
        }else{
         update_option('req_message_name','Request Message');     
        } 
        
         if( $_POST['to_email']){
        update_option('to_email', $_POST['to_email']);  
        
        }else{
         update_option('to_email',get_option('admin_email'));     
        } 
        
          if( $_POST['suceess_message']){
        update_option('suceess_message', $_POST['suceess_message']);  
        
        }else{
         update_option('suceess_message','Thank you for your Request. We will contact with you shortly.');     
        } 
        
        if( $_POST['captcha_error']){
        update_option('captcha_error', $_POST['captcha_error']);  
        
        }else{
         update_option('captcha_error','Error: Please fill the correct value.');     
        } 
         if( $_POST['email_error']){
        update_option('email_error', $_POST['email_error']);  
        
        }else{
         update_option('email_error','Error: Please enter a valid email address.');     
        } 
        
         if( $_POST['name_error']){
        update_option('name_error', $_POST['name_error']);  
        
        }else{
         update_option('name_error','Error: Please enter your name.');     
        } 
        
         if( $_POST['add_error']){
        update_option('add_error', $_POST['add_error']);  
        
        }else{
         update_option('add_error','Error: Please enter your address.');     
        }        
        
          if( $_POST['phn_error']){
        update_option('phn_error', $_POST['phn_error']);  
        
        }else{
         update_option('phn_error','Error: Please enter your Phone No.');     
        }
        
          if( $_POST['zip_error']){
        update_option('zip_error', $_POST['zip_error']);  
        
        }else{
         update_option('zip_error','Error: Please enter your Zipcode.');     
        }
        
          if( $_POST['Inquery_error']){
        update_option('Inquery_error', $_POST['Inquery_error']);  
        
        }else{
         update_option('Inquery_error','Error: Please enter your inquery message.');     
        }
         if( $_POST['stylesheet_request']){
        update_option('stylesheet_request', $_POST['stylesheet_request']);  
        
        }else{
         update_option('stylesheet_request','
			div#main_form{ /*inquiry form wrapper div*/
			padding:10px;
			}
			div#main_form label {
			    display: block;
			    font-size: 13px;
			    font-weight: bold;
			    margin: 5px 10px;
			}
			div#main_form input.form_text {
			    display: block;
			    height: 35px;
			    margin: 0 10px 0px;
			    width: 400px;
			background:white;
			}
			div#main_form textarea { 
			    height: 140px;
			    margin-left: 10px;
			    width: 400px;
			background:white;
			}
			div#main_form input.submit_button {
			    display: block;
			    height: 50px;
			    margin: 10px;
			    width: 200px;
			}
			
			div#main_form span.req { 
			    color: #268da3;
			    font-size: 20px;
			}
			
			.form_label{display: inline-block; width: 60px;}');     
        } 
 }
//------------------------------- Update options from admin panel ends-------------------------------------------------------- 





//----------------------------------------------- Plug in Settings form ----------------------------------------------------

 
$post_types = get_post_types();
$post_list = array();

//$page = get_page_by_path($slug);
//$title = get_the_title($page->ID);
//$post_types->labels->singular_name;
//$post = get_option('wfap_post_type');
?>
    <form name="my_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>"> 
           <p><span class="form_label">Show Form in Content using popup:</span>
           <?php   $show_from = get_option('show_from');?>
            <input type="radio" <?php if( $show_from =='yes'){?> checked=checked <?php } ?> name="show_from" id="show_from"  value="yes">Yes 
           <input type="radio" <?php if( $show_from =='no'){?> checked=checked <?php } ?> name="show_from" id="show_from" value="no">No
            </p>
             <p><span class="form_label">Select Post Type:</span><br> 
             
            <?php  
            $alpost = get_option('post_ty');
            
             ?>
                      
           <?php foreach($post_types as $pt){ 
            $obj = get_post_type_object( $pt);
				if($pt != "attachment" && $pt != "revision" && $pt != "nav_menu_item" ) {?>                            	
            <span><input type="checkbox" name="post_ty[]" value="<?php echo $pt; ?>" <?php if (in_array($pt, $alpost)) echo ' checked="checked"'; ?> /><?php echo $obj->labels->name; ?></span><br>
                            <?php } } ?>
                                
              </p>
                <?php $show_add = get_option('chaddress');?>
        <p><span class="form_label">Show Fields:</span> 
        <input <?php if( $show_add =='show_add'){?> checked = "checked" <?php } else{ } ?> id="add" type="checkbox" value="show_add" name="chaddress">
               <span class="form_label">Address </span> 
              <?php $show_zip = get_option('zipcode');?>
           
        <input <?php if( $show_zip =='zip'){?> checked = "checked" <?php } else{ } ?> id="zip" type="checkbox" value="zip" name="zipcode">
        <span class="form_label">Zipcode </span>
              
         <?php $phone = get_option('phone');?>
           
        <input <?php if( $phone =='phn'){?> checked = "checked" <?php } else{ } ?> id="phn" type="checkbox" value="phn" name="phone">
          <span class="form_label">Phone </span> 
        </p>              
              
       <?php    echo "<strong>" .  'Email To Settings' . "</strong>"; ?>  
        <input type="text" name="to_email" value="<?php if(get_option('to_email')){ echo get_option('to_email'); }else{ echo get_option('admin_email');}?>" /> 
       
     <legend class="form_field">
       <p>  <?php    echo "<strong>" . 'Form Feilds'. "</strong>"; ?> </p>
        <span class="form_label">Email:</span> &nbsp;<input type="text" name="req_Email_name" value="<?php if(get_option('req_Email_name')){ echo get_option('req_Email_name'); }else{ echo 'Your Email';}?>"/>  
        <p><span class="form_label">Name:</span> &nbsp;<input type="text" name="req_name" value="<?php if(get_option('req_name')){ echo get_option('req_name'); }else{ echo 'Your Name';}?>"/> </p>  
        <span id="labadd" class="form_label">Address:</span> &nbsp;<input id="labinp" type="text" name="req_address" value="<?php if(get_option('req_address')){ echo get_option('req_address'); }else{ echo 'Your Address';}?>"/> 
        
          <?php $vali_add = get_option('address_vali');?>
          
        <span id="check_add_div" class="form_label">Apply Validation:</span> 
        <input <?php if( $vali_add =='vali_add'){?> checked = "checked" <?php } else{ } ?> id="valadd" type="checkbox" value="vali_add" name="address_vali">        
        
        <p><span id="showphn" class="form_label">Phone:</span> 
         
        <input id="showphone" name="showphone" style="width:50%" type="text" value="<?php if(get_option('showphone')){ echo get_option('showphone'); }else{ echo 'Phone';}?>"/>
                  
        <?php $phone_vali = get_option('phone_vali');?>
        <span id="check_phn_div" class="form_label">Apply Validation:</span> 
        <input <?php if( $phone_vali =='vali_phn'){?> checked = "checked" <?php } else{ } ?> id="valphn" type="checkbox" value="vali_phn" name="phone_vali">        
        
        </p>            

        <p><span id="showzip" class="form_label">Zipcode:</span> 
         
        <input id="showthis" name="showthis" style="width:50%" type="text" value="<?php if(get_option('showthis')){ echo get_option('showthis'); }else{ echo 'Your Address Zipcode';}?>"/>
        
        <?php $zip_vali = get_option('zip_vali');?>
        <span id="check_zip_div" class="form_label">Apply Validation:</span> 
        <input <?php if( $zip_vali =='vali_zip'){?> checked = "checked" <?php } else{ } ?> id="valphn" type="checkbox" value="vali_zip" name="zip_vali">        
        
     
        </p> 

        <p><span class="form_label">Message:</span> &nbsp;<input type="text" name="req_message_name" value="<?php if(get_option('req_message_name')){ echo get_option('req_message_name'); }else{ echo 'Your Inquiry Message';}?>" /></p>  
     </legend>  
        
       <?php    echo "<strong>" . 'Error Messages Settings' . "</strong>"; ?>  
         <p><span class="form_label">Form Successful Message:</span> <input type="text" name="suceess_message" value="<?php if(get_option('suceess_message')){ echo get_option('suceess_message'); }else{ echo 'Thank you for your Inquiry. We will contact you shortly to answer your questions.';}?>"/></p>  
         <p><span class="form_label">Captcha Error:</span> <input type="text" name="captcha_error" value="<?php if(get_option('captcha_error')){ echo get_option('captcha_error'); }else{ echo 'Error: Please fill the correct value.';}?>"/></p>
         <p><span class="form_label">Error Email Message:</span> <input type="text" name="email_error" value="<?php if(get_option('email_error')){ echo get_option('email_error'); }else{ echo 'Error: Please enter a valid email address.';}?>"/></p>
         <p><span class="form_label">Error Name Message:</span> <input type="text" name="name_error" value="<?php if(get_option('name_error')){ echo get_option('name_error'); }else{ echo 'Error: Please enter your name.';}?>"/></p>
         <p><span id="erraddlab" class="form_label">Error Address Message:</span> <input id="errinplab" type="text" name="add_error" value="<?php if(get_option('add_error')){ echo get_option('add_error'); }else{ echo 'Error: Please enter your Address.';}?>"/></p>
         <p><span id="errphnlab" class="form_label">Error Phone Message:</span> <input id="errinpphn" type="text" name="phn_error" value="<?php if(get_option('phn_error')){ echo get_option('phn_error'); }else{ echo 'Error: Please enter your Phone number.';}?>"/></p>
         <p><span id="errziplab" class="form_label">Error Zipcode Message:</span> <input id="errinpphn" type="text" name="zip_error" value="<?php if(get_option('zip_error')){ echo get_option('zip_error'); }else{ echo 'Error: Please enter your Zipcode.';}?>"/></p>
         <p><span class="form_label">Error Inquery Message:</span> <input type="text" name="Inquery_error" value="<?php if(get_option('Inquery_error')){ echo get_option('Inquery_error'); }else{ echo 'Error: Please enter your inquery message.';}?>"/></p>
         <input type="hidden" name="hidden_value" value="Y"> 
         <p class="submit">  
        <input type="submit" name="Submit" value="Update Option" />  
        </p> 
        
 </form>  
  
    </div>
 
 <!----------------------------------------------- Plug in Settings form end---------------------------------------------------->  




  <!----------------------------------------------- Other content for admin page ---------------------------------------------------->   
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_IN/all.js#xfbml=1&appId=533043140136429";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
    
 <div class="right">
	<center>
<div class="bottom">
		    <h3 id="download-comments-wvpd" class="title"><?php _e( 'Download Free Plugins', 'wvpd' ); ?></h3>
		     
     <div id="downloadtbl-comments-wvpd" class="togglediv">  
	<h3 class="company">
<p> Vivacity InfoTech Pvt. Ltd. is an ISO 9001:2008 Certified Company is a Global IT Services company with expertise in outsourced product development and custom software development with focusing on software development, IT consulting, customized development.We have 200+ satisfied clients worldwide.</p>	
<?php _e( 'Our Top 5 Latest Plugins', 'wvpd' ); ?>:
</h3>
<ul class="">
<li><a target="_blank" href="https://wordpress.org/plugins/woocommerce-social-buttons/">Woocommerce Social Buttons</a></li>
<li><a target="_blank" href="https://wordpress.org/plugins/vi-random-posts-widget/">Vi Random Post Widget</a></li>
<li><a target="_blank" href="http://wordpress.org/plugins/wp-infinite-scroll-posts/">WP EasyScroll Posts</a></li>
<li><a target="_blank" href="https://wordpress.org/plugins/buddypress-social-icons/">BuddyPress Social Icons</a></li>
<li><a target="_blank" href="http://wordpress.org/plugins/wp-fb-share-like-button/">WP Facebook Like Button</a></li>
</ul>
  </div> 
</div>		
<div class="bottom">
		    <h3 id="donatehere-comments-wvpd" class="title"><?php _e( 'Donate Here', 'wvpd' ); ?></h3>
     <div id="donateheretbl-comments-wvpd" class="togglediv">  
     <p><?php _e( 'If you want to donate , please click on below image.', 'wvpd' ); ?></p>
	<a href="http://bit.ly/1icl56K" target="_blank"><img class="donate" src="<?php echo plugins_url( 'images/paypal.gif' , __FILE__ ); ?>" width="150" height="50" title="<?php _e( 'Donate Here', 'wvpd' ); ?>"></a>		
  </div> 
</div>	
<div class="bottom">
		    <h3 id="donatehere-comments-wvpd" class="title"><?php _e( 'Woocommerce Frontend Plugin', 'wvpd' ); ?></h3>
     <div id="donateheretbl-comments-wvpd" class="togglediv">  
     <p><?php _e( 'If you want to purchase , please click on below image.', 'wvpd' ); ?></p>
	<a href="http://bit.ly/1HZGRBg" target="_blank"><img class="donate" src="<?php echo plugins_url( 'images/woo_frontend_banner.png' , __FILE__ ); ?>" width="336" height="280" title="<?php _e( 'Donate Here', 'wvpd' ); ?>"></a>		
  </div> 
</div>
<div class="bottom">
		    <h3 id="donatehere-comments-wvpd" class="title"><?php _e( 'Blue Frog Template', 'wvpd' ); ?></h3>
     <div id="donateheretbl-comments-wvpd" class="togglediv">  
     <p><?php _e( 'If you want to purchase , please click on below image.', 'wvpd' ); ?></p>
	<a href="http://bit.ly/1Gwp4Vv" target="_blank"><img class="donate" src="<?php echo plugins_url( 'images/blue_frog_banner.png' , __FILE__ ); ?>" width="336" height="280" title="<?php _e( 'Donate Here', 'wvpd' ); ?>"></a>		
  </div> 
</div>
	</center>
</div>   
</div>


<!----------------------------------------------- Other content for admin page end ---------------------------------------------->    

<?php 	
}                        

//----------------------------------------style include----------------------------------------------------------------------    
 function wif_style_css() {
 	
 	 wp_enqueue_style( 'main_css',plugins_url( 'css/stylesheet.css' , __FILE__ ) );
	 wp_enqueue_script( 'slider_cript.min',plugins_url( 'js/script.min.js' , __FILE__ ) , array( 'jquery' ), 0.1, true );
	 wp_enqueue_script( 'script',plugins_url( 'js/script.js' , __FILE__ ) , array( 'jquery' ), 0.1, true );
	 wp_enqueue_script( 'admin',plugins_url( 'js/admin.js' , __FILE__ ) , array( 'jquery' ), 0.1, true );


 	}    
add_action('wp_enqueue_scripts', 'wif_style_css');  
add_action('admin_enqueue_scripts', 'wif_style_css');         
   
//----------------------------------------style include end-----------------------------------------------------------------------
       
       
       
       

//---------------------------------------- Getting options for short code form ----------------------------------------------------//

       
 function wif_get_requestform() {
 	
$link_request = get_permalink();

$title=get_the_title();

if(get_option('req_Email_name')){
    $email_tag=get_option('req_Email_name');
}else{
    $email_tag='Your Email';
}

if(get_option('req_name')){
    $name_tag=get_option('req_name');
}else{
    $name_tag='Your Name';
}

if(get_option('req_address')){
    $address_tag=get_option('req_address');
}else{
    $address_tag='Your Address';
}

if(get_option('showthis')){
    $showthis=get_option('showthis');
}else{
    $showthis='Your Address Zipcode';
}

if(get_option('showphone')){
    $showphone=get_option('showphone');
}else{
    $showphone='Phone';
}

if(get_option('req_message_name')){
    $request_message=get_option('req_message_name');
}else{
    $request_message='Inquiry Message';
}

if(get_option('suceess_message')){
    $suceess_message=get_option('suceess_message');
}else{
    $suceess_message='Thank you for your Inquiry. We will contact you shortly to answer your questions.';
}


if(get_option('stylesheet_request')){
    $style_css=get_option('stylesheet_request');
}else{
    $style_css='div#main_form{
padding:10px;
 background-color: #FFFFFF;
}
div#main_form label {
    display: block;
    font-size: 13px;
    font-weight: bold;
    margin: 5px 10px;
}
div#main_form input.form_text {
    display: block;
    height: 35px;
    margin: 0 10px 0px;
    width: 400px;
    background:white;
}
div#main_form textarea {
    height: 140px;
    margin-left: 10px;
    width: 400px;
background:white;
}
div#main_form input.submit_button {
    display: block;
    height: 50px;
    margin: 10px;
    width: 200px;
}

div#main_form span.req {
    color: #268da3;
    font-size: 20px;
    
   
}';

}

$rand_no_1=$_SESSION['no1'];
$rand_no_2=$_SESSION['no2'];
$oparator_no=$_SESSION['operator_no'];
$operator=$_SESSION['operator'];

if($rand_no_2>$rand_no_1){
    $temp=$rand_no_1;
    $rand_no_1=$rand_no_2;
    $rand_no_2=$temp;
}

 $vali_add = get_option('address_vali');
if($vali_add == 'vali_add'){ 

$reg = "*";
$r = "required";
}

$phone_vali = get_option('phone_vali');
if($phone_vali == 'vali_phn'){ 

$reg1 = "*";
$re = "required";
$pop_show = "pop_show";
}


$zip_vali = get_option('zip_vali');

if($zip_vali == 'vali_zip'){
	 $reg2 = "*";
	 $req = "required";
	}

$show_add = get_option('chaddress');
if($show_add == 'show_add')
{
$address_field	= "<div><label for='address'>".$address_tag."<span class='req'>".$reg."</span></label><textarea ".$r." name='address' id='viva_address' cols='100%' rows='10'></textarea></div>";
	
	}

$phone = get_option('phone');
 if($phone == 'phn') {$phn_field = '<div><label for="Phone">'.$showphone.'<span class="req">'.$reg1.'</span></label>
<input '.$re.' type="text" name="phnfield" id="showphone" class="form_text '.$pop_show.'"><span class="spnPhoneStatus"></span>
</div>';}


 $show_zip = get_option('zipcode');
 if($show_zip == 'zip') {$zip_field = ' <div><label for="Zip">'.$showthis.'<span class="req">'.$reg2.'</span></label>

   <input '.$req.' value="" type="text" name="zipfield" id="showthis" class="form_text"></div>';}

 $cap_val=str_pad($rand_no_1,2,'0',STR_PAD_LEFT).str_pad($rand_no_2,2,'0',STR_PAD_LEFT).$oparator_no;
 
$form = <<<EOT

<style type="text/css">
 {$style_css}

</style>

<div id="main_form">
<div id="send-msg"></div>

	{$req_message_success}
    
   <form id="myform"  name="my_form"  action="" method="post" enctype="multipart/form-data" style="text-align: left">
  
   <div><label for="name">{$name_tag}<span class="req">*</span></label><input required type="text" name="name" id="viva_name" value="" size="22" class="form_text" /> </div>

  
  {$address_field}
  {$phn_field}
  {$zip_field}
   
   <div><label for="email">{$email_tag}<span class="req">*</span></label><input type="email" required name="email" id="viva_email" value="" size="22" class="form_text" /></div>
   <input type="hidden" name="val" id="val" value="{$cap_val}" />
   <div><label for="message">{$request_message}<span class="req">*</span></label><textarea required name="message" id="viva_message" cols="100%" rows="10"></textarea></div>
   <div><label for="captcha">Fill the Correct value<span class="req">*</span></label>
  <div id="cap_genrate"> {$rand_no_1}{$operator}{$rand_no_2}= <input required type="text" name="cap" id="cap" size="4" /></div>
   
  <input name="send" type="submit" id="send" value="Request"  class="submit_button"/></div>
   
   <input type="hidden" name="my_form_submitted" value="1">
   
   </form>
   
</div>

EOT;


return  $form;
}
 
//------------------------------------ Getting options for short code form end -------------------------------------------------// 
 


//-------------------------------------- Getting options for popup form ----------------------------------------------------// 
 
  function filter_requestform() {
$alpost = get_option('post_ty');
		  $exdata =explode(',', $alpost );	
		  $totallenhth = count($exdata);
 
for($i=0;$i <= $totallenhth;$i++)
 		{ 
 	 
 	if($post_types  ==  $exdata[$i] )  {	
 		
$link_request = get_permalink();

$title=get_the_title();

if(get_option('req_Email_name')){
    $email_tag=get_option('req_Email_name');
}else{
    $email_tag='Your Email';
}

if(get_option('req_name')){
    $name_tag=get_option('req_name');
}else{
    $name_tag='Your Name';
}

if(get_option('req_address')){
    $address_tag=get_option('req_address');
}else{
    $address_tag='Your Address';
}
if(get_option('req_message_name')){
    $request_message=get_option('req_message_name');
}else{
    $request_message='Inquiry Message';
}

if(get_option('zipfield')){
    $showthis=get_option('zipfield');
}else{
    $showthis='zipfield';
}

if(get_option('phnfield')){
    $phnfield=get_option('phnfield');
}else{
    $phnfield='phnfield';
}

if(get_option('suceess_message')){
    $suceess_message=get_option('suceess_message');
}else{
    $suceess_message='Thank you for your Inquiry. We will contact you shortly to answer your questions.';
}

if(get_option('stylesheet_request')){
    $style_css=get_option('stylesheet_request');
}else{
    $style_css='div#main_form{
padding:10px;
 background-color: #FFFFFF;
}
div#main_form label {
    display: block;
    font-size: 13px;
    font-weight: bold;
    margin: 5px 10px;

}
div#main_form input.form_text {
    display: block;
    height: 35px;
    margin: 0 10px 0px;
    width: 400px;
background:white;
}
div#main_form textarea {
    height: 140px;
    margin-left: 10px;
    width: 400px;
background:white;
}
div#main_form input.submit_button {
    display: block;
    height: 50px;
    margin: 10px;
    width: 200px;
}

div#main_form span.req {
    color: #268da3;
    font-size: 20px;
}';
}

if($_GET['suc']==1){
    if(get_option('suceess_message')){ $req_message_success= '<p style="color: green; font-weight:bold">'.get_option('suceess_message').'</p>'; }else{ $req_message_success= $suceess_message;};
  
}
else{
    $req_message_success='';
}

$rand_no_1=$_SESSION['no1'];
$rand_no_2=$_SESSION['no2'];
$oparator_no=$_SESSION['operator_no'];
$operator=$_SESSION['operator'];

if($rand_no_2>$rand_no_1){
    $temp=$rand_no_1;
    $rand_no_1=$rand_no_2;
    $rand_no_2=$temp;
}

if(get_option('showphone')){
    $showphone=get_option('showphone');
}else{
    $showphone='Phone';
}


 $vali_add = get_option('address_vali');
if($vali_add == 'vali_add'){ 

$reg = "*";
$r = "required";
}

$phone_vali = get_option('phone_vali');
if($phone_vali == 'vali_phn'){ 

$reg1 = "*";
$re = "required";
$pop_show1 = "pop_show1";
}


$zip_vali = get_option('zip_vali');

if($zip_vali == 'vali_zip'){
	 $reg2 = "*";
	 $req = "required";
	}

$show_add = get_option('chaddress');
if($show_add == 'show_add')
{
$address_field	= "<div><label for='address'>".$address_tag."<span class='req'>".$reg."</span></label><textarea ".$r." name='address' id='viva_address' cols='100%' rows='10'></textarea></div>";
	
	}

$phone = get_option('phone');
 if($phone == 'phn') {
 	$phn_field = '<div><label for="Phone">'.$showphone.'<span class="req">'.$reg1.'</span></label>
<input '.$re.' type="text" name="phnfield" id="showphone" class="form_text '.$pop_show1.'"><span class="spnPhoneStatus1"></span>
</div>';}


 $show_zip = get_option('zipcode');
 if($show_zip == 'zip') {$zip_field = ' <div><label for="Zip">'.$showthis.'<span class="req">'.$reg2.'</span></label>

   <input '.$req.' value="" type="text" name="zipfield" id="showthis" class="form_text"></div>';}

 $cap_val=str_pad($rand_no_1,2,'0',STR_PAD_LEFT).str_pad($rand_no_2,2,'0',STR_PAD_LEFT).$oparator_no;
  $form = <<<EOT
<br>
<style type="text/css">
 {$style_css}

</style>

<div id="div_form" class="city div_form" style="display:none">
<div class='button b-close'><a href="javascript:void(0)">x <a/></div>
<div class="fomr_title" id="form_tile">Request  For Contact Form :</div>
<div id="send-msg"></div>

	{$req_message_success}
 
    <form id="myform"  name="my_form"  action="" method="post" enctype="multipart/form-data" style="text-align: left">
  
   <div><label for="name">{$name_tag}<span class="req">*</span></label><input required type="text" name="name" id="viva_name" value="" size="22" class="form_text" /> </div>

  
  {$address_field}
  {$phn_field}
  {$zip_field}
   
   <div><label for="email">{$email_tag}<span class="req">*</span></label><input required type="email" name="email" id="viva_email" value="" size="22" class="form_text" /></div>
   <input type="hidden" name="val" id="val" value="{$cap_val}" />
   <div><label for="message">{$request_message}<span class="req">*</span></label><textarea required name="message" id="viva_message" cols="100%" rows="10"></textarea></div>
   <div><label for="captcha">Fill the Correct value<span class="req">*</span></label>
  <div id="cap_genrate"> {$rand_no_1}{$operator}{$rand_no_2}= <input required type="text" name="cap" id="cap" size="4" /></div>
   
  <input name="send" type="submit" id="send" value="Request" class="submit_button"/></div>
   
   <input type="hidden" name="my_form_submitted" value="1">
   
   </form>
  
</div>
<div class="form_popup"><a href="javascript:void(0)" id="pop" class="popup_but pop">Request for contact</a></div>
EOT;
$content =get_the_content();
return  $content.$form;
}
else {
			 
			  $newdata = get_the_content();
			}
}
}

//-------------------------------------- Getting options for popup form end-----------------------------// 
 
 
 
 
//-------------------------------------------shortcode for form----------------------------------------//

 $show_from = get_option('show_from');
 
 
 if( $show_from=='yes')
 {
 	
add_filter( 'the_content', 'filter_requestform',10);
}
else{
	
add_shortcode('request_message', 'wif_get_requestform');	
	}

//-------------------------------------------shortcode for form end----------------------------------------//



 //-------------------------------------------Sending form-------------------------------------------------//
function wif_request_procced() {
 
if(get_option('to_email')){
    $email_to=get_option('to_email');
}else{
    $email_to=get_option('admin_email');
}
if(get_option('captcha_error')){
    $cap_error=get_option('captcha_error');
}else{
    $cap_error='Error: Please fill the correct value.';
}
if(get_option('email_error')){
    $email_error=get_option('email_error');
}else{
    $email_error='Error: Please enter a valid email address.';
}
if(get_option('name_error')){
    $name_err=get_option('name_error');
}else{
    $name_err='Error: Please enter your name.';
}

if(get_option('add_error')){
    $add_err=get_option('add_error');
}else{
    $add_err='Error: Please enter your address.';
}

if(get_option('phn_error')){
    $phn_err=get_option('phn_error');
}else{
    $phn_err='Error: Please enter your Phone No.';
}

if(get_option('zip_error')){
    $zip_err=get_option('zip_error');
}else{
    $zip_err='Error: Please enter your Zipcode.';
}


if(get_option('Inquery_error')){
    $Inquery_err=get_option('Inquery_error');
}else{
    $Inquery_err='Error: Please enter your inquery message.';
}

if(get_option('suceess_message')){
    $suceess_message=get_option('suceess_message');
}else{
    $name_err='Error in sending mail';
}

$_SESSION['no1']=rand(0, 10);
$_SESSION['no2']=rand(0, 10);
$_SESSION['operator_no']=time()%3;
$_SESSION['operator']=wif_set_captcha($_SESSION['operator_no']);

if ( isset($_POST['my_form_submitted']) ) {
 $product=( isset($_POST['product']) )  ? trim(strip_tags($_POST['product'])) : null;
 $name  = ( isset($_POST['name']) )  ? trim(strip_tags($_POST['name'])) : null;
 $email   = ( isset($_POST['email']) )   ? trim(strip_tags($_POST['email'])) : null;
 $address   = ( isset($_POST['address']) )   ? trim(strip_tags($_POST['address'])) : null;
 $phnfield   = ( isset($_POST['phnfield']) )   ? trim(strip_tags($_POST['phnfield'])) : null;
 $showthis   = ( isset($_POST['zipfield']) )   ? trim(strip_tags($_POST['zipfield'])) : null;
 
 $message = ( isset($_POST['message']) ) ? trim(strip_tags($_POST['message'])) : null;
 $cap = ( isset($_POST['cap']) ) ? (int)trim(strip_tags($_POST['cap'])) : null;

 $val=(string)$_POST['val'];
 $result=(int)wif_create_captcha($val);
 

 if ( $name == '' ) wp_die($name_err);
 if ( !is_email($email) ) wp_die($email_error);
 
 if ( ($cap != $result) ) wp_die($cap_error);
 if ( ( $message == "") ) wp_die($Inquery_err);
 
 $vali_add = get_option('address_vali');
 $show_add = get_option('chaddress');
 
if($vali_add == 'vali_add' && $show_add == 'show_add'){ 
 if ( ( $address == "") ) wp_die($add_err);

}

$phone_vali = get_option('phone_vali');
$phone = get_option('phone');

if($phone_vali == "vali_phn" && $phone == "phn"){
if ( ( $phnfield == "") ){ 

    	?> <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><< Back</a>  <?php
wp_die($phn_err);}

$error = '';
  if(array_key_exists('phnfield', $_POST))
  {
    if(!preg_match('/^[0-9-+]+$/', $_POST['phnfield']))
    {
    	?> <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><< Back</a>  <?php
      wp_die($phn_err);
    }
  }

}


$zip_vali = get_option('zip_vali');
$show_zip = get_option('zipcode');


if($zip_vali == 'vali_zip' && $show_zip == 'zip'){
	 if ( ( $showthis == "") ) wp_die($zip_err);
	}

 
$to=$email_to;
$from=$email;
$subject="A Request Received ";

$show_add = get_option('chaddress');
if($show_add == 'show_add'){
$add = "<br>Address: "; 	
 	}

$show_zip = get_option('zipcode');
 if($show_zip == 'zip'){
$zip = "<br>Zip Code:"; 	
 	}

$phone = get_option('phone');
  if($phone == 'phn'){
$ph = "<br>Phone:"; 	
 	}
 
$body="Name: ".$name."<br>  Email: ".$email.$add.$address.$ph.$phnfield.$zip.$showthis."<br> message:  ".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:'. $email."\r\n";
$headers .= 'Name:' .$name. "\r\n";
$headers .= 'Address:' .$address. "\r\n";
$headers .= 'message:' .$message. "\r\n";

$mail_sent = mail($to,$subject,$body,$headers);
      if ( $mail_sent){ 
    	?> <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><< Back</a>  <?php      
      wp_die( $suceess_message);}
      else{
      	    	?> <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><< Back</a>  <?php
echo wp_die("Cannot send mail from local server");      	
      	}

$_SESSION['my_form_success'] = 1;

 header('Location: ' . $_SERVER['HTTP_REFERER'].'?suc=1');
 exit();
 
} 
else{
    wif_get_requestform();
}
}

 //-------------------------------------------Sending form end----------------------------------------//

add_action('init', 'wif_request_procced');

function wif_request_script() { ?>


<script type="text/javascript">

</script>

<?php }

add_action('wp_head', 'wif_request_script');
// email send function

function wif_email_send($HTML,$from,$to,$subject) {
$headers  = "From: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$boundary = uniqid("HTMLEMAIL");
$headers .= "Content-Type: multipart/alternative;".
                "boundary = $boundary\r\n\r\n";
$headers .= "This is a MIME encoded message.\r\n\r\n";
$headers .= "--$boundary\r\n".
                "Content-Type: text/plain; charset=ISO-8859-1\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n";
$headers .= chunk_split(base64_encode(strip_tags($HTML)));
$headers .= "--$boundary\r\n".
                "Content-Type: text/html; charset=ISO-8859-1\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n";
$headers .= chunk_split(base64_encode($HTML));

if( mail($to,$subject,"",$headers))
   return true;
   else
   return false;
  
}

//----------------------------- create captcha function--------------------------------------------//

function wif_create_captcha($cap_String){
		
     $rand1=(int)substr($cap_String,0,2);
     
     $rand2=(int)substr($cap_String,2,2);
     
    $op=(int)substr($cap_String,4,1);

    switch ($op)
{
case 0:
    $result=$rand1+$rand2;

  break;
case 1:
   $result=$rand1-$rand2;
  break;
case 2:
  $result=$rand2*$rand1;
  break;
}
return $result;

}

function wif_set_captcha($op){

    switch ($op)
{
case 0:
   return '+';

  break;
case 1:
  return '-';
  break;
case 2:
 return 'x';
  break;


default:
return '+';
}
}   


//----------------------------- create captcha function end--------------------------------------------//