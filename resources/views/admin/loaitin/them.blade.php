@extends('admin.layout.master')
@section('title', 'Page Title')
@section('content')
  
<h3>
@if(session('thongbao'))
{{session('thongbao')}}
@endif
</h3>
<h1>
  
  @if(count($errors)>0)
    @foreach ($errors ->all()  as $value) 
           {{$value}}
     @endforeach
  @endif
</h1>
<div id="danhsach">
  <form action="<?php echo URL::to('/')?>/admin/loaitin/them" method="post">
  	
  	<table>
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
  		<tr>
  			<td>Loại Tin</td>
  			<td>
  				
  				<input type="text" name="loaitin" id="loaitin">
  			</td>
  		</tr>
  		<tr>
  			<td>Trạng thái</td>
  			<td>
  				<select name="trangthai">
  					<option value="">-Chọn trạng thái-</option>
  					<option value="0">Ẩn</option>
  					<option value="1">Hiện</option>}
  					
  				</select>
  			</td>
  		</tr>
  		<tr><td>
  			
  			<input type="submit" value="thêm">
  		</td></tr>
  	</table>
  </form>
  </div>
@endsection