	</div>

	<div id="footer">
		<div class="jumbotron push-spaces">
			<strong><?php echo $this->lang->line('common_copyrights', date('Y')); ?> ·
				<a href="https://opensourcepos.org" target="_blank"><?php echo $this->lang->line('common_website'); ?></a> ·
				<?php echo $this->config->item('application_version'); ?> - <a target="_blank" href="https://github.com/opensourcepos/opensourcepos/commit/<?php echo $this->config->item('commit_sha1'); ?>"><?php echo substr($this->config->item('commit_sha1'), 0, 6); ?></a></strong>.
		</div>
	</div>

	<script type="text/javascript">
		<?php if ($this->session->flashdata('success')) { ?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php } else if ($this->session->flashdata('error')) {  ?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php } else if ($this->session->flashdata('warning')) {  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php } else if ($this->session->flashdata('info')) {  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
	</script>
</body>

</html>