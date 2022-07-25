@include('Post.header')
	@if(Session::has('get'))
	<p style="text-align: center;"><button onclick="myFunction()" class="btn btn-info">
		<a href="/viewPost" style="text-decoration:none; color: white;">Data Saved..! Click here to go Home...</a></button></p>
	@endif
<div class="container">
  <h2 style="text-align: center;">Data Addition</h2>

	<form action="{{route('save.post')}}" method="post" id="form">
		@csrf
		
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
			<div class="form-group col-md-4 col-sm-4" >
    			<label for="name">Name:</label>
      			<input type="text" id="name" class="form-control" name="name" placeholder="Name" required="">
    		</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
    			<label for="age">Age:</label>
      			<input type="text" oninput="numberOnly(this.id);" maxlength="3" minlength="1" min="1" max="135" id="age" class="form-control" name="age" placeholder="Age" required >
    		</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
    			<label for="gender">Gender:</label>
		      	<select class="form-control" id="gender" name="gender" select="none">
		        	<option>Male</option>
			        <option>Female</option>
			        <option>Others</option>
		      	</select>
    		</div>
    	</div>
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
		    	<label for="address">Address:</label>
		    	<textarea id="address" class="form-control" rows="5" name="address" required></textarea>
	    	</div>
	    </div>
	    <div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
	    		<label for="phone">Phone No.:</label>
	      		<!-- <input type="phone" class="form-control" name="phone" placeholder="Phone Number" required oninput="numberOnly(this.id);" maxlength="10"> -->
	      		<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" >
    		</div>
    	</div>
    	<div>
    		<button  class="btn btn-info center-block">Submit</button><br>
    		<button  class="btn btn-success center-block"><a href="/viewPost" style="text-decoration: none; color: white;">View Data</a></button><br>
    		
    	</div>

		
	</form>

  
</div>


@include('Post.footer')