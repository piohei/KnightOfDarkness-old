{strip}


<script type="text/javascript">
{literal}
function checkbox(action){
    form = document.forms["messages"];
    if(action == "selectAll")
        action = "form.elements[itr].checked = true;";
    else if(action == "reverseSelection")
        action = "form.elements[itr].checked = (form.elements[itr].checked ? false: true)";
    else return;
    for( itr=0; itr < form.elements.length; itr++)
        if(form.elements[itr].type == "checkbox") eval(action);
}
function previewMsg(id){
    {/literal}url = "{$messages_dir}wiadomosci.php?podglad="+id;{literal}
    previewWindow = open(url, "MessagePreview",
        "directories=no,location=no,menubar=no,status=no,tollbar=no,width=523,height=500,resizable=yes,scrollbars=yes");
}
{/literal}
</script>


{*- tabela wiadomosci --------------------------------------------------------*}
<br/><br/>
<table border="0" width="519">
<tr>
    <td width="20"></td>
    <td width="150" class="header"> Nadawca </td>
    <td width="150" class="header"> Temat   </td>
    <td width="150" class="header"> Data    </td>
    <td width="49"  class="header"></td>
</tr>

{if $messagesList == "" && $invitationList == ""}
    <tr>
        <td></td>
        <td colspan="4" align="center" class="unread">
            Nie&nbsp;masz&nbsp;¿adnych&nbsp;wiadomo¶ci
        </td>
    </tr>
{else}

    {* wypisanie zaproszen *}
    {foreach item="invitation" from=$invitationList}
        <tr>
            <td></td>
            <td class="invitation">{$invitation->odkogo}</td>
            <td class="invitation" ><i>zaproszenie</i></td>
            <td class="invitation">{$invitation->data}</td>
            <td class="invitation">
                <a href="{$messages_dir}wiadomosci.php?przyjmijZaproszenie={$invitation->odkogo}&id={$invitation->id}">
                    <img src="{$image_dir}messages_icon_accept.jpg" alt="Przyjmij&nbsp;zaproszenie">
                </a>&nbsp;&nbsp;&nbsp;
                <a href="{$messages_dir}wiadomosci.php?usunZaproszenie={$invitation->odkogo}&id={$invitation->id}">
                    <img src="{$image_dir}messages_icon_refuse.jpg" alt="Odrzuæ&nbsp;zaproszenie">
                </a>
            </td>
        </tr>
    {/foreach}


    {* wypisanie wiadomosci *}
    <form name="messages" method="POST" action="wiadomosci.php">
    {foreach item="message" from=$messagesList}
        {if $message->czytana != "1"}
            <tr>
                <td></td>
                <td class="unread">
                    <a class="unread" href="{$messages_dir}nowaWiadomosc.php?do={$message->od}">
                        {$message->od}
                    </a>
                </td>
                <td class="unread" >
                    <a class="unread" href="javascript: previewMsg({$message->id})">
                        {$message->temat|default:"<i>brak&nbsp;tematu</i>"}
                    </a>
                </td>
                <td class="unread">{$message->data}</td>
                <td class="unread">
                    <a href="{$friends_dir}spisZnajomych.php?ktoD={$message->od}">
                        <img src="{$image_dir}messages_icon_addfriend.jpg" alt="Dodaj&nbsp;do&nbsp;ksiêgi&nbsp;znajomych">
                    </a>
                    &nbsp;
                    <input type="checkbox" name="cbox_tab[{$message->id}]">
                </td>
            </tr>
        {else}
            <tr>
                <td></td>
                <td class="read">
                    <a class="read" href="{$messages_dir}nowaWiadomosc.php?do={$message->od}">
                        {$message->od}
                    </a>
                </td>
                <td class="read">
                    <a class="read" href="javascript: previewMsg({$message->id})">
                        {$message->temat|default:"<i>brak&nbsp;tematu</i>"}
                    </a>
                </td>
                <td class="read">{$message->data}</td>
                <td class="read">
                    <a href="{$friends_dir}spisZnajomych.php?ktoD={$message->od}">
                        <img src="{$image_dir}messages_icon_addfriend.jpg" alt="Dodaj&nbsp;do&nbsp;ksiêgi&nbsp;znajomych">
                    </a>
                    &nbsp;
                    <input type="checkbox" name="cbox_tab[{$message->id}]">
                </td>
            </tr>
        {/if}
    {/foreach}
    <tr>
        <td></td>
        <td colspan="4" class="message menu">
            <a class="submenuItem" href="javascript: checkbox('reverseSelection')">odwróæ&nbsp;zaznaczenie</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="submenuItem" href="javascript: checkbox('selectAll')">zaznacz&nbsp;wszystko</a>
        </td>
    </tr>
    </form>
{/if}
</table>
{*----------------------------------------------------------------------------*}



{/strip}
