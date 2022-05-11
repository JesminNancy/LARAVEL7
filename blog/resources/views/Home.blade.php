

{{-- @forelse ($dataKey as $Country)

  <li>{{ $Country}}</li>
  
  @empty
     <p>No Data Found</p> 
      
  @endforelse --}}
  
  
@foreach($dataKey as $Country)

   {{-- {{$loop->index}} --}}
   {{-- {{$loop->count}} --}}
   @if($loop->odd)
   {{$Country}}
   @endif
@endforeach



