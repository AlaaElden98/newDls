@props([
'title' => 'Date From',
])

<div class="col-span-6 sm:col-span-3 mt-5">
    <label for="date" class="block text-sm font-medium text-gray-600">{{$title}}</label>
    <input class="bg-gray-100 w-80 h-10 px-5 pl-10 rounded-xl text-sm" type="date" id="date" name="date">
</div>