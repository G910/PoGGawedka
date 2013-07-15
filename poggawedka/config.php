<?
#### SEKCJA IDENTYFIKACJI APLIKACJI
$APP_ID_NAME="";
$APP_VERSION="";
$APP_COPY_OWNER=""; //wpisujemy sw�j nick lub nazw� strony www w jakiej dzia�a czat

#### SEKCJA DLA XMPP
/* XMPP jest protoko�em przesy�ania wiadomo�ci w czasie rzeczywistym. U�ywany jest w komunikatorach takich jak AQQ, Google Talk, Tlen czy Facebook Chat i NKTalk. Skonfigurowanie konta XMPP pozwoli Ci na otrzymywanie raport�w (komenda !raportuj) r�wnie� w tej sieci, np. bezpo�rednio na facebooka lub na telefon z systemem Android (ka�dy taki telefon posiada wbudowany dzia�aj�cy w tle komunikator Google TALK). List� identyfikator�w nale�y poda� w tabeli `settings` w rekordzie `reports_xmpp` (ka�dy identyfikator oddzielony przecinkiem).*/
$xmpp_config['host']='jid.pl'; //nazwa hosta
$xmpp_config['server']=null; //adres serwera, podawa� je�li inny ni� host, je�li taki sam to ustawiamy null
$xmpp_config['port']='5222'; //port serwera
$xmpp_config['username']=''; // nazwa u�ytkownika
$xmpp_config['password']=''; //has�o



$url_prefix = "http://xn--2da.tk/m/";//wpisujemy url b�d�cy prefiksem innych urli wysy�anych na czacie. Je�li user wy�le na czat link np. http://gg.pl/ to to co jest w tej zmiennej zostanie doklejone przed tym adresem, np: http://czat.com/r/http://gg.pl . je�li zmienna b�dzie pusta, to nic do link�w nie b�dzie doklejane. Stosowane w momencie gdy chcemy usera przekierowa� przez jaki� anonimizer albo stron� wy�wietlaj�c� ostrze�enie/reklamy itp. Ustaw warto�� na NULL je�li nie chcesz korzysta� z tej opcji.


#### SEKCJA KONFIGURACJI BOTAPI
$bot_id=0; //numer bota
$bot_login=""; // login bota
$bot_password=""; //has�o bota
?>