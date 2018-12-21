<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= isset($page_title) ? $page_title : '' ?></title>
<script>
    var CFG = {
        site_url: '<?= trim(site_url(), '/') ?>',
        base_url: '<?= trim(base_url(), '/') ?>',
        current_url: '<?= current_url() ?>',
        csrf: {<?= $this->security->get_csrf_token_name() ?>: '<?= $this->security->get_csrf_hash() ?>'}
    };
</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="http://cdn.staticfile.org/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php foreach($append_css as $item_css){?>
  <link rel="stylesheet" type="text/css" href="<?=$item_css?>">
<?php }?>

