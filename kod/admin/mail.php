<?php
function admin_mail($subject, $msg)
{
	if( strlen( $subject ) > 0 && strlen( $msg ) > 0 )
	{
		$to = "";
		$header = "" ;
		$sql = "SELECT login, mail FROM PROFIL";
		$result = mysql_query( $sql ) ;

		while( $row = mysql_fetch_array( $result ) )
		{
			$to = $row['mail'] ;
			mail($to, $subject, $msg, $header );
		}	
		
		echo "Wiadomoœæ zosta³a wys³ana";
	}
}

?>