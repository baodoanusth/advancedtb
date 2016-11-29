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

    <div class="right_header">Welcome Admin | <a href="#" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
                    
                    
                    
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
            
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>User help desk</h3>              
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h4>Important notice</h4>            
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h5>Download photos</h5>              
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>  
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>To do List</h3>            
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
              
    
    </div>  
    
    <div class="right_content" style="margin-top:10px">            
        
    <h2>Staff</h2> 
    <a href="add_staff"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add</button> </a>
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">ID</th>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Works at</th>
            <th scope="col" class="rounded">Position</th>
            <th scope="col" class="rounded">DoB</th>
            <th scope="col" class="rounded">Address</th>
            <th scope="col" class="rounded">Salary</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $this->db->query("select * from (hotels   
JOIN staff on Hotels.Hotel_ID = Staff.Hotel_ID) ORDER BY Employee_ID ASC");
        foreach ($query->result() as $row) {
            ?>
        <tr>
            <td><input type="checkbox" name="" /></td>
            <td><?php
                echo $row->Employee_ID;
            ?></td>
            <td><?php
                echo $row->Employee_Name;
            ?></td>
            <td><?php
                echo $row->Hotel_Name;
            ?></td>
            <td><?php
                echo $row->Employee_Position;
            ?></td>
            <td><?php
                echo $row->Employee_DOB;
            ?></td>
            <td><?php
                echo $row->Employee_address;
            ?></td>
            <td><?php
                echo $row->Employee_Salary;
            ?></td>


            <td><a href='<?php echo base_url()."main/edit_staff?Employee_ID=".$row->Employee_ID; ?>'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
            <td><a href="#" class="ask"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
        <?php
            }
        ?> 
        
    </tbody>
</table>    

     <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Find</strong><span class="bt_green_r"></span></a>
     
           
     <h2>Nice Form example</h2>
     
         <div class="form">
         <form action="" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Email Address:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="gender">Select categories:</label></dt>
                        <dd>
                            <select size="1" name="gender" id="">
                                <option value="">Select option 1</option>
                                <option value="">Select option 2</option>
                                <option value="">Select option 3</option>
                                <option value="">Select option 4</option>
                                <option value="">Select option 5</option>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="interests">Select tags:</label></dt>
                        <dd>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Web design</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Business</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Simple</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Clean</label>
                        </dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="color">Select type</label></dt>
                        <dd>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Basic</label>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Medium</label>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Premium</label>
                        </dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="upload">Upload a File:</label></dt>
                        <dd><input type="file" name="upload" id="upload" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="comments">Message:</label></dt>
                        <dd><textarea name="comments" id="comments" rows="5" cols="36"></textarea></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">I agree to the <a href="#">terms &amp; conditions</a></label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
    
    
    <div class="footer">
    
    </div>

</div>      
</body>
</html>