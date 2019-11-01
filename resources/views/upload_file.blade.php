<div class="x_panel">
        <div class="x_title">
	          <h2>Upload File</h2>
	          	<div class="pull-right"></div>
         	  	<div class="clearfix"></div>
        </div>
       
        	<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<form method="POST" enctype="multipart/form-data">
        		{{ csrf_field()}}
        	<div class="form-group">
			<label for="Name">Name :</label>
			<input type="text" name="name" class="form-control"  placeholder="Name" />
			</div>
			<label for="File Name">File :</label>
			<br />
			<input type="file" class="form-control"	/>
			<br /><br />
			<input type="submit" class="btn btn-primary" value="Upload" />
			</form>
			</div>
        </div>
</div>