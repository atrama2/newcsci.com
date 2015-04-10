<div class="col-lg-12">
<h1>Content</h1>
<a href="content/add"><button type="button" class="btn btn-default">+Add</button></a>
<table class="table table-hover table-content">
	<tr>
		<th><a href="?orderby=content_id&order=<?php echo $this->order; ?>">#</a></th>
		<th><a href="?orderby=content_title&order=<?php echo $this->order; ?>">Title</a></th>
		<th><a href="?orderby=category_name&order=<?php echo $this->order; ?>">Category</a></th>
		<th><a href="?orderby=status&order=<?php echo $this->order; ?>">Status</a></th>
		<th><a href="?orderby=public_date&order=<?php echo $this->order; ?>">Public Date</a></th>
		<th><a href="?orderby=expire_date&order=<?php echo $this->order; ?>">Expire Date</a></th>
		<th><a href="?orderby=hits&order=<?php echo $this->order; ?>">Hits</a></th>
	</tr>
<?php
    foreach($this->contentList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['content_id'] . '</td>';
        echo '<td>' . $value['content_title'] . '</td>';
        echo '<td>' . $value['category_name'] . '</td>';
        echo '<td>' . $value['status'] . '</td>';
        echo '<td>' . $value['public_date'] . '</td>';
        echo '<td>' . $value['expire_date'] . '</td>';
        echo '<td>' . $value['hits'] . '</td>';
        echo '</tr>';
    }
?>
</table>
</div>

