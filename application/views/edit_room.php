<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotels Management</title>
<link rel="stylesheet" type="text/css" href="http://localhost/advancedtb/application/assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/advancedtb/application/views/style.css" />

<script type="text/javascript" src="assets/js/clockp.js"></script>
<script type="text/javascript" src="assets/js/clockh.js"></script> 
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<style>
input{
    margin: 5px;
}
</style>

<script type="text/javascript" src="assets/js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="assets/js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="http://localhost/advancedtb/application/views/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <a href="#" class="bt_red" style="float: left"><h1>Mariot Hotels Management</h1></a> 

    <div class="right_header">Welcome
    <?php
    if($this->session->userdata('is_logged_in')==1){
      ?>
        <?php
            if($this->session->userdata('priority')==2){
        ?>
            Admin |
        <?php
            }elseif ($this->session->userdata('priority')==1) {
        ?>
            User |
        <?php
            }elseif ($this->session->userdata('priority')==null){
        ?>
            Guest |
        <?php
            }
        ?>
            <a href='<?php echo base_url()."main/logout" ?>' class="logout">Logout</a>
        <?php
            } else {
        ?>
            <a href='<?php echo base_url()."main/login" ?>'>Log in</a>
        <?php
            }
        ?>

     </div></div>
    
    <div class="main_content" >
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    
            <div class="sidebarmenu" style="margin-top: 10px">
            
                <a class="menuitem submenuheader" href='<?php echo base_url()."main/index" ?>'>Hotels</a>
                <a class="menuitem submenuheader" href='<?php echo base_url()."main/manage_staff" ?>' >Staff</a>
                <a class="menuitem submenuheader" href='<?php echo base_url()."main/manage_guests" ?>'>Guests</a>
                <a class="menuitem" href='<?php echo base_url()."main/manage_bookings" ?>'>Bookings</a>
                <a class="menuitem" href='<?php echo base_url()."main/manage_rooms" ?>'>Rooms</a>
                
                <a class="menuitem_red" href='<?php echo base_url()."main/manage_membership" ?>'>Membership</a>
                    
            </div>
            
            
    
              
    
    </div> 

    <?php
    if (isset($_GET['Room_Number']) === true && empty($_GET['Room_Number']) === false ){
        $Room_Number = $this->input->get('Room_Number');
    ?>

    <div class="right_content" style="margin-top:10px">            
           
     <h2>Edit Rooms</h2>
     
         <div class="form">
         <form action="<?php echo base_url() . 'main/edit_room_form'?>" method="post" class="niceform">
                
                <fieldset>
                    <dl>
                        <label style="display:none">Room Number :</label>
                        <input type="text" style="display:none" name="Room_Number" value="<?php echo $Room_Number; ?>"/>
                    </dl>
                    <dl>
                        <dt><label>Hotel ID:</label></dt>
                        <dd><input type="text" name="Hotel_ID"  size="65" placeholder="Hotel ID" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Room Floor:</label></dt>
                        <dd><input type="text" name="Room_Floor"  size="65" placeholder="Room_Floor" /></dd>
                    </dl>
                    <dl>
                        <dt><label>Room Name:</label></dt>
                        <select name="Room_Name" style="margin: 10px 0px 0px 5px">
                          <option value="Single">Single</option>
                          <option value="VIP Single">VIP Single</option>
                          <option value="Double">Double</option>
                          <option value="Double">VIP family</option>
                          <option value="Double">Luxyry</option>
                          <option value="President">President</option>
                        </select>
                    </dl>
                    <ol>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary"s />Submit</button>
                     </ol>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
            <?php
                }
            ?>
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    </div>

</div>		
</body>
</html>