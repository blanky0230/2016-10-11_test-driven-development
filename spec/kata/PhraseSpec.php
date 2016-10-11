<?php

/**
 * Created by Tobi^2
 * 
 * @copyright 2016 Tobi^2
 */

namespace spec\kata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class PhraseSpec
 *
 * @mixin \kata\Phrase
 */
class PhraseSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('kata\Phrase');
    }

    public function it_will_save_a_pharse()
    {
        $this->setPharse('BlaBla');
        $this->getPharse()->shouldReturn('BlaBla');
    }
}