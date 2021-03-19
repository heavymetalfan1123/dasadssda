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
<style>
body{
    vertical-align: top;
    text-align: center; 
    background-color: #7a92ff;
}
.block{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    width: 120px;
    height: 120px;
    margin: 5px;
    border:  5px solid #333;
    cursor: pointer;
    font-family: 'Arial', sans-serif;
    font-size: 70px;
    background-color: #fff;
}
.btn{
    display: block;
    width: 253px;
    margin: 5px auto;
    padding: 10px;
    font-size: 15px;
    font-weight: 700;
    background-color: transparent;
    border:  5px solid #333;
    text-transform: uppercase;
    color: #333;
    background-color: #8efa8b;
    text-decoration: none;
}
#message{
    font-family: 'Arial', sans-serif;
    font-size: 40px;
    font-weight: 900;
    color: #fff;
    margin-top: 30px;
}
