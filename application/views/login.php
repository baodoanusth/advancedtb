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

<script type='text/javascript'
  src='http://code.jquery.com/jquery-1.8.3.js'></script>
<script type='text/javascript'
  src="http://cdn.jsdelivr.net/select2/3.4.1/select2.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="http://cdn.jsdelivr.net/select2/3.4.1/select2.css">
<script type='text/javascript'
  src="http://globaltradeconcierge.com/javascripts/bootstrap.min.js"></script>


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


     
         <div class="login_form">
         
         <h1 style="text-align: center; color: #76f2c4">Login</h1>
         
         
         <form action="<?php echo base_url() . 'main/login_validation'?>" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="user_name" style="color: #76f2c4">Username:</label></dt>
                        <dd><input type="text" name="user_name" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password" style="color: #76f2c4">Password:</label></dt>
                        <dd><input type="password" name="password" id="" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label" style="color: #23b27e">Remember me</label>
                        </dd>
                    </dl>

                    <dl>
                        <dt><label></label></dt>
                        <dd><a href='<?php echo base_url()."main/signup" ?>'>
                    <span class="glyphicon glyphicon-plus" style="color: #76f2c4"></span>
                    <span class="check_label" style="color: #23b27e; margin-left: 8px">Sign Up</span></a>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <button type="submit" name="submit" id="submit" class="btn btn-success">Login</button>
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    <div class="footer_login">
    
    	
    </div>

</div>		
</body>
</html>