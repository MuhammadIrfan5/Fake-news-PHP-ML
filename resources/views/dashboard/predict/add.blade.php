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
                            <a class="nav-link active" aria-current="page" href="#">Show Predicted News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron" style="margin: 10px;">
        <div class="row">
            <div class="col-md-12" >
                @if(session()->has('message'))
                    <div class="alert {{session('alert') ?? 'alert-success'}}">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" >
                <form method="POST" action="{{route('predict.store')}}"  >
                    @csrf
                    <div class="form-group">
                        <label for="sel1">Select News:</label>
                        <select class="form-control" name="news_predict" id="sel1">
                            @foreach($news as $val)
                                <option value="{{$val->id}}">{{$val->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Predict</button>
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
