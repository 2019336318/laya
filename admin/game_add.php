<?php
include 'header.php';
$type = $db->fetchall('new_type');
// pre($type);


if (isset($_POST) && !empty($_POST)) {
    pre($_POST);
    pre($_FILES);

    $name = trim($_POST['name']);
    $desc = trim($_POST['editorValue']);
    if ($_FILES['pic1']['error'] == 0 && $_FILES['logo']['error'] == 0) {
        $up_img = upload('pic1', 'uploads/game');
        $up_logo = upload('logo', 'uploads/game/logo');
        $up_ren = upload('ren', 'uploads/game/ren');
        for($i=1;$i<=4;$i++){
            $up_loop[] = upload("img{$i}",'uploads/game/loop');
        }
    
        // pre($up_img);
        // pre($up_loop);
        for($i=0;$i<4;$i++){
            $up_loop_path[]= $up_loop[$i]['path'] ;
        }
        $up_loop_path = implode('|',$up_loop_path);
        // pre($up_loop_path);

        if ($up_img['code'] == 1 && $up_logo['code'] == 1 && $up_loop[3]['code'] == 1 &&$up_ren['code'] ==1) {
            $img = $up_img['path'];
            $logo = $up_logo['path'];
            $ren = $up_ren['path'];
            $loop =  $up_loop_path;
        }
    } else {

        echo '<script> alert("请选择图片");location.href="game_add.php" </script>';
        exit;
    }
    // pre($img);
    // pre($logo);
    // pre($ren);
    // pre($loop);
    // die;
    if ($name != '' && $desc != '') {

        $add_arr = [
            'game_name' => $name,
            'game_desc' => $desc,
            'game_time' => time(),
            'game_logo' => $logo,
            'game_img' => $img,
            'game_loop'=>$loop,
            'game_ren'=>$ren
        ];
        $res = $db->insert('game', $add_arr);
        pre($res);
        // die;
        if ($res['code'] == 1) {
            echo '<script> alert("添加成功");location.href="game_list.php?game=1" </script>';
        } else {
            echo '<script> alert("添加失败");location.href="game_add.php" </script>';
        }
    } else {
        echo '<script> alert("不能为空");location.href="game_add.php" </script>';
        exit;
    }
}
$smarty->assign('type', $type);
$smarty->display('admin/game_add.tpl');
