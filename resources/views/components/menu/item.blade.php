@props(['route', 'title' => ''])
<li>
  <a 
    href="{{ $route }}" 
    title="{{ $title }}"
    class="font-basetica-bold uppercase text-sm lg:text-lg text-black">
    {{ $title }}
  </a>
</li>