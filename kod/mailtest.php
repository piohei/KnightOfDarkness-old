<?php
    $naglowki = "Reply-to: moj@mail.pl <moj@mail.pl>".PHP_EOL;
    $naglowki .= "From: moj@mail.pl <moj@mail.pl>".PHP_EOL;
    $naglowki .= "MIME-Version: 1.0".PHP_EOL;
    $naglowki .= "Content-type: text/html; charset=iso-8859-2".PHP_EOL;
	
	$wiadomosc = '<html> 
    <head> 
      <title>Wiadomo¶æ e-mail</title> 
    </head>
    <body>
        <p><b>Tre¶æ wiadomo¶ci</b>: To jest tre¶æ wiadomo¶ci z formatowaniem HTML.</p>
    </body>
    </html>';

    if(mail('b.piwnik@gmail.com', 'Witaj', $wiadomosc, $naglowki))
    {
       echo 'Wiadomo¶æ zosta³a wys³ana';
    }
 ?>