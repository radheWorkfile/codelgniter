<!-- controller part with fade in fade out -->
<?php 
if ($update) {
$this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Successfully added.</div>');
} else {
$this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');
}
?>
 <!-- View part part  fade in fade out -->
<?php if ($this->session->flashdata('flash-success')): ?><div id="flashMsg">
<?= $this->session->flashdata('flash-success'); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('flash-error')): ?>
<div id="flashMsg"><?= $this->session->flashdata('flash-error'); ?></div>
<?php endif; ?>
<script>
$(document).ready(function () {
$("#flashMsg").hide().fadeIn(1000).delay(2000).fadeOut(1000);
});
</script>
 <!-- View part end -->