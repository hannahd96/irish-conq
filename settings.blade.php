<head>
	<link rel="stylesheet" type="text/css" href="video/main.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<style>
		body{
			background-color:#40bf40 !important;
		}
		.update_field {
			margin-top:20px;
		}		
		
	</style>
</head>

@extends('layouts.app')

@section('content')
<body onload="checkEdits()">
<script type="text/javascript">
	function checkEdits() {

	//find out if the user has previously saved edits
	if(localStorage.userEdits!=null)
	document.getElementById("edit").innerHTML = localStorage.userEdits;
	}
	function saveEdits() {

	//get the editable element
	var editElem = document.getElementById("edit");

	//get the edited element content
	var userVersion = editElem.innerHTML;

	//save the content to local storage
	localStorage.userEdits = userVersion;

	//write a confirmation to the user
	document.getElementById("update").innerHTML="Changes saved!";
}
</script>
<div class="container" style = "width:50%; margin-top:45px; color:black;">
    <div class="row" id = "transparent" style = "border:none;">
        <div class = ".col-md-8 .col-md-offset-2" style ="">
            <div class="panel panel-default" id = "panel-background" style = "border:none;">
                <div class="panel-heading" id = "panel-background" style = "position:relative; background: rgba(204, 204, 204, 0.0); border:none;">
					<h3 style = "font-family:Catamaran, sans-serif;">Settings</h3>
				</div>
				    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					
					<div class = "col-sm-2">
						<!-- KEEP ME EMPTY -->
					</div>	
					<div class = "col-sm-8">
						<p style = "color:black; margin:10px;"><b> You can change any of the following details. Don't forget to hit save at the bottom when you are done.</b></p>
						<!--Username:
						<div id="edit" contenteditable="true" style = "border:1px solid black; padding:5px;">{{ Auth::user()->username }}</div>
						<br>
						<input type="button" value="Save" onclick="saveEdits()" style="float:right; margin-right:30px; margin-bottom:10px;"/>
						<div id="update"></div>-->
						<hr>
						<form method="POST" action="#" style = "color:black; margin:15px;">
							<!-- USE LINE BELOW BECAUSE BROWSERS CANNOT PROCESS PUT REQUESTS -->
							<input type="hidden" name="_method" value="PUT">
							<!-- LINE BELOW STOPS HACKERS -->
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								
								<!-- EACH FIELD IN FORM -->
								<div class = "form-group">
									<label for="username">Username</label>
									<input type="text" class = "form-control" id = "username" name = "username" value="{{ old('username', Auth::user()->name) }}" />
								</div>
								<div class = "form-group">
									
								</div>
								<!-- RETURNS USER TO INDEX -->
								<a href="{{route('home')}}" class="btn btn-default" style = "margin-bottom:10px;">Cancel</a>
								<button type = "submit" class = "btn btn-primary pull-right" style="background-color:#1c1c1c; border:#1c1c1c;">Update</button>
						</form>
						<!--<label for="profileImage">Profile Image</label>
							<form action="#" method="post" enctype="multipart/form-data">
								Select image to upload:
								<input type="file" name="fileToUpload" id="fileToUpload"/>
								<br>
								<input type="submit" value="Upload Image" name="submit"/>
							</form>-->
					</div>	
					<div class = "col-sm-2">
						<!-- KEEP ME EMPTY -->
					</div>	
            </div>
        </div>
    </div>
</div>
</body>

@endsection