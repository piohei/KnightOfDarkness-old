{strip}
{if $show_all == "true"}
<p>
<b>KoD XMLedytor</b> jest prostym edytorem opartym na j�zyku XML s�u��cym do edycji r�nego radzaju tekst�w w grze (na przyk�ad edycja opisu koalicji). U�ywany j�zyk jest podobny to HTML'a - formatowanie tekstu parte na koncepcji tag�w. Tekst zawarty pomi�dzy okre�lonymi tagami jest odpowiednio formatowany (w zale�no�ci o cech tagu).
</p>
{/if}


{* BEGIN: Znacznik I *}
{if $show_b == "true" || $show_all == "true"}
Interpretowane s� nast�puj�ce tagi:
<b>B</b> - tekst znajdj�cy si� pomi�dzy tym znacznikiem jest pogrubiony.

tag otwieraj�cy: wymagany
tag zamykaj�cy: wymagany

atrybuty: brak

przyk�ad:
<code>
Zwyk�y tekst, a tu jest <B>tekst pogrubiony</B>
</code>
{/if}
{* END: Znacznik I *}


{*
<b>BR</b> - znacznik nowej lini. Podobnie jak w HTML'u zwyczajne noe linie wstawiane za pomoc� klawisza ENTER s� ignorowane. Aby przej�� now� lini� nale�y w�a�nie u�y� znacznika BR

tag otwieraj�cy: wymagany
tag zamykaj�cy: nie ma

atrybuty: brak

przyk�ad:
<code>
Linia pierwsza<BR/>
Linia druga<BR/>
A to jest tekst kt�ry bedzie wy�wietlony
w jednej linii mimo i� w edytorze jest on widoczny w dw�ch.
</code>


<b>I</b> - tekst pomi�dzy tym znacznikiem jest pochylony.

znacznik otwieraj�cy: wymagany
znacznik zamykaj�cy: wymagany

atrybuty: brak

przyk�ad:
<code>
Tekst niepochylony
<I>Tekst pochylony</I>
</code>


<b>LINE</b> - wstawia poziom� lini�. Odpowiednik znacznika HR w HTML'u

tag otwieraj�cy: wmagany
tag zamykaj�cy: nie ma

atrybuty: brak

przyk�ad:
<code>
Tekst na poziom� lini�
<LINE/>
Tekst pod poziom� lini�
</code>


<b>TEXT</b> - podstawowe formatowanie tekstu. Bez atrybutu nie wprowadza �adnych zmian.

tag otwieraj�cy: wymagany
tag zamykaj�cy: wymagany

atrybuty:
STYLE - za pomoc� tego atrybutu mo�na ustawi� kolor i rozmiar tekstu (w pixelach). Mo�e przyjmowa� dwa rodzaje warto�ci: okre�laj�ce tylko kolor - 'color: #00FF0F' lub okre�laj�ce kolor i rozmiar czcionki: 'color: #00FF0F; font-size: 20px'. Gdzie podane '#00FF0F' to kolor podany w formacie HEX (dok�adnie tak samo jak w HTML'u) oraz '20px' to rozmiar czcionki w pixelach.

przyk�ad:
<code>
<text style="color: #FF0000">Kolor czerwony</text>
<text style="color: #00FF00; font-size: 15px">Zielony tekst o rozmiarze 15 pixeli</text>
</code>


<b>U</b> - tekst pomi�dzy tym znacznikiem jest podkre�lany.

znacznik otwieraj�cy: wymagany
znacznik zamykaj�cy: wymagany

atrybuty: brak

przyk�ad:
<code>
Zwyk�y napis
<U>Napis podkre�lony</U>
</code>



</p>
{/strip}
*}
