<?php
//program count vowels
function count_vowels ($string)
{
    preg_match_all ('/[aeiou]/i',$string,$matches);
    return count($matches[0]);
}
print_r (count_vowels('hmm..'));
echo "<br/>";
print_r (count_vowels('programer'));
?>