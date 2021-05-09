@include('admin/header')


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: blue;
		cursor: inherit;
		display: block;
	}

	#img-upload{
		margin-top: 5px;
		width: 30%;
	}
</style>

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Banner</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Banner</li>
		</ol>

		<div class="card mb-4">
			<div class="card-header">
				<i class="fas fa-table mr-1"></i>
				Banner Ditail
			</div>
			<div class="card-body">
				<form method="post" action="{{url('/update/banner/'.$banner->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="container">
						<div class="col-md-6">
							<div class="form-group">
								<label>Upload Image</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span style="background-color: blue;color: white" class="btn btn-default btn-file">
											Browse… <input name="img" type="file" id="imgInp">
										</span>
									</span>
									<input name="img" type="hidden" class="form-control" readonly>
								</div>
								<img  id='img-upload'/>
							</div>
						</div>
					</div>
					<div class="col">
						<input value="{{$banner->text}}" name="text" type="text" class="form-control" placeholder="Enter title">
					</div>
					<div class="col-md-6">
						<input style="margin-top: 5px" type="submit" class="btn btn-primary" name='submit_image' value="Submit"/>
					</div>

				</div>
			</form>
		</div>
	</div>

</main>



<script type="text/javascript">
	$(document).ready( function() {
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

			var input = $(this).parents('.input-group').find(':text'),
			log = label;

			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
			
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#img-upload').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imgInp").change(function(){
			readURL(this);
		});   
	});
</script>

@include('admin/footer')