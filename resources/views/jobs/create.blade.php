<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <h3>Create a New Job</h3>
    <p>We just need a handful of details from you</p>

       <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col" action="/jobs" method="POST">
    @csrf
    <div class="mb-4">
      <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
        Title
      </label>
      <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
      @error('title')
        <p class='text-xs text-red-500 font-semibold mt-2'>{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label  class="block text-gray-700 text-sm font-bold mb-2" for="salary">
        Salary
      </label>
      <input name="salary" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="">
         @error('salary')
        <p class='text-xs text-red-500 font-semibold mt-2'>{{ $message }}</p>
      @enderror
    </div>
    <button class="bg-blue-400 p-2">Submit</button>
  </form>
</div>

</x-layout>