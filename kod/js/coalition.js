function ObjectById(objectId){
    if(document.getElementById){
        this.reference = document.getElementById(objectId);
        this.style = document.getElementById(objectId).style;
    }else if(document.all){
        this.reference = document.all[objectId];
        this.style = document.all[objectId].style;
    }else if(document.layers){
        this.reference = document.layers[objectId];
        this.style = document.layers[objectId].style;
    }
}

panel = null;
function loadPanel(panelName){
    if(panel != null){
        panel.style.display = 'none';
    }
/*    
    panel=document.getElementById(panelName);
    panel.style.display='block';
*/
	panel = new ObjectById(panelName);
    panel.style.display = 'block';
}

/*
porterC    - liczba tragarzy
porterSc   - liczba punktow ladunkowych dla jednego tragara
foodSc     - liczba punktow ladunkowych pochlanianych przez jednopstke jedzenia
toolSc     - liczba punktow ladunkowych pochlanianych przez jednoste narzedzia
ironSc     - liczba punktow ladunkowych pochlanianch przez jednoste zelaza
weaponSc   - liczba punktow ladunkowych pochlanianych przez jednostke broni
form       - referencja do formularza
outId      - identyfikator obiektu do wypisywania wyniku
*/
function calculateLoad(porterC, porterSc, foodSc, toolSc, ironSc, weaponSc, cost, max_cost, form, outId){
    out = new ObjectById(outId);

    food = (form.food.value == "")? 0: form.food.value;
    tools = (form.tools.value == "")? 0: form.tools.value;
    iron = (form.iron.value == "")? 0: form.iron.value;
    weapon = (form.weapon.value == "")? 0: form.weapon.value;
    
    if(Math.ceil(food)!=food) food+='a';
    if(Math.ceil(tools)!=tools) tools+='a';
    if(Math.ceil(iron)!=iron) iron+='a';
    if(Math.ceil(weapon)!=weapon) weapon+='a';
    
    var loadScoresNeeded = food*foodSc + tools*toolSc + iron*ironSc + weapon*weaponSc;
    var porterNeeded = Math.ceil(loadScoresNeeded/porterSc);
    if(porterNeeded > porterC){
        out.reference.innerHTML = '<span style="color: red">' + porterNeeded + '</span><br>';
    }else{
        out.reference.innerHTML = '' + porterNeeded + '<br>';
    }
    if(cost*porterNeeded > max_cost){
        out.reference.innerHTML += '<span style="color: red">'+ (cost*porterNeeded) +'</span>';
    }else{
        out.reference.innerHTML += ''+ (cost*porterNeeded);
    }
}
