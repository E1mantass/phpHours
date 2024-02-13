<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <table>
            <tr>
                <th width="50">ID</th>
                <th width="100">First name</th>
                <th width="100">Last name</th>
                <th width="200">1st Work day</th>
                <th width="200">2nd Work day</th>
                <th width="200">3rd Work day</th>
                <th width="200">4th Work day</th>
                <th width="200">5th Work day</th>
            </tr>
            <?php foreach($hours as  $employeeID => $employeeData):?>
                <tr>
                    <td><?=$employeeID?></td>
                    <td><?=$employeeData['firstName']?></td>
                    <td><?=$employeeData['lastName']?></td>
                    <?php foreach($employeeData['workingHours'] as $date => $workingHours):?>
                        <td><?=$date . " --> " . $workingHours . "hours"?> 
                    <?php endforeach;?>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>