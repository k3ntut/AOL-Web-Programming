<x-app-layout>
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('InterVariable.ttf') }}') format('truetype');
        }
        p{
            color: #57544D;
            font-family: Inter;
            font-weight: 300;
        }
        .jumbotron {
            height: 500px;
            margin-top: -30px;
            background-image: url('./imgs/image_11.png');
            background-size: cover;
            color: #edebdf;
            font-weight: bold;
            font-size: 80px;
            padding-top: 200px;
            z-index: -20;
            font-family: Inter;
        }
        .jumbotron p{
            color: #edebdf;
        }
        .isi{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            background-color: #edebdf;
        }
        .head1 img{
            height: auto;
        }
        .head1{
            display: flex;
            flex-direction: row;
            margin-bottom: 30px;
        }
        .head2{
            display: flex;
            flex-direction: column;

        }
        .head2 .feat-isi{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .head2 .kotak{
            width: 32%;
            height: auto;
            text-align: justify;
        }
        .judul{
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
            font-size: 38px;
        }
        main{
            flex-direction: column;
        }
        .p1{
            text-align: left;
            margin-bottom: 10px;
        }
        .hed{
            font-weight: 600;
        }
        .head3{
            margin-top: 40px;
        }
        .anggota{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
    </style>
    <div class="container-fluid jumbotron">
        <p class="text-center text hed">About Us</p>
    </div>
    <div class="container-fluid isi m-28 mt-20 pb-12">
        <div class="container head1 w-full">
            <div class="container flex align-center w-1/4">
                <div class="">
                    <img src="./imgs/E_SDG_goals_icons-individual-rgb-13.png" alt="">
                </div>
            </div>
            <div class="container w-3/4 flex items-center justify-center flex-col">
                <p class="judul p1 w-full ms-3">Sustainable Development Goals</p>
                <p class="w-full ms-3">TreckEco aligns with Sustainable Development Goal 13: Climate Action by empowering individuals to take measurable steps in reducing carbon emissions. By promoting eco-friendly habits like biking and walking, the platform encourages users to actively combat climate change. TreckEco fosters awareness, accountability, and action, contributing to global efforts to minimize environmental impact and build a sustainable future.</p>
            </div>
        </div>
        
        <div class="container head2">
            <p class="judul">Features</p>
            <div class="container feat-isi">
                <div class="kotak">
                    <p>
                    At TreckEco, we believe that small, conscious choices can lead to a big impact on the environment. Our platform is designed to help you take charge of your carbon footprint by tracking your daily routines and encouraging eco-friendly habits. Whether you're biking, walking, or commuting, TreckEco provides a clear picture of the emissions you produce and eliminate.
                    </p>
                </div>
                <div class="kotak">
                    <p>
                    With easy-to-use logging features, TreckEco calculates your carbon impact and showcases your contributions to a greener planet. By choosing sustainable options like biking or walking, you can actively reduce your emissions and see the tangible results of your efforts in real-time.
                    </p>
                </div><div class="kotak">
                    <p>
                    TreckEco isn't just a tracker—it's a motivator. We aim to inspire positive change by helping you visualize your role in creating a more sustainable world. Together, let's take the first step toward protecting our planet for generations to come.
                    </p>
                </div>
            </div>
        </div>
        <div class="container head3">
            <p class="judul">Our Team</p>
            <div class="anggota">
                <div class="kotak">
                    <p>Kenzie Harsanto</p>
                </div>
                <div class="kotak">
                    <p>Radesta Aryasadewa</p>
                </div>
                <div class="kotak">
                    <p>Christian Arifin Gouw</p>
                </div>
                <div class="kotak">
                    <p>Cornelius Marco Febrian</p>
                </div>
                <div class="kotak">
                    <p>Rafael Sebastian Wibowo</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
