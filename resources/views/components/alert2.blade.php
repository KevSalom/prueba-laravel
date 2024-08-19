@props(['type' ])

@php
$class = $type == 'info' ? 'bg-blue-100' : ($type == "danger" ? "bg-red-100" : "bg-green-100");
@endphp


<div class="px-2 py-2 border-2 rounded-md w-[30%] {{$class}}">
    Soy una alerta de prueba y el texto es <strong>{{ $slot }} {{$text2}}</strong>
</div>
