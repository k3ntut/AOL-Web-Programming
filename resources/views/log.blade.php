<x-app-layout>

    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }
        body {
            background-color: #EDEBDF;
        }
        .font-fams{
            font-family: Inter;
        }
        .big-title{
            font-weight: 600;
            font-size: 2.5em;
            color: #57544D;
        }
        .small-title{
            color: #7C7A72;
            font-size: 1em;
        }
        .small-bold{
            font-weight: 600;
        }
        .border-custom-color{
            border-color: #312E29;
            background-color: #EDEBDF;
        }
        .back-color{
            background-color: #EDEBDF;
        }
        .addlog-bgcolor{
            background-color: #312e29; 
        }
        .addlog-font-color{
            color: #EDEBDF;
        }
    
        .colored-placeholder::placeholder{
            color: #94a3b8;
        }
    </style>    

    <div class="d-flex justify-content-around items-center w-full h-full pb-20">
        <div class="w-1/2 flex flex-col items-center justify-center">

            <div class="card rounded-xl border-4 border-custom-color" style="width: 16rem;">

                <div class="">
                    <div class="flex justify-center items-center h-16 addlog-bgcolor addlog-font-color text-4xl font-semibold">Add Log</div>
                    <form action="">

                        <div class="form-group pt-3 pb-3 me-4 ms-4">
                            <label for="inputState" class="back-color mb-1">Mode Of Transport</label>
                            <select id="inputState" class="form-control rounded-md border-1 border-slate-400 text-slate-400">
                                <option selected>Choose Type</option>
                                <option>Walk</option>
                                <option>Bike</option>
                                <option>Vehicle</option>
                            </select>
                        </div>
                        
                        <div class="form-group pb-3 me-4 ps-4 ">
                            <label for="inputZip" class="back-color mb-1">Distance</label>
                            <div class="text-slate-400">
                                <input type="number" class="form-control rounded-md border-1 border-slate-400 colored-placeholder" placeholder="Enter Distance">
                            </div>
                        </div>
                        
                        <div class="flex justify-center items-center mb-3 mt-2 me-4 ms-4">
                            <button type="submit" class="btn btn-success w-52 h-9 flex justify-center items-center">Submit</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
        <div class="font-fams w-1/2">
            <div class="">
                <h1 class="big-title">Mode Of Transport</h1>

                <ul class="list-disc small-title p-3 w-3/4">
                    <li><span class="small-bold">Walk:</span> Walking is a carbon-neutral way to get around! By choosing to walk, you're reducing your carbon emissions and improving your health.</li>
                    <li><span class="small-bold">Bike:</span> Biking is a low-carbon mode of transportation. By opting to bike, you're contributing to cleaner air and a healthier planet.</li>
                    <li><span class="small-bold">Vehicle:</span> Tracking your vehicle usage helps you understand your carbon footprint. This awareness can motivate you to make more eco-friendly choices.</li>
                </ul>
            </div>
            <div>
                <h1 class="big-title">Distance</h1>
                <h4 class="small-title pt-3"><span class="small-bold">How to log it:</span> Simply input the distance you walked in kilometers.</h4>
            </div>
        </div>
    </div>

</x-app-layout>