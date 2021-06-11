
@extends('layouts.app')

@section('content')
<style type="text/css">
	.show-read-more .more-text{
		display: none;
	}
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="container px-8">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
     	<ul class="nav nav-tabs">

		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="{{route('news.add')}}">Add New News</a>
		  </li>
		</ul>
     </div>
    </div>
  </div>
</div>

<div class="jumbotron" style="margin: 10px;">
  <div class="row">
  	<div class="col-md-12" >
  		<div class="table-responsive">
			<table>
			  <tr>
			    <th>Title</th>
			    <th>Source</th>
			    <th>Description</th>
			    <th>Prediction</th>
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr>
			  @forelse ($news as $val)
			  <tr>
			    <td>{{$val->title}}</td>
			    <td>{{$val->source}}</td>
			    <td>{{$val->description}} </td>
			    <td><p class="show-read-more">{{($val->prediction == 0 ? "Fake" : "Real")}}</p></td>
			    <td><a type="button" href="{{route('news.edit',['id' => $val->id])}}" class="btn btn-primary">Edit</a></td>
			    <td><a type="button" class="btn btn-danger">Delete</a></td>
			  </tr>
				@empty
					<div class="alert-success">
						No news added yet !
					</div>
				@endforelse
			</table>
		</div>
  	</div>
  </div>
</div>


@endsection

