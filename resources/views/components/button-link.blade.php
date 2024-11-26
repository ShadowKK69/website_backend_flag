@props([
    'url' => '/',
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'active' => false,
    'block' => false,
])

<a
href="{{$url}}"
class="{{$bgClass}} {{$hoverClass}} {{$textClass}} px-4 py-2 rounded hover:shadow-md transition duration-300 {{$active ? 'bg-red-500 hover:bg-red-600 font-bold' : ''}} {{$block ? 'block' : ''}}"
>
<i class="fa fa-edit"></i> {{$slot}}
</a>