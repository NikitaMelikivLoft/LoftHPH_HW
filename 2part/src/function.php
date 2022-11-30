<?php
function task1($data, $prav = false)
{
    for ($i = 0; $i < count($data); $i++) {
        echo "<p>", $data[$i], "</p>\n";
    }

    if ($prav == true) {
        return implode(" ", $data);
    }

    return null;
}
function task2($opertions)
{
    $args = func_get_args();
    $res = 0;
    switch ($opertions) {
        case '+':
            for($i = 1; $i < sizeof($args); $i++) {
                $res += $args[$i];
            }
            return $res;
        case '-':
            for($i = 1; $i < sizeof($args); $i++) {
                $res -= $args[$i];
            }
            return $res;
        case '*':
            $res = $args[2];
            for($i = 2; $i < sizeof($args); $i++) {
                $res *= $args[$i];
            }
            return $res;
        case '/':
            $res = $args[2];
            for($i = 2; $i < sizeof($args); $i++) {
                $res /= $args[$i];
            }
            return $res;

        case null:
            echo "Не введен второй аргумент. Допустимые аргменты: +,-,*,/.";
            break;
        default:
            echo "Ошибка ввода математического оператора";

    }
}
function task3($row, $cell)
{
    if (!is_int($row) || !is_int($cell)) {
        echo "Аргументами могут быть только целые числа";
        return false;
    } elseif ($row<0 || $cell<0) {
        echo "Аргументами мугут быть только положительные числа";
    }

    echo "<table border='2'>";
    for ($r = 1; $r <= $row; $r++) {
        echo '<tr>';
        for ($d = 1; $d <= $cell; $d++) {
            $res = $r * $d;
            echo "<td style='padding: 10px'> " . $res . " </td>";
        }
    }
    echo "</table>";
}
function task4()
{
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo mktime("0", "0", "0", "02", "24", "2016");
}

function task5($bottle, $remove)
{
    echo str_replace($bottle, "",'Карл у Клары украл Кораллы');
    echo "<br>";
    echo str_replace("Две",$remove , "Две бутылки лимонада");
}

function task6($file)
{
    $f = fopen($file, "r");
    $str = fgets($f);
    echo "Текст файла: " . $str;
    fclose($f);
}