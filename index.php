<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторная 1</title>
 </head>
 <body>

<?php
    $last = $_GET['get_last'];
    $future = $_GET['get_future'];
    $rate = $_GET['rate'];

    if($future > 0 && preg_match("/[^A-Za-z]/", $last) == 1 && $last > 0 && $rate > 0 && preg_match("/[^A-Za-z]/", $future) && preg_match("/[^A-Za-z]/", $rate)) {
      $res = (($last - $future) * $rate);
    } else {
    echo "Ошибка,введите корректные данные!";
  }
    
?>
<div class="info">
    <span>Калькулятор комуналки</span>
    <form name="get_info" action="" id="calc_formid">
        <label for="get_last">Значение в прошлом месяце:</label>
        <input name="get_last" value="<?php echo $last ?>" size="7" />
        <div label for="get_future">Значение в текущем месяце</label>
        <input name="get_future" value="<?php echo $future ?>" size="7" /> </div>   
        <div label for="rate">Тариф:</label>
        <input name="rate" value="<?php echo $rate ?>" size="7" /> </div> 
        <div class="calculate"></div>
        <input type="submit" value="Считать" name="calculate" class="calc_button" />
    </form>
    <div label>Результат: </label><input name="result" id="calc_result" value="<?php echo $res ?>"  disabled="disabled" size="4" />
</div>
 </body>
</html>git
