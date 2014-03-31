/* Autor: Micha³ Kozak
 * Opis:  Zbiór funkcji do obs³ugi formularzy i akcji typu klikniecia,
 *        zaznaczenie, aktywacje itp.
 */
 
backgroundColorMem = '#FFFFFF';                     //patrz: setBackground
rexp_login = /^[a-z0-9_]{5,20}$/i;                  // w. reg. opisuj¹ce login
rexp_pass  = /^[a-z0-9_]{5,20}$/i;                  // w. reg. opisuj¹ce haslo
rexp_email = /^[^@]+@([a-z0-9_-]+\.)+[a-z]{2,4}$/i; // w. reg. opisujace e-mail


/*---------------------------------------------------------------- setBackground
  Zmienia parametr 'backgroundColor' zadanego obiektu. Z opcja
  bgColor = restore przywraca poprzednia wartosc backgroundColor, ktora
  jest pamietana w zmiennej backgroundColorMem.                               */
function setBackground(object, bgColor){
    if(document.layers) return;
    if(bgColor == 'restore'){
        object.style.backgroundColor = backgroundColorMem;
    }else{
        backgroundColorMem = object.style.backgroundColor;
        object.style.backgroundColor = bgColor;
    }
}

