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