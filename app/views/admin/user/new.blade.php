<style type="text/css">
.input-error
{
	padding:5px;
	margin-bottom:5px;
	background-color:#FEC5C6;
	color:#F00;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-radius:3px;	
}

.input-error-img
{
	content:url(../img/input-error.png);
	padding-right:5px;
}
</style>

<div class="content">
	@if($errors->has())
   		@foreach ($errors->all() as $error)
      		<div class="input-error"><img class="input-error-img"/>{{ $error }}</div>
  		@endforeach
	@endif
</div>


{{Form::open(array('route'=>'createUser'))}}
<table>
	<tr>
		<td>{{Form::label('real_name','Name: ')}}</td>
		<td>{{Form::text('real_name')}}</td>
	</tr>
	<tr>
		<td>{{Form::label('email','Email: ')}}</td>
		<td>{{Form::text('email')}}</td>
	</tr>
	<tr>
		<td>{{Form::label('password','Password: ')}}</td>
		<td>{{Form::text('password')}}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('Add user')}}</td>
	</tr>

</table>
{{Form::close()}}