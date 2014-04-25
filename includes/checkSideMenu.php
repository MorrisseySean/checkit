<link rel="stylesheet" type="text/css" href="static/anylinkcssmenu.css" >
<script type="text/javascript" src="static/anylinkcssmenu.js">
/***********************************************
* AnyLink CSS Menu script v2.0- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Project Page at http://www.dynamicdrive.com/dynamicindex1/anylinkcss.htm for full source code
***********************************************/
</script>
<script type="text/javascript">
//anylinkcssmenu.init("menu_anchors_class"); ////Pass in the CSS class of anchor links (that contain a sub menu) 
// <li><a class="extendleft show-popup-create" href ="#">Create Check</a></li>	
anylinkcssmenu.init("anchorclass");
</script>
<div id="sidemenu" class="extendleft">
    <ul>
	<li><a href="#" class="anchorclass" rel="submenu1">Create</a></li>
        <div id="submenu1" class="anylinkcss">
        <ul>
            <li><a onclick = 'showCreateCheckPopUp();'id ="showCreateCheck" href ="#">Create Check</a></li>	
            <li><a onclick = 'showCreateCheckTypePopUp();'id ="showCreateCheckType" href ="#">Create Check Type</a></li>	
        </ul>
        </div>
            <li><a class="extendleft show-popup-edit" href="#">Edit</a></li>
            <li><a class="extendleft show-popup-delete" href="#">Delete</a></li>	
	</ul>
</div>