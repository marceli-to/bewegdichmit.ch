@props(['image', 'alt'])
<div class="swiper-slide">
  <figure>
    <picture>
      <source media="(min-width: 1200px)" srcset="/media/img/{{ $image }}.jpg">        
      <source media="(min-width: 768px)" srcset="/media/img/{{ $image }}_md.jpg">
      <source srcset="/media/img/{{ $image }}_sm.jpg">
      <img src="/media/img/{{ $image }}_sm.jpg" alt="{{ $alt }}" title="{{ $alt }}" width="1600" height="900">
    </picture>
  </figure>
</div>