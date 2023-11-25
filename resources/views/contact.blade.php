@extends('layout.app')
@section('appContents')
<div class=" bg-gray-100 flex flex-wrap">
    <div class="container__col container__col--70 p-4 max-w-full">
        <div>
            <section class=" text-4xl font-semibold page-title component component--headline container page-title--no-border " lang="en" dir="ltr">
                <h1 class="page-title__title p-6 max-w">Lets see how we can contact the BIll Gates</h1>
            </section>
        </div>
        <div class="flex">
             <div class="p-4 min-w-1/2 items-center">
                 <section class=" flex from-neutral-950 max-w-md">
                     <p>Please use the contact information below to connect with a specific office or department that can best meet your needs.</p>
                 </section>
                 <section class=" p-4">
                     <h3 class=" text-lg text font-medium">Points of Contact</h3>
                     <h4>Bill and Melinda Gates Foundation</h4>
                 </section>
                 <section class="">
                    <p class=" font-medium"> Headquarters (Mailing Address) <br></p>
                    PO Box 23350 <br>
                    Seattle, WA 98102 <br><br>

                    <p class=" font-medium">East Coast Office <br></p>
                    Washington, D.C. <br>
                    1300 I (Eye) St NW <br>
                    Suite 200 E <br>
                    Washington, DC 20005 <br>
                    (202) 662-8130 <br>
                    info@gatesfoundation.org <br><br><br>

                    <p class=" font-medium">Grant Inquiries</p>
                    (206) 709-3140 <br>
                    info@gatesfoundation.org <br>


                 </section>
             </div>
             <div class="flex items-end justify-end min-w-1/2 lg:w-1/2">
                 <div class="rounded-lg overflow-hidden items-end">
                    <img src="{{ asset('images/contact-bill-gates.jpg') }}" alt="" class="w-full h-half object-cover">
                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
