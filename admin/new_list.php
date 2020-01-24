<?php
    include 'header.php';

    $current = !empty($_GET['page']) ? $_GET['page'] : 1;
    $limit = 6;
    $offset = ($current - 1) * $limit;
    if(isset($_GET['type']) && $_GET['type']>0){
        $count = $db->fetchone('new', 'COUNT(*)', " WHERE new_type = ".$_GET['type']." ")[0];
        // pre($count);
        $list_new = $db->fetchall('new', '*', " JOIN ly_new_type ON `new_type`=`type_id` WHERE `new_type` = ".$_GET['type']." ORDER BY new_id DESC LIMIT $offset ,$limit ");
    }else{
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
    // $page =  $current;
    if(!empty($_GET['del']) && $_GET['del'] >0){
        $del = $_GET['del'];
        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
       
        // pre($del);
        // pre($page);
        $img = $db->fetchone('new','new_img',"WHERE `new_id`= {$del} ")[0];
        // pre($img);
        if($img!=''){
            unlink($img);
        }
        // die;
        $res = $db->delete('new',"WHERE `new_id` = $del");
        if($res['code'] == 1){
            echo '<script> alert("删除成功");location.href="new_list.php?page='.$page.'" </script>';
        }else{
            echo '<script> alert("删除失败");location.href="new_list.php?page='.$page.'" </script>';
        }
    }

    // 批量
    // pre($_POST);
    // $page = $_GET['page'];
    
    if(isset($_POST['idarr']) && !empty($_POST['idarr']) ){
        // $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        $id_arr = $_POST['idarr'];
        // pre($id_arr);
        for($i=0;$i<count($id_arr);$i++){
            $img_arr[] = $db->fetchone('new','new_img',"WHERE `new_id`= ".$id_arr[$i]."")[0];
        }
        for($i=0;$i<count($id_arr);$i++){
            $res = $db->delete('new','WHERE `new_id` = '.$id_arr[$i].'');
            $res1 = unlink($img_arr[$i]);
        }
        // pre($res);
        // dump($res1);
        if($res['code'] == 1){
            echo '<script> alert("删除成功");location.href="new_list.php" </script>';
        }else{
            echo '<script> alert("删除失败");location.href="new_list.php" </script>';
        }
        // pre($img_arr);
    }



    $page = Page::getInstance($config);
    $pages = $page->showPage();
    $smarty->assign('list_new',$list_new);
    $smarty->assign('current',$current);
    $smarty->assign('pages',$pages);

    // $new_list = $db->fetchall('new');
    //  pre($new_list);
    // $smarty->assign('new_list',$new_list);
    $smarty->display('admin/new_list.tpl');