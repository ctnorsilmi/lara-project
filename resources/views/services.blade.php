<h1>Our Services</h1>
@if(count($services)>0)
<u1>
    @foreach($services as $services)
    <li>{{$services}} </li>
    @endforeach
    @else
    No Data
    @endif
</u1>