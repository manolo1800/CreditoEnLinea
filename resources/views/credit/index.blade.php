
@extends('layouts.default')


@section('content')
    

    
    
    <form action="{{route('Credits.search')}}" method="GET" class="row g-3">
      
        <div class="row">
            <div class="col">
                <input type="text" name="Client_Id" placeholder="buscar" class="form-control">
            </div>
            <div class="col">
                <input type="submit" value="buscar" class="btn btn-primary">
            </div>    
        </div>   
    </form>
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
        
    
            @foreach ($credits as $credit)
                <tr>
                    <td>{{$credit->Id}}</td>
                    <td>{{$credit->Rel_Id}}</td>
                    <td>{{$credit->Client_Id}}</td>
                    <td>{{$credit->Admin_Id}}</td>
                    <td>{{$credit->Date}}</td>
                    <td>{{$credit->Description}}</td>
                    <td>{{$credit->Amount}}</td>
                </tr>    
            @endforeach
    </table>

    <div class="d-flex justify-content-center">
        {!!$credits->links()!!}
    </div>
@stop


