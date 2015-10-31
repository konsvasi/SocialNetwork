function updateLength(field, output)
{
	currentLength = document.getElementById(field).value.length;
	fieldMaxLength = document.getElementById(field).maxLength;
	document.getElementById(output).innerHTML = currentLength + '/' + fieldMaxLength;
}

function validateEmail(email, output) {
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    
    if(!re.test(email))
    	document.getElementById(output).innerHTML = "Use a valid email address";
}

function editProfilePic(output){
	//document.getElementById(output).innerHTML = "Edit";
	var x = document.createElement("Button");
	var t = document.createTextNode("Edit");
	x.id = "btnEdit";
	x.appendChild(t);
	document.getElementById(output).appendChild(x);
	x.addEventListener('click', function(){
		//This is a test function to see if the new button works
		//When the edit button is being clicked a form will appear 
		//that prompts the user to add a new profile picture
		//This picture will be uploaded to the server and later will be displayed
		//in the user profile
		//var a = document.createElement("Button");
		//var y = document.createTextNode("New text");
		//a.appendChild(y);
		//document.getElementById(output).appendChild(a);
		document.getElementById("newProfilePic").style.visibility = "visible";
	})
}

function hideButton(output){
	//document.getElementById(output).style.visibility = "hidden";
	document.getElementById("btnEdit").remove();
	}