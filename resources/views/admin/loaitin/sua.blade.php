@extends('admin.layout.master')

@section('title','Trang sửa')
@section('content')
<form action="<?php echo URL::to('/')?>/admin/loaitin/sua" method="post">
  	
  	<table>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
@endsection