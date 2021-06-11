
@extends('layouts.app')

@section('content')
    <style type="text/css">
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
                            <a class="nav-link active" aria-current="page" href="{{route('news.show')}}">Show</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news.add')}}">Add New News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron" style="margin: 10px;">
        <div class="row">
            <div class="col-md-12" >
                <form method="POST" action="{{route('news.update',['id' => $news->id])}}" enctype="multipart/from-data" >
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Title</label>
                            <input type="text" value="{{$news->title}}" class="form-control" name="title" id="inputEmail4" placeholder="Title" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Source</label>
                            <input type="text" class="form-control" value="{{$news->source}}"  name="source" id="inputPassword4" placeholder="Source" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Description</label>
                        <textarea class="form-control" rows="8" name="description" placeholder="Description" required>{{$news->description}}</textarea>
                    </div>
{{--                    <div class="custom-file mt-3 mb-3">--}}
{{--                        <input type="file" class="custom-file-input" name="news_image" id="customFile">--}}
{{--                        <label class="custom-file-label" for="customFile">Custom file upload</label>--}}
{{--                    </div></br>--}}
                    <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Sign in</button>
                </form>
            </div>
        </div>
    </div>


@endsection
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "paging":   false,
            "ordering": false,
            "info":     false
        } );
    } );
</script>
