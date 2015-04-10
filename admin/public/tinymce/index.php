<!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",theme: "modern", height: 400,
    plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
	    "searchreplace wordcount visualblocks visualchars insertdatetime code media nonbreaking fullscreen",
		"table contextmenu directionality emoticons paste textcolor responsivefilemanager"
    ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
    image_advtab: true ,
    
    external_filemanager_path:"filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
    
 });
</script>

<!-- Place this in the body of the page content -->
<form method="post">
    <textarea></textarea>
</form>