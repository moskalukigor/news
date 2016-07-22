<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'ExtPDO.php';
require_once "News.php";
class CommonData {

    protected $table;
    protected $db = null;

    public function __construct($table){
        $this->table = $table;
        $this->db = new ExtPDO('mysql:dbname=news_db;host=localhost', 'root', '');
    }

    public function create($data){
        $fStr = "`title`, `content`";
        $values = array_values($data);
        $vStr = '?,?';

        $sql = "INSERT INTO `{$this->table}` ($fStr) VALUES ($vStr); ";
        $this->db->insert("set names utf8");
        return $this->db->insert($sql, $values);
    }

    public function read($id)
    {
        $sql = "SELECT * FROM `{$this->table}` WHERE `id` = ?;";
        $res = $this->db->select($sql, [$id]);

        print_r($res);
        die();


        return count($res) > 0 ? $res[0] : null;
    }

    public function readAll()
    {
        $sql = "SELECT * FROM `{$this->table}`;";
        $res = $this->db->select($sql, [10]);
        return $res;
    }

}