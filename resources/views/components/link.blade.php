@props(['url', 'title', 'target' => '_self', 'class' => ''])
<a href="{{ $url }}" 
  target="{{ $target }}"
  title="{{ $title }}"
  class="font-basetica-bold inline-flex leading-none uppercase mt-10 lg:mt-20 transition-all duration-200 px-15 py-15 {{ $class }}">
  {{ $title }}
</a>