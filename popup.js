var i=0;
function imagechanger()
{
	setTimeout(change(),2000);
	hidecontents();
}
function change()

{

	i++;
	var imagesrc=document.getElementById("chairperson");
	if(i==1)
{
		 imagesrc.src="chairman/chairman2.jpg";
}	if(i==3)
{
		 imagesrc.src="chairman/chairman1.png";
}

if(i==2)
{
	 imagesrc.src="chairman/chairman3.jpg";
}
setTimeout(change,2000);
if(i>=3)
{
	i=0;
}
}

function showoriginal()
{
	var divid=document.getElementById("maindiv" );
	divid.style.opacity=1;
	var divid2=document.getElementById("popupdiv" );
	divid2.style.display="none";
}
function hidecontents()
{
	var divid=document.getElementById("maindiv" );
   divid.style.opacity=.2;
}
