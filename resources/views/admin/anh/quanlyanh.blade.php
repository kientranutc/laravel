@extends('admin.layout.master')
@section('title', 'quản lý ảnh')
@section('content')
<h3>Quản lý ảnh </h3>
<input type="text" name="test" id="test">

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   
      </div>
      <iframe  width="100%" height="550" frameborder="0" src="<?php echo URL::to('/') ?>/public/filemanager/dialog.php?type=1&field_id=test">
        </iframe>
    </div>
  </div>
</div>

@endsection