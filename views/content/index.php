<div class="container">
<h1>Content</h1>
<?php foreach($this->contentList as $key => $value) { ?>
<div class="col-sm-6 col-md-4 col-lg-3">
	<div class="thumbnail">
      <img src="<?php echo $value['into_image']; ?>" alt="...">
      <div class="caption">
        <b><?php echo $value['content_title']; ?></b>
        <p><?php echo $value['into_content']; ?></p>
      </div>
    </div>
</div>
<?php } ?>

<div class="clearfix"></div>

<?php 
$pagination = $this->pagination;
if($pagination['pageCount'] > 1) { ?>
<div class="paginator-container">	
	<nav>
		<ul class="pagination pagination-sm">
			<li><a href="/content?page=<?php echo $pagination['page']-1; ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
			<?php for ($i = 1; $i <= $pagination['pageCount']; $i++) { 
				  	if($i === $pagination['page']){ ?>
					<li class="active"><a><?php echo $i; ?></a></li>
				<?php } else { ?>
					<li><a href="/content?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			<?php } ?>
	    	<li><a href="/content?page=<?php echo $pagination['page']+1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
		</ul>
	</nav>
</div>	
<?php } else { } ?>
	

