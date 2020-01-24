<?php
class MysqlDb
{
    private static $link;
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $charset;
    private $conn;

    private  function __construct($config)
    {
        $this->initpar($config);
        $this->connect();
        $this->charset();
    }

    private function __clone()
    {
    }

    private function initpar($config)
    {
        $this->host = isset($config['host']) ? $config['host'] : '127.0.0.1';
        $this->user = isset($config['user']) ? $config['user'] : 'host';
        $this->pwd = isset($config['pwd']) ? $config['pwd'] : '';
        $this->dbname = isset($config['dbname']) ? $config['dbname'] : '';
        $this->charset = isset($config['charset']) ? $config['charset'] : 'utf8';
    }

    private function charset()
    {
        mysqli_set_charset($this->conn, $this->charset);
    }

    private function connect()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->dbname);
        if(!$this->conn){
            die('连接失败');
        }
        // else{
        //     echo 'LINK START';
        // }
    }

    private function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        if (!$res) {
            echo '查询失败';
            echo '错误编码', mysqli_error($this->conn);
        }
        return $res;
    }
    /**
     * @param $table    表名
     * @param $ele      选择字段
     * @param $con      查询条件
     * @param $fetch_type  输出的数组
     */
    public function fetchall($table, $ele = '*', $con = '', $fetch_type = 'array')
    {

        $fetch_types = ['array', 'assoc', 'row'];
        if (!in_array($fetch_type, $fetch_types)) {
            $fetch_type = 'array';
        }

        $mysql_feath = "mysqli_fetch_{$fetch_type}";

        // if($num!=''){
        //     $con = "LIMIT 1";
        // }

        $sql = "SELECT {$ele} FROM ".TA."{$table} {$con}";
        // pre($sql);
        $res = $this->query($sql);
        $res_arr = [];
        while ($row =  $mysql_feath($res)) {
            $res_arr[] = $row;
        }

        return empty($res_arr) ? NULL : $res_arr;
    }

    public function fetchone($table, $ele = '*', $con = '', $fetch_type = 'array')
    {
        $res = $this->fetchall($table, $ele, $con, $fetch_type);
        return empty($res) ? NULL : $res['0'];
    }

    public function insert($table, $date_arr)
    {
        $key = '';
        $value = '';
        foreach ($date_arr as $k => $v) {
            $key .= "`$k`,";
            $value .= "'$v',";
        }
        $key = rtrim($key, ',');
        $value = rtrim($value, ',');
        $sql = "INSERT INTO ".TA."$table ($key) VALUES ($value)";
        // pre($sql);
        $res = $this->query($sql);
        if ($res) {
            $ins['code'] = 1;
            $ins['msg'] = '添加成功';
        } else {
            $ins['code'] = 0;
        }
        return $ins;
    }

    public function update($table, $update_arr, $con)
    {
        // global $conn;
        $set = '';
        foreach ($update_arr as $k => $v) {
            $set .= "`$k`='$v',";
        }
        $set = rtrim($set, ',');
        //  pre($set);
        $sql =  "UPDATE ".TA."{$table} SET {$set} {$con}";
        //  pre($sql);
        $res = $this->query($sql);

        if ($res) {
            $ins['code'] = 1;
            $ins['msg'] = '更新成功';
        } else {
            $ins['code'] = 0;
        }
        return $ins;
    }

    public  function delete($table, $con)
    {

        $sql =  "DELETE FROM ".TA."{$table} {$con}";
        pre($sql);
        $res = $this->query($sql);

        if ($res) {
            $del['code'] = 1;
            $del['msg'] = '删除成功';
        } else {
            $del['code'] = 0;
        }
        return $del;
    }



    public static function link($config)
    {
        //    echo $host;
        //    var_dump(self::$link);
        if (!self::$link instanceof self) {
            self::$link = new self($config);
            //  dump(self::$link);
            //  echo "实例化";
            return  self::$link;
        }
        return self::$link;
    }
}

// $config = [
//     'host' => 'localhost',
//     'user' => 'root',
//     'pwd' => '123456',
//     'dbname' => 'nndou',
//     'charset' => 'utf8'
// ];
// $db = MysqlDb::link($config);
// $info = $db->fetchall("nnd_admin", '*', '', 'array');
// $info2 = $db->fetchone("nnd_admin", '*', ' ', 'assoc');
// // echo "<pre>";
// // pre($info);
// pre($info2);
// $arr = [
//     'admin_name' => 'admin',
//     'admin_pwd' => '123455',
// ];
// $serv = $db->insert('nnd_admin', $arr);

// pre($serv);
// $arr2 = [
//     'admin_name' => 'user',
//     'admin_pwd' => '123455',
// ];
// $serv2 = $db->update('nnd_admin', $arr2, "WHERE admin_id = 10 ");

// pre($serv2);
// $serv3 = $db->delete('nnd_admin',"WHERE admin_name = 'admin' ");

// pre($serv3);

// 更新
// function update($table, $update_arr, $con)
// {
//     global $conn;
//     $set = '';
//     foreach ($update_arr as $k => $v) {
//         $set .= "`$k`='$v',";
//     }
//     $set = rtrim($set, ',');
//     //  pre($set);
//     $sql =  "UPDATE ".TA."{$table} SET {$set} {$con}";
//     //  pre($sql);
//     $res = mysqli_query($conn, $sql);

//     if ($res) {
//         $ins['code'] = 1;
//     } else {
//         $ins['code'] = 0;
//     }
//     return $ins;
// }\
// function delete($table, $con)
// {
//     global $conn;
//     $sql =  "DELETE FROM ".TA."{$table} {$con}";
//     pre($sql);
//     $res = mysqli_query($conn, $sql);

//     if ($res) {
//         $del['code'] = 1;
//     } else {
//         $del['code'] = 0;
//     }
//     return $del;
// }
