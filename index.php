<?php

function palindrome($text)
{
    $normal = str_replace(' ', '', $text);
    $normal = mb_strtolower($normal);
    $palindrome = preg_split('//u', $normal, -1, PREG_SPLIT_NO_EMPTY);
    $reverse = join('', array_reverse($palindrome, true));

    if ($reverse == $normal) {
        echo $normal;
    } else {
        for ($i = 0; $i < count($palindrome) - 1; $i++) {
            $palindromes[] = searchPalindrome($palindrome, $reverse, $i, $palindrome[$i]);
        }

        $maxLength = 0;
        foreach ($palindromes as $pal) {
            $len = strlen($pal);
            if ($len > $maxLength) {
                $maxLength = $len;
                $currentPalindromes = $pal;
            }
        }
        echo $currentPalindromes;
    }
}

function searchPalindrome($palindrome, $reverse, $t, $s)
{
    for ($i = $t + 1; $i < count($palindrome) + 1; $i++) {
        if (preg_match_all('/' . $s . '/u', $reverse, $temp))
            $subP = $temp[0];
        else
            return $subP[0];
        $s .= $palindrome[$i];
    }
}

?>

<?php
palindrome("Аргентина манит неграа")
?>
