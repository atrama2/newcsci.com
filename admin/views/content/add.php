<script type="text/javascript" src="http://newcsci.com/admin/public/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    mode: "textareas",theme: "modern", editor_selector : "content", height: 400,theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
    font_size_style_values: "12px,13px,14px,16px,18px,20px",
    plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
	    "searchreplace wordcount visualblocks visualchars insertdatetime code media nonbreaking fullscreen",
		"table contextmenu directionality emoticons paste textcolor responsivefilemanager"
    ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect ",
    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code fullscreen | sizeselect | bold italic | fontselect |  fontsizeselect",
    image_advtab: true ,
    
    /*external_filemanager_path:"../public/tinymce/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "filemanager/plugin.min.js"}*/
    
    filemanager_crossdomain: true,
    external_filemanager_path:"http://newcsci.com/admin/public/tinymce/filemanager/",
    external_plugins: { "filemanager" : "http://newcsci.com/admin/public/tinymce/filemanager/plugin.min.js"},
    
 });
 
</script>
<script>
  $(function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  });
</script>
<form method="post" action="create">
<div class="row">

	<div class="col-lg-9">
		<div class="col-lg-12 main-content">
			<h1>เพิ่ม<small>เนื้อหาใหม่</small></h1>	
			<div class="form-group">
				<input name="content_title" type="text" class="form-control" id="inputTitle" placeholder="ใส่หัวข้อตรงนี้">
			</div>
			<hr>
			<h4>เนื้อหา</h4>
			<div class="form-group">
				<textarea name="content" class="form-control content"></textarea>
			</div>
		</div>
	</div><!-- col-lg-9 -->
	
	<div class="col-lg-3">
		<div class="panel panel-inverse" id="panel-add-content">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-target="#preContent" >เนื้อหาส่วนต้น</a>
				</h4>
			</div>
			<div id="preContent" class="panel-collapse collapse">
				<div class="panel-body">
					<textarea name="into_content" rows="4" style="resize: none;" class="form-control" ></textarea>
				</div>
			</div>
		</div>
		<div class="panel panel-inverse" id="panel-add-content">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-target="#preImage" >รูปภาพพิเศษ</a>
				</h4>
			</div>
			<div id="preImage" class="panel-collapse collapse">
				<div class="panel-body">
					<!-- Large modal -->			
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
						<div class="modal-content" style="min-height:400px;">
							<iframe  width="100%" height="400" frameborder="0"
								src="<?php echo URL;?>public/tinymce/filemanager/dialog.php?type=1&field_id=fieldID">
							</iframe>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
							</div>
						</div>
					  </div>
					</div>
					<div class="input-append">
						<input name="into_image" id="fieldID" type="text" value="" class="form-control" >
					</div>
					<br><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">ใส่รูปภาพพิเศษ</button>
				</div>
			</div>
		</div>
		<div class="panel panel-primary" id="panel-add-content">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-target="#postDetail" >*รายละเอียดการโพส</a>
				</h4>
			</div>
			<div id="postDetail" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="form-group">
						<label>โพสโดย</label>
						<input name="author" type="text" class="form-control" value="Admin">
					</div>
					<div class="form-group">
						<label>หมวดหมู่</label>
						<select name="category" class="form-control">
							<?php foreach($this->categoryList as $key => $value){
								echo '<option value="' . $value['category_id'] . '">';
								echo $value['category_name'];
								echo '</option>';
							}?>
						</select>
					</div>
					<div class="form-group">
						<label>สถานะของโพส</label>
						<select name="status" class="form-control">
							<option value="public">เผยแพร่</option>
							<option value="draft">ฉบับร่าง</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-block">บันทึก</button>
				</div>
			</div>
		</div>
		<div class="panel panel-inverse" id="panel-add-content">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-target="#postDateTime" ><span class="glyphicon glyphicon-time"></span> ตั้งเวลา</a>
				</h4>
			</div>
			<div id="postDateTime" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="form-group">
						<label>วันที่เผยแพร่</label>
						<div class="input-group">
							<input name="public_date" id="public_date" type="text" class="form-control datepicker" value="<?php echo date("Y-m-d"); ?>" aria-describedby="public_date">
							<span class="input-group-addon" id="public_date"><label for="public_date" class="glyphicon glyphicon-calendar"></label></span>
						</div>
						<label>เวลาที่เผยแพร่</label><small> Ex. 23:59</small>
						<div class="input-group">
							<input name="public_time" id="public_time" type="time" class="form-control" aria-describedby="public_time">
							<span class="input-group-addon" id="public_time"><label for="public_time" class="glyphicon glyphicon-time"></label></span>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label>วันที่สิ้นสุดการเผยแพร่</label>
						<div class="input-group">
							<input name="expire_date" id="expire_date" type="text" class="form-control datepicker" placeholder="วันที่สิ้นสุดการเผยแพร่" aria-describedby="expire_date">
							<span class="input-group-addon" id="expire_date"><label for="expire_date" class="glyphicon glyphicon-calendar"></label></span>
						</div>
						<label>เวลาที่สิ้นสุดการเผยแพร่</label><small> Ex. 23:59</small>
						<div class="input-group">
							<input name="expire_time" id="expire_time" type="time" class="form-control" aria-describedby="expire_time">
							<span class="input-group-addon" id="expire_time"><label for="expire_time" class="glyphicon glyphicon-time"></label></span>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- col-lg-3 -->
</div><!-- row -->
</form>