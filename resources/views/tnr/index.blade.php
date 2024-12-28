<x-app-layout>
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }
        .flex-container {
            display: flex;
            flex-direction: column; 
            height: 100%;  
        }

        main {
            display: flex;
            flex-grow: 0; 
        }
        .card{
            flex-direction: row;
            background-color: #EDEBDF;
        }
        .border-custom-color{
            border-color: #312E29;
            background-color: #EDEBDF;
        }
        .text-custom-color-1{
            color: #57544D;
        }
        .custom-color-desc{
            color: #68717A;
        }
        .custom-font{
            font-family: Inter;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-custom-color-1 leading-tight text-4xl">
            {{ __('Tips and Resources') }}
        </h2>
    </x-slot>

    <div class="w-full flex items-center justify-center custom-font">
        <div class="card rounded-xl border-4 border-custom-color w-7/12 h-64">
            <img class="w-52 h-auto object-cover rounded-l-md" src="image 14.png" alt="Card image cap">
            <div class="m-4">
                <h5 class="text-2xl font-bold mb-2">Understanding Eco and Carbon Footprint: A Step Toward Sustainability</h5>
                <p class="custom-color-desc h-28">In the face of a growing environmental crisis, the terms “eco footprint” and “carbon footprint” have become increasingly relevant. These concepts help individuals, businesses, and governments understand their environmental impact and take steps toward sustainability. But what do these terms mean, and how can we reduce our footprints?</p>
                <div class="flex items-end flex-col">
                    <a href="#" class="btn btn-success items-end pt-2">Go somewhere</a>
                </div>           
            </div>
        </div>
    </div>

</x-app-layout>
