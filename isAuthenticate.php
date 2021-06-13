<?php
session_start();

require_once('dbconnection.php');
require_once('catagory_list.php');
require_once('catagory_add.php');
require_once('catagory_update.php');
require_once('catagory_submit.php');
require_once('catagory_submit_update.php');
require_once('catagory_submit_delete.php');
require_once('product_list.php');
require_once('product_add.php');
require_once('product_update.php');
require_once('product_submit.php');
require_once('product_submit_update.php');
require_once('product_submit_delete.php');

require_once('catagories.php');

if(isset($_SESSION) && !empty($_SESSION)){

}else{
    header("Location: ./login.php");
}