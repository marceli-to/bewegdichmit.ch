@props(['url', 'class' => '', 'title' => ''])
<a href="{{ $url ?? '' }}" 
  target="_blank"
  title="{{ $title }}"
  class="aspect-[16/9] mb-16 p-5 bg-white {{ $class }}">
  {{ $slot}}
</a>