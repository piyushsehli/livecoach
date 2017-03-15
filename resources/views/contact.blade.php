@extends('layouts.main')

@section('content')
	<section id="contact">
		<div class="container">
			<div class="row">
				<h1>Contact us</h1>
				<p>We'd love to hear from you.</p>
				<p>To get in touch please use the following form:</p>
			</div>
			<div class="row contact-data">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="row contact-form">
						<label class="col-sm-2">Name</label>
						<input class="col-sm-10"></input>
					</div>
					<div class="row contact-form">
						<label class="col-sm-2">Email</label>
						<input class="col-sm-10"></input>
					</div>
					<div class="row contact-form">
						<label class="col-sm-2">Message</label>
						<textarea class="col-sm-10"></textarea>
					</div>
					<div class="form-group contact-form">
						<button class="pull-right">Submit Form</button>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop