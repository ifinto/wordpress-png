<?php
  $title = $post->post_title . ' Png clipart';
  $text = $post->post_content;
  $array = preg_split('/\s*\R\s*/m', trim($text), NULL, PREG_SPLIT_NO_EMPTY);

  foreach ($array as $value) {
    $src   = wp_upload_dir()['baseurl'] . '/full/' . $value;
?>
    <a href="<?= $src ?>" target="_blank">
      <img class="alignnone size-full" src="<?= $src ?>" alt="<?= $title ?>">
    </a>

    <div class="download-btn-holder">
    	<a href="<?= $src ?>" download class="download-btn">Download image</a>
    </div>
    <div class="image-details">
	    <p>
	    	<!-- <strong>Resolution: </strong><?= $post->image_resolution ?> -->
	    </p>
	    <p>
	    	<!-- <strong>Image size: </strong><?= $post->image_size ?> -->
	    </p>
	    <br>
    </div>

<?php
  }
?>