@if (count($errors))
<div class="notification is-danger">
  <ul style="margin-top: 0;">
  	@foreach ($errors->all() as $error)
  		<li>{{ $error }}</li>
  	@endforeach
  </ul>
</div>
@endif
