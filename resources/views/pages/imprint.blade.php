@extends('app')
@section('seo_title', 'Impressum')
@section('content')
<x-layout.section>
  <x-layout.inner class="imprint">
    <div class="max-w-3xl">
      <h1>Impressum</h1>
      <h2>Inhaberin der Website</h2>
      <p>
        Stiftung Wagerenhof<br>
        Raum für Menschen mit Beeinträchtigung<br>
        Asylstrasse 24<br>
        8610 Uster<br>
        <a href="mailto:info@wagerenhof.ch" class="underline decoration-1 underline-offset-4 hover:no-underline">info@wagerenhof.ch</a>
      </p>
      <h2>DESIGN UND ENTWICKLUNG</h2>
      <p>
        Stoz Werbeagentur AG<br>
        Barzloostrasse 2<br>
        8330 Pfäffikon ZH<br>
        <a href="mailto:hello@stoz.ch" class="underline decoration-1 underline-offset-4 hover:no-underline">hello@stoz.ch</a><br>
        <a href="https://stoz.ch" class="underline decoration-1 underline-offset-4 hover:no-underline" title="stoz.ch" target="_blank">www.stoz.ch</a>
      </p>
      
      <h2>PROGRAMMIERUNG</h2>
      <p>
        Marcel Stadelmann, Zürich<br>
        <a href="https://marceli.to" class="underline decoration-1 underline-offset-4 hover:no-underline" title="marceli.to" target="_blank">marceli.to</a>
      </p>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection