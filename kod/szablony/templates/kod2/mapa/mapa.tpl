
  {literal}
  <style>
  <!--
   .kom{
      {/literal}background-image: url({$image_dir}mapa_default.png);{literal}
   }
  //-->
  </style>
  {/literal}
  <script language="JavaScript">
  {literal}
    function mouseOnKom(obj,id){
      {/literal}obj.style.backgroundImage='url({$image_dir}mapa_hover.png)';{literal}
      info = document.getElementById('mapa_info');
      info.innerHTML='Pozycja '+id;
    }
    function mouseOutKom(obj){
      {/literal}obj.style.backgroundImage='url({$image_dir}mapa_default.png)';{literal}
    }
  {/literal}
  </script>
<div style="position: relative;top: 2;left: 10;width:{$map_width*35*2+15}px; height:25px;" id="mapa_info">
df
</div>
<div style="position: relative;top: 30;left: 10;background-image:url({$image_dir}{$map_background});width:{$map_width*35*2+15}px; height:{$map_height*25+25}px;">
{foreach from=$listaPol item=pole key=key}
    {if $pole.y % 2 == 0}
        <div class="kom" style="position: absolute;top: {$pole.y*25};left: {$pole.x*70}; width:50px; height:50px;" onmouseover="mouseOnKom(this,{$pole.id})" onmouseout="mouseOutKom(this)">
            
        </div>
    {else}
        <div class="kom" style="position: absolute;top: {$pole.y*25};left: {$pole.x*70+35}; width:50px; height:50px;" onmouseover="mouseOnKom(this,{$pole.id})" onmouseout="mouseOutKom(this)">
            
        </div>
    {/if}
{/foreach}
</div>
