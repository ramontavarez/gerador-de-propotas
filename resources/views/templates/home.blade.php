@extends('base')
@section('content')
<!-- START CONTENT FRAME -->
<div class="content-frame">
	<!-- START CONTENT FRAME TOP -->
	<div class="content-frame-top">
		<div class="page-title">
			<h2><span class="fa fa-dashboard"></span> Dashboard</h2>
		</div>
	</div>
	<!-- END CONTENT FRAME TOP -->

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-colorful">
				<div class="panel-heading">
					<h3 class="panel-title">Olá {%username}</h3>
				</div>
				<div class="panel-body">
					<p>Fusce imperdiet neque at lectus faucibus, eu dapibus nibh imperdiet. Cras porttitor magna ut justo iaculis feugiat. Aliquam semper in dolor nec mattis.</p>
					<p>Duis varius arcu in quam laoreet scelerisque. Aenean porta mi et massa congue, sit amet eleifend dui dignissim. Ut venenatis, tortor ac egestas fringilla, nisi mauris rhoncus nibh, facilisis lacinia mi ligula a est.</p>
				</div>
				<div class="panel-footer">
					<button class="btn btn-default">Back</button>
					<button class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>
		</div>
	</div>




</div>
<!-- END CONTENT FRAME -->
@section('scripts')
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/moment.min.js"></script>
<script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
@endsection

@endsection
