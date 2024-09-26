@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->descriptions}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}"class="btn btn-primary">Details</a></td> 
            <td><a href="/reports/{{$report->id}}/edit"class="btn btn-warning">Edit</a></td>
            <td><form action="/reports/{{$report->id}}" method="post"><input type="submit"
            value="Delete"></td>
            @csrf
            @method('DELETE')</form></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection