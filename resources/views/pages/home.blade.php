@extends('app')
@section('content')
<x-layout.section class="!p-0">
  <figure class="relative">
    <picture>
      <img 
        src="/media/img/wagi-lauf-visual.jpg" 
        alt="{{ env('APP_NAME') }}" 
        title="{{ env('APP_NAME') }}" 
        height="1024" 
        width="480"
        class="block w-full h-auto">
    </picture>
    <div class="max-w-6xl mx-auto relative">
      <x-icons.bubble class="w-120 md:w-160 lg:w-230 h-auto absolute right-20 -bottom-50 md:-bottom-70 lg:-bottom-100 z-50" />
    </div>
  </figure>
</x-layout.section>

<x-layout.section class="bg-white">
  <x-layout.inner>
    <p class="font-basetica-regular">Text Regular</p>
    <p class="font-basetica-bold">Text Bold</p>
    <p class="font-basetica-italic">Text Italic</p>
  </x-layout.inner>
</x-layout.section>



@endsection