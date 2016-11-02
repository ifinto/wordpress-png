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
<?php
  }
?>