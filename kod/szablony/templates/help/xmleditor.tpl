{strip}
{if $show.all == "true"}
<p>
<b>KoD XMLedytor</b> jest prostym edytorem. Tre�� mo�na formatowa� z u�yciem j�zyka XML. Jest on podobny to szeroko znanego HTML'a - formatowanie tekstu oparte na koncepcji znacznik�w. Tekst zawarty pomi�dzy okre�lonymi znacznikami jest odpowiednio formatowany (w zale�no�ci o cech oraz atryb�t�w u�ytego znacznika).
</p>
{/if}


{* BEGIN: Znacznik B *}
{if $show.b == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">B</b> - tekst znajduj�cy si� pomi�dzy tym znacznikiem jest wy�wietlany jako pogrubiony.
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>Zwyk�y tekst, a tu jest &lt;B&gt;tekst pogrubiony&lt;/B&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik B *}


{* BEGIN: Znacznik I *}
{if $show.i == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">I</b> - tekst znajduj�cy si� pomi�dzy tym znacznikiem b�dzie wy�wietlany jako tekst pochy�y.
</p>

<p style="margin-left: 25px">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>Zwyk�y tekst, a tu jest &lt;I&gt;tekst pochylony&lt;/I&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik I *}


{* BEGIN: Znacznik IMG *}
{if $show.img == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">IMG</b> - znacznik s�u�y do wstawiania obrazka
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: nie posiada
<li>atrybuty:<br>
    URL - url obrazka, np. 'http://www.mojeserwer.pl/obrazki/moj_obraz.jpg'<br>
    WIDTH - szeroko�� obrazka w pikselach<br>
    HEIGHT - wysoko�� obrazka w pikselach<br>
    ALT - tekst alternatywny, u�ywany przez przegladarki, kt�re mog� wy�wietla� orazk�w
</ul>
<p class="example">
<code>
Oto m�j obraz:<br>
&lt;IMG URL="http://moj.serwer.pl/obrazek.jpg" ALT="M�j obrazek"/&gt;<br>
Oto m�j drugi obraz:<br>
&lt;IMG URL="http://moj.serwer.pl/obrazek.jpg"/&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik IMG *}


{* BEGIN: Znacznik LINE *}
{if $show.line == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">LINE</b> - u�ycie tego znacznika spowoduje wy�wietlenie si� poziomej linii (odpowiednik znacznika HR z HTML).
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: nie posiada
<li>atrybuty: brak
</ul>
<p class="example">
<code>Tekst nad lini�&lt;LINE/&gt;Tekst pod lini�</code>
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
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
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
<b style="font-size: 14px">ORDEREDLIST</b> - numerowana lista znacznik�w LISTITEM
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
&lt;ORDEREDLIST&gt;<br>
    &lt;LISTITEM&gt;Punkt pierwszy listy uporz�dkowanej&lt;/LISTITEM&gt;<br>
    &lt;LISTITEM&gt;Punkt drugi listy uporz�dkowanej&lt;/LISTITEM&gt;<br>
&lt;/ORDEREDLIST&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik ORDEREDLIST *}


{* BEGIN: Znacznik UNORDEREDLIST *}
{if $show.unorderedlist == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">UNORDEREDLIST</b> - punktowana lista znacznik�w LISTITEM
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
&lt;UNORDEREDLIST&gt;<br>
    &lt;LISTITEM&gt;Punkt pierwszy listy uporz�dkowanej&lt;/LISTITEM&gt;<br>
    &lt;LISTITEM&gt;Punkt drugi listy uporz�dkowanej&lt;/LISTITEM&gt;<br>
&lt;/UNORDEREDLIST&gt;
</code>
</p>
</p>
{/if}
{* END: Znacznik UNORDEREDLIST *}


{* BEGIN: Znacznik U *}
{if $show.u == "true" || $show.all == "true"}
<p style="margin-top: 45px">
<b style="font-size: 14px">U</b> - tekst znajduj�cy si� pomi�dzy tym znacznikiem jest wy�wietlany jako podkre�lony.
</p>

<p style="margin-left: 25px;">
<ul>
<li>znacznik otwieraj�cy: wymagany
<li>znacznik zamykaj�cy: wymagany
<li>atrybuty: brak
</ul>
<p class="example">
<code>
Zwyk�y tekst<br>
&lt;U&gt;Tekst podkre�lony&lt;/U&gt;</code>
</p>
</p>
{/if}
{* END: Znacznik U *}
{/strip}
