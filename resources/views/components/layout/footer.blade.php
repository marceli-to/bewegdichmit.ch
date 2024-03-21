<footer>
  <div class="bg-sky text-white text-xs lg:text-sm py-10 px-15 md:px-25">
    <x-layout.inner>
      <nav>
        <ul class="flex gap-x-15 lg:gap-x-20">
          <li>
            <a href="{{ route('page.imprint') }}" title="Impressum">Impressum</a>
          </li>
          <li>
            <a href="{{ route('page.privacy') }}" title="Datenschutz">Datenschutz</a>
          </li>
          <li>
            <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener">design by stoz</a>
          </li>
        </ul>
      </nav>
    </x-layout.inner>
  </div>
</footer>
@livewireScripts
@vite('resources/js/app.js')
{{-- 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RWPD2SW544"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-RWPD2SW544');
</script>
--}}
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->