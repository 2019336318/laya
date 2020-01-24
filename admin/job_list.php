<?php
    include 'header.php';

    $list_new = $db->fetchall('job','*','ORDER BY job_id DESC','assoc');
    for($i=0;$i<count($list_new);$i++){
        $list_new[$i]['job_desc'] = explode('|',$list_new[$i]['job_desc']);
        $list_new[$i]['job_req'] = explode('|',$list_new[$i]['job_req']);
    }
    
    // 删除
    if(!empty($_GET['del']) && $_GET['del'] >0){
        $del = $_GET['del'];
       
        // pre($del);
        // die;
        $res = $db->delete('job',"WHERE `job_id` = $del");
        if($res['code'] == 1){
            echo '<script> alert("删除成功");location.href="job_list.php" </script>';
        }else{
            echo '<script> alert("删除失败");location.href="job_list.php" </script>';
        }
    }

    if(isset($_POST['idarr']) && !empty($_POST['idarr']) ){
        // $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        $id_arr = $_POST['idarr'];
        // pre($id_arr);
        for($i=0;$i<count($id_arr);$i++){
            $res = $db->delete('job','WHERE `job_id` = '.$id_arr[$i].'');
        }
        if($res['code'] == 1){
            echo '<script> alert("删除成功");location.href="job_list.php" </script>';
        }else{
            echo '<script> alert("删除失败");location.href="job_list.php" </script>';
        }
        // pre($img_arr);
    }


    // pre($list_new);

    $smarty->assign('list_new',$list_new);

    $smarty->display('admin/job_list.tpl');

    // <li>
	// 									<p>设计并实现大数据，高并发，可扩展性的海量用户级游戏平台；</p>
	// 								</li>
	// 								<li>
	// 									<p>负责平台核心功能模块的开发，调试和整合；</p>
	// 								</li>
	// 								<li>
	// 									<p>参与制定平台业务流程，交互式平台架构。
	// 										<br>
	// 									</p>
	// 								</li>