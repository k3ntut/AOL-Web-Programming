<x-app-layout>

    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }

        body {
            background-color: #EDEBDF;
        }
        
        .square-carbon {
            height: 12em;
            width: 56em;
            border-radius: 16px;
            border: 4px solid black;  
        }

        .text-size-color-carbon{
            font-family: Inter;
            font-size: 4.5em;
            font-weight: bold;
            color: #312E29;
        }

        .text-size-color-number-carbon{
            font-family: Inter;
            font-size: 3em;
            font-weight: bold;
            color: #312E29;
        }

        .square-card{
            height: 18.1em;
            width: 18em;
            border-radius: 16px;
            border: 4px solid black;
        }

        .text-size-color-number-type{
            font-family: Inter;
            font-size: 1.5em;
            font-weight: bold;
            color: #312E29;
        }

        .text-size-range-type{
            font-family: Inter;
            font-size: 1.5em;
            font-weight: bold;
            color: #312E29;
        }

        .color-background{
            width: 15.6em;
            height: 12.5em;
            border-radius: 10px;
            background-color: #312E29;
        }

        .type-color{
            color: #EDEBDF;
            font-size: 2em;
            font-weight: bold;
        }

        .logo-color{
            color: #EDEBDF;
            font-size: 4em;        
        }
    </style>   

    <!-- Flex container to center content -->
    <div class="flex items-center justify-center flex-col w-full h-full"> <!-- Full height and horizontal center -->
        
        <!-- Total Carbon Footprint Box -->
        <div class="flex items-center justify-center flex-col square-carbon m-2">
            <h1 class="text-size-color-carbon">Total Carbon Footprint</h1>
            <h2 class="text-size-color-number-carbon">@if($totalCarbonFootprint == 0)
             #
            @else
                {{ $totalCarbonFootprint }}
            @endif
                kgCO2
        </h2>
        </div>
        
        <!-- Flex container for Walk, Bike, Vehicle -->
        <div class="flex space-x-4 mt-4 mb-4">
            @foreach ($habits as $habit)
            <div class="flex items-center justify-center flex-col square-card">
                <div class="color-background flex items-center justify-center flex-col">
                    @if ($habit->types == 'walk')
                        <i class="bi bi-person-walking logo-color"></i>
                        <div class="type-color">Walk</div>
                    @elseif ($habit->types == 'bike')
                    <div class="">
                    <i class="fa fa-motorcycle logo-color mt-2"></i>
                    </div>                        
                    <div class="type-color mt-4">Motor Bike</div>
                    @elseif ($habit->types == 'vehicle')
                        <i class="bi bi-car-front-fill logo-color"></i>
                        <div class="type-color">Vehicle</div>
                    @endif
                </div>

                <div class="mt-3 text-size-range-type">
                @if($habit->habit_distance == 0)
             #
            @else
                {{ $habit->habit_distance }}
            @endif
            km
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Add Log Button -->
        <a href="{{ route('log.index') }}" class="btn btn-success">Add Log</a>

    </div>

</x-app-layout>