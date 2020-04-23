<?php
/*
9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/

function translit($str){
    $str0 = [
        "a"	=>	"a",
        "б"	=>	"b",
        "в"	=>	"v",
        "г"	=>	"g",
        "д"	=>	"d",
        "е"	=>	"е",
        "ё"	=>	"yo",
        "ж"	=>	"zh",
        "з"	=>	"z",
        "и"	=>	"i",
        "й"	=>	"y",
        "к"	=>	"k",
        "л"	=>	"l",
        "м"	=>	"m",
        "н"	=>	"n",
        "о"	=>	"o",
        "п"	=>	"p",
        "р"	=>	"r",
        "c"	=>	"s",
        "т"	=>	"t",
        "у"	=>	"u",
        "ф"	=>	"f",
        "х"	=>	"h",
        "ц"	=>	"ts",
        "ч"	=>	"ch",
        "ш"	=>	"sh",
        "щ"	=>	"sch",
        "ъ"	=>	"`",
        "ы"	=>	"y",
        "ь"	=>	"`",
        "э"	=>	"e",
        "ю"	=>	"yu",
        "я"	=>	"ya"
    ];

    foreach ($str0 as $key => $value) {
       $str = str_replace($key, $value,$str);
    }
    return str_replace(" ", "_", $str);
}

echo translit("cъешь же ещё этих мягких французских булок да выпей чаю!");