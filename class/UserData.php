<?php
include_once 'CommonData.php';
class UserData extends CommonData {


    function __construct(){
        parent::__construct('news');
    }

    function create($data)
    {
        return parent::create($data);
    }



}