/**
 * @projectDescription plugin do obsługi ajax poprzez bibliotekę jquery
 * 
 * @copyright 2007 Robert (nospor) Nodzewski
 * @author Robert Nodzewski (nospor at gmail dot com)
 * @license http://opensource.org/licenses/lgpl-license.php GNU Lesser General Public License
 * @version 1.1.1
 */
ShoutBox.getMessagesAjax = function(url){
	$.ajax({
		type: "GET",
		url: url,
		dataType: "xml",
		success: function(obj) {var idSb = ShoutBox.getIdFromXml(obj);if (!idSb) return false;eval('if ('+idSb+'.idMsg==null) ShoutBox.showHideWait("hide");'+idSb+'.write(obj, "read");');},
		error : function(obj) {ShoutBox.showHideWait("hide");}
	});
}

ShoutBox.sendMessageAjax = function(url, postParams){
	$.ajax({
		type: "POST",
		url: url,
		dataType: "xml",
		data: ShoutBox.serialize(postParams),
		success: function(obj) {var idSb = ShoutBox.getIdFromXml(obj); if (!idSb) return false;eval(idSb+'.write(obj, "write");');ShoutBox.showHideWait('hide');},
		error : function(obj) {ShoutBox.showHideWait('hide');}
	});
}

ShoutBox.getHistoryAjax = function(url){
	$.ajax({
		type: "GET",
		url: url,
		dataType: "xml",
		success: function(obj) {var idSb = ShoutBox.getIdFromXml(obj);if (!idSb) return false; ShoutBox.showHideWait("hide");eval(idSb+'.write(obj, "history");');},
		error : function(obj) {ShoutBox.showHideWait('hide');}
	});
}

ShoutBox.delMessageAjax = function(url){
	$.ajax({
		type: "GET",
		url: url,
		dataType: "xml",
		success: function(obj) {ShoutBox.dma(obj);},
		error : function(obj) {alert(ShoutBox.txtRemoveError);ShoutBox.showHideWait('hide');}
	});
}

ShoutBox.textToInputAjax = function(url){
	$.ajax({
		type: "GET",
		url: url,
		dataType: "xml",
		success: function(obj) {ShoutBox.ttia(obj);},
		error : function(obj) {alert(ShoutBox.txtGettingError);ShoutBox.showHideWait('hide');}
	});
}

ShoutBox.inputToTextAjax = function(url, postParams){
	$.ajax({
		type: "POST",
		url: url,
		dataType: "xml",
		data: ShoutBox.serialize(postParams),
		success: function(obj) {ShoutBox.itta(obj);},
		error : function(obj) {alert(ShoutBox.txtEditError);ShoutBox.showHideWait('hide');}
	});
}