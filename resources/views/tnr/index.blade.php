<x-app-layout>
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }
        
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight text-4xl">
            {{ __('Tips and Resources') }}
        </h2>
    </x-slot>

</x-app-layout>
