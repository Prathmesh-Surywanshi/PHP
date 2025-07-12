<?php
function createTable($rows, $cols) {
    $table = array();

    // Filling the array with multiplication values
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {
            $table[$i][$j] = $i * $j;
        }
    }
    return $table;
}

// Example: Generate a 17x5 table
$rows = 20;
$cols = 10;
$table = createTable($rows, $cols);

// Access Example
echo "Value at \$table[3][2]: " . $table[3][2] . "\n"; // Output: 6

// You can access specific values from the $table array later
echo "Value at \$table[2][9]: " . $table[2][9] . "\n"; // Will print the value at row 2, column 9 (if it exists)
?>
