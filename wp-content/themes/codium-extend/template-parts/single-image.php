<?php
	$title = $post->post_title . ' Png clipart';
	$text = $post->post_content;
	$array = preg_split('/\s*\R\s*/m', trim($text), NULL, PREG_SPLIT_NO_EMPTY);

	foreach ($array as $value) {
		list($url, $params) = explode('?', $value);
		$src = wp_upload_dir()['baseurl'] . '/full/' . $url;
		if ($params) {
			parse_str($params, $img_params);
		}
?>

	<div class="image-wrapper">
		<a href="<?= $src ?>" target="_blank">
			<img class="alignnone size-full" src="<?= $src ?>" alt="<?= $title ?>">
		</a>

		<div class="image-details-left">
			<?php if ($img_params['w'] && $img_params['h']) { ?>
				<p><strong>Resolution: </strong><?= $img_params['w'] ?> x <?= $img_params['h'] ?></p>
			<?php } ?>
			<?php if ($img_params['s']) { ?>
				<p><strong>Image size: </strong><?= $img_params['s'] ?> kB</p>
			<?php } ?>
		</div>

		<div class="image-details-right">
			<a href="<?= $src ?>" download class="download-btn btn btn-success">Download image</a>
		</div>
	</div>

<?php
	}
?>