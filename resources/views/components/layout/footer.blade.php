<footer class="relative bg-sky p-20 lg:p-40">
  <x-layout.inner>
    <a 
      href="https://wagerenhof.ch" 
      title="Webseite Wagerenhof" 
      class="block w-200 sm:w-240 lg:w-[340px] mb-15 lg:mb-25">
      <x-icons.logo_wagerenhof class="w-full h-auto block" />
    </a>
    <x-layout.grid class="sm:!grid-cols-12">
      <x-layout.span class="sm:!col-span-8 mb-25 sm:mb-0 md:flex md:gap-x-25 lg:gap-x-40 sm:items-end">
        <div class="mb-15 md:mb-0">
          <strong>Stiftung Wagerenhof</strong><br>Asylstrasse 24<br>8610 Uster
        </div>
        <div>
          <a 
            href="tel:044 905 13 11" 
            class="hover:underline decoration-1 underline-offset-4 no-underline">
              044 905 13 11
          </a><br>
          <a 
            href="mailto:bewegdichmit@wagerenhof.ch"
            class="hover:underline decoration-1 underline-offset-4 no-underline">
            bewegdichmit@wagerenhof.ch
          </a>
        </div>
      </x-layout.span>
      <x-layout.span class="sm:!col-span-4 sm:flex sm:justify-end sm:items-end">
        <nav class="text-xs">
          <ul class="sm:flex sm:flex-col sm:gap-x-15 lg:gap-x-20">
            <li>
              <a href="" target="_blank" title="Impressum">
                Teilnahmebedingungen
              </a>
            </li>
            <li>
              <a href="https://www.wagerenhof.ch/impressum" target="_blank" title="Impressum">
                Impressum
              </a>
            </li>
            <li>
              <a href="https://www.wagerenhof.ch/datenschutz" target="_blank" title="Datenschutz">
                Datenschutz
              </a>
            </li>
            <li>
              <a 
                href="https://stoz.ch" 
                target="_blank" 
                title="stoz.ch" 
                rel="noopener">
                design by stoz
              </a>
            </li>
          </ul>
        </nav>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
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