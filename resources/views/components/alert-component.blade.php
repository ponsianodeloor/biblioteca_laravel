<div {{$attributes->merge(['class'=>"border-l-4 p-4 $clase_color"])}} role="alert">
    <p class="font-bold">{{$titulo}}</p>
    {{$slot}}
</div>
