<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>PHP基礎編</title>
</head>

<body>
	<p>
			<?php
			// 生徒10人分の点数を入れる変数score1〜score10を作成
			$user_name1 = 80;
			$user_name2 = 60;
			$user_name3 = 55;
			$user_name4 = 40;
			$user_name5 = 100;
			$user_name6 = 25;
			$user_name7 = 80;
			$user_name8 = 95;
			$user_name9 = 30;
			$user_name10 = 60;

			// 合計点を出力する
			echo $user_name1 + $user_name2 + $user_name3 + $user_name4 + $user_name5 + $user_name6 + $user_name7 + $user_name8 + $user_name9 + $user_name10;


			echo '<br>';

			// 平均点を出力する
			echo ($user_name1 + $user_name2 + $user_name3 + $user_name4 + $user_name5 + $user_name6 + $user_name7 + $user_name8 + $user_name9 + $user_name10) / 10;
			?>
	</p>
</body>

</html>