<?php
include 'header.php';

if (isset($_POST['job'])) {
    pre($_POST);
    $name = trim($_POST['title']);
    $o_desc = $_POST['desc'];
    $o_req = $_POST['req'];
    if (isset($o_desc) && !empty($o_desc)) {
        for ($i = 0; $i < count($o_desc) - 1; $i++) {
            if ($o_desc[$i] != '') {
                $desc[] = trim($o_desc[$i]);
            }
        }
    } else {
        echo "<script> alert('职位描述不能为空');location.href='job_add.php' </script>";
    }
    if (isset($o_req) && !empty($o_req)) {
        for ($i = 0; $i < count($o_req) - 1; $i++) {
            if ($o_req[$i] != '') {
                $req[] = trim($o_req[$i]);
            }
        }
    } else {
        echo "<script> alert('职位要求不能为空');location.href='job_add.php' </script>";
    }
    pre($desc);
    pre($req);
    // die;
    if ($name != '') {
        $desc = implode('|', $desc);
        $req = implode('|', $req);
        pre($desc);
        pre($req);
        $add_arr = [
            'job_name' => $name,
            'job_desc' => $desc,
            'job_req' => $req
        ];

        $res = $db->insert('job', $add_arr);
        // pre($res);
        // die;
        if ($res['code'] == 1) {
            echo '<script> alert("添加成功");location.href="job_list.php?type=' . $type . '" </script>';
        } else {
            echo '<script> alert("添加失败");location.href="job_add.php" </script>';
        }
    }
}


$smarty->display('admin/job_add.tpl');
