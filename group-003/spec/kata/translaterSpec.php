<?php

/**
 * Created by Tobi^2
 * 
 * @copyright 2016 Tobi^2
 */

namespace spec\kata;

use kata\Phrase;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class translaterSpec
 *
 * @mixin \kata\translater
 */
class translaterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('kata\translater');
    }

    public function it_can_translate_apple_to_appleay()
    {
        $this->setWord('apple');
        $this->translate()->shouldReturn('appleay');
    }

    public function it_can_translate_bird_to_irdbay()
    {
        $this->setWord('bird');
        $this->translate()->shouldReturn('irdbay');
    }

    public function it_can_translate_vogel_to_ogelvay()
    {
        $this->setWord('vogel');
        $this->translate()->shouldReturn('ogelvay');
    }

    public function it_can_translate_eat_to_eatay()
    {
        $this->setWord('eat');
        $this->translate()->shouldReturn('eatay');
    }

    public function it_can_translate_a_phrase(Phrase $phrase)
    {
        $phrase->getPharse()->willReturn('a yellow bird')->shouldBeCalled();

        $this->setPhrase($phrase);
        $this->translate()->shouldReturn('aay ellowyay irdbay');
    }
}