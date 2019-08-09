<header id="mainHeader" class="tw-fixed tw-w-full tw-top-0 tw-z-50">
  <div class="tw-flex tw-items-center tw-justify-between tw-flex-wrap tw-bg-white tw-shadow-lg">
    <div class="tw-container tw-flex tw-py-2 tw-justify-between">
      <div class="tw-flex tw-items-center tw-w-1/3 sm:tw-w-1/3 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-h-12 tw-mr-6">

        <div class="tw-w-1/4 tw-mr-2">
          <a href="/">
              <img class="tw-w-12 tw-shadow-md tw-rounded-full tw-bg-white" src="/img/brain.svg">
          </a>
        </div>
        <div class="tw-w-3/4">
          <div class="site-title tw-text-xl tw-font-bold">
            <a href="/" class="tw-font-logo">{{env('APP_NAME')}}</a>
          </div>
        </div>
      </div>
      <div class="tw-block">
        <button class="pricingOptionsLink md:tw-block tw-bg-red-500 hover:tw-bg-red-600 tw-rounded tw-text-white tw-p-2 tw-pl-4 tw-pr-4">
          <p class="tw-font-semibold tw-text-xl">Subscribe</p>
        </button>
        <!--
        <button class="pricingOptionsLink tw-hidden md:tw-block tw-bg-ctaButtonColor hover:tw-bg-ctaButtonHoverColor tw-rounded tw-text-white tw-p-2 tw-pl-4 tw-pr-4">
          <p class="tw-font-semibold tw-text-xl">Enroll</p>
        </button>
        <i class="material-icons tw-text-4xl tw-text-gray-600 sm:tw-block md:tw-hidden lg:tw-hidden xl:tw-hidden">menu</i>
        -->
      </div>
    </div>
  </div>

  <div id="progressBar" class="tw-relative tw-w-full">
    <div id="percentScroll" class="tw-absolute tw-block tw-w-0 tw-bg-ctaButtonColor"></div>
  </div>

</header>

{{-- @include('partials.side_navigation', []) --}}
