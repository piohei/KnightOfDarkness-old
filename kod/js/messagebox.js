function button_on(name, active_bg){
    td = new HTMLObjectWrapper(name);
    td.style.color = '#BFA88A';
    td.style.backgroundImage = 'url('+active_bg.src+')';

    tdl = new HTMLObjectWrapper(name+'l');
    if(tdl.ref){
        tdl.style.backgroundImage = 'url('+active_bg.src+')';
    }

    tdr = new HTMLObjectWrapper(name+'r');
    if(tdr.ref){
        tdr.style.backgroundImage = 'url('+active_bg.src+')';
    }
}

function button_off(name, inactive_bg){
    td = new HTMLObjectWrapper(name);
    td.style.color = '#797364';
    td.style.backgroundImage = 'url('+inactive_bg.src+')';

    tdl = new HTMLObjectWrapper(name+'l');
    if(tdl.ref){
        tdl.style.backgroundImage = 'url('+inactive_bg.src+')';
    }

    tdr = new HTMLObjectWrapper(name+'r');
    if(tdr.ref){
        tdr.style.backgroundImage = 'url('+inactive_bg.src+')';
    }
}

function select_clear(form){

    for(i = 0; i < form.elements.length; i++){
        form.elements[i].checked = false;
    }
}

function select_read(form){
    if(form.elements['selector_read'].checked){
        form.elements['selector_inverse'].checked = false;

        for(i = 0; i < form.elements.length; i++){
            if(form.elements['selector_inverse'] == form.elements[i]) continue;
            if(form.elements['selector_read'] == form.elements[i]) continue;

            if(form.elements[i].type == 'checkbox'){
                if(form.elements[i].id.substring(0,5) == 'read_')
                    form.elements[i].checked = true;
                else
                    form.elements[i].checked = false;
            }
        }
    }else{
        select_clear(form);
    }
}

function select_inverse(form){
    if(form.elements['selector_inverse'].checked){
        form.elements['selector_read'].checked = false;

        for(i = 0; i < form.elements.length; i++){
            if(form.elements['selector_inverse'] == form.elements[i]) continue;
            if(form.elements['selector_read'] == form.elements[i]) continue;

            if(form.elements[i].type == 'checkbox'){
                form.elements[i].checked = !form.elements[i].checked;
            }
        }
    }else{
        select_clear(form);
    }
}

function unset_read_flag(id){
    rf = document.getElementById("urflag_"+id);
    if(rf && rf.innerHTML){
        rf.innerHTML = "";
    }

    rf = document.getElementById("unread_"+id);
    if(rf && rf.id){
        rf.id = "read_"+id;
    }
}

