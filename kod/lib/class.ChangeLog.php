<?php

class ChangeLog {

	private function _make(){
	  $this->_addChange('2011-04-13','Zwi�kszenie pojemno�ci karczmy z 40 do 60 wiadomo�ci');
	  $this->_addChange('2011-04-13','Zwi�kszenie pojemno�ci skrzynki wiadomo�ci z 20 do 40');
	  $this->_addChange('2011-04-13','Zmniejszenie z 14dni do 10dni odst�pu mi�dzy zast�pstwami ');
		
		
	  $this->_addChange('2011-04-10','Naprawiony b��d z trenowaniem szpieg�w');
	  $this->_addChange('2011-04-10','Poprawione kilka liter�wek');
	  $this->_addChange('2011-04-10','Naprawiony b��d przy rejestracji');
	  $this->_addChange('2011-04-10','Wprowadzenie mo�liwo�ci u�ywania polskich znak�w oraz spacji w nazwie koalicji');
		
	  $this->_addChange('2011-03-15','Naprawiony b��d z wy�wietlaniem post�pu budowy zamk�w');
	  $this->_addChange('2011-03-15','Naprawiony b��d z wysy�aniem wiadomo�ci do siebie');
	  $this->_addChange('2011-03-15','Naprawiony b��d z usuwaniem przez cesarza raport�w udost�pnionych');
	  
	  $this->_addChange('2010-12-23','Dodana mo�liwo�c PM, ataku i dodania do ksi�gi znajomych z zak��dki info o ksi�stwie');
	
	  $this->_addChange('2010-11-07','Poprawiona godzina');
	  $this->_addChange('2010-11-07','Poprawiony b��d z targiem');

	  $this->_addChange('2010-11-05','Poprawione g�rne menu dla Mozilli');
	  $this->_addChange('2010-11-05','Naprawiony b��d z rynkiem');
	  
	  $this->_addChange('2010-11-02','Dodawanie wtyczki facebooka na stron� g��wn�');	
		
	  $this->_addChange('2010-10-29','Poprawione polskie litery we wszystkich zak�adkach');
	  $this->_addChange('2010-10-29','Dodawanie tur o parzystych godzinach');
	
	  $this->_addChange('2010-08-05','Poprawione wy�wietlanie nick�w w SB');
	  $this->_addChange('2010-08-05','Dodanie zak�adki "forum" kosztem zak�adki "ksi�ga znajomych"');
	  $this->_addChange('2010-08-05','Dodawanie tur o nieparzystych godzinach');
	
	  $this->_addChange('2010-04-19','Bonusy w zakladce ksiestwo !');
	  $this->_addChange('2010-04-19','Zmniejszenie minimalnego morale przy propagandzie do -20');
	  $this->_addChange('2010-04-19','Skrocenie czasu do pojawienia sie aukcji na targu');

	  $this->_addChange('2010-04-18','Na stronie glownej pokzauje sie najbardziej rozbudowany budynek koncowy z linkiem do wyslania ataku');
	  $this->_addChange('2010-04-06','Zmiana pojemnosci zamkow, teraz jest opisana przez funckje e');

	  $this->_addChange('2010-03-11','Skrocony okres ochronny dla nowych kont starych graczy zakladanych w trakcie trwania ery, oznacza to ze okres ochronny dla tych ksiestw pozostanie nie zmieniony');
	  $this->_addChange('2010-03-06','Poprawienie rankingu wojownikow, teraz liczy sie obrona i atak');
	  
	  $this->_addChange('2010-01-04','Zwi�kszenie pojemno�ci gildi szpieg�w');
	  
	  $this->_addChange('2009-11-15','Poprawione bledy z atakami');
	    
		$this->_addChange('2009-10-17',' Zmienila sie pojemnosc zamkow');
		$this->_addChange('2009-10-17',' Zwiekszyla sie obrona piechoty, teraz 14');
		$this->_addChange('2009-10-17',' Zwiekszyl sie bonus do obrony z zamku');
		$this->_addChange('2009-10-17',' Zmniejszylo sie morale przy ktorym wybucha bunt, teraz to -50');
		$this->_addChange('2009-10-17',' Poprawiony blad z mnozeniem sie armii');
		$this->_addChange('2009-10-17',' Poprawiony blad z mnozeniem sie surowc�w');
		$this->_addChange('2009-10-17',' Honorowe tytuly dla graczy, podstawowy to szlachcic');
		
		$this->_addChange('2009-09-22','Atak koalicyjny zostal zablokowany');
	
		$this->_addChange('2009-08-27','Bezpiecze�stwo wlicza sie do wzrou na obrone przed szpiegami.');
		$this->_addChange('2009-08-27','Nowe typy bs dla szpieg�w, zwi�kszaj�ce kradzi� i mordowanie ludzi');
		
		$this->_addChange('2009-08-23','Zwi�kszenie podatk�w');
		$this->_addChange('2009-08-23','Raporty od szpieg�w losowo daj� informacje');
		$this->_addChange('2009-08-23','Zamki zajmuj� ziemie');
		$this->_addChange('2009-08-23','Wy�wietlanie typu wys�anego ataku');
		
		$this->_addChange('2009-08-19','Nowy atak szpiegami \"propaganda\"');		
		$this->_addChange('2009-08-19','Nowy atak \"Obl�enie\"');
		$this->_addChange('2009-08-19','Nowy budynek \"zamek\"');		
		$this->_addChange('2009-08-19','Nowe wartosci �adwono�ci tragarzy');
		$this->_addChange('2009-08-19','Poprawiony b��d ze spisem budynk�w specjalnych');
		$this->_addChange('2009-08-19','Zmniejszony koszt Budynku Ko�cowego do 100M PB');
						
		$this->_addChange('2009-08-12','Przekazywanie raportow w koalicji');
		$this->_addChange('2009-08-12','Okres ochronny zalezny od ilosci ziemi');
		$this->_addChange('2009-08-12','Kosciol powroci :)');
		$this->_addChange('2009-08-12','Zaleznosc ilosci wojska od ziemi, wartosc moze jeszcze ulec zmianie');
		$this->_addChange('2009-08-12','Nowy modul dla mh');
		$this->_addChange('2009-08-12','Nowy ranking, tak zeby wojownicy tez mogli sie poscigac.');
		$this->_addChange('2009-08-04','poprawiona informacja o BK w pomocy');
		$this->_addChange('2009-07-12','poprawione sortowanie aukcji na rynku, teraz pojawiaja sie najnowsze i najtansze aukcjie');

		$this->_addChange('2009-07-04','okres ochronny zostal zwiekszony do 14 dni');
		$this->_addChange('2009-07-04','zlapani szpiedzy moga byc torturowani');
		$this->_addChange('2009-07-04','zostaly zwiekszone koszty budynku koncowego');
		$this->_addChange('2009-07-04','zwiekszone maksymalne zniszczenie jednym atakiem na BK');
		$this->_addChange('2009-07-04','zmniejszenie koszt�w budynk�w gospodarczych');
		$this->_addChange('2009-07-04','zwiekszona minimalna ilosc zlota');
		$this->_addChange('2009-07-04','zwi�kszona cena minimalna i maksymalna na targu');
	
		$this->_addChange('2009-07-03','opis nowych bs pojawi sie na forum');
		$this->_addChange('2009-07-03','zwi�kszenie pojemno�ci wie� do 15 �ucznik�w');
		$this->_addChange('2009-07-02','dodatkowe poziomy do niekt�rych BS');
		$this->_addChange('2009-07-02','zmienione ceny i bonusy Budynk�w Specjalnych');
		$this->_addChange('2009-07-01','nowy serwer');
		$this->_addChange('2009-03-15','przy rozwi�zywaniu koalicji oraz przy zmianie cesarza wszystkie zaproszenia s� kasowane');
		$this->_addChange('2009-03-15','w zak�adce zarz�dzanie koalicj� jest mo�liwo�� przejrzenia hostorii zaprosze� i manipulacji tymi zaproszeniami (dost�pne tylko dla cesarza)(dodane przez bogwiedz)');
		$this->_addChange('2009-03-08','usuni�cie limit�w na rekrutacj� szpieg�w, czyli mo�na rekrutowa� dowoln� liczb� szpieg�w niezale�nie od ilo�ci miejsc w gildiiach (oczywi�cie je�li przy wykonaniu tury w ksi�stwie b�dzie wi�cej szpieg�w ni� miejsc w gidiach to nadmiar szpieg�w odejdzie)');
		$this->_addChange('2009-03-01','poprawienie ataku koalicyjnego');
		$this->_addChange('2009-03-01','w szczeg�ach ataku koalicyjnego cesarz mo�e ogl�da� ilo�ci wysy�anych na niego wojsk z poszczeg�lnych ksi�stw');
		$this->_addChange('2009-03-01','dodatkowy raport podsumowuj�cy atak koalicyjny - tylko dla cesarza');
		$this->_addChange('2009-03-01','skr�cenie czasu trwania ataku koalicyjnego o 4 tury (maksymalnie mo�e on trwa� 12 tur, z BSami cesarza 7)');
	}

	private static $singleton = null;

	/**
	 * Zwraca singleton
	 * @access public static
	 * @return class ChangeLog singleton
	 */
	static function getChangeLog(){
		if (! isset(ChangeLog::$singleton)){
			ChangeLog::$singleton = new ChangeLog();
		}
		return ChangeLog::$singleton;
	}


	var $changes = array();

	private function ChangeLog(){
		$this->_make();
		krsort($this->changes,SORT_STRING);
	}

	private function _addChange($date,$message){
		$d = array();
		$d['date'] = $date;
		$d['message'] = $message;
		$this->changes[$date][] = $d;
	}

	public function getChanges(){
		return $this->changes;
	}

	public function getLastChangeDate(){
		$keys = array_keys($this->changes);
		return $keys[0];
	}

	public function markLastChange(){
		$date = $this->getLastChangeDate();
		if (strtotime($date) > strtotime("now")-4*24*3600){
			return true;
		}
		return false;
	}

}





?>
