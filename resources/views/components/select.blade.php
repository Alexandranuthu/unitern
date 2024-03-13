@props(['options' => [], 'name', 'id', 'label'])

@php
    $id = $id ?? $name;
@endphp

<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-200 dark:text-gray-300">{{ $label }}</label>
    <select id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-500 bg-white dark:bg-gray-800 text-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }}>
        //the slot is a special variable that allows you to define content within a component that will be rendered in a specific location determined by the component's template. This is useful when you want to pass dynamic content to a component and include it in the component's structure.
        //This allows for greater flexibility and reusability of components, as you can customize the content included within a component based on how you use it in different parts of your application. Additionally, using slots makes your components more dynamic and easier to maintain.
        {{ $slot }}
    </select>
</div>
