{strip}
{if $show.all == "true"}
<p>
<b>KoD XMLedytor</b> jest prostym edytorem. Tre¶æ mo¿na formatowaæ z u¿yciem jêzyka XML. Jest on podobny to szeroko znanego HTML'a - formatowanie tekstu oparte na koncepcji znaczników. Tekst zawarty pomiêdzy okre¶lonymi znacznikami jest odpowiednio formatowany (w zale¿no¶ci o cech oraz atrybótów u¿ytego znacznika).
</p>
{/if}


{* BEGIN: Znacznik B *}
{if $show.b == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">B</b> - tekst znajduj±cy siê pomiêdzy tym znacznikiem jest wy¶wietlany jako pogrubiony.
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>Zwyk³y tekst, a tu jest &lt;B&gt;tekst pogrubiony&lt;/B&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik B *}


{* BEGIN: Znacznik I *}
{if $show.i == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">I</b> - tekst znajduj±cy siê pomiêdzy tym znacznikiem bêdzie wy¶wietlany jako tekst pochy³y.
</p>

<p style="margin-left: 25px">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>Zwyk³y tekst, a tu jest &lt;I&gt;tekst pochylony&lt;/I&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik I *}


{* BEGIN: Znacznik IMG *}
{if $show.img == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">IMG</b> - znacznik s³u¿y do wstawiania obrazka
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: nie posiada
<li>atrybuty:<br>
    URL - url obrazka, np. 'http://www.mojeserwer.pl/obrazki/moj_obraz.jpg'<br>
    WIDTH - szeroko¶æ obrazka w pikselach<br>
    HEIGHT - wysoko¶æ obrazka w pikselach<br>
    ALT - tekst alternatywny, u¿ywany przez przegladarki, które mog± wy¶wietlaæ orazków
</ul>
<p class="example">
<code>
Oto mój obraz:<br>
&lt;IMG URL="http://moj.serwer.pl/obrazek.jpg" ALT="Mój obrazek"/&gt;<br>
Oto mój drugi obraz:<br>
&lt;IMG URL="http://moj.serwer.pl/obrazek.jpg"/&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik IMG *}


{* BEGIN: Znacznik LINE *}
{if $show.line == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">LINE</b> - u¿ycie tego znacznika spowoduje wy¶wietlenie siê poziomej linii (odpowiednik znacznika HR z HTML).
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: nie posiada
<li>atrybuty: brak
</ul>
<p class="example">
<code>Tekst nad lini±&lt;LINE/&gt;Tekst pod lini±</code>
</p>
</p>
{/if}
{* END: Znacznik LINE *}


{* BEGIN: Znacznik LISTITEM *}
{if $show.listitem == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">LISTITEM</b> - element listy numerowanej lub punktowanej (patrz: ORDEREDLIST, UNORDEREDLIST)
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
&lt;ORDEREDLIST&gt;<br>
    &lt;LISTITEM&gt;Element listy&lt;/LISTITEM&gt;<br>
    &lt;LISTITEM&gt;A tu kolejny element listy&lt;/LISTITEM&gt;<br>
&lt;/ORDEREDLIST&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik LISTITEM *}


{* BEGIN: Znacznik ORDEREDLIST *}
{if $show.orderedlist == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">ORDEREDLIST</b> - numerowana lista znaczników LISTITEM
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
&lt;ORDEREDLIST&gt;<br>
    &lt;LISTITEM&gt;Punkt pierwszy listy uporz±dkowanej&lt;/LISTITEM&gt;<br>
    &lt;LISTITEM&gt;Punkt drugi listy uporz±dkowanej&lt;/LISTITEM&gt;<br>
&lt;/ORDEREDLIST&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik ORDEREDLIST *}


{* BEGIN: Znacznik UNORDEREDLIST *}
{if $show.unorderedlist == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">UNORDEREDLIST</b> - punktowana lista znaczników LISTITEM
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
&lt;UNORDEREDLIST&gt;<br>
    &lt;LISTITEM&gt;Punkt pierwszy listy uporz±dkowanej&lt;/LISTITEM&gt;<br>
    &lt;LISTITEM&gt;Punkt drugi listy uporz±dkowanej&lt;/LISTITEM&gt;<br>
&lt;/UNORDEREDLIST&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik UNORDEREDLIST *}


{* BEGIN: Znacznik U *}
{if $show.u == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">U</b> - tekst znajduj±cy siê pomiêdzy tym znacznikiem jest wy¶wietlany jako podkre¶lony.
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj±cy: wymagany
<li>znacznik zamykaj±cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
Zwyk³y tekst<br>
&lt;U&gt;Tekst podkre¶lony&lt;/U&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik U *}
{/strip}
