//code for buttons creating the different overlay types

$(document).ready(function(){
    // show popup for creation on pages
    $('.show-popup-create').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        var docHeight = $(document).height(); //grab the height of the page
        var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
        $('.overlay-box-create').show().css({'height' : docHeight}); //display your popup and set height to the page height
        $('.overlay-content-create').css({'top': scrollTop+20+'px'}); //set the content 20px from the window top
    });
	
	//show popup for editing on pages
	$('.show-popup-edit').click(function(event){
		if ($('input[name=selection]:checked').length > 0) //check if a radio button is selected before displaying the popup 
		{
			event.preventDefault(); // disable normal link function so that it doesn't refresh the page
			var docHeight = $(document).height(); //grab the height of the page
			var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
			$('.overlay-box-edit').show().css({'height' : docHeight}); //display your popup and set height to the page height
			$('.overlay-content-edit').css({'top': scrollTop+20+'px'}); //set the content 20px from the window top
		}
    });	
    // hide popup when user clicks on close button
    $('.close-btn').click(function(){
        $('.overlay-box-create').hide(); // hide the overlay
		$('.overlay-box-edit').hide(); // hide the overlay
    });
	
    // hides the popup if user clicks anywhere outside the container
    $('.overlay-box-create').click(function(){
        $('.overlay-box-create').hide(); // hide the overlay
    })
    $('.overlay-box-edit').click(function(){
        $('.overlay-box-edit').hide(); // hide the overlay
    })
	
	//Allows the save button to be pressed inside the overlay
	$('.save-btn').click(function(){
		return true;
	});
	
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.null-content').click(function(){
        return false;
    }); 
});

function loadEdit() //Changes the content of the edit box based on user selection
{
	var xmlhttp;
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","ajax_info.txt",true);
	xmlhttp.send("checkid=" + getRadio());
}

function getRadio() //Finds the id of the checked radio button
{
	var radios = document.getElementsByName('selection');
	var value;
	for (var i = 0; i < radios.length; i++) 
	{
		if (radios[i].checked) 
		{
			value = radios[i].id;       
		}
	}
	document.editForm.checkId.value = value;
}