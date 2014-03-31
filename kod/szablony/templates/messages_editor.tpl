{strip}


{* wypisywac $msg*}
{* odbiorce sprawdziæ wyra¿eniem regularnym*}

<script type="text/javascript">
{literal}
<!--
    var intervalHandler;
    var i = 0;
    function checkLength(textfield, submitMode){
        toLong = (textfield.value.length > 12);
        if(submitMode){
            if(toLong){
                alert('Wpisany temat jest za d³ugi!\nMo¿esz u¿yæ maxymalnie 12 znaków.');
                return false;
            }else return true;
        }else if(document.getElementById){
            obj = document.getElementById("info");
            if(toLong){
                if(obj.innerHTML == "")obj.innerHTML = "Wpisano&nbsp;za&nbsp;d³ugi&nbsp;temat";
            }else obj.innerHTML = "";
        }
    }
//-->
{/literal}
</script>


<br/><br/>
<form name="messageEditor" action="nowaWiadomosc.php" method="POST" onSubmit="return checkLength(this.temat, true)">
<table border="0" width="519"> <!-- 349 -->
    <tr>
        <td width="20px"></td>
        <td class="header" width="100px">odbiorca</td>
        <td width="140px">
            <input class="textfield" name="odbiorca" type="text" value="{$receiver}">
        </td>
        <td width="259px"></td>
    </tr>
    <tr>
        <td></td>
        <td class="header">temat</td>
        <td>
            <input class="textfield" name="temat" type="text" onFocus="intervalHandler = setInterval('checkLength(document.messageEditor.temat, false)', 200);" onBlur="clearInterval(intervalHandler);">
        </td>
        <td id="info"></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <textarea class="textfield" name="tresc" style="width: 460px; height: 150">
            </textarea>
        </td>
    </tr>
    <tr class="row1">
        <td></td>
        <td colspan="2">{$result_message}</td>
        <td style="text-align: right; padding-right: 39px">
            <input class="button" type="submit" value="Po¶lij&nbsp;goñca">
        </td>
    </tr>
</table>
</form>


{/strip}

