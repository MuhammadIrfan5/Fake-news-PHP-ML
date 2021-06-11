
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
    <div class="jumbotron" style="margin: 10px;">
        <div class="row">
            <div class="col-md-12" >
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        @forelse ($users as $val)
                            <tr>
                                <td>{{$val->name}}</td>
                                <td>{{$val->email}}</td>
                                <td>{{$val->phone}}</td>
                            </tr>
                        @empty
                            <div class="alert-success">
                                No Users Registered yet !
                            </div>
                        @endforelse
                    </table>
                </div>
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
