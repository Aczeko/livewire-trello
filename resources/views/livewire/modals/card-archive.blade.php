<x-modal-wrapper title="Archived cards">

    <div class="max-h-96 overflow-y-auto space-y-2">

        @forelse($cards as $card)

            <div class="border border-gray-200 rounded-lg px-3 py-2 flex items-center justify-between dark:text-white">
                <div>
                    {{ $card->title }}
                </div>

                <button class="text-sm text-gray-500 dark:text-gray-400">Put back</button>
            </div>

        @empty
            <p>You have no archived cards</p>

        @endforelse

    </div>

</x-modal-wrapper>
