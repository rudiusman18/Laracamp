<x-layout :title="$title">

    <!-- GLOBAL BACKGROUND -->
    <x-background-blob></x-background-blob>

    <div class="relative">

        <!-- HEADER -->
        <x-header></x-header>

        <!-- HERO -->
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center">
                <h1 class="text-5xl font-semibold tracking-tight sm:text-6xl text-gray-900">
                    Start Your
                    <span class="text-purple-800">Developer<br>Journey</span>
                    Today
                </h1>

                <p class="mt-8 text-lg font-medium text-gray-500 sm:text-xl">
                    Master coding skills with hands-on courses designed for modern developers.
                </p>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
                        Get started
                    </a>
                    <a href="#" class="text-sm font-semibold text-gray-900">
                        Learn more →
                    </a>
                </div>
            <img class="mt-10" src="{{ asset('images/Group 14.png') }}" alt="association group">
            </div>
        </div>


        <!-- BENEFITS -->
        <div class="mx-auto max-w-4xl text-center pt-14">
            <h2 class="text-base font-semibold text-indigo-600">Our Super Benefits</h2>
            <p class="mt-2 text-5xl font-semibold text-gray-900 sm:text-6xl">
                Learn Faster & Better
            </p>


            {{-- konten benefits --}}
            <div class="mt-10 mx-auto px-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-left">
                    <x-benefit-content image="{{ asset('images/globe.png') }}" title="Diversity" description="Learn from anyone around the world and get a new skills"/>
                    <x-benefit-content image="{{ asset('images/square.png') }}" title="A.I Guideline" description="Lara will help you to choose which path that suitable for you"/>
                    <x-benefit-content image="{{ asset('images/person.png') }}" title="1-1 Mentoring" description="We will ensure that you will get what you really do need"/>
                    <x-benefit-content image="{{ asset('images/bag.png') }}" title="Future Job" description="Get your dream job in your dream company together with us"/>
                </div>

                {{-- Course journey --}}
                <x-course-journey-card number="1." number-color="#F3BF39" title="Interview" text="Before taking any program it is good to choose the path" category-text="BETTER CAREER" title-text="Prepare The Journey" desc-text="We do really care to our students’ future career so it would be good if you are taking a quick interview"/>

                <x-course-journey-card number="2." number-color="#7839F3" title="Focus" text="Study and follow the journey based on your career path" category-text="STUDY HARDER" title-text="Finish The Project" desc-text="Each of you will be joining the private group and also working together with team members on project"/>

                <x-course-journey-card number="3." number-color="#31B380" title="Final Gate" text="Demonstration for your final project to the judges" category-text="END GAME" title-text="Big Demo Day" desc-text="Learn how to speaking in public to demonstrate your final project and receive the important feedbacks"/>

            </div>


        </div>


        <!-- PRICING -->
        <div class="mx-auto max-w-4xl text-center mt-20">
            <h2 class="text-base font-semibold text-indigo-600">Pricing</h2>
            <p class="mt-2 text-5xl font-semibold text-gray-900 sm:text-6xl">
                Choose the right plan for you
            </p>
        </div>

        <p class="mx-auto mt-6 max-w-2xl text-center text-lg text-gray-600">
            Choose an affordable plan that’s packed with the best features.
        </p>

        <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 gap-6 lg:max-w-4xl lg:grid-cols-2">

            <!-- HOBBY -->
            <div class="rounded-3xl bg-white/70 backdrop-blur p-8 ring-1 ring-gray-900/10">
                <h3 class="text-base font-semibold text-indigo-600">Hobby</h3>
                <p class="mt-4 text-5xl font-semibold text-gray-900">$29</p>
                <p class="mt-6 text-gray-600">
                    Perfect for beginners starting their journey.
                </p>

                <ul class="mt-8 space-y-3 text-sm text-gray-600">
                    <li>✔ 25 products</li>
                    <li>✔ 10,000 subscribers</li>
                    <li>✔ Analytics</li>
                </ul>

                <a href="#"
                    class="mt-8 block text-center rounded-md px-4 py-2 text-indigo-600 ring-1 ring-indigo-200 hover:ring-indigo-300">
                    Get started
                </a>
            </div>

            <!-- ENTERPRISE -->
            <div class="rounded-3xl bg-gray-900 p-8 text-white shadow-xl">
                <h3 class="text-base font-semibold text-indigo-400">Enterprise</h3>
                <p class="mt-4 text-5xl font-semibold">$99</p>
                <p class="mt-6 text-gray-300">
                    For companies that need full power.
                </p>

                <ul class="mt-8 space-y-3 text-sm text-gray-300">
                    <li>✔ Unlimited products</li>
                    <li>✔ Unlimited subscribers</li>
                    <li>✔ Advanced analytics</li>
                </ul>

                <a href="#"
                    class="mt-8 block text-center rounded-md bg-indigo-500 px-4 py-2 hover:bg-indigo-400">
                    Get started
                </a>
            </div>

        </div>

        <!-- FOOTER SPACE -->
        <div class="py-32"></div>

    </div>

    <x-footer></x-footer>

</x-layout>
