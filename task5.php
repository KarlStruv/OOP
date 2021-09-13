<?php
///Create a class called Date that includes: three pieces
///of information as instance variables — a month, a day and a year.
//
//Your class should have a constructor that initializes the three instance variables and
// assumes that the values provided are correct. Provide a set and a get for each instance variable.
//
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.
//
//Write a test application named DateTest that demonstrates class Date capabilities.



class Date{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year){
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function setMonth($month) : void
    {
        $this->month = $month;
    }

    public function getDay() : int
    {
        return $this->day;
    }

    public function setDay($day) : void
    {
        $this->day = $day;
    }

    public function getYear() : int
    {
        return $this->year;
    }

    public function setYear($year) : void
    {
        $this->year = $year;
    }

    public function DisplayDate() : string
    {
        return "{$this->month}/{$this->day}/{$this->year}" . PHP_EOL;
    }

    public function Test()
    {
        if ($this->month < 1 || $this->month > 12){
            return "{$this->month}/{$this->day}/{$this->year} - Invalid date" . PHP_EOL;
        }
        else if ($this->day < 1 || $this->day > 31){
            return "{$this->month}/{$this->day}/{$this->year} - Invalid date" . PHP_EOL;
        }
        else if ($this->year < 1 || $this->year > 3000){
            return "{$this->month}/{$this->day}/{$this->year} - Invalid date" . PHP_EOL;
        } else {
            return "{$this->month}/{$this->day}/{$this->year} - Date is correct." . PHP_EOL;
        }
    }
}


$dateArray = [
    new Date(01, 23,1993),
    new Date(07, 41,1998),
    new Date(06, 2,19),
    new Date(0, 23,2020),
    new Date(3, 24,2025),
];


echo "==============================" . PHP_EOL;


foreach ($dateArray as $dates){
    echo $dates->Test();
}

