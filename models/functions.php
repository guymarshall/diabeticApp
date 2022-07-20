<?php

declare(strict_types=1);

class Functions {
    public static function print_r_easy($variable, $exit = true)
    {
        echo '<pre>';
        print_r($variable);
        echo '</pre>';

        if ($exit) {
            exit;
        }
    }

    public static function number_to_day(int $number) {
        return match ($number) {
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday',
            default => 'Invalid'
        };
    }

    public static function number_to_month(int $number) {
        return match ($number) {
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
            default => 'Invalid'
        };
    }

    public static function is_leap_year(int $year) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function month_to_days(string $month, int $year) {
        switch ($month) {
            case 'January':
                return 31;
            case 'February':
                if (is_leap_year($year)) {
                    return 29;
                } else {
                    return 28;
                }
            case 'March':
                return 31;
            case 'April':
                return 30;
            case 'May':
                return 31;
            case 'June':
                return 30;
            case 'July':
                return 31;
            case 'August':
                return 31;
            case 'September':
                return 30;
            case 'October':
                return 31;
            case 'November':
                return 30;
            case 'December':
                return 31;
        }
    }

    public static function filter_input(string $input) {
        $input_is_dangerous = true;

        while ($input_is_dangerous) {
            if (str_contains($input, '(')) {
                $input = str_replace('(', '', $input);
            } else if (str_contains($input, ')')) {
                $input = str_replace(')', '', $input);
            } else if (str_contains($input, ';')) {
                $input = str_replace(';', '', $input);
            } else if (str_contains($input, '{')) {
                $input = str_replace('{', '', $input);
            } else if (str_contains($input, '}')) {
                $input = str_replace('}', '', $input);
            } else if (str_contains($input, '[')) {
                $input = str_replace('[', '', $input);
            } else if (str_contains($input, ']')) {
                $input = str_replace(']', '', $input);
            } else if (str_contains($input, 'SELECT')) {
                $input = str_replace('SELECT', '', $input);
            } else if (str_contains($input, '\'')) {
                $input = str_replace('\'', '', $input);
            } else if (str_contains($input, '"')) {
                $input = str_replace('"', '', $input);
            } else {
                $input_is_dangerous = false;
            }
        }

        return $input;
    }
}