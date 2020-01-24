<?php
include 'header.php';
$type = $db->fetchall('new_type');
// pre($type);


if (isset($_POST) && !empty($_POST)) {
    // pre($_POST);
    // pre($_FILES);
    
    $tit = trim($_POST['title']);
    $type = trim($_POST['type']);
    $author = trim($_POST['author']);
    $con = trim($_POST['editorValue']);
    if ($_FILES['pic1']['error']==0){
        $up_img = upload('pic1','uploads/news');
        // pre($up_img);
        if($up_img['code']==1){
            $img = $up_img['path'];
        }
    }

    if($tit!='' && $type !='' && $author!= '' && $con!='' ){

        $add_arr = [
            'new_tit'=>$tit,
            'new_con'=>$con,
            'new_time'=>time(),
            'new_author' => $author,
            'new_type' =>$type,
            'new_img' =>$img
        ];
        $res = $db->insert('new',$add_arr);
        // pre($res);
    // die;
    if($res['code']==1){
            echo '<script> alert("添加成功");location.href="new_list.php?type='.$type.'" </script>';
        }else{
            echo '<script> alert("添加失败");location.href="new_add.php" </script>';
        }

    }else{
        echo '<script> alert("不能为空");location.href="new_add.php" </script>';
        exit;
    }

    

}
$smarty->assign('type', $type);
$smarty->display('admin/new_add.tpl');
