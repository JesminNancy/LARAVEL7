

{{-- @forelse ($dataKey as $Country)

  <li>{{ $Country}}</li>
  
  @empty
     <p>No Data Found</p> 
      
  @endforelse --}}
  
  
  @if($loginKey==true)
  
  <h1>You Are Loged In</h1>
  
  @elseif($loginKey==false)
  
  <h1>You Are Not Loged In</h1>
  @else
  <h1>You LogIn Status Not Found</h1>
  @endif



