<?php

if($_GET['action'] == 'search'){
    $list = user_search($_POST['keyword']);
    $smarty->assign('user_list', $list);
    $smarty->assign('record_count', count($list));
}

if(isset($_GET['user'])){
    $display = 'panel.constraint.manager.details.tpl';

    require_once("{$CFG->katalogStrony}lib/class.User.php");
    $user = new User($_GET['user']);
    $cur_constr = $user->getConstraint(true, false);

    // zapis danych
    if($_GET['action'] == 'save'){

        $constr_values = &$_POST['value'];
        $constr_validity = &$_POST['validity'];
        $eternity_checkbox = &$_POST['eternity_checkbox'];

        $constr_to_save = array();
        foreach($constr_values as $constr => $value){
            $value = (int)$value;
            if($value < 0 || $value > 255) continue;

            if(!$eternity_checkbox[$constr]){
                $constr_validity[$constr] = trim($constr_validity[$constr]);
                if(empty($constr_validity[$constr])){
                    // ustawienie ograniczenia domy¶lnego (kasowanie obecnego)
                    $constr_to_save[$constr] = array(
                        'value' => 0,
                        'validity' => 0);

                }elseif(preg_match('/^\d{4}-\d{2}-\d{2}(\s\d{2}:\d{2}:\d{2})?$/', $constr_validity[$constr])){
                    // ustawienie daty wa¿no¶ci
                    $validity = strtotime($constr_validity[$constr]);
                    if($cur_constr[$constr]['value'] != $value || $cur_constr[$constr]['validity'] != $validity){
                        $constr_to_save[$constr] = array(
                            'value' => $value,
                            'validity' => $validity);
                    }

                }else{
                    // niepoprawna data wa¿no¶ci
                    $msg = "Poprawny format daty ([] - opcjonalne): YYYY-MM-DD [hh:mm:ss]";
                    break;

                }
            }elseif($cur_constr[$constr]['value'] != $value || !is_null($cur_constr[$constr]['validity'])){
                $constr_to_save[$constr] = array(
                    'value' => $value,
                    'validity' => NULL);
            }
        }

        if(empty($msg)){
            if($user->setConstraint($constr_to_save)){
                $msg = "Dane zapisano poprawnie";
                $cur_constr = $user->getConstraint(true, false);

                // ustawienie pliku-flagi wymuszaj±cego prze³adowanie bufora ograniczeñ
                // nawet zalogowanego u¿ytkownika
                if($f = @fopen('tmp/constraint_buffer_reload_'.$user->getName(), 'w')){
                    @fclose($f);
                    @chmod('tmp/constraint_buffer_reload_'.$user->getName(), 0666);
                }
            }else{
                $msg = "Wyst±pi³y b³êdy podczas zapisu";
            }
        }
        $smarty->assign('msg', $msg);
    }

    $smarty->assign('username', $user->getName());
    $smarty->assign('constraint', $cur_constr);
}
?>
