

@forelse ($dataKey as $Country)

  <li>{{ $Country}}</li>
  
  @empty
     <p>No Data Found</p> 
      
  @endforelse



