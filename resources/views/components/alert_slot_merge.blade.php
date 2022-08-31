@props([
    'type'=>'info'
])
@php
    switch ($type){
        case 'info':
            $clase_color = "bg-orange-100 border-orange-500 text-orange-700";
            break;
        case 'danger':
            $clase_color = "bg-red-100 border-red-500 text-red-700";
            break;
        default:
            $clase_color = "bg-blue-100 border-blue-500 text-blue-700";
            break;
    }
@endphp
@dump($attributes)
<div {{$attributes->merge(['class'=>"border-l-4 p-4 $clase_color"])}} role="alert">
    <p class="font-bold">{{$titulo}}</p>
    {{$slot}}
</div>
