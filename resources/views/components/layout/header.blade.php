<header class="bg-sky h-85 lg:h-150 w-full px-20 lg:px-40">
  <x-layout.inner class="h-full flex justify-between items-center">
    <x-menu.wrapper />
    <a 
      href="{{ route('page.home') }}"
      title="Startseite">
      <x-icons.logo_wagi_lauf />
    </a>
  </x-layout.inner>
</header>