@include('Post.header')
	<!-- search -->

	<!-- <form method="GET" action="{{ route('posts') }}">

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="post_search" class="form-control"
                                    placeholder="Search by name" value="{{ old('post_search') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </form> -->

	<!-- search -->
	<br>
	<h2 style="text-align:center;">All Datas</h2><br>
<div class="row">
	<div class="col-md-2 col-sm-2"></div>
	<div class="form-group col-md-8 col-sm-8" >
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Phone</th>
			<th style="text-align: ;">Action</th>
		</tr>
		@foreach($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->name}}</td>
			<td>{{$post->age}}</td>
			<td>{{$post->gender}}</td>
			<td>{{$post->address}}</td>
			<td>{{$post->phone}}</td>
			<td>

				
				<button type="button" class="btn btn-success"><a href="/addPost" style="text-decoration: none; color: white;">Add</a></button>
				<button type="button" class="btn btn-warning"><a href="/editPost/{{$post->id}}" style="text-decoration: none; color: white;">Edit</a></button>
				
				<!-- <button type="button" class="btn btn-danger"><a href="/deletePost/{{$post->id}}" style="text-decoration: none; color: white;">Delete</a></button> -->
				<button type="button" class="btn btn-danger"><a href="/deletePost/{{$post->id}}" style="text-decoration: none; color: white;" onclick="return confirm(' you want to delete?');">Delete</a></button>

			</td>
		</tr>
		@endforeach
	</table>
</div>

@include('Post.footer')
