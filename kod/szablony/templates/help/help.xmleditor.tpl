{strip}
{if $show_all == "true"}
<p>
<b>KoD XMLedytor</b> jest prostym edytorem opartym na jêzyku XML s³u¿±cym do edycji ró¿nego radzaju tekstów w grze (na przyk³ad edycja opisu koalicji). U¿ywany jêzyk jest podobny to HTML'a - formatowanie tekstu parte na koncepcji tagów. Tekst zawarty pomiêdzy okre¶lonymi tagami jest odpowiednio formatowany (w zale¿no¶ci o cech tagu).
</p>
{/if}


{* BEGIN: Znacznik I *}
{if $show_b == "true" || $show_all == "true"}
Interpretowane s± nastêpuj±ce tagi:
<b>B</b> - tekst znajdj±cy siê pomiêdzy tym znacznikiem jest pogrubiony.

tag otwieraj±cy: wymagany
tag zamykaj±cy: wymagany

atrybuty: brak

przyk³ad:
<code>
Zwyk³y tekst, a tu jest <B>tekst pogrubiony</B>
</code>
{/if}
{* END: Znacznik I *}


{*
<b>BR</b> - znacznik nowej lini. Podobnie jak w HTML'u zwyczajne noe linie wstawiane za pomoc± klawisza ENTER s± ignorowane. Aby przej¶æ now± liniê nale¿y w³a¶nie u¿yæ znacznika BR

tag otwieraj±cy: wymagany
tag zamykaj±cy: nie ma

atrybuty: brak

przyk³ad:
<code>
Linia pierwsza<BR/>
Linia druga<BR/>
A to jest tekst który bedzie wy¶wietlony
w jednej linii mimo i¿ w edytorze jest on widoczny w dwóch.
</code>


<b>I</b> - tekst pomiêdzy tym znacznikiem jest pochylony.

znacznik otwieraj±cy: wymagany
znacznik zamykaj±cy: wymagany

atrybuty: brak

przyk³ad:
<code>
Tekst niepochylony
<I>Tekst pochylony</I>
</code>


<b>LINE</b> - wstawia poziom± liniê. Odpowiednik znacznika HR w HTML'u

tag otwieraj±cy: wmagany
tag zamykaj±cy: nie ma

atrybuty: brak

przyk³ad:
<code>
Tekst na poziom± lini±
<LINE/>
Tekst pod poziom± lini±
</code>


<b>TEXT</b> - podstawowe formatowanie tekstu. Bez atrybutu nie wprowadza ¿adnych zmian.

tag otwieraj±cy: wymagany
tag zamykaj±cy: wymagany

atrybuty:
STYLE - za pomoc± tego atrybutu mo¿na ustawiæ kolor i rozmiar tekstu (w pixelach). Mo¿e przyjmowaæ dwa rodzaje warto¶ci: okre¶laj±ce tylko kolor - 'color: #00FF0F' lub okre¶laj±ce kolor i rozmiar czcionki: 'color: #00FF0F; font-size: 20px'. Gdzie podane '#00FF0F' to kolor podany w formacie HEX (dok³adnie tak samo jak w HTML'u) oraz '20px' to rozmiar czcionki w pixelach.

przyk³ad:
<code>
<text style="color: #FF0000">Kolor czerwony</text>
<text style="color: #00FF00; font-size: 15px">Zielony tekst o rozmiarze 15 pixeli</text>
</code>


<b>U</b> - tekst pomiêdzy tym znacznikiem jest podkre¶lany.

znacznik otwieraj±cy: wymagany
znacznik zamykaj±cy: wymagany

atrybuty: brak

przyk³ad:
<code>
Zwyk³y napis
<U>Napis podkre¶lony</U>
</code>



</p>
{/strip}
*}
