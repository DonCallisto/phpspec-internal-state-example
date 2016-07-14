<?php

class Account
{
    private $balance;

    public function __construct($initialBalance)
    {
        if (!is_integer($initialBalance)) {
            throw new \Exception("...");
        }

        if ($initialBalance < 0) {
            throw new \Exception("...");
        }

        $this->balance = $initialBalance;
    }

    public function increaseBalance($increaseAmount)
    {
        if ($increaseAmount < 0) {
            throw new \Exception("...");
        }

        $this->balance += $increaseAmount;

        return $this;
    }

    public function decreaseBalance($decreaseAmount)
    {
        if ($decreaseAmount < 0) {
            throw new \Exception("...");
        }

        if ($decreaseAmount > $this->balance) {
            throw new \Exception("...");
        }

        $this->balance -= $decreaseAmount;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}