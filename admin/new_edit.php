<?php
include 'header.php';
$edit_id =$_GET['id'];
$new_edit=$db->fetchone('new','*',"WHERE `new_id` = {$edit_id} ");
$edit_type =$db-> fetchall('new_type');
// pre($new_edit);
// pre($edit_type);

// 修改
if(isset($_POST) && !empty($_POST)){
    pre($_POST);
    pre($_FILES);
    if($_FILES['pic1']['error']==0){
        
        $new_img = upload('pic1','uploads/news');
        unlink($new_edit['new_img']);
        $img = $new_img['path'];
    }else{
        $img = $new_edit['new_img'];
    }
    // pre($img);
    $tit = trim($_POST['title']);
    $con = trim($_POST['editorValue']);
    $type = trim($_POST['type']);
    $author = trim($_POST['author']);
    // $type = trim($_POST['type']);
    if($tit==''){
        echo "<script> alert('标题不能为空');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
    if($author==''){
        echo "<script> alert('作者不能为空');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
    if($con==''){
        echo "<script> alert('内容不能为空');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
    $up_arr=[
        'new_tit'=>$tit,
        'new_con'=>$con,
        'new_time'=>time(),
        'new_author'=>$author,
        'new_type'=>$type,
        'new_img'=>$img
    ];
    $res = $db->update('new',$up_arr,"WHERE new_id = {$edit_id}");
    if($res['code'] == 1){
        echo "<script> alert('修改成功');location.href='new_list.php' </script>";
    }else{
        echo "<script> alert('修改失败');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
}

$smarty->assign('new_edit',$new_edit);
$smarty->assign('edit_type',$edit_type);
$smarty->display('admin/new_edit.tpl');