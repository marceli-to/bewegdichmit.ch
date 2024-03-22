@props(['img', 'alt' => 'Image'])
<div class="col-span-2 sm:col-span-1 aspect-square bg-gray-200">
  <img 
    src="/media/img/runners/{{ $img }}" 
    alt="{{ $alt }}" 
    class="object-cover w-full h-full"
    loading="lazy">
</div>