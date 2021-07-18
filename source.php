<!DOCTYPE html>
<html>
	<head>
		<title>Homoglyph Converter by @xchopath</title>
	</head>
	<body>
		<form method="post">
			<center>
				<br>
				<h2 style="font-family: Courier;margin: 0;font-weight: normal;">Homoglyph Converter</h2><br>
		    		<textarea name="inputz" style="width: 600px;height: 130px;" placeholder="here ur text..."></textarea><br><br>
		    		<input type="submit" value="convert"/>
		    	</center>
		</form>

		<?php
			if(!empty($_POST['inputz'])) {
				$string = htmlentities($_POST['inputz']);
				$inpt1 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
				$conv1 = ['а', 'b', 'с', 'd', 'е', 'f', 'g', 'h', 'i', 'ϳ', 'k', 'l', 'm', 'n', 'ο', 'р', 'q', 'r', 'ѕ', 't', 'u', 'v', 'w', 'x', 'у', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
				$out1 = str_replace($inpt1, $conv1, $string);
				$inpt2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
				$conv2 = ['ａ', 'ｂ', 'ｃ', 'ｄ', 'ｅ', 'ｆ', 'ｇ', 'ｈ', 'ｉ', 'ｊ', 'ｋ', 'ｌ', 'ｍ', 'ｎ', 'ｏ', 'ｐ', 'ｑ', 'ｒ', 'ｓ', 'ｔ', 'ｕ', 'ｖ', 'ｗ', 'ｘ', 'ｙ', 'ｚ', 'Ａ', 'Ｂ', 'Ｃ', 'Ｄ', 'Ｅ', 'Ｆ', 'Ｇ', 'Ｈ', 'Ｉ', 'Ｊ', 'Ｋ', 'Ｌ', 'Ｍ', 'Ｎ', 'Ｏ', 'Ｐ', 'Ｑ', 'Ｒ', 'Ｓ', 'Ｔ', 'Ｕ', 'Ｖ', 'Ｗ', 'Ｘ', 'Ｙ', 'Ｚ'];
				$out2 = str_replace($inpt2, $conv2, $string);
		?>
			<center>
				<div style="border:1px solid #000000;padding:10px;width:600px">
					<div style="background:#000000;color:#FFFFFF;margin-top:10px;"><big>Homoglyph #1</big></div>
						<div style="padding:15px;border:1px dotted #000000;text-align:left;">
							<?php echo "$out1"; ?>
						</div>
					<div style="background:#000000;color:#FFFFFF;margin-top:10px;"><big>Homoglyph #2</big></div>
						<div style="padding:15px;border:1px dotted #000000;text-align:left;">
							<?php echo "$out2"; ?>
						</div>
				</div>
			</center>
		<?php
			}
		?>
	</body>
</html>
