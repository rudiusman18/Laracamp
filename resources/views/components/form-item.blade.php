<div class="flex flex-col">
     <label for="{{ $for }}" {{ $attributes->merge(["class"=>"block text-md text-heading"]) }}>{{ $slot }}</label>
 <input type="{{ $type }}" id="{{ $id }}" class="mt-[8px] bg-neutral-secondary-medium border border-default-medium text-heading text-md rounded-full focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="{{ $placeholder }}" {{ $isrequired }}>

</div>
