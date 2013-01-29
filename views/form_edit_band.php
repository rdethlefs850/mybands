<?php 
//Read all lines of the CSV file into an array
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);

//Get the line associated with the 'band' parameter in the QS
$band = explode(',',$lines[$_GET['band']]);
?>

<h2>Edit Band</h2>
<form class="form-horizontal" action="actions/edit_band.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['band'] ?>" />
	<div class="control-group">
		<label class="control-label" for="inputEmail">Band Name</label>
		<div class="controls">
		<?php echo input('band_name','required', $band[0])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail">Genre</label>
		<div class="controls">
		<?php echo input('band_genre','required', $band[1])?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="inputEmail"># Albums</label>
		<div class="controls">
		<?php echo input('band_numalbums','required',$band[2])?>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-warning">Edit Band</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>
















