<?php
include 'header.php';
$edit_id =$_GET['id'];
$new_edit=$db->fetchone('job','*',"WHERE `job_id` = {$edit_id} ",'assoc');
// $edit_type =$db-> fetchall('new_type');
// for($i=0;$i<count($new_edit);$i++){
    $new_edit['job_desc'] = explode('|',$new_edit['job_desc']);
    $new_edit['job_req'] = explode('|',$new_edit['job_req']);

// }
pre($new_edit);
// pre($edit_type);

// 修改
if(isset($_POST['job']) && !empty($_POST)){
    pre($_POST);
    $name = trim($_POST['name']);
    $desc = $_POST['desc'];
    for($i=0;$i<count($desc)-1;$i++){
       $desc[$i]= trim($desc[$i]);
    }
    $req = $_POST['req'];
    for($i=0;$i<count($req)-1;$i++){
        $req[$i]= trim($req[$i]);
     }
    if($name == ''){
        echo "<script> alert('职位名不能为空');location.href='new_edit.php?id=".$edit_id."' </script>";
    }
    // pre($desc);
    $desc = implode('|',$desc);
    $req = implode('|',$req);
    // pre($desc);
    // pre($req);
    // die;
    $up_arr=[
        'job_name'=>$name,
        'job_desc'=>$desc,
        'job_req'=>$req
      
    ];
    $res = $db->update('job',$up_arr,"WHERE job_id = {$edit_id}");
    if($res['code'] == 1){
        echo "<script> alert('修改成功');location.href='job_list.php' </script>";
    }else{
        echo "<script> alert('修改失败');location.href='job_edit.php?id=".$edit_id."' </script>";
    }
}

$smarty->assign('new_edit',$new_edit);
$smarty->display('admin/job_edit.tpl');