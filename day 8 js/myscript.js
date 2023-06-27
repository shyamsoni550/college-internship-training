function stringLength() 
{
     // Retrieving the values of form elements
     
     var name = document.getElementById("name").value;
     document.getElementById('length').innerText = name.length;
}