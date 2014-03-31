<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../login/lib.php');
require_once('../funkcje_infoOKsiestwie.php');
require_once('../lib/class.User.php');
 
otworz_polaczenie();
$login = czyZalogowany();
if(czyAdmin() != 1){
    header('Location: ../zalogowany.php');
    exit(0);
}

function change_time( $time )
{
  $new = strtotime( $time ) ;
  $old = time() ;

  $diff = $new - $old ;
  if( is_int( $diff ) )
    {
      $sql = "INSERT INTO Const (name, value ) VALUES ('time_diff', $diff ) ";
      mysql_query( $sql );
    }
}

?>