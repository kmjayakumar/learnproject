@include('Post.header')
<br>
	@if(Session::has('get'))
	<p style="text-align: center;"><button onclick="myFunction()" class="btn btn-info">
		<a href="/viewPost" style="text-decoration:none; color: white;">Data Saved..! Click here to go Home...</a></button></p>
	@endif

<br>
<p style="font-size: 19px; text-align: center;"><strong><i>Data related to <span style="color: red;">{{$posts->name}}</span></i></strong></p>
	
	<form action="{{route('update.post')}}" method="post" id="form">
		@csrf
		
		<input type="hidden" name="id" value="{{$posts->id}}">
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
			<div class="form-group col-md-4 col-sm-4" >
    			<label for="name">Name:</label>
      			<input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{$posts->name}}">
    		</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
    			<label for="age">Age:</label>
    			<input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" minlength="1" min="1" max="135" id="age" class="form-control" name="age" placeholder="Age" required maxlength="3" value="{{$posts->age}}">
    		</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
    			<label for="gender">Gender:</label>
		      	<select class="form-control" id="gender" name="gender" select="none" value="{{$posts->gender}}">
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
		    	<textarea id="address" class="form-control" rows="5" name="address" value="">{{$posts->address}}</textarea>
	    	</div>
	    </div>
	    <div class="row">
			<div class="col-md-4 col-sm-4"></div>
    		<div class="form-group col-md-4">
	    		<label for="phone">Phone No.:</label>
	    		<input type="number" oninput="javascript: if (this.value.length > this.minLength) this.value = this.value.slice(0, this.minLength);" class="form-control" name="phone" placeholder="Phone Number" value="{{$posts->phone}}" minlength="10" >
	      		<!-- <input type="number" class="form-control" name="phone" placeholder="Phone Number" value="{{$posts->phone}}"> -->
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-4 col-sm-4"></div>
    			<div class="form-group col-md-4">
    				<button  class="btn btn-info center-block">Update</button><br>
    				<button  class="btn btn-danger center-block"><a href="/viewPost" style="text-decoration: none; color: white;">Cancel</a></button>
    			</div>
    			<div class="form-group col-md-4">
    				
    			</div>
    	</div>
		
	</form>
@include('Post.footer')