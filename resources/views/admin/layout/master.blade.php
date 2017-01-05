<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App Name - @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="{{asset('public/adminasset/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{asset('public/adminasset/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('public/adminasset/js/main.js')}}">
	
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	
	tinymce.init({
  selector: '#ndbantin',
  height: 350,
  plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
  ],
  toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
  toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
  image_advtab: true,
  menubar: true,

  //language : "vi_VN",
  toolbar_items_size: 'small',
  relative_urls: false,
  remove_script_host : false,
  external_filemanager_path:"{{asset('public')}}/filemanager/",
  filemanager_title:" Quản lý file" ,
  external_plugins: { "filemanager" :"{{asset('public')}}/filemanager/plugin.min.js"},
  //video_template_callback: videoupload,
  video_template_callback: function(data) {
    return '<video class="video-js vjs-tech" width="' + data.width + '" height="' + data.height + '"' + (data.poster ? ' poster="' + data.poster + '"' : '') + ' controls >\n' + '<source src="' + data.source1 + '"' + (data.source1mime ? ' type="' + data.source1mime + '"' : '') + ' />\n' + (data.source2 ? '<source src="' + data.source2 + '"' + (data.source2mime ? ' type="' + data.source2mime + '"' : '') + ' />\n' : '') + '</video>';
  },
        // file_browser_callback: RoxyFileBrowser,
        // file_browser_callback_types: 'file image media'
});



</script>
</head>
<body>
	@include('admin.layout.header')
	<section id="content">
	   <div class="row">
	   	<div class="col-md-2">
	   		@include('admin.layout.sidebar')

	   	</div>
	   	<div class="col-md-10">
	   		<div class="content-right">
	   			
	   			 @yield('content')
	   		</div>
	   	</div>
	   </div>

	</section>
	@yield('script')
</body>
</html>
