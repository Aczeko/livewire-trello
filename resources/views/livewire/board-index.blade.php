<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-4 gap-6">

        @foreach($boards as $board)

            <a href="{{ route('boards.show', $board) }}" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-36 flex items-end p-6 text-gray-900 dark:text-white">

                {{ $board->title }}

            </a>

        @endforeach

        <button class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-36 flex items-end p-6 text-gray-900 dark:text-white text-lg" wire:click="$dispatch('openModal', { component: 'modals.create-board' })">

            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

                <span>
                    New Board
                </span>
            </div>

        </button>

    </div>
</div>

