<?php

class AccountManager
{
    public function moneyTransfer(Account $from, Account $to, $amount)
    {
        $from->decreaseBalance($amount);
        $to->increaseBalance($amount);

        return true;
    }
}