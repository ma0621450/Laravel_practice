<x-layout>
     <x-slot:heading>
        Job Page
    </x-slot:heading>
<h1 class='text-xl font-bold'>{{ $job['title'] }}:</h1>
<h2>This Job pays {{ $job['salary'] }} per year.</h2>
</x-layout>

