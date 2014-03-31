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

function attack_type_change(){
    selected=document.attack_form.elements[1].selectedIndex;
    a=document.attack_form.elements[1].options[selected].value;   
    if(a==3 || a==4 || a==7 || a==8 || a==10){
        document.attack_form.elements[2].disabled=true;document.attack_form.elements[2].value='';
        document.attack_form.elements[3].disabled=true;document.attack_form.elements[3].value='';
        document.attack_form.elements[4].disabled=true;document.attack_form.elements[4].value='';
        document.attack_form.elements[5].disabled=false;
        
    }
    if(a==1 || a == 2 || a == 5 || a == 9){
        document.attack_form.elements[2].disabled=false;
        document.attack_form.elements[3].disabled=false;
        document.attack_form.elements[4].disabled=false;
        document.attack_form.elements[5].disabled=true;
        document.attack_form.elements[5].value='';
    }
}

function koszt(zloto,jedzenie,tury){
    out = new ObjectById('koszt_id');
    out_jedzenie = new ObjectById('koszt_jedzenia_id');
    var lucznicy = Math.ceil((document.attack_form.elements[2].value == "")? 0: document.attack_form.elements[2].value);
    var piechota = Math.ceil((document.attack_form.elements[3].value == "")? 0: document.attack_form.elements[3].value);
    var husaria = Math.ceil((document.attack_form.elements[4].value == "")? 0: document.attack_form.elements[4].value);
    var szpiedzy = Math.ceil((document.attack_form.elements[5].value == "")? 0: document.attack_form.elements[5].value);
    var  koszt = Math.ceil(lucznicy*200 + piechota*100 + husaria*300 + szpiedzy*300);
    var koszt_jedzenia = Math.ceil(lucznicy + piechota + husaria + szpiedzy) * tury;
    if(zloto<koszt){
      out.reference.innerHTML= '<span style="color:red">'+koszt+'</span>';
    }else{
      out.reference.innerHTML= koszt;
    }
    if(jedzenie<koszt_jedzenia){
      out_jedzenie.reference.innerHTML= '<span style="color:red">'+koszt_jedzenia+'</span>';
    }else{
      out_jedzenie.reference.innerHTML= koszt_jedzenia;
    }  
      
}
