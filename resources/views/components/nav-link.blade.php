@props([
    'url' => '/', 
    'active' => false,
    'mobile' => null
    ])

@if($mobile)
<a href="{{$url}}" class="me-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong block px-4 py-2 hover:bg-yellow-700 {{$active ? 'text-yellow-500 font-bold' : ''}}">{{$slot}}</a>
@else
<a href="{{$url}}" class="text-lg group relative me-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5  font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong py-2 {{$active ? 'text-yellow-500 font-bold' : ''}}">
    {{$slot}}
    <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-yellow-600 group-hover:w-3/6"></span>
    <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-yellow-600 group-hover:w-3/6"></span>
</a>
@endif