<?php
require_once 'src/WeekdayFinder.php';

class WeekdayFinderTest extends PHPUnit_Framework_TestCase
{
    // Simple non-leap years
    function test_checkLeapYear_false()
    {
        //Arrange
        $test_WeekdayFinder = new WeekdayFinder;
        $year = 1993;

        //Act
        $result = $test_WeekdayFinder->checkLeapYear($year);

        //Assert
        $this->assertSame(false, $result);
    }

    // Years divisible by 4
    function test_checkLeapYear_true()
    {
        //Arrange
        $test_WeekdayFinder = new WeekdayFinder;
        $year = 2004;

        //Act
        $result = $test_WeekdayFinder->checkLeapYear($year);

        //Assert
        $this->assertSame(true, $result);
    }

    // Years divisible by 100
    function test_checkLeapYear_divisibleBy100()
    {
        //Arrange
        $test_WeekdayFinder = new WeekdayFinder;
        $year = 2100;

        //Act
        $result = $test_WeekdayFinder->checkLeapYear($year);

        //Assert
        $this->assertSame(false, $result);
    }

    // Years divisible by 400
    function test_checkLeapYear_divisibleBy400()
    {
        //Arrange
        $test_WeekdayFinder = new WeekdayFinder;
        $year = 2000;

        //Act
        $result = $test_WeekdayFinder->checkLeapYear($year);

        //Assert
        $this->assertSame(true, $result);
    }

    // Regular day in non-leap year
    function test_dayOfYear_regular()
    {
        //Arrange
        $test_WeekdayFinder = new WeekdayFinder;
        $year = 2017;
        $month = 12;
        $day = 31;

        //Act
        $result = $test_WeekdayFinder->dayOfYear($year, $month, $day);

        //Assert
        $this->assertEquals(365, $result);
    }
}
?>
