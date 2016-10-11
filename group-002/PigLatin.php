<?php

/**
 * Created by PhpStorm.
 * User: maj
 * Date: 11.10.16
 * Time: 21:03
 */
class PigLatin
{
	private $vowls = [ 'a', 'e', 'o', 'i', 'u', 'xr'];

	public function latinize($phrase)
	{
		$words = explode(' ', $phrase);
		$latinizedWords = [];

		foreach($words as $word)
		{
			$latinizedWords[] = $this->latinizeWord($word);
		}

		return implode(' ', $latinizedWords);
	}

	protected function latinizeWord($word)
	{
		$prefix = $this->getPrefix($word);

		if($this->isVowl($prefix))
		{
			return $word.'ay';
		}

		return substr($word,strlen($prefix)).$prefix.'ay';
	}

	protected function getPrefix($word, $prefix = '', $i = 0)
	{
		if($i >= strlen($word))
		{
			return $prefix;
		}

		$nextLetter = $word[$i];

		if($this->isVowl($nextLetter))
		{
			if($i === 0 || $this->isQuLigature($prefix.$nextLetter))
			{
				$prefix .= $nextLetter;
			}

			return $prefix;
		}

		return $this->getPrefix($word,$prefix.$nextLetter, ++$i);
	}

	protected function isVowl($char)
	{
		return in_array($char, $this->vowls);
	}

	protected function isQuLigature($word)
	{
		return stristr($word, 'qu');
	}
}