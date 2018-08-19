function va()
{
	var a=document.getElementById("fname").value;
if (a==null)
{
	
	alert("empty");
	return false;
}
else
{
	return true;
}
}
//onkeypress="Javascript:if ((event.keyCode<48) || (event.keyCode>57)) {event.keyCode=false; alert('Enter Numeric Value');this.focus();}";