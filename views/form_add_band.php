<h2>Add a Band</h2>
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="inputEmail">Band Name</label>
		<div class="controls">
		<?php echo input('band_name','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Genre</label>
		<div class="controls">
		<?php echo input('band_genre','required')?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail"># Albums</label>
		<div class="controls">
		<?php echo input('band_numalbums','required')?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add Band</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>









<!-- FORM SUBMISSION METHODS
Get: use when something won't result in a change to the server state
Post: use when submitting WILL result in a change in server state -->