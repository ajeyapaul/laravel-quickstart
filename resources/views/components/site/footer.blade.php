<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
  <div class="mx-auto max-w-screen-xl text-center">
      <a href="{{ route('pages.home') }}" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
          <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
          {{ config('app.name', 'Laravel') }}    
      </a>
      <p class="my-6 text-gray-500 dark:text-gray-400">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
      <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Home</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Affiliate Program</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
          </li>
      </ul>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© <?= date("Y"); ?> <a href="#" class="hover:underline">{{ config('app.name', 'Laravel') }}    </a>. All Rights Reserved.</span>
  </div>
</footer>