<?php
        session_start();
        $userid=isset($_POST['username'])?$_POST['username']:"";
        $paswww=isset($_POST['password'])?$_POST['password']:"";
        echo $userid;
        if($userid == 'kishan@gmail.com'&& $paswww=="123456"){
            
            if ($_POST['remberme']) {
                setcookie('id',$userid,time()+10*60);
                setcookie('pass',$paswww,time()+10*60);    
            }
            else{
                setcookie('id',$userid,time());
                setcookie('pass',$paswww,time());
            }

            $_SESSION['id']=$userid;
            header("location:index.php");
        }
?>