@props([
    'url' => '/',
    'bgClass' => 'bg-yellow-700',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'active' => false,
    'block' => false,
])

<a
href="{{$url}}"
class="{{$bgClass}} {{$hoverClass}} {{$textClass}} shadow-lg shadow-cyan-500/50 me-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong px-4 py-2 rounded hover:shadow-md transition duration-300 {{$active ? 'bg-red-500 hover:bg-red-600 font-bold' : ''}} {{$block ? 'block' : ''}}"
>
<i class="fa fa-edit"></i> {{$slot}}
</a>