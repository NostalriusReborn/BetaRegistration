<?php

function createAccount()
{
    if (!isset($_POST['signup']))
        return new Account(['username' => '', 'password' => '', 'password_repeat' => '']);

    $account = new Account($_POST);
    $result = $account->saveToDb();

    if ($result == Account::STATUS_OK)
    {
        header("Location: success.php");
        exit;
    }

    return $account;
}
