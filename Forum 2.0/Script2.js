function func() {
if (   document.getElementById('add').style.display!="block") { 
document.getElementById('add').style.display='block';}
else {
  setTimeout("document.getElementById('add').style.display='none';", 1000)}
if (   document.getElementById('add').style.opacity!="1") { 
  document.getElementById('add').style.opacity="1";}
else {
  document.getElementById('add').style.opacity="0";}

}