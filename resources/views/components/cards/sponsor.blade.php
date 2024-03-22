@props(['url', 'class' => ''])
<a href="{{ $url ?? '' }}" 
  target="_blank"
  class="aspect-[16/9] mb-16 p-5 bg-white {{ $class }}">
  {{ $slot}}
</a>