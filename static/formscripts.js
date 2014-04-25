function populateCheckType(){ // This function is called when the user selects the check type from the list box below
	var sel = document.getElementById("listbox"); //create a variable called sel that holds a string from the listbox below containing the variables for each client
		
	var result;
	result = sel.options[sel.selectedIndex].value;
	//splits the string above into the seperate variables and stores them in the array persondetails
	var personDetails = result.split(',');
	
	document.getElementById("TypeId").value = personDetails[0];
	document.getElementById("checkTypeCode").value = personDetails[1];	
}
function confirmCheck(){
	var response;
	response = confirm('Are you sure you want to insert these details!');
	
	if(response){
		document.getElementById("confirm").value = "yes"; // allow the information through if yes was selected
	}
	else{
		document.getElementById("confirm").value = "no"; // don't allow info through if no was selected

	}
}
function populateDetails(){
        var sel = document.getElementById("findDetails");
        var result;
        result = sel.options[sel.selectedIndex].value;
        var details = result.split(',');
		
        document.getElementById("viewTypeId").value = details[0];   
        document.getElementById("viewId").value = details[1];
        document.getElementById("viewDesc").value = details[2];
        document.getElementById("viewCode").value = details[3]; 
}
function populateEditDetails(){
	var sel = document.getElementById('findEditDetails');
	var result;
	result = sel.options[sel.selectedIndex].value;
        var details = result.split(',');
     
	document.getElementById('viewTypeIds').value = details[0];
        document.getElementById('viewIds').value = details[1];
	document.getElementById('viewDescs').value = details[2];
        document.getElementById('viewCodes').value = details[3]; 
}
function showCreateCheckPopUp(){
         
  
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        var docHeight = $(document).height(); //grab the height of the page
        var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
        $('.overlay-box-create').show().css({'height' : docHeight}); //display your popup and set height to the page height
        $('.overlay-content-create').css({'top': scrollTop+20+'px'}); //set the content 20px from the window top
   
}
function showCreateCheckTypePopUp(){
    
    
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        var docHeight = $(document).height(); //grab the height of the page
        var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
        $('.overlay-box-createType').show().css({'height' : docHeight}); //display your popup and set height to the page height
        $('.overlay-content-createType').css({'top': scrollTop+20+'px'}); //set the content 20px from the window top
    
}