{if $message}
<br>
<center>
<div align="center"  style="width:70%; border:2px green solid;color:green;font-size:11px;padding:4px">
  <b>{$message}</b>
</div>
</center>
{/if}

{if $error}
<br>
<center>
<div align="center"  style="width:70%; border:2px red solid;color:red;font-size:11px;padding:4px">
  <b>{$error}</b>
</div>
</center>
{/if}
