<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>
    <?php
        // ВОТ ТУТ ОБЪЯВЛЯЕМ МАССИВ
        // НАЗЫВАЕМ ЕГО $emojiArr
        // И НАПОЛНЯЕМ ЭМОДЖИКАМИ 
        $emojiArr=['👽','🦄','🎸','👍🏻','🎸','🤑'];
        $a=$_REQUEST['a'] ?? 2;
        $mass=[];
        $res=[];




    ?>

        <?php
            // здесь выводим случайный элемент массива $emojiArr
            for ($i=0; $i<$a;$i++){
                $mass[] = $emojiArr[rand(0,5)];
                $res[]=rand(0,5);
            }
            foreach ($mass as $f) {
                echo '<div class="block">' . $f . '</div>';
            }
            $flag=1;
            foreach ($res as $r) {
                if($r!=$res[0]){
                    $flag=0;

                }
            }
            $nov = 0;
            for ($k = 1; $k < $a; $k++) {
                if ($mass[$k] == $mass[$k-1]) {
                    $nov++;
                }
            }
            if ($a - 1 == $nov) {
                echo "<div id=\"message\">УРА! Ты выиграл!<br></div>";
            }
            
           
            
            
            
        ?>
    

    <!-- Кнопка перезагрузки страницы index -->
    <a href=<?php
        if ($flag == 1 ){
            echo "main.php?a=".($a+1);
        }
        else{
            echo "main.php?a=".($a);
        }
    ?>
    class="btn">Играть</a>
    
</body>
</html>



