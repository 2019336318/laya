<?php
include 'header.php';
$edit_id =$_GET['id'];
$new_edit=$db->fetchone('friend','*',"WHERE `friend_id` = {$edit_id} ");

// pre($new_edit);
// pre($edit_type);

// 修改
if(isset($_POST) && !empty($_POST)){
    pre($_POST);
    pre($_FILES);
    // die;
    if($_FILES['pic1']['error']==0){
        
        $new_img = upload('pic1','uploads/friend');
        unlink($new_edit['friend_img']);
        $img = $new_img['path'];
    }else{
        $img = $new_edit['friend_img'];
    }
    // pre($img);
    
    $name = trim($_POST['title']);

    // $type = trim($_POST['type']);
    if($name==''){
        echo "<script> alert('名字不能为空');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
    $up_arr=[
        'friend_name'=>$name,
        'friend_img'=>$img
    ];
    $res = $db->update('friend',$up_arr,"WHERE friend_id = {$edit_id}");
    if($res['code'] == 1){
        echo "<script> alert('修改成功');location.href='friend_list.php' </script>";
    }else{
        echo "<script> alert('修改失败');location.href='friend_edit.php?id=".$edit_id."' </script>";
    }
}

$smarty->assign('new_edit',$new_edit);;
$smarty->display('admin/friend_edit.tpl');