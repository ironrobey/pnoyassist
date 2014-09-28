<?php common_js(); ?>
<?php ( isset($js) ? parse_js( $js ) : '' ); ?>

<?php if($this->uri->segment(2)): ?>
<script type="text/javascript">
Shadowbox.init();
</script>
<?php endif; ?>

</body>
</html>
