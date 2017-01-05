@extends('admin.layout.master')

@section('title','Danh sach')
@section('content')
<table border="1" width="400">
	<tr>
		<td>STT</td>
		<td>Tên Loại Tin</td>
		<td>Trang thái</td>
		<td>Sửa</td>
		<td>Xóa</td>

	</tr>
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">

	@if(count($data)>0)
   <?php 
      $i=1;
    ?>
@foreach ($data as  $value)
	 
	<tr>
		<td>{{$i}}</td>
		<td>{{$value->Tentl}}</td>
		<td>{{($value->Trangthai)?'Hiện':'ẩn'}}</td>
		<td><a href="">sửa</a></td>
		<td><a href="<?php echo URL::to('/') ?>/admin/loaitin/xoa/{{$value->id}}">xóa</a></td>
	</tr>
	<?php $i++ ?>
	@endforeach 
	 @endif
</table>


@endsection

@section('script')
<script>
var url="<?php echo URL::to('/') ?>";
	function deloaitin(val)
	{ 

	   var token=$('#_token').val();
		alert(token);
		$.get(url+"/admin/loaitin/xoa/"+val, {_token:token},function(data){
        $('#danhsach').load(url+"/admin/loaitin/xoa/"+val+"#danhsach");
    });
	}

</script>
@stop
