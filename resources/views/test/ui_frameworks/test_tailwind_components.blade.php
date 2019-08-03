@extends('layouts.app')

@section('title', 'Contact us')

@section('cssSection')
@endsection

@section('content')

<div class="tw-text-5xl tw-my-6">This page shows Laravel integration with <a href="https://tailwindcss.com/docs/">Tailwindcss</a></div>
<div class=" tw-antialiased tw-bg-gray-200 tw-font-sans">
    See Steve Shroeger's code: <a href="https://codepen.io/connecteev/pen/YoqGLX">https://codepen.io/connecteev/pen/YoqGLX</a>
    <div class="tw-max-w-6xl tw-mx-auto">
        <div class="tw-flex tw-items-center tw-justify-center tw-min-h-screen">
            <div class="tw-max-w-sm tw-w-full sm:tw-w-1/2 lg:tw-w-1/3 tw-py-6 tw-px-3">
                <div class="tw-bg-white tw-shadow-xl tw-rounded-lg tw-overflow-tw-hidden">
                    <div class="tw-bg-cover tw-bg-center tw-h-56 tw-p-4" style="background-image: url(https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                        <div class="tw-flex tw-justify-end">
                            <svg class="tw-h-6 tw-w-6 tw-text-white tw-fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="tw-p-4">
                        <p class="tw-uppercase tw-tracking-wide tw-text-sm tw-font-bold tw-text-gray-700">Detached house • 5y old</p>
                        <p class="tw-text-3xl tw-text-gray-900">$750,000</p>
                        <p class="tw-text-gray-700">742 Evergreen Terrace</p>
                    </div>
                    <div class="tw-flex tw-p-4 tw-border-t tw-border-gray-300 tw-text-gray-700">
                        <div class="tw-flex-1 tw-inline-tw-flex tw-items-center">
                            <svg class="tw-h-6 tw-w-6 tw-text-gray-600 tw-fill-current tw-mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2tw-h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1tw-h-4a1 1 0 0 1-1-1V6tw-h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4tw-h-4z"></path>
                            </svg>
                            <p><span class="tw-text-gray-900 tw-font-bold">3</span> Bedrooms</p>
                        </div>
                        <div class="tw-flex-1 tw-inline-tw-flex tw-items-center">
                            <svg class="tw-h-6 tw-w-6 tw-text-gray-600 tw-fill-current tw-mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path tw-fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1tw-h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9ztw-m-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2ztw-m-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14tw-h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                            </svg>
                            <p><span class="tw-text-gray-900 tw-font-bold">2</span> Bathrooms</p>
                        </div>
                    </div>
                    <div class="tw-px-4 tw-pt-3 tw-pb-4 tw-border-t tw-border-gray-300 tw-bg-gray-100">
                        <div class="tw-text-xs tw-uppercase tw-font-bold tw-text-gray-600 tw-tracking-wide">Realtor</div>
                        <div class="tw-flex tw-items-center tw-pt-2">
                            <div class="tw-bg-cover tw-bg-center tw-w-10 tw-h-10 tw-rounded-full tw-mr-3" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                            </div>
                            <div>
                                <p class="tw-font-bold tw-text-gray-900">Tiffany Heffner</p>
                                <p class="tw-text-sm tw-text-gray-700">(555) 555-4321</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br /><br />
For more inspiration, see:
<ul>
    <li><a href="https://www.tailwindtoolbox.com/starter-templates">https://www.tailwindtoolbox.com/starter-templates</a></li>
    <li><a href="https://github.com/aniftyco/awesome-tailwindcss">https://github.com/aniftyco/awesome-tailwindcss</a></li>
</ul>

<div class="tw-w-2/5">
    <div class="md:tw-flex tw-bg-gray-200 tw-rounded-lg tw-p-6">
        <img class="tw-h-16 tw-w-16 md:tw-h-24 md:tw-w-24 tw-rounded-full tw-mx-auto md:tw-mx-0 md:tw-mr-6" src="https://randomuser.me/api/portraits/women/17.jpg">
        <div class="tw-text-center md:tw-text-left">
            <h2 class="tw-text-lg">Erin Lindford</h2>
            <div class="tw-text-purple-500">Customer Support</div>
            <div class="tw-text-gray-600">erinlindford@example.com</div>
            <div class="tw-text-gray-600">(555) 765-4321</div>
        </div>
    </div>
</div>
@endsection

@section('scriptsSection')

@endsection
