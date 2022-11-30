<?php
const YOUNG_AGE = 1;
const NORMAL_AGE = 18;
const OLD_AGE = 65;

$age = random_int(-10, 100);

echo "Вы указали что ваш возраст $age, и ";

if ($age >= NORMAL_AGE && $age <= OLD_AGE) {
    echo "вам еще работать и работать.";
} elseif ($age > OLD_AGE) {
    echo "вам пора на пенсию.";
} elseif ($age >= YOUNG_AGE  && $age < NORMAL_AGE) {
    echo "вам ещё рано работать.";
} else {
    echo "у вас неизвестный возраст или вы его не правильно ввели.";
}