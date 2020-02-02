<?php
include 'header.php';
// $edit_id =$_GET['id'];
$new_edit=$db->fetchone('conf','*',"WHERE `conf_id` = 1 ");

// pre($new_edit);
// pre($edit_type);

// 修改
if(isset($_POST) && !empty($_POST)){
    pre($_POST);
    pre($_FILES);
    // die;
    if($_FILES['email']['error']==0 && $_FILES['qq']['error']==0 && $_FILES['wechat']['error']==0){
        
        $new_email = upload('email','uploads/conf');
        unlink($new_edit['conf_email']);
        $email = $new_email['path'];

        $new_qq = upload('qq','uploads/conf');
        unlink($new_edit['conf_qq']);
        $qq = $new_qq['path'];

        $new_wechat = upload('wechat','uploads/conf');
        unlink($new_edit['conf_wechat']);
        $wechat = $new_wechat['path'];

    }else{
        $email = $new_edit['conf_email'];
        $qq = $new_edit['conf_qq'];
        $wechat = $new_edit['conf_wechat'];
    }
    // pre($img);
    $copy = trim($_POST['copy']);
    $beian = trim($_POST['beian']);

    // $type = trim($_POST['type']);
    if($copy==''){
        echo "<script> alert('版权不能为空');location.href='conf_edit.php?id=".$edit_id."' </script>";
    }
    if($beian==''){
        echo "<script> alert('备案不能为空');location.href='conf_edit.php?id=".$edit_id."' </script>";
    }
    $up_arr=[
        'conf_copy'=>$copy,
        'conf_savecase'=>$beian,
        'conf_email'=>$email,
        'conf_qq'=>$qq,
        'conf_wechat'=>$wechat
    ];
    $res = $db->update('conf',$up_arr,"WHERE conf_id = 1 ");
    // pre($res);
    // die;
    if($res['code'] == 1){
        echo "<script> alert('修改成功');location.href='conf_list.php' </script>";
    }else{
        echo "<script> alert('修改失败');location.href='conf_edit.php' </script>";
    }
}

$smarty->assign('new_edit',$new_edit);;
$smarty->display('admin/conf_edit.tpl');