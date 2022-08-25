@props([
'title' => 'Date From',
'options' => ['payer 1','order 2','payer 3'],
'selectionLabel' => '',
])
<div class="col-span-6 sm:col-span-3 mt-5">
    <label for="dropdown" class="block text-sm font-medium text-gray-600">{{$title}}</label>
    <select id="dropdown" name="dropdown" autocomplete="dropdown" class="mt-2 bg-gray-100 rounded-xl text-sm border-none focus:outline-none text-gray-600 font-extrabold block w-80 h-10 px-5 py-2">
        <option value="" disabled selected>
            @if (isset($selectionLabel) && !empty($selectionLabel))
            {{$selectionLabel}}
            @else
            {{$options[0]}}
            @endif
        </option>
        @foreach($options as $option)
        <option>{{$option}}</option>
        @endforeach
    </select>
</div>