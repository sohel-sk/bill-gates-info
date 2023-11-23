@extends('layout.app')
@section('appContents')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="container p-8 mx-auto xl:px-0 flex flex-wrap ">
    <div class="flex items-center w-full lg:w-1/2">
        <div class="max-w-2xl mb-8">
            <h1 class="text-4xl font-bold leading-snug tracking-tight text-gray-800 lg:text-4xl lg:leading-tight xl:text-6xl xl:leading-tight ">Bill Gates: A Visionary Pioneer in Technology and Philanthropy</h1>
            <p class="py-5 text-xl leading-normal text-gray-700 lg:text-xl xl:text-2xl ">Bill Gates, born on October 28, 1955, is a name synonymous with technological innovation, entrepreneurship, and philanthropy. Co-founder of Microsoft Corporation, Gates has left an indelible mark on the world, not only through his contributions to the tech industry but also through his commitment to addressing global challenges.
            </p>
        </div>

    </div>
     <div class="flex items-center justify-center w-full lg:w-1/2 ">
        <div class="rounded-lg overflow-hidden">
            <img   src="{{ asset('images/bill-gates.jpg') }}" class="w-full h-full object-cover">
        </div>
    </div>
    <DIV class="flex items-center w-full lg:w-1/2">
        <div class="max-w-2xl mb-8">
            <h1 class="text-2xl font-bold leading-snug tracking-tight text-gray-800 lg:text-4xl lg:leading-tight xl:text-6xl xl:leading-tight ">Innovations and Achievements:</h1>
            <p class="py-5 text-xl leading-normal text-gray-700 lg:text-xl xl:text-2xl ">Gates is credited with championing the graphical user interface, transforming the computing experience. His foresight led Microsoft to develop software that became integral to businesses and households worldwide. Windows OS and Microsoft Office Suite are just a couple of the groundbreaking products that solidified Gates' reputation as a tech visionary.
            </p>
        </div>
    </DIV>
    <DIV class="flex items-center w-full lg:w-1/2">
        <div class="max-w-2xl mb-8">
            <h1 class="text-2xl font-bold leading-snug tracking-tight text-gray-800 lg:text-4xl lg:leading-tight xl:text-6xl xl:leading-tight ">Philanthropy:</h1>
            <p class="py-5 text-xl leading-normal text-gray-700 lg:text-xl xl:text-2xl ">In 2000, Gates, along with his then-wife Melinda, established the Bill & Melinda Gates Foundation. This philanthropic powerhouse focuses on global health, education, and poverty alleviation. The foundation has contributed billions to initiatives combating infectious diseases, improving healthcare, and enhancing education opportunities worldwide. Gates has pledged to donate a significant portion of his wealth, setting an example for other billionaires.
            </p>
        </div>
    </DIV>
</div>

@endsection
