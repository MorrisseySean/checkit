$(document).ready(function() 
{
	var InputsWrapper   = $("#input-table tbody"); //Input boxes wrapper ID
	var AddButton       = $("#add-new"); //Add button ID
	var inputId=0; //to keep track of text box added

	$(AddButton).click(function (e)  //on add input button click
	{			
		var original = document.getElementById('listItem[]'); //Get the list box to be duplicated
		var clone = original.cloneNode(true); //Clone the original
		clone.id = 'listItem[]'; //Give the clone a unique id
		clone.name = 'listItem[]';
		InputsWrapper.append("<tr><td>");
		InputsWrapper.append(clone); //Attach clone to parent
		InputsWrapper.append("</td></tr>");
		return false;
	});
});