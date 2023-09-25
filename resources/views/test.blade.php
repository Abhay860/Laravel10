@php
    $user = "Abhay Sagar";
    $fruits = ["Apple","orange","banana","Mango"]
@endphp

<script>
    // var data = @json($fruits);
    var data = {{Js::from($fruits)}}
    data.forEach(function(elements){
        console.log(elements);
    });

   
    
</script>