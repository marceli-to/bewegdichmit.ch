@props(['quote', 'author' => '', 'class' => ''])
<div class="col-span-2 sm:col-span-1 aspect-square flex flex-col items-center justify-center text-center p-10 lg:p-15 {{ $class }}">
  &laquo;{{ $quote }}&raquo;
  <div class="mt-2">
    <i>{{ $author }}</i>
  </div>
</div>