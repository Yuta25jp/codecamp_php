<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>九九表</title>
    <style>
body {
  font-family:
  "Hiragino Kaku Gothic Pro N",
  Meiryo,
  sans-serif;
}
table {
    border-collapse: collapse;
    border: 1px solid coral;
}
th, td {
    width: 50px;
    border: 1px dotted coral;
}
th {
    background: lightpink;
}
td {
    text-align: center;
}


    </style>
</head>
<body>

<h1>九九表</h1>
<table>
    <tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>
    <?php 
    for($i = 1; $i <= 9; $i++){

        echo '<tr>';
        echo '<th>'.$i.'</th>';

        for ($j = 1; $j <= 9; $j++) {
            // かけ算をして出た値を変数に格納
            // 格納したものを表示かつ偶数であればclassをつける
            $num = $i * $j;
            if ($num % 2 == 0){
                echo '<td class="color">'.$num.'</td>';                
            }else{
                echo '<td>'.$num.'</td>';
            }
        }
        echo '</tr>';
    }
    ?>

</table>





</body>
</html>