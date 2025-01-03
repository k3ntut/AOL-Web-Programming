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

        .card {
            flex-direction: row;
            background-color: #EDEBDF;
        }

        .border-custom-color {
            border-color: #312E29;
            background-color: #EDEBDF;
        }

        .text-custom-color-1 {
            color: #57544D;
        }

        .custom-color-desc {
            color: #68717A;
        }

        .custom-font {
            font-family: Inter;
        }
    </style>

    <x-slot name="header">
        <div class="flex justify-between align-center pb-2 pt-2">
            <div>
                <h2 class="font-semibold text-custom-color-1 leading-tight text-4xl">
                    {{ __('Tips and Resources') }}
                </h2>
            </div>
            <div class="custom-font">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add TnR
                </button>

                <!-- Modal for adding Tips and Resources -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ route('tips.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title custom-font font-semibold" id="exampleModalLabel">Add Tips and Resources Content</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form fields -->
                                    <div class="form-group mb-2">
                                        <label for="title">Content Title</label>
                                        <input type="text" class="form-control rounded-md" id="title" name="title" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="content">Content</label>
                                        <textarea class="form-control rounded-md" id="content" name="content" rows="8" placeholder="Enter Content" required></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="image">Upload Image</label> <br>
                                        <input type="file" class="form-control-file" name="image" id="image" class="rounded-md" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>

    <div>
        @foreach ($tipsandresources as $tip)
        <div class="w-full flex items-center justify-center custom-font mb-4">
            <!-- Fixed card height & width -->
            <div class="card flex rounded-xl border-4 border-custom-color h-64 w-8/12 overflow-hidden">
                <!-- Image occupies a fixed width, full height -->
                <img src="{{ $tip->image }}" alt="{{ $tip->title }}" class="w-52 h-full object-cover rounded-l-lg" />

                <!-- Text & button area -->
                <div class="p-4 flex flex-col justify-between w-full">
                    <div>
                        <h5 class="text-2xl font-bold mb-2">{{ $tip->title }}</h5>
                        <!-- Limit paragraph height, hide overflow -->
                        <p class="custom-color-desc overflow-hidden h-24">{{ $tip->content }}</p>
                    </div>

                    <!-- Button at the bottom-right -->
                    <div class="flex justify-end mt-2">
                        <a href="{{ route('tips.show', $tip->id) }}" class="btn btn-success">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
