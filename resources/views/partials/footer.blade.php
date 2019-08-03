<div id="footer" class="tw-bg-fixed tw-text-sm tw-mx-auto">
  <div class="tw-pb-8 tw-border-gray-400 tw-border-t"></div>

  <div class="tw-container tw-flex tw-flex-wrap tw-font-bold">
    <div class="xl:tw-pr-8 tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <!--<div class="tw-text-2xl tw-mb-6">Why {{env('APP_NAME')}}</div>-->
      <div class="tw-text-2xl tw-mb-6">We help you..</div>
      <span class="tw-text-black tw-text-lg tw-p-2 tw-text-left">{{config('_myappconfig.app_description')}}</span>
      <div class="tw-h-8"></div>
    </div>
    <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <!--<div class="tw-text-2xl tw-mb-6">Products</div>-->
      <div class="tw-text-2xl tw-mb-6">Learn</div>
      <ul>
        <li class="tw-h-8"><a href="/course/product-management">PM Course</a></li>
        <li class="tw-h-8"><a href="/testimonials">Testimonials</a></li>
        <li class="tw-h-8"><a href="/faq">FAQs</a></li>
        <!--
        <li class="tw-h-8"><a href="/join">Sign Up</a></li>
        <li class="tw-h-8"></li>
        -->
      </ul>
    </div>

    <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <div class="tw-text-2xl tw-mb-6">Extras</div>
      <ul>
        <li class="tw-h-8"><a href="/{{ env('CANVAS_BLOG_PREFIX') }}">Articles & Tips</a></li>
        <li class="tw-h-8"><a href="/podcast">Podcast Episodes</a></li>
        <!--<li class="tw-h-8"><a href="/recommended-reading">Books</a></li>-->
        <li class="tw-h-8"></li>
      </ul>
    </div>

    <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <div class="tw-text-2xl tw-mb-6">Company</div>
      <ul>
        <li class="tw-h-8"><a href="/about">About</a></li>
        <!--
        <li class="tw-h-8"><a href="/careers">Careers</a></li>
        -->
        <li class="tw-h-8"></li>
      </ul>
    </div>

    <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <div class="tw-text-2xl tw-mb-6">Contact</div>
      <ul>
        <li class="tw-h-8"><a href="/contact">Contact Us</a></li>
        @if (0)
        <li class="tw-h-8 tw-text-sm"><a href="mailto:{{env('MAIL_FROM_ADDRESS')}}">{{env('MAIL_FROM_ADDRESS')}}</a></li>
        <li class="tw-h-8"></li>
        @endif
      </ul>
    </div>

    <div class="tw-w-full sm:tw-w-1/2 md:tw-w-1/3 lg:tw-w-1/4 xl:tw-w-1/6 tw-text-center">
      <div class="tw-text-2xl tw-mb-6">Stay Connected</div>
        <ul>
          <li class="tw-h-8"><a href="{{config('_myappconfig.facebook_group_url')}}">Facebook</a></li>
          <li class="tw-h-8"><a href="{{config('_myappconfig.linkedin_group_url')}}/">Linkedin</a></li>
          <li>
            <label class="tw-block tw-text-gray-700 tw-text-sm tw-font-bold tw-mb-2" for="email">
              Subscribe to Stay Informed
            </label>
            <div class="tw-mt-4 tw-flex tw-justify-center">
                <input type="text" id="email" name="email" class="tw-p-2 tw-border tw-border-gray-400 tw-round tw-text-gray-600 tw-text-sm tw-h-auto tw-w-3/5" placeholder="Email address">
                <button class="tw-bg-blue-500 tw-text-white tw-rounded-sm tw-h-auto tw-text-xs tw-p-3">Subscribe</button>
            </div>
          </li>
          <li class="tw-h-8"></li>
      </ul>
    </div>
  </div>

  <div class="tw-container tw-pb-6 tw-border-gray-400 tw-border-t"></div>

  <div class="tw-flex tw-flex-wrap tw-text-center">
    <div class="tw-container tw-flex tw-flex-wrap">
      <ul class="tw-text-center tw-w-full">
        <li class="tw-h-12 tw-flex tw-items-center tw-justify-center">
          <a href="/">
            <img class="tw-bg-white tw-shadow-lg tw-rounded-full" height="80" width="80" src="/img/brain.svg"/>
          </a>
        </li>
        <li class="tw-h-6"></li>
        <li class="tw-h-8 tw-flex tw-items-center tw-justify-center">
          <div class="tw-mr-2">Made with </div>
          <div class="tw-mr-2">
            <!-- Throbbing heart in footer, SVG animation -->
            <img src="/img/heart.svg" alt="heart" class="heart-rate">
          </div>
          <span> in Silicon Valley, California</span>
        </li>
        <!--
        <li class="tw-h-8">Proudly hosted on <a href="https://www.linode.com/?r=17279989f777e73f38e01ee83815d14cb98c4b12">Linode</a></li>
        -->
        <li class="tw-h-8 tw-flex tw-items-center tw-justify-center">Copyright &copy; {{date('Y')}} {{env('APP_NAME')}}, All Rights Reserved.</li>
        <li class="tw-h-8 tw-flex tw-items-center tw-justify-center tw-text-xs tw-font-bold">
          <div class="tw-w-1/8 tw-mr-2">
            <a href="/terms">Terms of Use</a>
          </div>
          <div class="tw-w-1/8 tw-ml-2">
            <a href="/privacy">Privacy Policy</a>
          </div>
        </li>
        <li class="tw-h-8"></li>
      </ul>
    </div>
  </div>

</div>
