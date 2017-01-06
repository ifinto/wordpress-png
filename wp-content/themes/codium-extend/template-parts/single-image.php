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
	<div class="row">
		<div class="col-sm-9">
			<div class="image-wrapper">
				<a href="<?= $src ?>" target="_blank">
					<img class="alignnone size-full" src="<?= $src ?>" alt="<?= $title ?>">
				</a>

				<div class="image-details-left">
				</div>

				<div class="image-details-right">
				</div>
			</div>
			
		</div>
		<div class="col-sm-3 image-details">
			<div class="img-details">
				<?php if ($img_params['w'] && $img_params['h']) { ?>
					<p><strong>Resolution: </strong><?= $img_params['w'] ?> x <?= $img_params['h'] ?></p>
				<?php } ?>
				<?php if ($img_params['s']) { ?>
					<p><strong>Image size: </strong><?= $img_params['s'] ?> kB</p>
				<?php } ?>
			</div>
			<div class="img-share-buttons">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="1" data-show-faces="false" data-action="recommend"></div>
				<div class="g-plusone" data-size="medium" data-count="true"></div>
				<div id="fb-root"></div>
			</div>

			<div class="img-embed">
				<div class="form-group">
					<label>Embed this image on your website</label>				
					<input type="text" onclick="this.select();" class="form-control" value="<img src=&quot;<?= $src ?>&quot;/>">
				</div>
				<div class="form-group">
					<label>Copy direct URL</label>				
					<input type="text" onclick="this.select();" class="form-control" value="<?= $src ?>">
				</div>
			</div>

			<a href="<?= $src ?>" download class="btn btn-success btn-lg btn-download">Download image</a>
			
			<div class="policy-text">
				<p>
					All images on the website are in a PNG file format with transparent background.
					<br>
					We are trying to post pictures in a maximum resolution. Hope they will be helpful for you in web design.
					<br>
					You can use them for free for non-commercial projects and for personal use.
				</p>
				<p>
					All rights reserved by authors of artworks.
				</p>
			</div>
		</div>
	</div>


<?php
	}
?>
