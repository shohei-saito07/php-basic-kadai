<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      $nums = [15, 4, 18, 23, 10];

      // 配列を昇順または降順に並び替える関数
      function sort_2way($array, $order) {
        if ($order) {
          // 昇順に並び替え
          echo '昇順にソートします。<br>';
          sort($array);
        } else {
          // 降順に並び替え
          echo '降順にソートします。<br>';
          rsort($array);
        }

        foreach ($array as $arr) {
          echo "{$arr}<br>" ;
        }
      }

      // 昇順で関数を呼び出し
      sort_2way($nums, true);

      // 降順で関数を呼び出し
      sort_2way($nums, false);

    ?>
  </p>
</body>

</html>