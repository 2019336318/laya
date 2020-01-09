<?php
    function pre($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
    
    function dump($arr)
    {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }

function conn($dbname)
{
    global $conn;
    $host = 'localhost';
    $user = 'root';
    $pwd = '123456';
    // $dbname = 'msg_board';
    $conn = mysqli_connect($host, $user, $pwd, $dbname);
    if (!$conn) {
        die('no');
    }
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}

function select_all($table, $ele = '*', $con = '')
{
    global $conn;
    $sql = "SELECT {$ele} FROM  ".TA."{$table} {$con}";
    pre($sql);
    $info = mysqli_query($conn, $sql);
    while ($res = mysqli_fetch_array($info)) {
        $res_arr[] = $res;
    }
    if (isset($res_arr)) {
        return $res_arr;
    } else {
        return '无记录';
    }
}

function select_one($table, $ele = '*', $con = '')
{
    global $conn;
    $sql = "SELECT  {$ele}  FROM  ".TA."{$table} {$con}";
    // pre($sql);
    $info = mysqli_query($conn, $sql);
    return  mysqli_fetch_array($info);
}