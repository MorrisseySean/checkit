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

