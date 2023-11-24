@extends('layout.app')
@section('appContents')
<div class="flex min-h-screen grid grid-rows-2 gap-4 bg-gray-100">
<div class="flex min-h-screen items-center justify-center">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
      <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-x1 rounded-lg bg-white bg-clip-border text-gray-700">
        <img
          src="{{ asset('images/81a8hDlfBZL._AC_UF1000,1000_QL80_.jpg') }}"
          alt="image"
          class="h-full w-full object-cover"
        />
      </div>
      <div class="p-6">

        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            The Road Ahead (1995)
        </h4>
        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            "The Road Ahead" is a book written by Bill Gates, published in 1995. In this book, Gates shares his vision of the future and discusses the transformative impact of technology on various aspects of society. He explores how emerging technologies, such as personal computers and the internet, will shape the way people work, communicate, and live.
        </p>
        <a class="inline-block" href="https://en.wikipedia.org/wiki/The_Road_Ahead_(Gates_book)">
          <button
            class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
          >
            Learn More

          </button>
        </a>
      </div>
    </div>
    <!-- stylesheet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
</div>
<div class="flex min-h-screen items-center justify-center">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
      <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-x1 rounded-lg bg-white bg-clip-border text-gray-700">
        <img
          src="{{ asset('images/41619.jpg') }}"
          alt="image"
          class="h-full w-full object-cover"
        />
      </div>
      <div class="p-6">

        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            "Business @ the Speed of Thought" (1999):
        </h4>
        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            In this book, Bill Gates explores the idea that businesses that embrace digital technology and integrate it into their processes can gain a significant competitive advantage. Gates discusses the transformative power of information technology and how it can be harnessed to improve decision-making, communication, and overall business efficiency.
        </p>
        <a class="inline-block" href="https://en.wikipedia.org/wiki/Business_@_the_Speed_of_Thought">
          <button
            class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
          >
            Learn More
          </button>
        </a>
      </div>
    </div>
    <!-- stylesheet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
</div>
<div class="flex min-h-screen items-center justify-center">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
      <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-x1 rounded-lg bg-white bg-clip-border text-gray-700">
        <img
          src="{{ asset('images/How_to_Avoid_a_Climate_Disaster_(Bill_Gates).png') }}"
          alt="image"
          class="h-full w-full object-cover"
        />
      </div>
      <div class="p-6">

        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            How to Avoid a Climate Disaster (2021)
        </h4>
        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            In this book, Bill Gates addresses the urgent and complex issue of climate change. He outlines his perspective on the current state of the climate crisis, explores the sources of greenhouse gas emissions, and presents a comprehensive plan for reducing global carbon emissions to zero.
        </p>
        <a class="inline-block" href="https://en.wikipedia.org/wiki/How_to_Avoid_a_Climate_Disaster">
          <button
            class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
          >
            Learn More
          </button>
        </a>
      </div>
    </div>
    <!-- stylesheet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
</div>
<div class="flex min-h-screen items-center justify-center">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
      <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-x1 rounded-lg bg-white bg-clip-border text-gray-700">
        <img
          src="{{ asset('images/Bill_Gates_-_How_to_Prevent_the_Next_Pandemic.jpg') }}"
          alt="image"
          class="h-full w-full object-cover"
        />
      </div>
      <div class="p-6">

        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            How to Prevent the Next Pandemic (2022)
        </h4>
        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            How to Prevent the Next Pandemic is a 2022 book by Bill Gates. In it, Gates details the COVID-19 pandemic and how to prevent another pandemic, including proposing a "Global Epidemic Response and Mobilization" (GERM) team with annual funding of $1 billion.The book discusses various aspects related to the prevention of pandemics, including medical practices necessary for doing so.
        </p>
        <a class="inline-block" href="https://en.wikipedia.org/wiki/How_to_Prevent_the_Next_Pandemic">
          <button
            class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
          >
            Learn More
          </button>
        </a>
      </div>
    </div>
    <!-- stylesheet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
</div>
</div>
@endsection
