<x-layout>
     <x-slot:heading>
        Job Page
    </x-slot:heading>
<h1 class='text-xl font-bold'>{{ $jobs['title'] }}:</h1>
<h2>This Job pays {{ $jobs['salary'] }} per year.</h2>
<p class='my-5  '>
    <a class="border p-2  underline" href="/jobs/{{ $jobs->id }}/edit">Edit</a>
</p>
</x-layout>

