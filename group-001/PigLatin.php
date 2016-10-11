<?php

/**
 * Created by PhpStorm.
 * User: burned
 * Date: 11.10.16
 * Time: 21:18
 */
class PigLatin
{
    public function piggify($string)
    {
        $vowels=['a', 'e', 'i', 'o', 'u'];
        $clusters=['ch', "qu", "th", "thr", "sch"];

        $words = explode(' ', $string);
        $result = [];
        foreach ($words as $word) {
            if (!in_array($word[0],$vowels)) {
                $move_size=1;

                // consonants
                foreach ($clusters as $cluster)
                {
                    if(strpos($word,$cluster) === 0)
                    {
                        $move_size = strlen($cluster);
                        break;
                    }
                }

                if (substr($word, 1, 2) === 'qu') {
                    $move_size = 3;
                }

                $word = substr($word, $move_size) . substr($word, 0, $move_size);
            }

            $result[] = $word . "ay";
        }

        return implode(' ', $result);
    }
}