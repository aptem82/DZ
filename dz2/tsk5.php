<?php
//DODELKA
function palind($str)
{
    if (is_string($str)) {
        $str = mb_strtolower($str, 'UTF-8');
        $str = str_replace(" ","",$str);
        echo $str;
        $str_rev = iconv("windows-1251", "utf-8", strrev(iconv("utf-8", "windows-1251", $str)));;
        if ($str == $str_rev) {
            return true;
        } else {
            return false;
        }
    } else {
        return "Параметр не является строкой!!!";
    }
}

function info($str)
{
    if (palind($str)) {
        return "'$str' - строка палиндром<br>";
    } else {
        return "'$str' - строка не палиндром<br>";
    }
}

print info('Kvaasddsa');
print info('Лёша на полке клопа нашёл');


