@extends('admin.layout.master')
@section('title', 'Thêm bản tin')
@section('content')
<h3>bản tin</h3>

<table >
	<tr>
		<td>Tên bản tin:</td>
		<td><input type="text" name="tenbantin" id="tenbantin"></td>
	</tr>
	<tr>
		<td>Nội dung:</td>
		<td>
			<textarea name="ndbantin" id="ndbantin" ></textarea>
		</td>
	</tr>
</table>


@endsection