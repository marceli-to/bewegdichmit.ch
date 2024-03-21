@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-sunshine rounded-sm font-semi font-semibold flex text-white uppercase py-10 px-20 tracking-wider leading-none hover:bg-white hover:text-sunshine transition-colors']) }}>
  {{ $slot}}
</button>