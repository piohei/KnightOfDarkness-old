<?php


// pobieranie statystyki kod�w sms
$smarty->assign('sms_stat', SmsCode::stat());


// dodawanie nowych kod�w sms
if(isset($_POST['new_codes_add'])){

    $value = $_POST['new_codes_value'];
    $service_code = (string)$_POST['service_code'];

    if(settype($value, 'integer') && $value > 0 && $value < 255 && !empty($service_code)){

        // czytanie i sprawdzanie kod�w
        $codes = $_POST['new_codes'];
        if(!empty($codes)){
            $codes = str_replace("\r\n", "\n", $codes); // Win
            $codes = str_replace("\r", "\n", $codes);  // Mac OS
            $codes_array = explode("\n", $codes);
            foreach($codes_array as $code){
                if(strlen($code) != 8){
                    $invalid_codes[] = $code;
                }
            }

            if(empty($invalid_codes)){
                if(SmsCode::load($service_code, $codes_array, $_POST['new_codes_value'])){
                    $mesg = "Wszystko ok.";

                    $_MESSAGE[] = array(
                        'type'  => 'INFO',
                        'text'  => $mesg
                    );
                }else{
                    $mesg = "Co� nie tak...";

                    $_MESSAGE[] = array(
                        'type'  => 'ERROR',
                        'text'  => $mesg
                    );
                }
            }else{
                $mesg = "Wykryto niepoprawne kody (nie maj�ce d�ugo�ci 8 znak�w)".
                    " (nic nie zosta�o zapisane do bazy danych).<br>".
                    "Odrzucone kody:<br>".
                    "<textarea>";
                foreach($invalid_codes as $invalid_code)
                    $mesg .= "$invalid_code\n";
                $mesg .= "</textarea>";

                $_MESSAGE[] = array(
                    'type'  => 'ERROR',
                    'text'  => $mesg
                );
            }
        }else{

            $mesg = "Nie ma �adnych kod�w SMS do dodania";

            $_MESSAGE[] = array(
                'type'  => 'INFO',
                'text'  => $mesg
            );
        }
    }else{
        $mesg = "Niepoprawna warto�� kod�w!<br>".
            "Warto�� musi by� liczb� z przedzia�u (0,255]. Lub z�y kod us�ugi.";

        $_MESSAGE[] = array(
            'type'  => 'ERROR',
            'text'  => $mesg
        );
    }
}
?>