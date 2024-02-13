<?php

$hours = [];

for($i = 1; $i <= 5; $i++){
    $id = 'ID-' . rand(100, 999);

    $employee = [
        'firstName' => 'Vardas' . $i,
        'lastName' => 'Pavardė' . $i,
        'workingHours' => []
    ];
    for($j = 1; $j <= 5; $j++){
        $date = date('Y-m-d', mt_rand(strtotime('2023-07-01'), strtotime('2023-12-31')));
        $hoursWorked = rand(1, 12);
        $employee['workingHours'][$date] = $hoursWorked;
    }
    $hours[$id] = $employee;
};

$filename = 'data/data.php';
$fileContent = "<?php\n\n\$hours = " . var_export($hours, true) . ";\n\n?>";
file_put_contents($filename, $fileContent);
