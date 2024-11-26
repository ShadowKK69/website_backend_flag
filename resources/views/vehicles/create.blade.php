<x-layout>
    <x-slot name="title">Fofinhos SA | Create Vehicle</x-slot>
    <h1>Insert New Vehicle</h1>
    <form action="/" method="POST">
        @csrf
        <input type="text" name="brand" placeholder="brand">
        <input type="text" name="model" placeholder="model">
        <button type="submit">Insert</button>
    </form>
</x-layout>
