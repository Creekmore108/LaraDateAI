<div class="p-4">
    <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile Information</h2>


        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">User name</label>
                <div class="mt-2">
                    <h2 class="sm:text-sm sm:leading-6">User Name</h2>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                <div class="mt-2">
                    <h2 class="sm:text-sm sm:leading-6">Frirst name</h2>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                <div class="mt-2">
                    <h2 class="sm:text-sm sm:leading-6">last Name</h2>
                </div>
            </div>
        </div>

        {{-- Location Row --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <div class="mt-2">
                    <input type="text" name="city" id="city" autocomplete="address-level2"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">State /
                    Province</label>
                <div class="mt-2">
                    <input type="text" name="region" id="region" autocomplete="address-level1"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal</label>
                <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>

        {{-- DOB Oreintation Row --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Date of Birth</label>
                <div class="mt-2 text-nowrap">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                    <input datepicker type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date">
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                <div class="mt-2">
                    <select id="gender" name="gender" autocomplete="gender"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="orientation"
                    class="block text-sm font-medium leading-6 text-gray-900">Orientation</label>
                <div class="mt-2">
                    <select id="orientation" name="orientation" autocomplete="orientation"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Straight</option>
                        <option>Gay</option>
                        <option>Bi</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Income Level</label>
                <div class="mt-2 ">
                    <select id="feet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="education"
                    class="block text-sm font-medium leading-6 text-gray-900">Education</label>
                <div class="mt-2">
                    <select id="education" name="education" autocomplete="education"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="high_school">High School</option>
                        <option value="junior_college">Junior College</option>
                        <option value="trade_school">Trade School</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="phd">Phd</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- Height Body Type Eyes & Hair Color --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-1">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Height Feet</label>
                <div class="mt-2 ">
                    <select id="feet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Height Inches</label>
                <div class="mt-2 ">
                    <select id="inches" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6" selected>6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="body_type" class="block text-sm font-medium leading-6 text-gray-900">Body Type</label>
                <div class="mt-2">
                    <select id="body_type" name="body_type" autocomplete="body_type"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Thin</option>
                        <option selected>Average</option>
                        <option>Atheltic</option>
                        <option>A few extra pounds</option>
                        <option>Heavy</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="hair_color"
                    class="block text-sm font-medium leading-6 text-gray-900">Hair Color</label>
                <div class="mt-2">
                    <select id="hair_color" name="hair_color" autocomplete="hair_color"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Blonde</option>
                        <option>Brunette</option>
                        <option>Black</option>
                        <option>Gray</option>
                        <option>Salt and Pepper</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="eye_color" class="block text-sm font-medium leading-6 text-gray-900">Eye Color</label>
                <div class="mt-2">
                    <select id="eye_color" name="eye_color" autocomplete="eye_color"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Blue</option>
                        <option selected>Brown</option>
                        <option>Green</option>
                        <option>Hazel</option>
                        <option>Amber</option>
                        <option>Gray</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="eye_wear"
                    class="block text-sm font-medium leading-6 text-gray-900">Eye Wear</label>
                <div class="mt-2">
                    <select id="eye_wear" name="eye_wear" autocomplete="eye_wear"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Glasses</option>
                        <option>Contacts</option>
                        <option selected>None</option>
                        <option>Glasses sometimes</option>
                    </select>
                </div>
            </div>
        </div>

        {{--  Ethnicity Politics Exercise --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-1">
                <label for="ethnicity-name" class="block text-sm font-medium leading-6 text-gray-900">Ethnicity</label>
                <div class="mt-2 ">
                    <select id="ethnicity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="black">Black</option>
                        <option value="white" selected>White</option>
                        <option value="asian">Asian</option>
                        <option value="hispanic">Hispanic</option>
                        <option value="mixed race">Mixed Race</option>
                        <option value="middle eastern">Middel Eastern</option>
                        <option value="aerican indian">American Indian</option>
                        <option value="indian">Indian</option>
                        <option value="pacific islander">Pacific Islander</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="activity_level-name" class="block text-sm font-medium leading-6 text-gray-900">Activity Level</label>
                <div class="mt-2 ">
                    <select id="activity_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="active">Active</option>
                        <option value="moderate">Moderate</option>
                        <option value="very active">Very Active</option>
                        <option value="easy going">Easy Going</option>
                        <option value="lazy">Lazy</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="politics" class="block text-sm font-medium leading-6 text-gray-900">Politics</label>
                <div class="mt-2">
                    <select id="politics" name="politics" autocomplete="politics"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="not political">Not Political</option>
                        <option value="middle of the road" selected>Middle of the Road</option>
                        <option value="left leaning">Left Leaning</option>
                        <option value="right leaning">Right Leaning</option>
                        <option value="left wing">Left Wing</option>
                        <option value="right wing">Right Wing</option>
                        <option value="libertarian">Libertarian</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="alcohol"
                    class="block text-sm font-medium leading-6 text-gray-900">Alcohol</label>
                <div class="mt-2">
                    <select id="alcohol" name="alcohol" autocomplete="alcohol"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="socially">Drink Socially</option>
                        <option value="no">Don't Drink</option>
                        <option value="daily">Drink Daily</option>
                        <option value="heavy">Heavy Drinker</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="tobacco" class="block text-sm font-medium leading-6 text-gray-900">Tobacco</label>
                <div class="mt-2">
                    <select id="tobacco" name="tobacco" autocomplete="tobacco"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="none">None</option>
                        <option value="smoke occasionally">Smoke on occassion</option>
                        <option value="smoke daily">Smoke Daily</option>
                        <option value="chew">Chew Tobacco</option>
                        <option value="vape">Vape</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="marijuana"
                    class="block text-sm font-medium leading-6 text-gray-900">Marijuana</label>
                <div class="mt-2">
                    <select id="marijuana" name="marijuana" autocomplete="marijuana"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="none">None</option>
                        <option value="smoke occasionally">Smoke on occassion</option>
                        <option value="smoke daily">Smoke Daily</option>
                        <option value="edibles">Edibles</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Diet sSpiritual Beliefs Children --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-1">
                <label for="diet" class="block text-sm font-medium leading-6 text-gray-900">Diet</label>
                <div class="mt-2 ">
                    <select id="diet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="carinvor">Carnivor</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="Plant Based">Plant Based</option>
                        <option value="Vegan">Vegan</option>
                        <option value="Pescatarian">Pescaterian</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="have_children" class="block text-sm font-medium leading-6 text-gray-900">Have Children</label>
                <div class="mt-2 ">
                    <div class="flex items-center">
                        <input id="email" name="notification-method" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="email" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Yes</label>
                      </div>
                      <div class="flex items-center">
                        <input id="sms" name="notification-method" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="sms" class="ml-3 block text-sm font-medium leading-6 text-gray-900">No</label>
                      </div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="children_age" class="block text-sm font-medium leading-6 text-gray-900">Age of Children</label>
                <div class="mt-2">
                    <select id="children_age" name="children_age" autocomplete="children_age"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="young">Young</option>
                        <option value="grade school">Grade School</option>
                        <option value="high school">High School</option>
                        <option value="college">College</option>
                        <option value="grown">Grown</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="want_children"
                    class="block text-sm font-medium leading-6 text-gray-900">Want Children</label>
                <div class="mt-2">
                    <select id="want_children" name="want_children" autocomplete="want_children"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="maybe">Maybe</option>
                        <option value="depends">Depends</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="marital_status" class="block text-sm font-medium leading-6 text-gray-900">Marital Status</label>
                <div class="mt-2">
                    <select id="marital_status" name="marital_status" autocomplete="marital_status"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="separated">Separated</option>
                        <option value="Married">Married</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="religion"
                    class="block text-sm font-medium leading-6 text-gray-900">Religion</label>
                <div class="mt-2">
                    <select id="religion" name="religion" autocomplete="religion"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="not_religious">Not Religios</option>
                        <option value="christian">Christianity</option>
                        <option value="buddhist">Buddhism</option>
                        <option value="hindu">Hinduism</option>
                        <option value="islam">Islam</option>
                        <option value="hindu">Judaism</option>
                        <option value="hindu">Hindu</option>
                        <option value="sikhism">Sikhism</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Language Pets relocate pets living situation --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-1">
                <label for="spoken_language" class="block text-sm font-medium leading-6 text-gray-900">Spoken Language</label>
                <div class="mt-2 ">
                    <select id="spoken_language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="english">English</option>
                        <option value="Spanish">Spanish</option>
                        <option value="German">German</option>
                        <option value="French">French</option>
                        <option value="Italian">Italian</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="living_situation" class="block text-sm font-medium leading-6 text-gray-900">Living Situation</label>
                <div class="mt-2">
                    <select id="living_situation" name="living_situation" autocomplete="living_situation"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="live_alone">Live Alone</option>
                        <option value="with_family">With Family</option>
                        <option value="roommates">Roomates</option>
                        <option value="group">Group</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="willing_to_relocate"
                    class="block text-sm font-medium leading-6 text-gray-900">Willing to Relocate</label>
                <div class="mt-2">
                    <select id="willing_to_relocate" name="willing_to_relocate" autocomplete="willing_to_relocate"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="maybe">Maybe</option>
                        <option value="depends">Depends</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="have_pets"
                    class="block text-sm font-medium leading-6 text-gray-900">Have Pets</label>
                <div class="mt-2">
                    <select id="have_pets" name="have_pets" autocomplete="have_pets"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="dogs">dog(s)</option>
                        <option value="cats">Cat(s)</option>
                        <option value="reptiles">Reptiles</option>
                        <option value="no_pets">No Pets</option>
                        <option value="small_zoo">Small Zoo</option>
                        <option value="birds">Bird(s)</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="like_pets" class="block text-sm font-medium leading-6 text-gray-900">Like Pets</label>
                <div class="mt-2">
                    <select id="like_pets" name="like_pets" autocomplete="like_pets"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="allergic">Allergic</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="spirituality"
                    class="block text-sm font-medium leading-6 text-gray-900">Spiritual Beliefs</label>
                <div class="mt-2">
                    <select id="spirituality" name="spirituality" autocomplete="spirituality"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="high_school">High School</option>
                        <option value="junior_college">Junior College</option>
                        <option value="trade_school">Trade School</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="phd">Phd</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Astrology Chinese sign Ayurdeic  --}}

        <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-1">
                <label for="spoken_language" class="block text-sm font-medium leading-6 text-gray-900">Spoken Language</label>
                <div class="mt-2 ">
                    <select id="spoken_language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="english">English</option>
                        <option value="Spanish">Spanish</option>
                        <option value="German">German</option>
                        <option value="French">French</option>
                        <option value="Italian">Italian</option>
                      </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="living_situation" class="block text-sm font-medium leading-6 text-gray-900">Living Situation</label>
                <div class="mt-2">
                    <select id="living_situation" name="living_situation" autocomplete="living_situation"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="live_alone">Live Alone</option>
                        <option value="with_family">With Family</option>
                        <option value="roommates">Roomates</option>
                        <option value="group">Group</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="willing_to_relocate"
                    class="block text-sm font-medium leading-6 text-gray-900">Willing to Relocate</label>
                <div class="mt-2">
                    <select id="willing_to_relocate" name="willing_to_relocate" autocomplete="willing_to_relocate"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="maybe">Maybe</option>
                        <option value="depends">Depends</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="have_pets"
                    class="block text-sm font-medium leading-6 text-gray-900">Have Pets</label>
                <div class="mt-2">
                    <select id="have_pets" name="have_pets" autocomplete="have_pets"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="dogs">dog(s)</option>
                        <option value="cats">Cat(s)</option>
                        <option value="reptiles">Reptiles</option>
                        <option value="no_pets">No Pets</option>
                        <option value="small_zoo">Small Zoo</option>
                        <option value="birds">Bird(s)</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="like_pets" class="block text-sm font-medium leading-6 text-gray-900">Like Pets</label>
                <div class="mt-2">
                    <select id="like_pets" name="like_pets" autocomplete="like_pets"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="allergic">Allergic</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-1">
                <label for="spirituality"
                    class="block text-sm font-medium leading-6 text-gray-900">Spiritual Beliefs</label>
                <div class="mt-2">
                    <select id="spirituality" name="spirituality" autocomplete="spirituality"
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="high_school">High School</option>
                        <option value="junior_college">Junior College</option>
                        <option value="trade_school">Trade School</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="phd">Phd</option>
                    </select>
                </div>
            </div>
        </div>

    </div>
</div>
