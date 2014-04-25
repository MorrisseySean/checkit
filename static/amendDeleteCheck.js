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