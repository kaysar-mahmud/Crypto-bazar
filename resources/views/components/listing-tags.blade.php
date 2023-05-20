@props(['tagsCsv'])

{{-- here we are passing an array of tagsCsv to props,
     now we wanna loop through value from the databbase soo we.... --}}

@php

    $tags= explode(',',$tagsCsv);
    //explode function is gonna split at ,

@endphp
 
<ul class="flex">
    @foreach($tags as $tag)
    <li
        class="bg-black text-white rounded-xl px-3 py-1 mr-2"
    >
    <!--we canna filter by tag by-->
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
   @endforeach
</ul>   