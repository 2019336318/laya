<?php
function pre($arr)
{
    echo '<pre style="width:70%;margin:0 auto;">';
    print_r($arr);
    echo '</pre>';
}

function dump($arr)
{
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
}

function upload($name, $file_dir = 'uploads')
{

    $up_info = [];

    if ($_FILES[$name]['error'] > 0) {
        switch ($_FILES[$name]['error']) {
            case 1:
                return "文件大小超出upload_max_filesize指令指定的值";
                break;
            case 2:
                return "文件大小超出MAX_FILE_SIZE指令（可能嵌入在HTML表单中）指定的值";
                break;
            case 3:
                return "文件没有完全上传，则返回3;";
                break;
            case 4:
                return "没有指定上传的文件就提交表单，则返回4";
                break;

            default:
                return "未知错误";
        }
    }

    $uploads = $file_dir;
    if (!is_dir($uploads)) {
        mkdir($uploads, 0755, TRUE);
    }
    // pre($uploads);
    // $filename = $_FILES[$name]['name'];
    $type = $_FILES[$name]['type'];
    // pre($type);
    $suffix = substr($type, strrpos($type, '/') + 1);
    // pre($suffix);

    $allows = array('jpeg', 'jpg', 'png', 'gif');

    if (!in_array($suffix, $allows)) {
        return "不允许上传{$suffix}";
    }

    $new_name = date("YmdHis") . mt_rand(100, 999) . '.' . $suffix;
    // pre($new_name);

    $path = $uploads . '/' . $new_name;
    // pre($_FILES[$name]);
    // pre($_FILES[$name]['tmp_name']);
    // pre($path);
    if (move_uploaded_file($_FILES[$name]['tmp_name'], $path)) {
        $up_info['path'] = $path;
        $up_info['code'] = 1;
        $up_info['msg'] = '上传成功';
        $up_info['filename'] = $new_name;
        return $up_info;
        // }
    } else {
        $up_info['code'] = 0;
        $up_info['msg'] = '上传失败';
        return $up_info;
    }
}
// function select_all($table, $ele = '*', $con = '')
// {
//     global $conn;
//     $sql = "SELECT {$ele} FROM  ".TA."{$table} {$con}";
//     // pre($sql);
//     $info = mysqli_query($conn, $sql);
//     while ($res = mysqli_fetch_array($info)) {
//         $res_arr[] = $res;
//     }
//     if (isset($res_arr)) {
//         return $res_arr;
//     } else {
//         return '无记录';
//     }
// }

// function select_one($table, $ele = '*', $con = '')
// {
//     global $conn;
//     $sql = "SELECT  {$ele}  FROM  " . TA . "{$table} {$con}";
//     // pre($sql);
//     $info = mysqli_query($conn, $sql);
//     return  mysqli_fetch_array($info);
// }
// function delete($table, $con)
// {
//     global $conn;
//     $sql =  "DELETE FROM " . TA . "{$table} {$con}";
//     // pre($sql);
//     $res = mysqli_query($conn, $sql);

//     if ($res) {
//         $del['code'] = 1;
//     } else {
//         $del['code'] = 0;
//     }
//     return $del;
// }
function page($current, $count, $limit, $size, $class = 'mypage')
{
    // echo $current, $count, $limit, $size;
    global $type;
    $str = "";
    if ($count > $limit) { //如果数据大于每页限制条数就分页
        $str .= "<div class='pull-right'><ul class='pagination'>";
        $pages = ceil($count / $limit);
        // 上一页
        if ($current == 1) {
            // $str .= " <li class='prev'>&lt;</li>";
        } else {
            $str .= " <li class='prev'><a href='?type={$type}&page=" . (1) . "'>&lt;&lt;</a></li>";
            $str .= " <li class='prev'><a href='?type={$type}&page=" . ($current - 1) . "'>&lt;</a></li>";
        }


        if ($current <= floor($size / 2)) {
            $start = 1;
            $end = $pages > $size ? $size : $pages;
        } else if ($current > $pages -  floor($size / 2)) {
            $start = ($pages - $size + 1 < 1) ? 1 : $pages - $size + 1;
            $end = $pages;
        } else {
            $start = $current - floor($size / 2);
            $end = $current + floor($size / 2);
        }
        for ($i = $start; $i <= $end; $i++) {
            if ($i == $current) {
                $str .= "<li class='active'><a>$i</a><li>";
            } else {
                $str .= "<li><a href='?type={$type}&page={$i}'>$i</a><li>";
            }
        }

        //  下一页
        if ($current == ceil($count / $limit)) {
            // $str .= " <li class='next'>&gt;</li>";
        } else {
            $str .= " <li class='next'><a href='?type={$type}&page=" . ($current + 1) . "'>&gt;</a></li>";
            $str .= " <li class='next'><a href='?type={$type}&page=" . ($pages) . "'>&gt;&gt;</a></li>";
        }

        //     $str .='<form action="" method="get">
        //     <input type="text" name="page">
        //     <button> 跳转</button>
        //   </form>';

        $str .= "<ul></div>";
        return $str;
    }
}
