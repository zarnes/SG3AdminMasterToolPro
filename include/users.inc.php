<?php
/**
 * Created by PhpStorm.
 * User: Romain
 * Date: 26/09/2017
 * Time: 10:36
 */
//die('hellooo');
include('initializer.php');
$_MENU_ = 'utilisateurs';
$_TITLE_ = 'Utilisateurs';

if (Customer::isAdmin($_SESSION['id']) !== true)
{
    header('Location:/accueil');
}

$users = Customer::getAll();

include($_SERVER['DOCUMENT_ROOT'] . "/template/users.tpl.php");