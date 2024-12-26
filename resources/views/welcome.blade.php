<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <title>Portofolio Miranti</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-sky-50 font-poppins w-full h-auto min-h-screen flex flex-col">
        <!--Start Navbar-->
        <nav class="fixed top-0 left-0 w-full z-50 bg-sky-100 p-4 shadow-md">
            <div class="container mx-auto flex px-4 items-center justify-between">
                <div class="text-2xl font-semibold tracking-widest text-blue-800 no-underline">
                    Mira<span class="text-blue-400">nti</span>
                </div>

                <!--Navigation-->
                <div class="hidden lg:flex items-center space-x-6" id="menu">
                    <ul class="flex items-center space-x-6">
                        <li>
                            <a href="#home" class="text-lg text-blue-800 hover:text-blue-200 transition">HOME</a>
                        </li>
                        <li>
                            <a href="#about" class="text-lg text-blue-800 hover:text-blue-200 transition">ABOUT</a>
                        </li>
                        <li>
                            <a href="#project" class="text-lg text-blue-800 hover:text-blue-200 transition">PROJECT</a>
                        </li>
                        <li>
                            <a href="#skills" class="text-lg text-blue-800 hover:text-blue-200 transition">SKILLS</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-lg text-blue-800 hover:bg-blue-300 transition rounded-full px-3 py-2 bg-blue-200">CONTACT ME</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Navbar-->

        <!--Start Home Section-->
        <section id="home" class="container mx-auto flex flex-col lg:flex-row px-10 items-center justify-between w-full text-white bg-fixed bg-cover bg-no-repeat min-h-screen">
            <div class="text-sky-700 px-0 lg:w-2/3">
                <h2 class="font-light text-2xl">MIRANTI's PORTOFOLIO</h2>
                <h1 class="font-abril text-5xl md:text-6xl lg:text-7xl text-blue-400 overflow-hidden mt-4 text-left">
                    Hi, I’m <span class="text-blue-950">Miranti</span>
                </h1>
                <h3 class="text-2xl font-normal flex items-center mt-6">Informatics Engineering of Sriwijaya University 
                    <span class="block border-r-4 border-blue-200 h-7 ml-1"></span>
                </h3>

                <!--Social Media-->
                <div class="flex gap-10 mt-8">
                    <a href="https://www.linkedin.com/in/miranti-468248319/" target="_blank">
                            <img src="img/linkedin1.png" alt="LinkedIn" class="w-8 h-8">
                    </a>
                    <a href="https://github.com/Miranti9867" target="_blank">
                            <img src="img/github1.png" alt="GitHub" class="w-8 h-8">
                    </a>
                    <a href="https://www.instagram.com/miranti9867/" target="_blank">
                        <img src="img/instagram.png" alt="Instagram" class="w-8 h-8">
                    </a>
                </div>
            </div>

            <!--Profile Photo-->
            <div class="lg:w-1/3 flex justify-center lg:justify-end mt-10 lg:mt-0 py-24">
                <img src="img/titi2.png" alt="Miranti" class="w-72 rounded-full border-4 border-blue-500 bg-blue-100">
            </div>
        </section>            
        <!--End Home Section-->
              
        <!--Start About Section-->
        <section id="about" class="relative w-full min-h-screen p-10 bg-blue-100 flex items-center justify-between bg-cover bg-fixed bg-no-repeat" style="background: url('img/about.jpeg') no-repeat left top / cover;">
            <div class="text-sky-700 bg-white bg-opacity-80 p-8 shadow-lg rounded-lg mt-16">
                <h1 class="font-abril text-5xl md:text-6xl lg:text-7xl text-blue-800">About <span class="text-blue-400">Me</span>
                </h1>
                <div class="mt-2 bg-blue-950 h-1 w-1/4"></div>

                <!--About Me-->
                <p class="py-8 font-normal text-sky-950 text-xl">Hi I'm Miranti, 19 y.o and i'm a student majoring in Informatics Engineering at<br>Sriwijaya University. I'm still learning about technology and programming,<br>but i'm excited to share my knowledge and experience with you. I interest <br>with Web Development, UI/UX, Mobile Development, etc and one day i wish <br>will be a master of technology xixi.
                </p>
            </div>
        </section>
        <!--End About Section-->

        <!--Start Project Section-->
        <section id="project" class="relative w-full min-h-screen bg-white p-6 flex flex-col items-center bg-cover bg-fixed bg-no-repeat overflow-hidden" style="background: url('img/projek(3).jpg') no-repeat left top / cover;">
            <div class="text-sky-700 mt-10 container">
                <h1 class="font-abril text-5xl md:text-6xl lg:text-6xl text-blue-800">My <span class="text-blue-400">Project</span>
                <div class="mt-4 bg-blue-950 h-1 w-24"></div>
        
            <!--Carousel-->
            <div class="relative w-full max-w-5xl mt-10 bg-blue-200">
                <!--Left Arrow-->
                <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-600 p-3 rounded-full shadow-md hover:bg-blue-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
        
                <!--Project-->
                <div id="carousel" class="flex transition-transform duration-500 w-full">
                    <div class="min-w-full flex justify-center items-center bg-blue-100 p-6">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project1.png" alt="Project 1" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">Web Pariwisata</p>
                        </div>
                    </div>
                    <div class="min-w-full flex justify-center items-center bg-blue-100 p-6">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project2.png" alt="Project 2" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">Game Tebak Angka</p>
                        </div>
                    </div>
                    <div class="min-w-full flex justify-center items-center bg-blue-100 p-6">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project3.png" alt="Project 3" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">UI/UX Aplikasi ARTHA</p>
                        </div>
                    </div>
                    <div class="min-w-full flex justify-center items-center bg-blue-100 p-6">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project4.png" alt="Project 4" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">Web Wedding Invitation</p>
                        </div>
                    </div>
                    <div class="min-w-full flex justify-center items-center bg-blue-100 p-6">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project5.png" alt="Project 5" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">UI/UX Aplikasi BASINGLAA</p>
                        </div>
                    </div>
                    <div class="min-w-full flex justify-center items-center bg-blue-100">
                        <div class="relative bg-white p-6 rounded-lg shadow-lg">
                            <img src="img/project6.png" alt="Project 6" class="w-64 h-auto rounded-md">
                            <p class="mt-4 text-lg text-center text-blue-600 font-medium">UI/UX Aplikasi MEDIKU</p>
                        </div>
                    </div>
                </div>
        
                <!--Right Arrow-->
                <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-600 p-3 rounded-full shadow-md hover:bg-blue-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>                            
        </section>
        <!--End Project Section-->
        
        <!--Start Skills Section-->
        <section id="skills" class="relative w-full min-h-screen p-16 bg-white flex items-center justify-between bg-cover bg-fixed bg-no-repeat" style="background: url('img/skills.jpg') no-repeat left top / cover;">
            <div class="container mx-auto">
                <div class="mb-16">
                    <h1 class="font-abril text-7xl mb-4 text-white">
                        Skills <span class="text-sky-100">& Tools</span>
                    </h1>
                    <div class="w-16 border-b-4 border-white"></div>
                </div>
            
                <!--Tools-->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="p-6 rounded-lg flex justify-center items-center bg-white m-10 hover:filter hover:brightness-50">
                        <img src="img/figma.png" alt="Figma Logo" class="rounded w-28 h-28">
                    </div>
                    <div class="p-6 rounded-lg flex justify-center items-center bg-white m-10 hover:filter hover:brightness-50">
                        <img src="img/photoshop.png" alt="Adobe Photoshop Logo" class="rounded w-24 h-24">
                    </div>
                    <div class="p-6 rounded-lg flex justify-center items-center bg-white m-10 hover:filter hover:brightness-50">
                        <img src="img/html.png" alt="HTML Logo" class="rounded w-16 h-24">
                    </div>
                    <div class="p-6 rounded-lg flex justify-center items-center bg-white m-10 hover:filter hover:brightness-50">
                        <img src="img/css.png" alt="CSS Logo" class="rounded w-16 h-24">
                    </div>
                </div>
            </div>
        </section>
        <!--End Skills Section-->

        <!--Start Contact Section-->
        <section id="contact" class="relative w-full min-h-screen p-10 bg-blue-50 flex items-center justify-between">
            <div class="container mx-auto">
                <div class="text-center">
                    <h1 class="font-abril text-7xl text-blue-800 relative inline-block">
                        <span class="block text-left">Contact <span class="text-blue-400">Me</span></span>
                        <span class="absolute bottom-0 left-0 w-16 border-b-4 border-blue-950"></span>
                    </h1>
                </div>

                <!--Form Massage-->
                <form action="/submit-message" method="POST" class="flex flex-col">
                    @csrf
                    <label for="name" class="block text-base font-medium  text-blue-800">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan Nama" required class="mt-3 block w-full rounded-md border-blue-800 shadow-sm focus:border-blue-200 focus:ring-blue-500 sm:text-sm p-3 outline-none drop-shadow-md">

                    <label for="email" class="block text-base font-medium text-blue-800 mt-3">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required class="mt-3 block w-full rounded-md border-blue-800 shadow-sm focus:border-blue-200 focus:ring-blue-500 sm:text-sm p-3 outline-none drop-shadow-md">

                    <label for="message" class="block text-base font-medium text-blue-800 mt-3">Message</label>
                    <textarea id="message" name="message" rows="2" required placeholder="Ketikkan Pesan" class="mt-3 block w-full rounded-md border-blue-800 shadow-sm focus:border-blue-200 focus:ring-blue-500 sm:text-sm p-3 outline-none drop-shadow-md"></textarea>

                    <button type="submit" class="w-full bg-blue-400 text-white py-2 px-4 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 mt-4">Send Message</button>
                </form>
            </div>
        </section>   
        <!--End Contact Massage-->     

        <!--Logic Carousel-->
        <script>
            let currentIndex = 0;
            const slides = document.querySelectorAll('#carousel > div');
        
            function showSlide(index) {
                const totalSlides = slides.length;

                if (index >= totalSlides) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else {
                    currentIndex = index;
                }

                const offset = -currentIndex * 100;
                document.getElementById('carousel').style.transform = `translateX(${offset}%)`;
            }
        
            function nextSlide() {
                showSlide(currentIndex + 1);
            }

            function prevSlide() {
                showSlide(currentIndex - 1);
            }

            document.getElementById('next').addEventListener('click', nextSlide);
            document.getElementById('prev').addEventListener('click', prevSlide);
        
            setInterval(nextSlide, 3000);
        </script>        
    </body>
</html>