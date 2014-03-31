function ObjectById(objectId){
    if(document.getElementById){
        this.reference = document.getElementById(objectId);
        this.style = document.getElementById(objectId).style;
    }else if(document.all){
        this.reference = document.all[objectId];
        this.style = document.all[objectId].style;
    }else if(document.layers){
        this.reference = document.layers[objectId];
        this.style = document.layers[objectId];
    }
}
function text_lenght(source,max){
  out = new ObjectById('lenght_field');
	left = max-source.value.length;
	if(left<0)
		out.reference.innerHTML= "<span style=\"color:red\">Za d³ugi tekst</span>"; 
	else
		out.reference.innerHTML= max-source.value.length; 
}
