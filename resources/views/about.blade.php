@extends('layout.app')
@section('appContents')
<div class=" bg-gray-100 w-full">
    <div class=" w-fit p-8 place-items-center text-4xl ">
        <p><h2 class=" font-semibold">Bill Gates </h2></p>
    </div>
    <div class=" max-w-fit p-8 grid grid-cols-2 gap-4">
        <div>
            <div>
                <section class=" min-w-md pb-10 pl-3 text-lg">
                    <p>William Henry Gates III KBE (born October 28, 1955)[1] is an American businessman
                            and the co-founder and former chairman of Microsoft. He is the third-richest
                            person in the world behind Jeff Bezos and Elon Musk in net worth as of January
                            2021.</p>
                </section>
            </div>
            <div>
                <section>
                    <h3 class=" text-3xl font-medium">Biography</h3>
                    <div class=" border-t border-slate-600 mb-10 "></div>
                </section>
            </div>
            <div class=" pt-4">
                <section class=" min-w-md pb-3 pl-3 text-base">
                    William Henry Gates III was born on October 28, 1955 at Swedish Medical Center in Seattle, Washington, U.S. [4] He has British and German ancestry. His father William H. Gates, Sr. was a lawyer. His mother Mary Maxwell Gates served on the board of directors for First Interstate Banksystem and the United Way. His parents wanted him to be a lawyer. At the age of 13, Bill went to Lakeside High School.
                </section>
            </div>
            <div class="">
                <section class=" text-lg ">
                    <h4 class=" text-2xl font-normal pb-4"> College career and the Founding of Microsoft</h4>
                </section>
                <section class=" min-w-md pb-3 pl-3 text-base">
                    <p>He was a freshman at Harvard University in 1973. He left Harvard to make software. Bill Gates saw an opportunity to transform the personal computer, which was expensive and difficult to use. He decided that computers could be made less expensive and easier to use. Gates started Microsoft in 1975 with Paul Allen in the city of Albuquerque, New Mexico. Gates then went on to develop the Windows operating system, which at first wasn't well-received but with time became the most used system in the world.</p>
                </section>
            </div>
        </div>
        <div class="p-4 border items-center shadow-md">
            <div class=" p-4 items-center grid grid-cols-2">
                <div>
                    <img src="{{ asset('/images/Bill_Gates_-_2023_-_P062021-967902_(cropped).jpg')}}" alt="">
                </div>
                <div class="">
                    <div class="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
