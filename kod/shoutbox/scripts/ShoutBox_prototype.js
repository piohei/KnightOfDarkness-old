/**
 * @projectDescription plugin do obsługi ajax poprzez bibliotekę prototype
 * 
 * @copyright 2007 Robert (nospor) Nodzewski
 * @author Robert Nodzewski (nospor at gmail dot com)
 * @license http://opensource.org/licenses/lgpl-license.php GNU Lesser General Public License
 * @version 1.1.1
 */

ShoutBox.getMessagesAjax = function(url){
	new Ajax.Request(
		url, 
		{
			method: "get",
			onSuccess: function(obj) {var idSb = ShoutBox.getIdFromXml(obj.responseXML);if (!idSb) return false;eval('if ('+idSb+'.idMsg==null) ShoutBox.showHideWait("hide");'+idSb+'.write(obj.responseXML, "read");');},
			onFailure: function(obj) {ShoutBox.showHideWait("hide");}
		});
}

ShoutBox.sendMessageAjax = function(url, postParams){
	new Ajax.Request(
		url, 
		{
			method: "post",
			parameters: ShoutBox.serialize(postParams),
			onSuccess : function(obj) {var idSb = ShoutBox.getIdFromXml(obj.responseXML); if (!idSb) return false;eval(idSb+'.write(obj.responseXML, "write");');ShoutBox.showHideWait('hide');},
			onFailure : function(obj) {ShoutBox.showHideWait('hide');}
		});
}

ShoutBox.getHistoryAjax = function(url){
	new Ajax.Request(
		url, 
		{
			method: "get",
			onSuccess : function(obj) {var idSb = ShoutBox.getIdFromXml(obj.responseXML);if (!idSb) return false; ShoutBox.showHideWait("hide");eval(idSb+'.write(obj.responseXML, "history");');},
			onFailure : function(obj) {ShoutBox.showHideWait('hide');}
		});
}

ShoutBox.delMessageAjax = function(url){
	new Ajax.Request(
		url, 
		{
			method: "get",
			onSuccess : function(obj) {ShoutBox.dma(obj.responseXML);},
			onFailure : function(obj) {alert(ShoutBox.txtRemoveError);ShoutBox.showHideWait('hide');}
		});
}

ShoutBox.textToInputAjax = function(url){
	new Ajax.Request(
		url, 
		{
			method: "get",
			onSuccess : function(obj) {ShoutBox.ttia(obj.responseXML);},
			onFailure : function(obj) {alert(ShoutBox.txtGettingError);ShoutBox.showHideWait('hide');}
		});
}

ShoutBox.inputToTextAjax = function(url, postParams){
	new Ajax.Request(
		url, 
		{
			method: "post",
			parameters: ShoutBox.serialize(postParams),
			onSuccess : function(obj) {ShoutBox.itta(obj.responseXML);},
			onFailure : function(obj) {alert(ShoutBox.txtEditError);ShoutBox.showHideWait('hide');}
		});
}
