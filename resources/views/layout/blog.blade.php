<x-layout>
    <h1>BLOG</h1>
    <x-slot:sidebar>
        <br>
        SIDE BAR BLOG
    </x-slot:sidebar>

        @foreach ($messages as $message )
           <div style='color:peru'> {{ $message['name'] }}</div><br>
        @endforeach


</x-layout>