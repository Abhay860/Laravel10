<h3>This is show file</h3>
<a href="/post">post</a>
@php
    $fruits = ["one"=>"Apple","two"=>"Orange","three"=>"Mangoes"];
    $value = "abhays";
@endphp
@includeUnless(empty($value),'post',['data' => $fruits])