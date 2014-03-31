/*
 * (c) 2006-2007 Robert (nospor) Nodzewski
 * email: (nospor at gmail dot com)
 * license http://opensource.org/licenses/lgpl-license.php GNU Lesser General Public License
 * Dodatkowo, począwszy od wersji 1.0, wymagane jest umieszczenie na stronie wykorzystującej ShoutBox 
 * informacji o autorze wraz z linkiem do jego strony.
 * version: 1.1.1
 *
 */

/**
 * Klasa ShoutBox
 * @param {String} id - unikalny identyfikator. Ważne, by tworzony obiekt nazywal sie tak samo jak to id, np:
 * var sb = new ShoutBox('sb');
 * @param {Integer} refreshTime - czas odświerzania w milisekundachsekundach
 * @param {String} baseLink - link bazowy do skryptu odbierającego żądania. Ważne, by wyglądał mniej wiecej tak
 * ShoutBox.php? lub index.php?akcja=sb&. Chodzi o ? i & by samemu wstawic by bylo gotowe do wykorzystania przez klasę
 */
function ShoutBox(id, refreshTime, baseLink, type){
	this.id = id;
	this.idMsg = null;
	this.idFirstMsg = null; //id wiadomości, która jest aktualnie pierwsza
	this.refreshTime = refreshTime || 2000;// domyślny czas to 10 sekund
	this.baseLink = baseLink || 'ShoutBox.php?';
	this.events = {};
	this.down = (!type || type == 'down') ? true : false;
	this.body = document.getElementById(this.id+'_body');
	ShoutBox.objNick = document.getElementById('sb_nick');
	ShoutBox.objMessage = document.getElementById('sb_message');
	if (ShoutBox.objMessage){
		ShoutBox.objMessage.onblur = function() {ShoutBox.setFocus();};
		ShoutBox.objMessage.onkeydown = function(event) {if (ShoutBox.isTab(event)) return ShoutBox.searchUser(this); else ShoutBox.usersIndex = -1;};
	}
};
//teksty
ShoutBox.txtScrollLock = 'Zablokuj scroll';
ShoutBox.txtScrollUnlock = 'Odblokuj scroll';
ShoutBox.txtFloodingLock = 'Blokada pisania jeszcze przez sekund: ';
ShoutBox.txtRemoveConfirm = 'Czy na pewno chcesz usunąć tę wiadomość?';
ShoutBox.txtRemoveError = 'Nie udało się usunąć wiadomości';
ShoutBox.txtGettingError = 'Nie udało się pobrać danych';
ShoutBox.txtEditError = 'Nie udało się zmienić wiadomości';
ShoutBox.txtEditClick = 'Kliknij by edytować';

ShoutBox.objWait = null;

ShoutBox.objScrollLocking = null;
ShoutBox.scrollLocked = false;
ShoutBox.switchScroll = function() {
	if (!ShoutBox.objScrollLocking && ShoutBox.objScrollLocking != null)
		return false;
	if (!ShoutBox.objScrollLocking && !(ShoutBox.objScrollLocking = document.getElementById('sb_scroll_locking'))){
		ShoutBox.objScrollLocking = false;
		return false;
	};
	if (ShoutBox.scrollLocked){
		ShoutBox.objScrollLocking.className = 'sb_unlocked';
		ShoutBox.objScrollLocking.title = ShoutBox.txtScrollLock;
		ShoutBox.scrollLocked = false;
	} else {
		ShoutBox.objScrollLocking.className = 'sb_locked';
		ShoutBox.objScrollLocking.title = ShoutBox.txtScrollUnlock;
		ShoutBox.scrollLocked = true;
	};
	return true;		
};

ShoutBox.objUsersOnline = null;
ShoutBox.setUsersOnline = function(xml) {
	if (!ShoutBox.objUsersOnline && ShoutBox.objUsersOnline != null)
		return false;
	if (!ShoutBox.objUsersOnline && !(ShoutBox.objUsersOnline = document.getElementById('sb_online_users'))){
		ShoutBox.objScrollLocking = false;
		return false;
	};
	
	var online = xml.getElementsByTagName("online");
	if (online && online.length > 0 && (online = online.item(0))){
		if (ShoutBox.objUsersOnline.firstChild)
			ShoutBox.objUsersOnline.removeChild(ShoutBox.objUsersOnline.firstChild);
		ShoutBox.users = null;	
		ShoutBox.users = new Array();	
		var users = online.getElementsByTagName("ouser");
		if (users && users.length > 0){
			var usersUl = ShoutBox.createElement('ul', ShoutBox.objUsersOnline);
			var countUsers = users.length, ouser, usernick, userstyle, userclass;
			for (iu = 0; iu < countUsers; iu++){
				ouser = users.item(iu);
				usernick = ShoutBox.getText(ouser);
				ShoutBox.users.push(usernick);
				userstyle = ouser.getAttribute('style');
				userclass = ouser.getAttribute('class');
				ShoutBox.createElement('li', usersUl, usernick, null, userclass, userstyle);
			}
		}
	};
	return true;		
};

ShoutBox.floodingTime = 0;
ShoutBox.floodingLock = function() {
	var objSubmit = document.getElementById('sb_submit');
	if (ShoutBox.objMessage && objSubmit){
		if (ShoutBox.floodingTime){
			ShoutBox.objMessage.disabled = true;
			objSubmit.disabled = true;
			ShoutBox.objMessage.value = ShoutBox.txtFloodingLock+ ShoutBox.floodingTime;
			ShoutBox.floodingTime--;
			setTimeout('ShoutBox.floodingLock()',1000);
		} else {
			ShoutBox.objMessage.disabled = false;
			objSubmit.disabled = false;
			ShoutBox.objMessage.value = '';
		}
	}
};

ShoutBox.users = null;
ShoutBox.usersIndex = -1;
ShoutBox.usersSearch = '';
ShoutBox.searchUser = function(objMsg) {
	//pobranie ostatniego wyrazu
	var objReg = /(^|\s)(\w*)$/;
	if (ShoutBox.usersIndex == -1){
		var str = objMsg.value.match(objReg);
		if (str && str.length==3)
			ShoutBox.usersSearch = str[2];
		else
			ShoutBox.usersSearch = '';
	};
	
	//wyszukanie w tablicy userów
	var uLength = ShoutBox.users.length, sUser,sActualUser, objPattern;
	if (ShoutBox.users && uLength > 0){
		if (ShoutBox.usersIndex==-2)
			ShoutBox.usersIndex=0
		else	
			ShoutBox.usersIndex++;
		if (ShoutBox.usersIndex<uLength){
			for (;ShoutBox.usersIndex<uLength;ShoutBox.usersIndex++){
				sActualUser = ShoutBox.users[ShoutBox.usersIndex];
				objPattern = new RegExp("^"+ShoutBox.usersSearch,"i"); 
				if (!ShoutBox.usersSearch || sActualUser.match(objPattern)){
					sUser = sActualUser;
					break;
				};
				sUser = ShoutBox.usersSearch;
			};
			if (ShoutBox.usersIndex>=uLength)
				ShoutBox.usersIndex=-2;
		} else {
			sUser = ShoutBox.usersSearch;
			ShoutBox.usersIndex=-2;
		}	
	} else
		sUser = ShoutBox.usersSearch;
	
	//wyswietlenie znalezionego slowa
	objMsg.value = objMsg.value.replace(objReg,'$1'+sUser);
	ShoutBox.wasTab = true;
	return false;
};

ShoutBox.wasTab = false;
ShoutBox.objMessage = null;
ShoutBox.objNick = null;
ShoutBox.setFocus = function(){
	if (ShoutBox.wasTab){
		ShoutBox.wasTab = false;
		ShoutBox.objMessage.focus();
	}
};

ShoutBox.showHideWait = function(type) {
	if (!ShoutBox.objWait && ShoutBox.objWait != null)
		return false;
	if (!ShoutBox.objWait && !(ShoutBox.objWait = document.getElementById('sb_wait'))){
		ShoutBox.objWait = false;
		return false;
	};
	ShoutBox.objWait.style.display = (type=='show' ? 'block' : 'none');
	return true;		
};

ShoutBox.getRoot = function(xml){
	var root = xml.documentElement;
	if (!root)
		return null;
	if (root.tagName.toUpperCase() == 'SHOUTBOX')
		return root;	
	root = root.getElementsByTagName('shoutbox');
	if (!root || root.length == 0)
		return null;
	return root.item(0);		
};
ShoutBox.getIdFromXml = function(xml){
	var root = ShoutBox.getRoot(xml);
	return root ? root.getAttribute('id') : null;
};

ShoutBox.createElement = function(element, parent, content, id, className, style,asFirst) {//tworzy element w parent
	var el = element;
	element=document.createElement(element);
	if (!asFirst)
		parent.appendChild(element);
	else
		parent.insertBefore(element, parent.firstChild);
	if (id) {element.id=id;element.name=id;};
	if (className) 
		element.className=className;
	if (style) 
		element.style.cssText = style;
	if (content) 
	{
		if (el!='input') element.innerHTML=content;
		else			 element.value=content;	
	};
	return element;
};

ShoutBox.isEnter = function(evt){
	evt = evt ? evt : window.event;
	return (evt.keyCode == 13 || evt.keyCode == 3);
};
ShoutBox.isTab = function(evt){
	evt = evt ? evt : window.event;
	if (evt.keyCode == 9){
		if (evt.preventDefault) {
			evt.preventDefault();
			evt.stopPropagation();
		} else {
			evt.returnValue = false;
			evt.cancelBubble = true;
		};
		return true;
	};
	return false;
};

ShoutBox.getText = function(element, childName){
	if (!element)
		return null;
	var _child;	
	if (childName){	
		_child = (element.getElementsByTagName(childName));
		if (!_child || _child.length == 0)
			return null;
		_child = _child.item(0);
	} else
		_child = element;	
	var elText = _child.text;
	if (!elText)
		elText = _child.textContent;
	if (!elText)
		elText = '';
	return elText;
};

ShoutBox.prototype.sendMessage = function(){
	var objMessage = ShoutBox.objMessage;
	var message = objMessage.value;
	objMessage.value = '';
	ShoutBox.showHideWait('show');
	var postParams = {"message" : message};
	if (ShoutBox.objNick)
		postParams['nick'] = ShoutBox.objNick.value;
	ShoutBox.sendMessageAjax(this.baseLink + 'sb_a=add'+(this.idMsg==null ? '' : ('&sb_idMsg='+this.idMsg))+'&sb_id='+this.id, postParams);	 
	objMessage.focus();
};
ShoutBox.prototype.getMessages = function(){
	if (this.idMsg==null)
		ShoutBox.showHideWait('show');
	ShoutBox.getMessagesAjax(this.baseLink +'sb_a=read'+(this.idMsg==null ? '' : ('&sb_idMsg='+this.idMsg))+'&sb_id='+this.id);	
	setTimeout(this.id+'.getMessages()', this.refreshTime);
};

ShoutBox.prototype.getHistory = function(){
	ShoutBox.showHideWait('show');
	ShoutBox.getHistoryAjax(this.baseLink +'sb_a=history&sb_idFirstMsg='+this.idFirstMsg+'&sb_id='+this.id+(this.idMsg==null ? '' : ('&sb_idMsg='+this.idMsg)));
};

ShoutBox.prototype.delMessage = function(idActMsg, count){
	if (!confirm(ShoutBox.txtRemoveConfirm))
		return ;
	ShoutBox.showHideWait('show');
	ShoutBox.delMessageAjax(this.baseLink + 'sb_a=delete&sb_idActMsg='+idActMsg+'&sb_id='+this.id);
};

ShoutBox.dma = function(xml){
	var root = ShoutBox.getRoot(xml);if (!root) return false;
	var result = root.getAttribute('result');
	var idSb = ShoutBox.getIdFromXml(xml);if (!idSb) return false;
	if (!result || result=='0')
		alert(ShoutBox.txtRemoveError);
	else {
		var divObj = document.getElementById(idSb+'_msg_'+result);
		if (divObj)
			divObj.parentNode.removeChild(divObj);
	};
	eval(idSb+'.write(xml, "delete");');		
	ShoutBox.showHideWait('hide');	
}

ShoutBox.prototype.textToInput = function(idActMsg, count){
	var divObj = document.getElementById(this.id+'_text_' + idActMsg), spanObj;
	if (!divObj || !(spanObj = divObj.childNodes.item(0)) || spanObj.tagName.toUpperCase() != 'SPAN')
		return ;
	ShoutBox.showHideWait('show');
	ShoutBox.textToInputAjax(this.baseLink + 'sb_a=getrfm&sb_idActMsg='+idActMsg+'&sb_id='+this.id);
};

ShoutBox.ttia = function(xml){
	var root = ShoutBox.getRoot(xml);if (!root) return false;
	var result = root.getAttribute('result');
	var resultText = xml.getElementsByTagName("resulttext");
	var idSb = ShoutBox.getIdFromXml(xml);if (!idSb) return false;
	if (resultText && resultText.length > 0)
		 resultText=ShoutBox.getText(resultText.item(0));
	else
		resultText = '';	
	if (!result || result=='0')
		alert(ShoutBox.txtGettingError);
	else {		
		var divObj = document.getElementById(idSb+'_text_' + result), spanObj;
		if (divObj && (spanObj = divObj.childNodes.item(0)) && spanObj.tagName.toUpperCase() == 'SPAN'){
			divObj.removeChild(spanObj);
			var el = ShoutBox.createElement('input', divObj, resultText, idSb+'_input_'+result,'sb_input_text');
			el.style.width=(divObj.offsetWidth-10)+'px';
			el.focus();
			el.onblur=function(){idSb = this.id.substr(0,this.id.indexOf('_'));eval(idSb+'.inputToText(this.id.substr(9));');}
			el.onkeypress=function(event){if (ShoutBox.isEnter(event)) {idSb = this.id.substr(0,this.id.indexOf('_'));eval(idSb+'.inputToText(this.id.substr(9));');}}			
			eval(idSb+'.write(xml, "edit");');
		}
	};
	ShoutBox.showHideWait('hide');	
}

ShoutBox.prototype.inputToText = function(idActMsg, count){
	var inputObj = document.getElementById(this.id+'_input_'+idActMsg);
	if (!inputObj)
		return;
	ShoutBox.showHideWait('show');
	ShoutBox.inputToTextAjax(this.baseLink + 'sb_a=edit&sb_idActMsg='+idActMsg+'&sb_id='+this.id,{message : inputObj.value});
};

ShoutBox.itta = function(xml){
	var root = ShoutBox.getRoot(xml);if (!root) return false;
	var result = root.getAttribute('result');
	var resultText = xml.getElementsByTagName("resulttext");
	var idSb = ShoutBox.getIdFromXml(xml);if (!idSb) return false;
	if (resultText && resultText.length > 0)
		resultText = ShoutBox.getText(resultText.item(0));
	if (!result || result=='0' || !resultText)
		alert(ShoutBox.txtEditError);
	if (result && result != '0'){	
		var inputObj = document.getElementById(idSb+'_input_'+result), objDiv;
		if (inputObj && (objDiv = inputObj.parentNode)){
			objDiv.removeChild(inputObj);
			ShoutBox.createElement('span', objDiv, '&nbsp;' + resultText + '&nbsp;');
		}
	};
	eval(idSb+'.write(xml, "edit");');		
	ShoutBox.showHideWait('hide');	
}

/**
 * 
 * @param {Object} xml - xml
 * @param {Object} actionName - nazwa akcji w jakiej zostało wykonane. Mogą byc:
 *  - write
 *  - read
 *  - history
 *  - delete
 *  - edit
 */
ShoutBox.prototype.write = function(xml, actionName){
	var root = ShoutBox.getRoot(xml);if (!root) return false;
	var lastMessage = (this.idMsg == null) ? 0 : this.idMsg;
	var _idMsg = root.getAttribute('last_msg_id');
	var his = (actionName == 'history');
	var poshis = his;
	if (!this.down)
		poshis = !his;
	var noMoreHistory = root.getAttribute('nomorehistory');
	var flooding = root.getAttribute('flooding');
	if (flooding && !ShoutBox.floodingTime){
		ShoutBox.floodingTime = flooding;
		ShoutBox.floodingLock();
	};	
	this.idMsg = (_idMsg && _idMsg>this.idMsg) ? _idMsg : this.idMsg;
	this.idFirstMsg = root.getAttribute('first_msg_id') || this.idFirstMsg;
	var canDelete = root.getAttribute('candelete') ? true : false;
	var canEdit = root.getAttribute('canedit') ? true : false;
	var messages = xml.getElementsByTagName("message"), message, own, owner, ps,idActualMessage,classmessage, classtime;
	var countMessages = messages.length, classnick, classtext, stylemessage, styletime, stylenick, styletext, idDivMsg;
	var startH = this.body.scrollHeight, idDivText, sbmessage,_el;
	if (countMessages > 0){
		for (i = 0; i < countMessages; i++){
			message = messages.item(i);
			if (!canDelete)
				_canDel = message.getAttribute('candelete') ? true : false;
			if (!canEdit)
				_canEdit = message.getAttribute('canedit') ? true : false;
			own = message.getAttribute('owner');
			owner = own == 3 ? '_special' : (own == 2 ? '_admin' : (own == 1 ? '_owner' : ''));
			ps = message.getElementsByTagName('ps');
			if (ps && ps.length>0) ps = ps.item(0);
			else ps = null;	
			idActualMessage =  message.getAttribute('id');
			if (!his && own !=2 && idActualMessage <= lastMessage)
				continue;
			classmessage ='sb_message'+owner+' '+ ShoutBox.getText(ps, 'classmessage');
			classtime = 'sb_time '+ ShoutBox.getText(ps, 'classtime');
			classnick = 'sb_nick '+ ShoutBox.getText(ps, 'classnick');
			classtext = 'sb_text '+ ShoutBox.getText(ps, 'classtext');
			stylemessage = ShoutBox.getText(ps, 'stylemessage');
			styletime = ShoutBox.getText(ps, 'styletime');
			stylenick = ShoutBox.getText(ps, 'stylenick');
			styletext = ShoutBox.getText(ps, 'styletext');
			idDivMsg = idActualMessage ? this.id+'_msg_'+idActualMessage : null;
			idDivText = idActualMessage ? this.id+'_text_'+idActualMessage : null;
			sbmessage = ShoutBox.createElement('div', this.body, null, idDivMsg, classmessage,stylemessage, poshis);
			if ((canDelete || _canDel) && idActualMessage){
				_el = ShoutBox.createElement('div', sbmessage, null, this.id+'_del_div', 'sb_delete');
				_el.onclick=function(){idSb = this.id.substr(0,this.id.indexOf('_'));eval(idSb+'.delMessage(this.parentNode.id.substr(7));');}
			};
			_el = ShoutBox.createElement('span', sbmessage, ShoutBox.getText(message, 'time'), null, classtime, styletime);
			_el = ShoutBox.createElement('span', sbmessage, ShoutBox.getText(message, 'nick'), null, classnick, stylenick);
			_el = ShoutBox.createElement('div', sbmessage, null, idDivText, classtext, styletext);
			if ((canEdit || _canEdit) && idActualMessage){
				_el.onclick=function(){idSb = this.id.substr(0,this.id.indexOf('_'));eval(idSb+'.textToInput(this.parentNode.id.substr(7));');}
				_el.className+=' sb_edited';
				_el.title = ShoutBox.txtEditClick;
			};
			_el = ShoutBox.createElement('span', _el, '&nbsp;' + ShoutBox.getText(message, 'body')+ '&nbsp;');
		};
		if (actionName == 'read' && !lastMessage)
			actionName = "readall";
		this.runEvent('message', {actionName: actionName});
		if (!ShoutBox.scrollLocked){ 
			if (!his)
				this.body.scrollTop = this.down ? this.body.scrollHeight : 0;
			else	
				this.body.scrollTop = this.down ? this.body.scrollHeight - startH - this.body.offsetHeight : startH;
		} else {
			if (his)
				this.body.scrollTop = this.down ? this.body.scrollTop + (this.body.scrollHeight - startH) : this.body.scrollTop;
			else	
				this.body.scrollTop = this.down ? this.body.scrollTop : this.body.scrollTop + (this.body.scrollHeight - startH);
		}		
	};
	if (noMoreHistory){ // nie ma juz historii, wiec wyłączmy przycisk
		var objHistory = document.getElementById('sb_history');
		if (objHistory){
			objHistory.className = 'sb_nohistory';
			objHistory.onclick=function(){};
		}
	};
	ShoutBox.setUsersOnline(xml);
};

ShoutBox.prototype.bind = function(eventName, data, func){
	this.events[eventName] = {data : data, func : func};
}
ShoutBox.prototype.runEvent = function(eventName, params){
	if (typeof this.events[eventName] != "undefined"){
		var data = this.events[eventName].data;
		if (!data) data = {};
		data.params = params;
		this.events[eventName].func(data);
	}
}

ShoutBox.serialize = function(params){
	var serializedParams = '';
	for (var _param in params) {
		if (serializedParams) serializedParams += '&';
		serializedParams+=encodeURIComponent(_param)+'='+encodeURIComponent(params[_param]);
	};
	return serializedParams;
}