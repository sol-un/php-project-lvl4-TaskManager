{{ Form::label('name', __('taskStatus.name')) }}
{{ Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : null)]) }}
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
<br>