<?php

class Calculator
{
    function Division($a, $b)
    {
        try {
            if ($b == 0) throw new ExceptionDivisionByZero("Деление на 0 запрещено!");
            return $a / $b;
        } catch (exception $e) {
            echo "Произошла ошибка - ",
            $e->getMessage(),
            " в строке ",
            $e->getLine(),
            " файла ",
            $e->getFile();
        }
    }
}


