<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . "\n";
}

echo "Namota: \n";

function namota($n)
{
    for ($i = 1; $i <= 10; $i++) {
        $res = $n * $i;
        printf("%d x %d = %d\n", $n, $i, $res);
    }
}
namota(5);

echo PHP_EOL;

// while loop
$i = 0;
while ($i <= 5) {
    echo $i;
    $i++;
    echo PHP_EOL;
}