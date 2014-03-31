{if $req}
    {assign var="helpurl" value="`$root_dir`help.quick.php?qhf=`$helpfile`&req=`$req`"}
{else}
    {assign var="helpurl" value="`$root_dir`help.quick.php?qhf=`$helpfile`"}
{/if}

<img src="{$image_dir}ico.quickhelp.gif" alt="Pomoc" title="Pomoc" style="border: 0; margin: 0; cursor: pointer"
 onclick="openWindow('{$helpurl}', {$width|default:500}, {$height|default:400}, {$title|default:"'Pomoc'"})">

