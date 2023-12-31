@extends('layout.app')

@section('content')
    <div class="background-image grid grid-cols-1 ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 m-8 py-15 border-b border-gray-200">
        <div>
            <img src="https://images.businessnewsdaily.com/app/uploads/2022/04/04072906/freelancer_Poike_getty.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Becoming a better web developer takes time, dedication and learning.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Continuous Learning: Web development is an ever-evolving field. Stay updated with the latest technologies, frameworks, and best practices. Follow blogs, attend webinars, and join developer communities to stay informed about the latest trends.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-orange-300 text-white">
        <h2 class="text-5xl pb-5 text-l"> 
            Best Web Development Frameworks :
        </h2>

        <span class="font-extrabold block text-2xl text-center px-10">
            1. Laravel
        </span>
        <span class="font-extrabold block text-2xl text-center px-10 ">
            2. Django
        </span>
        <span class="font-extrabold block text-2xl text-center px-10">
            3. Ruby on Rails
        </span>
        <span class="font-extrabold block text-2xl text-center px-10">
            4. Express
        </span>
    </div>

    <div class="text-center py-15">
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-orange-300 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold ">
                  PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    PHP is a server-side scripting language used for web development. It integrates with HTML, enabling dynamic content creation. It works with databases, processes forms, and manages sessions. PHP is open-source and has a large community of developers. It is widely used for building dynamic websites and web applications.</h3>
                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
    <div class=" w-3/5 hover:w-full m-8 ">
    <img src="https://arquivo.devmedia.com.br/cursos/imagem/curso_preparando-o-ambiente-para-programar-em-php_2057.png" alt="">
    </div>
    
    </div>
@endsection