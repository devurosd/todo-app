@props(['active' => false])
<a class="
    {{$active ? 'bg-lime-900 text-white' : 'text-green transition hover:bg-gradient-to-r from-lime-500 hover:text-white'}}
    rounded-md
    px-3
    py-2
    text-sm
    font-semibold
    border-solid
    border-2 border-lime-400
"
 {{$attributes}}>{{$slot}}</a>