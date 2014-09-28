<!DOCTYPE html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php common_css(); ?>
<?php parse_css( $css ); ?>
<script>
	global_url = '<?php echo site_url(); ?>';
</script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set._.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');$.src='//v2.zopim.com/?2PS2J38IkeJq82vmfebmuNVbwYNtvEmR';z.t=+new Date;$.type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

</head>

<body<?php echo ( isset($pageClass) ? ' class="' . $pageClass.'"' : ''); ?>>