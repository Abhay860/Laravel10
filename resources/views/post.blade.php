 
<h1>Welcome to post page</h1>
<a href="/welcome">welcome</a>
<a href="/show">show</a>
{{-- {!!"<h1>Hello Abhay<//h1>"!!} --}}
    <br>
    {{-- @php
        $user = "Abhay Sagar ";
    @endphp
{{$user}} --}}

{{-- @foreach ( $data as $key => $value )
    <p>{{$key}} - {{$value}}</p>
@endforeach --}}

@forelse ( $data as $key => $value)
<p>{{$key}} - {{$value}}</p>
@empty
    <p>Data Not Found!</p>
@endforelse

@php
    $names = ["Abhay","salman khan","Jaypal","Abhishek","Ram","Riyanshi"];
@endphp


<ul>
   
    @foreach ($names as $item)
    @if ($loop->even)
        <li style="color: red">{{$loop->iteration}} - {{$item}}</li>
    
     
          
      @elseif($loop->odd)
          
        <li style="color: green">{{$loop->iteration}} - {{$item}}</li>
     @else
     <li>{{$loop->iteration}} - {{$item}}</li>

    @endif
        
    
    @endforeach
</ul>
