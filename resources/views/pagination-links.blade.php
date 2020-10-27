@if ($paginator->hasPages())
    <ul class="w-full flex justify-between">
        @if ($paginator->onFirstPage())
            <li class="w-16 px-2 py-1 text-center rounded border bg-gray-200">Prev</li>
        @else
            <li wire:click='previousPage' class="w-16 px-2 py-1 text-center rounded border shadow bg-gray-50 cursor-pointer">Prev</li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                <div class="flex">
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="mx-2 w-16 px-2 py-1 text-center rounded border shadow bg-blue-500 text-white cursor-pointer" wire:click='gotoPage({{ $page }})'>{{ $page }}</li>
                        @else
                            <li class="mx-2 w-16 px-2 py-1 text-center rounded border shadow bg-gray-50 cursor-pointer" wire:click='gotoPage({{ $page }})'>{{ $page }}</li>
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li wire:click='nextPage' class="w-16 px-2 py-1 text-center rounded border shadow bg-gray-50 cursor-pointer">Next</li>
        @else
            <li wire:click='nextPage' class="w-16 px-2 py-1 text-center rounded border bg-gray-200">Next</li>
        @endif
    </ul>
@endif
