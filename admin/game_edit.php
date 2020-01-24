<?php
include 'header.php';
$edit_id = $_GET['id'];
$new_edit = $db->fetchone('game', '*', "WHERE `game_id` = {$edit_id} ");
// $edit_type =$db-> fetchall('new_type');
// pre($new_edit);
$loop = explode('|', $new_edit['game_loop']);
// pre($loop);

// 修改
if (isset($_POST) && !empty($_POST)) {
    pre($_POST);
    pre($_FILES);
    if ($_FILES['pic1']['error'] == 0) {

        $new_img = upload('pic1', 'uploads/game');
        unlink($new_edit['game_img']);
        $img = $new_img['path'];
    } else {
        $img = $new_edit['game_img'];
    }

    if ($_FILES['logo']['error'] == 0) {

        $new_logo = upload('logo', 'uploads/game/logo');
        unlink($new_edit['game_logo']);
        $logo = $new_logo['path'];
    } else {

        $logo = $new_edit['game_logo'];
    }

    
    if ($_FILES['ren']['error'] == 0) {

        $new_ren = upload('ren', 'uploads/game/ren');
        unlink($new_edit['game_ren']);
        $ren = $new_ren['path'];
    } else {

        $ren = $new_edit['game_ren'];
    }

    $up_loop_path = explode('|', $new_edit['game_loop']);
    for ($i = 1; $i <= 4; $i++) {
        $up_loop[] = upload("img{$i}", 'uploads/game/loop');
       
    }

    for($i=0;$i<4;$i++){
        if (isset($up_loop[$i]['path'])) {
            // pre('11111');
            unlink($up_loop_path[$i]);
            $up_loop_path[$i] =  $up_loop[$i]['path'];
        }
    }
    pre($up_loop_path);

    $up_loop_path = implode('|',$up_loop_path);
    pre($up_loop);
    pre($up_loop_path);

pre($ren);
    pre($img);
    pre($logo);
    // die;
    $name = trim($_POST['name']);
    $desc = trim($_POST['editorValue']);
    // $type = trim($_POST['type']);
    if ($name == '') {
        echo "<script> alert('标题不能为空');location.href='new_edit.php?id=" . $edit_id . "' </script>";
    }
    if ($desc == '') {
        echo "<script> alert('内容不能为空');location.href='new_edit.php?id=" . $edit_id . "' </script>";
    }
    $up_arr = [
        'game_name' => $name,
        'game_desc' => $desc,
        'game_time' => time(),
        'game_logo' => $logo,
        'game_img' => $img,
        'game_loop'=>$up_loop_path,
        'game_ren'=>$ren
    ];
    $res = $db->update('game', $up_arr, "WHERE game_id = {$edit_id}");
    // die;
    if ($res['code'] == 1) {
        echo "<script> alert('修改成功');location.href='game_list.php?game=1' </script>";
    } else {
        echo "<script> alert('修改失败');location.href='game_edit.php?id=" . $edit_id . "' </script>";
    }
}

$smarty->assign('new_edit', $new_edit);
$smarty->assign('loop', $loop);
// $smarty->assign('edit_type',$edit_type);
$smarty->display('admin/game_edit.tpl');
