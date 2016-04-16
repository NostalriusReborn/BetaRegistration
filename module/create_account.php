<?php

function createAccount()
{
    if (!isset($_POST['signup']))
        return new Account(['username' => '', 'password' => '', 'password_repeat' => '']);

    $account = new Account($_POST);
    $account->saveToDb();
    
    return $account;
}
