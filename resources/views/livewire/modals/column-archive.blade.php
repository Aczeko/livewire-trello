<x-modal-wrapper title="Archived columns">

    <div class="max-h-96 overflow-y-auto space-y-2">

        @forelse($columns as $column)

            <div class="border border-gray-200 rounded-lg px-3 py-2 flex items-center justify-between dark:text-white">
                <div>
                    {{ $column->title }}
                </div>

                <button class="text-sm text-gray-500 dark:text-gray-400" wire:click="unarchiveColumn({{ $column->id }})">Put back</button>
            </div>

        @empty
            <p class="dark:text-white">You have no archived columns</p>

        @endforelse

    </div>

</x-modal-wrapper>
