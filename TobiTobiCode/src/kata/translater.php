<?php

/**
 * Created by Tobi^2
 * 
 * @copyright 2016 Tobi^2
 */

namespace kata;

/**
 * Class translater
 */
class translater
{

    /**
     * @var string
     */
    protected $myWord = "";

    /**
     * @var Phrase
     */
    protected $myPhrase = null;

    /**
     * Übersetzt den Text
     *
     * @return string
     */
    public function translate()
    {
        if ($this->containsSpaces()) {
            return $this->formatPhrase();
        } else {
            return $this->translateWord();
        }
    }

    /**
     * Übersetzt ein Word
     *
     * @return string
     */
    private function translateWord()
    {
        if($this->isFirstCharIsAnVowel()) {
            return $this->makeVowelWord();
        } else {
            return $this->makeConstanceWord();
        }
    }

    /**
     * Übersetzt den Satz
     *
     * @return string
     */
    private function formatPhrase() {
        $phrase = array();
        $words = explode(' ', $this->myPhrase->getPharse());
        foreach($words as $word) {
            $this->setWord($word);
            $phrase[] = $this->translateWord();
        }
        return implode(' ', $phrase);
    }

    /**
     * @return bool
     */
    private function containsSpaces() {
        return (!empty($this->myPhrase) && strpos($this->myPhrase->getPharse(), ' ') !== false);
    }

    /**
     * @return bool
     */
    private function isFirstCharIsAnVowel()
    {
        $vowels = array('a', 'e', 'i', 'o', 'u');
        $firstChar = substr($this->myWord, 0, 1);

        return (in_array($firstChar, $vowels));
    }

    /**
     * @return string
     */
    private function makeVowelWord()
    {
        return $this->myWord.'ay';
    }

    /**
     * @return string
     */
    private function makeConstanceWord()
    {
        $firstChar = substr($this->myWord, 0, 1);
        $prefix    = substr($this->myWord, 1);

        return $prefix . $firstChar . "ay";
    }

    /**
     * @param $word
     */
    public function setWord($word)
    {
        $this->myWord = $word;
    }

    /**
     * @param $phrase
     */
    public function setPhrase(Phrase $phrase)
    {
        $this->myPhrase = $phrase;
    }
}