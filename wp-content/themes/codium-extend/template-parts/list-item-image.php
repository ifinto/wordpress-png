<?php
  $title = $post->post_title . ' Png clipart';
  $text  = $post->post_content;
  $array = preg_split('/\s*\R\s*/m', trim($text), NULL, PREG_SPLIT_NO_EMPTY);
  $first = $array[0];
  list($url, $params) = explode('?', $first);
  $src   = wp_upload_dir()['baseurl'] . '/thumb/' . $url;
?>
<img class="attachment-thumbnail size-thumbnail wp-post-image" src="<?= $src ?>" alt="<?= $title ?>">
