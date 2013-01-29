<?php 
//Read all lines of the CSV file into an array
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
?>
<h2>All Bands</h2>
<table class="table table-hover">
<thead>
	<tr>
		<th>Name</th>
		<th>Genre</th>
		<th># Albums</th>
		<th></th>
	</tr>
</thead>
<?php 
//Read all lines of the CSV file into an array
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES); //File function in php returns an array of all lines in the file listed

//Counter variable for line number
$i = 0;

//Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$name = $parts[0];
	$genre = $parts[1];
	$num_albums = $parts[2];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$genre</td>";
	echo "<td>$num_albums</td>";
	echo "<td><a href=\"./?p=form_edit_band&band=$i\">Edit</a> <a href=\"#\">Delete</a></td>";
	echo '</tr>';
	
	$i++; //Increment line number
}
?>
</table>