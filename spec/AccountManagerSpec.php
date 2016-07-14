<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Prophet;

class AccountManagerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AccountManager');
    }

    public function it_transfer_money_between_accounts()
    {
        $prophet = new Prophet();

        $from = $prophet->prophesize('Account');
        $from->willBeConstructedWith([120]);

        $to = $prophet->prophesize('Account');
        $to->willBeConstructedWith([0]);

        $from->decreaseBalance(60)->shouldBeCalled(1);
        $to->increaseBalance(60)->shouldBeCalled(1);

        $this->moneyTransfer($from, $to, 60);
    }
}
