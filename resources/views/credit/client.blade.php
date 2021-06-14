@extends('layouts.default')


@section('content')
<table class="table">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Rel_Id</th>
        <th scope="col">Client_Id</th>
        <th scope="col">Admin_Id</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
    </tr>
    

        @foreach ($client as $cli)
            <tr>
                <td>{{$cli->Id}}</td>
                <td>{{$cli->Rel_Id}}</td>
                <td>{{$cli->Client_Id}}</td>
                <td>{{$cli->Admin_Id}}</td>
                <td>{{$cli->Date}}</td>
                <td>{{$cli->Description}}</td>
                <td>{{$cli->Amount}}</td>
            </tr>    
        @endforeach
</table>
@stop