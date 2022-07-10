<h1>{{$heading}}</h1>

{{-- @if(count($jobs) == 0)
<h1>No job listing found</h1>
@endif --}}

@unless(count($jobs) == 0)
@foreach($jobs as $jobs)
  <h2>{{ $jobs['title'] }}</h2>
  <p>{{ $jobs['description'] }}</p>
@endforeach

@else
<h1>No job listing found</h1>
@endunless
