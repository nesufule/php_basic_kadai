<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array,bool $order){
            
            if($order === TRUE){
            
                echo '昇順にソートします。<br>';
                
                asort($array);

                foreach($array as $value){
                    echo $value . '<br>';
                }
            }else{
                echo '降順にソートします。<br>';
                
                arsort($array);

                foreach($array as $value){
                    echo $value . '<br>';
                }
            }
        }

        $num = [15, 4, 18, 23, 10];

        sort_2way($num, TRUE);
        
        sort_2way($num, FALSE);
        ?>
    </p>
</body>

</html>