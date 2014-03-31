<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../login/lib.php');
require_once('../funkcje_infoOKsiestwie.php');
require_once('../lib/class.User.php');
require_once('reser.php');
require_once('time.php');
require_once('mail.php');

otworz_polaczenie();
$login = czyZalogowany();
if(czyAdmin() != 1){
    header('Location: ../zalogowany.php');
    exit(0);
}

switch($_GET['action'])
{
	case "mail" :
		$smarty->assign('main_panel', 'admin/admin_mail.tpl');
		
		break;
		
 case "task" :
   $smarty->assign('main_panel','admin/admin_task.tpl');
   $sql = "SELECT * FROM task_log ORDER BY date DESC LIMIT 50";
   $result = mysql_query($sql);
   while($row = mysql_fetch_array($result, MYSQL_NUM))
     {
       $arr[$row[0]] = array ('task' => $row[1], 'date' => $row[2], 'ip' => $row[3]);
     }
   $smarty->assign('task_arr',$arr);
   break;
	 
 case "del" :
   if(isset($_GET['remove']) && strlen($_GET['date']) < 1)
     {
       $sql = "SELECT login,data_zalozenia,ostatni_log FROM PROFIL where ostatni_log < '{$_GET[remove]}' ORDER BY ostatni_log DESC ";
       $res = mysql_query($sql);
       while($row = mysql_fetch_array($res, MYSQL_ASSOC))
	 {
	   $user = new User($row['login']);
	   $user->remove();
	 }
       
     }
   if(isset($_GET['date']))
     {
       $smarty->assign('date',$_GET['date']);
       $sql = "SELECT login,data_zalozenia,ostatni_log FROM PROFIL where ostatni_log < '{$_GET[date]}' ORDER BY ostatni_log DESC ";
       $res = mysql_query($sql);
       $i = 0;
       while($row = mysql_fetch_array($res, MYSQL_ASSOC))
	 {
	   $acc[$i] = array("login" => $row["login"], "date" => $row["data_zalozenia"], "last" => $row["ostatni_log"]);
	   ++$i;
	 }
       $smarty->assign('acc',$acc);
     }
   else
     $smarty->assign('acc',array());
   
   $smarty->assign('main_panel','admin/admin_del.tpl');
   break;
 }
if(isset($_GET['reset']))
  {
    $smarty->assign('main_panel', 'admin/admin_main.tpl');
    if($_GET['reset'] == '?')
      $smarty->assign('reset_ask',true);
  }
if($_GET['time'] == 'form')
  {
    $smarty->assign('main_panel', 'admin/admin_time.tpl') ;
  }
 if( isset($_POST['mail_send']) )
 {
	admin_mail( $_POST['subject'], $_POST['msg'] ) ;
 }
else if($_POST['reset'] == 'tak')
  {
    $smarty->assign('main_panel', 'admin/admin_main.tpl');
			$result = era_reset();
			if($result)
				$smarty->assign('reset',true);
		}
 else if($_POST['time'] = "ustaw")
   {
     change_time($_POST['new_time']) ;
   }

zamknij_polaczenie();
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');
$smarty->assign('left_panel', 'admin/admin_left_panel.tpl');

$smarty->display('main.tpl');
?>