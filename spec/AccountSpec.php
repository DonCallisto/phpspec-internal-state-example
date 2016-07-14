<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(120);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Account');
    }

    function it_returns_balance()
    {
        $this->getBalance()->shouldBeEqualTo(120);
    }

    function it_raise_execption_if_decrease_more_than_current_balance()
    {
        $this->shouldThrow(\Exception::class)->duringDecreaseBalance(121);
    }

    function it_raise_exception_if_decrase_amount_is_negative()
    {
        $this->shouldThrow(\Exception::class)->duringDecreaseBalance(-1);
    }

    function it_decrease_balance()
    {
        $this->decreaseBalance(10);
        $this->getBalance()->shouldBeEqualTo(110);
    }

    function it_raise_exception_if_increase_amount_is_negative()
    {
        $this->shouldThrow(\Exception::class)->duringIncreaseBalance(-1);
    }

    function it_increase_balance()
    {
        $this->increaseBalance(10);
        $this->getBalance()->shouldBeEqualTo(130);
    }
}
