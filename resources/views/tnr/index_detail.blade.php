<x-app-layout>
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }

        main {
            display: flex;
            flex-grow: 0; 
            flex-direction: column;
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
        .custom-font-withshadow{
            font-family: Inter;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .custom-font{
            font-family: Inter;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); */
        }
        html, body {
    /* Allow scrolling but hide scrollbar */
    overflow-y: scroll;

    /* For Firefox */
    scrollbar-width: none;

    /* For IE/Edge 10+ */
    -ms-overflow-style: none;
}

.heightonly{
  height: 480px;
}

/* For Chrome, Safari, and Opera */
html::-webkit-scrollbar, 
body::-webkit-scrollbar {
    display: none;
}
    </style>
    <div class="relative w-full">
  <!-- Image (full width) -->
  <img 
    src="{{ asset($tip->image) }}" 
    alt="Your Image"
    class="w-full heightonly"
  />

  <!-- Title in the center of the image -->
  <div class="absolute inset-0 flex items-center justify-center">
    <h1 class="text-white text-3xl md:text-5xl font-bold text-center custom-font-withshadow">
      {{ $tip->title }}
    </h1>
  </div>
</div>

<!-- Content below the image -->
<div class="w-9/12 max-w-4xl mx-auto custom-font pb-28 pt-16">
  <p class="leading-relaxed text-gray-700 text-xl">
    {{ $tip->content }}
  </p>
</div>


    
</x-app-layout>
