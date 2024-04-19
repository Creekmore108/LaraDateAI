<div>
    <div class="grid grid-col-6">
        <div class="col-span-4">
            {{-- Profile section --}}
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li class="col-span-3  div rounded-lg bg-white shadow">
                    <div class="flex w-full items-center justify-between space-x-6 p-10">
                        <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover ml-10 shadow-2xl"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                            alt="">
                        <div class="flex-1  ">
                            <div class="flex items-center space-x-2 ml-10">
                                <h3 class=" font-bold text-gray-900">{{ $userInfo->name }}</h3>
                            </div>
                            <p class="text-gray-500 ml-10">{{ $age }} &minus;
                                <span class="inline-flex items-center font-medium ">
                                    {{ $userProfile->city }}, {{ $userProfile->state }}
                                </span>
                            </p>
                            <p class="text-gray-500 text-sm ml-10">{{ $userProfile->ethnicity }},
                                <span class="inline-flex items-center text-sm ">
                                    {{ $userProfile->orientation }}, {{ $userProfile->spoken_language }}
                                </span>
                            </p>
                            <div class="flex mt-5">
                                <div class="flex group relative">
                                    <a href="#" class="ml-12">
                                        <x-icons.message_dialog class="ml-4 hover:scale-110"/>
                                    </a>
                                    <div class="absolute bottom-0 flex-col items-center hidden mb-6 group-hover:flex">
                                        <span class="relative z-10 p-2 text-xs leading-none text-gray-800 whitespace-no-wrap bg-white shadow-lg rounded-md">
                                          Message Now
                                        </span>
                                        <div class="w-auto h-3 -mt-2 rotate-45 bg-white"></div>
                                    </div>
                                </div>
                                <div class="relative group flex">
                                    <a href="#" class="">
                                        <x-icons.heart  class="ml-8 hover:scale-110"/>
                                    </a>
                                    <div class="absolute bottom-0 flex-col items-center hidden mb-6 group-hover:flex">
                                        <span class="relative z-10 p-2 text-xs leading-none text-gray-800 whitespace-no-wrap bg-white shadow-lg rounded-md">
                                          Favorite
                                        </span>
                                        <div class="w-auto h-3 -mt-2 rotate-45 bg-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="px-4 py-6 sm:px-6">
                            <h3 class="text-base font-bold leading-7 text-gray-900">Summary</h3>
                            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{ $userProfile->about }}</p>
                        </div>
                    </div>
                    {{--  ICON Grid --}}
                    <div class="grid grid-cols-3 grid-rows-4 gap-1 px-4 sm:grid-cols-2 ">
                        <div class="relative col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm  ">
                            <div class="flex-shrink-0 z-10" >

                                <x-icons.marital_status class="hover:cursor-help" />


                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->marital_status }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-1 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0 z-10">
                                <x-icons.education />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->education }}</p>
                            </div>
                        </div>
                        <div
                            class="relative col-start-3 row-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.spirituality />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->spiritual_belief }}</p>
                            </div>
                        </div>
                        {{-- row 2 --}}
                        <div
                            class="relative row-start-2 col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm">
                            <div class="flex-shrink-0">
                                <x-icons.have_children />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->have_children }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-2 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.energy />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->energy_level }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-2 col-start-3 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.tobacco />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->tobacco }}</p>
                            </div>
                        </div>
                        {{-- row 3 --}}
                        <div
                            class="relative row-start-3 col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm">
                            <div class="flex-shrink-0">
                                <x-icons.want_children />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->want_children }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-3 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.height />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->height }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-3 col-start-3 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.alcohol />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->alcohol }}</p>
                            </div>
                        </div>
                        {{-- row 4 --}}
                        <div
                            class="relative row-start-4 col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.exercise />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->exercise }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-4 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.vaxxed />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">
                                    <span>{{ $userProfile->vaccinated ? 'Yes' : 'No' }} </span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-4 col-start-3 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.weed />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->weed }}</p>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="px-4 py-6 sm:px-6">
                            <h3 class="text-base font-bold leading-7 text-gray-900">A Little About Me</h3>
                            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{ $userProfile->desc_yourself }}
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-2 gap-1 px-4 sm:grid-cols-2 ">
                        {{-- Row One Dietary prefs, Occupation, Pets --}}
                        <div
                            class="relative col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm  ">
                            <div class="flex-shrink-0">
                                <x-icons.diet />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->dietary_preference }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-1 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.briefcase />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->occupation }}</p>
                            </div>
                        </div>
                        <div
                            class="relative col-start-3 row-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.pets />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->pets }}</p>
                            </div>
                        </div>
                        {{-- Row Two Politics, Living Sits, Relocate --}}
                        <div
                            class="relative col-span-1 col-start-1 row-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm  ">
                            <div class="flex-shrink-0">
                                <x-icons.politics />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->political_views }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-2 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.home />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->living_situation }}</p>
                            </div>
                        </div>
                        <div
                            class="relative col-start-3 row-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-3 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.relocate />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->willing_to_relocate }}</p>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="px-4 py-6 sm:px-6">
                            <h3 class="text-base font-bold leading-7 text-gray-900">Ideal Relationship</h3>
                            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
                                {{ $userProfile->desc_ideal_relationship }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="px-4 py-6 sm:px-6">
                            <h3 class="text-base font-bold leading-7 text-gray-900">Personality Test Results</h3>
                        </div>
                    </div>

                    <nav class="overflow-y-auto" aria-label="Directory">
                        <div class="relative">
                            <div
                                class="sticky top-0 z-10 border-y border-b-gray-200 border-t-gray-100 bg-gray-50 px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900">
                                <h3>Myers Briggs -- <a href="#">take the quiz</a></h3>
                            </div>
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex gap-x-4 px-3 py-5">
                                    {{-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""> --}}
                                    <div class="min-w-0">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">
                                            {{ $userProfile->myers_briggs }}</p>
                                    </div>
                                    <div>Explain what it is...</div>
                                </li>

                            </ul>
                        </div>
                        <div class="relative">
                            <div
                                class="sticky top-0 z-10 border-y border-b-gray-200 border-t-gray-100 bg-gray-50 px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900">
                                <h3>Enneagram -- <a href="#">Take the quiz</a></h3>
                            </div>
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex gap-x-4 px-3 py-5">
                                    {{-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""> --}}
                                    <div class="min-w-0">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">
                                            {{ $userProfile->enneagram }}</p>
                                    </div>
                                    <div>Explain what it is ...</div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div
                                class="sticky top-0 z-10 border-y border-b-gray-200 border-t-gray-100 bg-gray-50 px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900">
                                <h3>Love Language -- <a href="#">Take the quiz</a></h3>
                            </div>
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex gap-x-4 px-3 py-5">
                                    {{-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1517070208541-6ddc4d3efbcb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""> --}}
                                    <div class="min-w-0">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">
                                            {{ $userProfile->love_language }}</p>
                                    </div>
                                    <div>Explain what it is...</div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div
                                class="sticky top-0 z-10 border-y border-b-gray-200 border-t-gray-100 bg-gray-50 px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900">
                                <h3>DISC -- <a href="#">Take the quiz</a></h3>
                            </div>
                            <ul role="list" class="divide-y divide-gray-100">
                                <li class="flex gap-x-4 px-3 py-5">
                                    {{-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""> --}}
                                    <div class="min-w-0">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $userProfile->disc }}
                                        </p>
                                    </div>
                                    <div>Explain what it is...</div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div>
                        <div class="px-4 py-6 sm:px-6">
                            <h3 class="text-base font-bold leading-7 text-gray-900">Astrology</h3>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-1 gap-1 px-4 sm:grid-cols-2 ">
                        {{-- Row One Astrology  --}}
                        <div
                            class="relative col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm  ">
                            <div class="flex-shrink-0">
                                <x-icons.sun />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->sun_sign }}</p>
                            </div>
                        </div>
                        <div
                            class="relative row-start-1 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.sun_rising />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->rising_sign }}</p>
                            </div>
                        </div>
                        <div
                            class="relative col-start-3 row-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm ">
                            <div class="flex-shrink-0">
                                <x-icons.moon />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">{{ $userProfile->moon_sign }}</p>
                            </div>
                        </div>
                         {{-- Row Two Astrology  --}}
                         <div
                         class="relative col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm  ">
                         <div class="flex-shrink-0">
                             <x-icons.yinyang />
                         </div>
                         <div class="min-w-0 flex-1">
                             <span class="absolute inset-0" aria-hidden="true"></span>
                             <p class="text-sm font-medium text-gray-900">{{ $userProfile->chinese_sign }}</p>
                         </div>
                     </div>
                     <div
                         class="relative row-start-2 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm ">
                         <div class="flex-shrink-0">
                             <x-icons.om />
                         </div>
                         <div class="min-w-0 flex-1">
                             <span class="absolute inset-0" aria-hidden="true"></span>
                             <p class="text-sm font-medium text-gray-900">{{ $userProfile->ayurvedic_body_type }}</p>
                         </div>
                     </div>
                     <div
                         class="relative col-start-3 row-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm ">
                         <div class="flex-shrink-0">
                             <x-icons.moon />
                         </div>
                         <div class="min-w-0 flex-1">
                             <span class="absolute inset-0" aria-hidden="true"></span>
                             <p class="text-sm font-medium text-gray-900">{{ $userProfile->moon_sign }}</p>
                         </div>
                     </div>
                        {{-- <div class=" w-max grid  grid-cols-2 grid-rows-1 gap-1 px-4 sm:grid-cols-2 ">
                            <div
                                class="relative col-span-1 col-start-1 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm  ">
                                <div class="flex-shrink-0">
                                    <x-icons.yinyang />
                                </div>
                                <div class="min-w-0 flex-1">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    <p class="text-sm font-medium text-gray-900">{{ $profile->chinese_sign }}</p>
                                </div>
                            </div>
                            <div class=" row-start-1 col-start-2 flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm ">
                                <div class=" flex-shrink-0">
                                    <x-icons.om />

                                </div>
                                <div class="min-w-0 flex-1">
                                    <span class="absolute inset-0" aria-hidden="true"></span>

                                    <p class="text-sm font-medium text-gray-900">{{ $profile->ayurvedic_body_type }}
                                    </p>

                                </div>
                            </div>

                        </div> --}}
                    </div>


                </li>
            </ul>


        </div>
        {{-- Right side column Ads Profile detail Similar profiles --}}
        <div class="col-start-5 col-span-2">
            <div
                class="relative row-start-1 col-span-2  flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm">
                {{-- <div class="border"> --}}
                Upgrade your account

            </div>
            <div
                class="relative row-start-2 col-span-2  flex items-center space-x-3 rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm">
                <div>Profile</div>

            </div>
            {{-- <div class="border">More Like</div> --}}
            <div class="row-start-3 col-span-2">
                <img src="images/GoggleAd01.jpeg" class="" alt="">
            </div>
        </div>
    </div>
</div>
