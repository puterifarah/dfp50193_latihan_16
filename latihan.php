
<?php
$program = [
    'Politeknik Ungku Omar'=> [
        'Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian'=> [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan ) Dengan Kepujian'=> [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Diploma Kejuruteraan Awam'=>[
            'STPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
    ],//end array poli PUO
    $example = [
        'Politeknik Ungku Omar' => [
            'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian'=>[
                'SPM',
                'STPM'
            ],
            
        ],
        'Politeknik Sultan Haji Ahmad Shah' => [
            'Diploma Kejuruteraan Awam'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ],
            'Diploma Seni Bina'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ],
            'Diploma Geomatik'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ]
        ]
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        table,td{
            margin-top: 150px;
            border: 2px solid gray;
        }
        </style>
</head>

<body>

<table align="center" width="70%">
        <tr style="background: pink; color: white">
            <td ><b>PROGRAM</b></td>
            <td><b>KELAYAKAN</b></td>
        </tr>
    <?php
    foreach ($example as $poli => $value){
        echo "<th colspan=2>$poli</th>";
        echo "<tr>";
        foreach ($value as $course =>$test){
            echo "<td rowspan=2>$course</td>";
            
            foreach($test as $kelayakan){
                echo "<td>$kelayakan</td>";
                echo "<tr>";
                
            }
            echo '</td>';
            echo "</tr>";
        }
        echo '</tr>';
        
    }
    ?>
    </table>
</body>

</html>