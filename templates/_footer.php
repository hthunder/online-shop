<div class="copyright">
	<?php
		function currentDate() {
			$date = date('Y');
			if ($date != '2020') {
				return "-" . $date;
			}
		}
	?>
	<p>© Интернет магазин "techStore", 2020<?php echo currentDate(); ?></p>
</div>