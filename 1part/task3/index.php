<?php
const YOUNG_AGE = 1;
const NORMAL_AGE = 18;
const OLD_AGE = 65;

$age = 19;

if ($age >= NORMAL_AGE && $age <= OLD_AGE) {
    echo "Вам еще работать и работать";
} elseif ($age > OLD_AGE) {
    echo "Вам пора на пенсию";
} elseif ($age >= YOUNG_AGE  && $age < NORMAL_AGE) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}