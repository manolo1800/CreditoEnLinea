@extends('layouts.default')


@section('content')

<table class="table">
    <tr>
        
        <th scope="col">Client_Id</th>
        <th scope="col">Total Amount</th>
    </tr>
    

        @foreach ($clients as $client)
            <tr>
                
                <td>{{$client->Client_Id}}</td>
                <td>{{$client->Total}}</td>
            </tr>    
        @endforeach
</table>


@stop