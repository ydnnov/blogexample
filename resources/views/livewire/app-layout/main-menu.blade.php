<nav class="flex justify-end">
    <ul class="flex space-x-4">
        @foreach($items as $item)
            <li>
                <a
                    href="{{ route($item->route) }}"
                    class="text-white {{ $this->isActive($item) ? 'underline' : '' }}"
                >{{ $item->label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
