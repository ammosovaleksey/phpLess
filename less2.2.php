<?php
    /*
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

*/

$a = rand(0,15);

echo "a = $a","<hr>";
/* вариант 1 */
switch ($a) {
    case 0: echo "0 ";
    case 1: echo "1 ";
    case 2: echo "2 ";
    case 3: echo "3 ";
    case 4: echo "4 ";
    case 5: echo "5 ";
    case 6: echo "6 ";
    case 7: echo "7 ";
    case 8: echo "8 ";
    case 9: echo "9 ";
    case 10: echo "10 ";
    case 11: echo "11 ";
    case 12: echo "12 ";
    case 13: echo "13 ";
    case 14: echo "14 ";
    case 15:
        echo "15 ";
        break;
    default:
        echo "что-то не так";
        break;
}

echo "<hr>";
/* вариант 2 */
function f15($b) {
    echo $b." ";
    if($b == 15){
        return ;
    }
    f15($b+1);
}

f15($a);

?>
