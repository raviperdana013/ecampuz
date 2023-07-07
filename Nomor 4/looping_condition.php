<?php
for ($num = 1; $num <= 50; $num++) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FooBar\n";
    } elseif ($num % 3 == 0) {
        echo "Foo\n";
    } elseif ($num % 5 == 0) {
        echo "Bar\n";
    } else {
        echo $num . "\n";
    }
}
?>
