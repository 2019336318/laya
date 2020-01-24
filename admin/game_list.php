 <?php
    include 'header.php';

    $current = !empty($_GET['page']) ? $_GET['page'] : 1;
    $limit = 6;
    $offset = ($current - 1) * $limit;
    if (isset($_GET['game']) && $_GET['game'] > 0) {
        $count = $db->fetchone('game', 'COUNT(*)')[0];
        pre($count);
        $list_new = $db->fetchall('game', '*', "ORDER BY game_id DESC LIMIT $offset ,$limit ");
    } else {
        $count = $db->fetchone('new', 'COUNT(*)')[0];
        // pre($count);
        $list_new = $db->fetchall('new', '*', " JOIN ly_new_type ON `new_type`=`type_id` ORDER BY new_id DESC LIMIT $offset ,$limit");
    }

    // pre($list_new);
    $config = [
        'current' => $current,
        'count' => $count,
        'limit' => $limit,
        'size' => 4,
        'class' => 'pagination'
    ];

    // 删除

    if (!empty($_GET['del']) && $_GET['del'] > 0) {
        $del = $_GET['del'];
        $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        // pre($del);
        // pre($page);
        $img = $db->fetchone('game', 'game_img', "WHERE `game_id`= {$del} ")[0];
        $logo = $db->fetchone('game', 'game_logo', "WHERE `game_id`= {$del} ")[0];
        $ren = $db->fetchone('game', 'game_ren', "WHERE `game_id`= {$del} ")[0];
        $loop = $db->fetchone('game', 'game_loop', "WHERE `game_id`= {$del} ")[0];
        // pre($img);
        $loop=explode('|',$loop);
        // pre($loop);
        // die;
        if ($img != '' && $logo != '' && $loop != '' &&$ren!='') {
            unlink($img);
            unlink($logo);
            unlink($ren);
            for($i=0;$i<count($loop);$i++){
                unlink($loop[$i]);
            }
        }
        // die;
        $res = $db->delete('game', "WHERE `game_id` = $del");
        if ($res['code'] == 1) {
            echo '<script> alert("删除成功");location.href="game_list.php?game=1&page=' . $page . '" </script>';
        } else {
            echo '<script> alert("删除失败");location.href="game_list.php?game=1&page=' . $page . '" </script>';
        }
    }
    // 批量
    if (isset($_POST['idarr']) && !empty($_POST['idarr'])) {
        // $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        $id_arr = $_POST['idarr'];
        // pre($id_arr);
        for ($i = 0; $i < count($id_arr); $i++) {
            $img_arr[] = $db->fetchone('game', 'game_img', "WHERE `game_id`= " . $id_arr[$i] . "")[0];
            $logo_arr[] = $db->fetchone('game', 'game_logo', "WHERE `game_id`= " . $id_arr[$i] . "")[0];
            $loop_info[] = $db->fetchone('game', 'game_loop', "WHERE `game_id`= " . $id_arr[$i] . "")[0];
            $ren_arr[] = $db->fetchone('game', 'game_ren', "WHERE `game_id`= " . $id_arr[$i] . "")[0];
        }

        // 删除四张详情图
        for($i=0;$i<count($loop_info);$i++){
            $loop_arr[] = explode('|',$loop_info[$i]);
            for($j=0;$j<4;$j++){
                unlink($loop_arr[$i][$j]);
            }
        }
        // pre($loop_arr);
        // die;
        
        // 删除人物,logo,封面
        for ($i = 0; $i < count($id_arr); $i++) {
            $res = $db->delete('game', 'WHERE `game_id` = ' . $id_arr[$i] . '');
            $res1 = unlink($img_arr[$i]);
            $res2 = unlink($logo_arr[$i]);
            $res3 = unlink($ren_arr[$i]);
        }
        // pre($logo_arr);
        // pre($img_arr);
        // die;
        // pre($res);
        // dump($res1);
        if ($res['code'] == 1) {
            echo '<script> alert("删除成功");location.href="game_list.php?game=1" </script>';
        } else {
            echo '<script> alert("删除失败");location.href="game_list.php?game=1" </script>';
        }
        // pre($img_arr);
    }


    $page = Page::getInstance($config);
    $pages = $page->showPage();
    $smarty->assign('list_new', $list_new);
    $smarty->assign('current', $current);
    $smarty->assign('pages', $pages);
    $smarty->display('admin/game_list.tpl');
