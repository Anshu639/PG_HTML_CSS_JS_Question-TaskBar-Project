<?php
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

   
    public static function getCount() {
        return self::$count;
    }
}


echo "Initial count: " . Counter::getCount() . "\n"; 
Counter::increment();
echo "Count after increment: " . Counter::getCount() . "\n"; 
Counter::increment();
echo "Count after another increment: " . Counter::getCount() . "\n"; 
?>
