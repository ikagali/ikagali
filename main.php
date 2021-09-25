<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>
          

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                   <p class="text"> <?php  include 'knowledge.inc.php'; ?></p>
                    
                   <p class="text"> <?php   echo $a, ' ', $b, ' ', $c; ?> </p>
           
                   <p class="text"> <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?></p>
                                     
                     <?php
                        echo $d;
                    ?> 
<form method="POST">
    <p><input type="number" name="dsadfsd" /></p>
    <input type="submit" value="Отправить">
</form>
            </div>

            <div class="article">
                <p class="text">
Существительное, неодушевлённое, мужской род, 2-е склонение (тип склонения 1a по классификации А. А. Зализняка).
Встречается также жаргонный вариант склонения по схеме 1c①: мн. ч. текста́, тексто́в и т. д.
Корень: -текст- [Тихонов, 1996].
                </p>
                
            </div>
        </div>
           <div class="footer">
            <h2><button><?php include 'footer.inc.php' ?></button></h2>
    </div>


</body>
</html>
