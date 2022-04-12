<x-layout>
    <x-navigation />
    {{-- Container --}}
    <div class="px-5">
        <h1 class="my-5">Requests</h1>

        <div class="bg-white rounded-lg border border-outline p-5">
            <div class="grid grid-cols-2">
                <div class="flex items-center">
                    <div>
                        <img class="w-10" src="/images/PIANGO.png" alt="">
                    </div>
                    <div class="pl-2">
                        <div class="text-dark text-sm">PIANGO</div>
                        <div class="text-secondary text-xs">5 min</div>
                    </div>

                </div>
                <div class="grid justify-end items-start">
                    <div class="text-white bg-success rounded-xl text-[10px] text-center px-1">OPEN</div>
                </div>


            </div>
            <div class="flex flex-row mt-5 gap-2">
                <div class="basis-1/2">

                    <h2 class="text-dark font-medium text-base mb-2.5">Women must have a seat at decision-making table
                    </h2>
                    <p class="text-secondary text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor
                        laboriosam exercitationem, inventore repellendus voluptatum ipsam.</p>
                </div>
                <div class="grid basis-1/2">
                    <img class=" rounded h-40 w-full object-none object-top" src="/images/ilolahia.jpg" alt="">
                </div>
            </div>

            <div class="grid grid-cols-2 mt-2">
                <div>
                    {{-- Blank column --}}
                </div>
                <div>
                    <div class="flex gap-5 justify-end">

                        <div class="flex gap-1">
                            <svg class="w-3.5 fill-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z" />
                            </svg>
                            <p class="text-xs text-secondary">
                                29
                            </p>
                        </div>

                        <div class="flex gap-1">
                            <svg class="w-3.5 fill-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M128 288V64.03c0-17.67-14.33-31.1-32-31.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64C113.7 320 128 305.7 128 288zM481.5 229.1c1.234-5.092 1.875-10.32 1.875-15.64c0-22.7-11.44-43.13-29.28-55.28c.4219-3.015 .6406-6.076 .6406-9.122c0-22.32-11.06-42.6-28.83-54.83c-2.438-34.71-31.47-62.2-66.8-62.2h-52.53c-35.94 0-71.55 11.87-100.3 33.41L169.6 92.93c-6.285 4.71-9.596 11.85-9.596 19.13c0 12.76 10.29 24.04 24.03 24.04c5.013 0 10.07-1.565 14.38-4.811l36.66-27.51c20.48-15.34 45.88-23.81 71.5-23.81h52.53c10.45 0 18.97 8.497 18.97 18.95c0 3.5-1.11 4.94-1.11 9.456c0 26.97 29.77 17.91 29.77 40.64c0 9.254-6.392 10.96-6.392 22.25c0 13.97 10.85 21.95 19.58 23.59c8.953 1.671 15.45 9.481 15.45 18.56c0 13.04-11.39 13.37-11.39 28.91c0 12.54 9.702 23.08 22.36 23.94C456.2 266.1 464 275.2 464 284.1c0 10.43-8.516 18.93-18.97 18.93H307.4c-12.44 0-24 10.02-24 23.1c0 4.038 1.02 8.078 3.066 11.72C304.4 371.7 312 403.8 312 411.2c0 8.044-5.984 20.79-22.06 20.79c-12.53 0-14.27-.9059-24.94-28.07c-24.75-62.91-61.74-99.9-80.98-99.9c-13.8 0-24.02 11.27-24.02 23.99c0 7.041 3.083 14.02 9.016 18.76C238.1 402 211.4 480 289.9 480C333.8 480 360 445 360 411.2c0-12.7-5.328-35.21-14.83-59.33h99.86C481.1 351.9 512 321.9 512 284.1C512 261.8 499.9 241 481.5 229.1z" />
                            </svg>
                            <p class="text-xs text-secondary">
                                6
                            </p>
                        </div>

                        <div class="flex gap-1">
                            <svg class="w-3.5 fill-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z" />
                            </svg>
                            <p class="text-xs text-secondary">
                                4
                            </p>
                        </div>

                        <div class="flex gap-1">
                            <svg class="w-3.5 fill-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M448 127.1C448 181 405 223.1 352 223.1C326.1 223.1 302.6 213.8 285.4 197.1L191.3 244.1C191.8 248 191.1 251.1 191.1 256C191.1 260 191.8 263.1 191.3 267.9L285.4 314.9C302.6 298.2 326.1 288 352 288C405 288 448 330.1 448 384C448 437 405 480 352 480C298.1 480 256 437 256 384C256 379.1 256.2 376 256.7 372.1L162.6 325.1C145.4 341.8 121.9 352 96 352C42.98 352 0 309 0 256C0 202.1 42.98 160 96 160C121.9 160 145.4 170.2 162.6 186.9L256.7 139.9C256.2 135.1 256 132 256 128C256 74.98 298.1 32 352 32C405 32 448 74.98 448 128L448 127.1zM95.1 287.1C113.7 287.1 127.1 273.7 127.1 255.1C127.1 238.3 113.7 223.1 95.1 223.1C78.33 223.1 63.1 238.3 63.1 255.1C63.1 273.7 78.33 287.1 95.1 287.1zM352 95.1C334.3 95.1 320 110.3 320 127.1C320 145.7 334.3 159.1 352 159.1C369.7 159.1 384 145.7 384 127.1C384 110.3 369.7 95.1 352 95.1zM352 416C369.7 416 384 401.7 384 384C384 366.3 369.7 352 352 352C334.3 352 320 366.3 320 384C320 401.7 334.3 416 352 416z" />
                            </svg>

                        </div>

                    </div>

                </div>

            </div>



        </div>

        <h1 class="mt-5">Happening Now</h1>
        <p class="text-secondary text-lg font-light mb-5">Meetings going on right now</p>

        <div class="rounded-lg bg-info">
            <div class="p-5">
                <div class="grid grid-cols-2">
                    <div>
                        <div class="flex bg-danger rounded-full px-3 gap-1 w-20 items-center justify-center">
                            <div class="text-white font-medium">LIVE</div>
                            <div>
                                <svg class="w-3 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M192 352c53.03 0 96-42.97 96-96h-80C199.2 256 192 248.8 192 240S199.2 224 208 224H288V192h-80C199.2 192 192 184.8 192 176S199.2 160 208 160H288V127.1h-80c-8.836 0-16-7.164-16-16s7.164-16 16-16L288 96c0-53.03-42.97-96-96-96s-96 42.97-96 96v160C96 309 138.1 352 192 352zM344 192C330.7 192 320 202.7 320 215.1V256c0 73.33-61.97 132.4-136.3 127.7c-66.08-4.169-119.7-66.59-119.7-132.8L64 215.1C64 202.7 53.25 192 40 192S16 202.7 16 215.1v32.15c0 89.66 63.97 169.6 152 181.7V464H128c-18.19 0-32.84 15.18-31.96 33.57C96.43 505.8 103.8 512 112 512h160c8.222 0 15.57-6.216 15.96-14.43C288.8 479.2 274.2 464 256 464h-40v-33.77C301.7 418.5 368 344.9 368 256V215.1C368 202.7 357.3 192 344 192z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class="flex justify-end">
                        <svg class="h-5 fill-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z" />
                        </svg>
                    </div>

                </div>

                <p class="text-white mt-2">Pacific debt sustainability in the face of #COVID and #ClimateChange</p>

                <p class="text-white mt-2 text-xs font-light">Regional | Gender | Civil Society</p>

                <div class="flex mt-2">
                    <div class="bg-white rounded-full w-8 h-8 grid justify-center items-center">

                        <img class="w-5" src="/images/sungo.png" alt="">
                    </div>
                    <div class="-ml-3 bg-white rounded-full w-8 h-8 grid justify-center items-center">

                        <img class="w-5" src="/images/fcoss.jpg" alt="">
                    </div>
                    <div class="-ml-3 bg-white rounded-full w-8 h-8 grid justify-center items-center">

                        <img class="w-5" src="/images/csft.png" alt="">
                    </div>

                    <div class="ml-2 text-white text-sm flex items-center font-light">29 listening</div>
                </div>

            </div>
            <div class="bg-[#31B4C7] px-5 py-3 rounded-b-lg mb-5 flex gap-2 items-center">
                <div class="bg-white rounded-full w-8 h-8 grid justify-center items-center">

                    <img class="w-5" src="/images/pifs.jpeg" alt="">
                </div>
                <div class="text-white text-sm flex items-center font-light">PIFS</div>
                <div class="text-xs text-white flex items-center font-light bg-outline px-1.5 rounded h-5">Host</div>
            </div>
        </div>
    </div>

</x-layout>
