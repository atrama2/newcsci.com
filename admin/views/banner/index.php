<a href="banner/add" class="btn btn-default">Add</a><br>
<table class="table table-responsive">
	<?php foreach($this->bannerList as $key => $value) {
		echo '<tr>';
		echo "<td>" . $value['bnr_name'] . "</td>";
		echo "<td>" . $value['bnr_alt'] . "</td>";
		echo "<td>" . $value['bnr_sort'] . "</td>";
		echo "<td>" . $value['bnr_status'] . "</td>";
		echo "<td>" . $value['pub_date'] . "</td>";
		echo "<td>" . $value['exp_date'] . "</td>";
		echo '<td class="col-md-3"><img src="' . $value['bnr_img'] . '" class="img-responsive"></td>';
		echo '</tr>';
	}?>
</table>