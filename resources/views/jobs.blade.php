<h1>{{$heading}}</h1>

{{-- @if(count($jobs) == 0)
<h1>No job listing found</h1>
@endif --}}

@unless(count($jobs) == 0)
@foreach($jobs as $job)
  <h2>
    <a href="/jobs/{{$job['id']}}">
      {{ $job['title'] }}
    </a>  
  </h2>
  <p>{{ $job['description'] }}</p>
@endforeach

@else
<h1>No job listing found</h1>
@endunless
