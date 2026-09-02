<x-layout>
    <x-slot:title>
        Chirps
    </x-slot:title>

    <div class="w-full max-w-2xl mx-auto mt-12 px-4">

        <div class="mb-8">
            <x-form />
        </div>

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Chirps
            </h1>

            <p class="mt-1 text-gray-500">
                See what people are saying.
            </p>
        </div>

        <div class="space-y-5">

            @forelse ($chirps as $chirp)

                <div class="bg-white border border-gray-200 rounded-xl shadow-sm
                            hover:shadow-md transition duration-200">

                    <div class="p-5">

                        <div class="flex items-center">

                            <div class="w-11 h-11 rounded-full bg-blue-600
                                        flex items-center justify-center
                                        text-white font-bold text-lg">

                                {{ strtoupper(substr($chirp->author, 0, 1)) }}

                            </div>

                            <div class="ml-3">

                                <h2 class="font-semibold text-gray-900">
                                    {{ $chirp->author }}
                                </h2>

                                <p class="text-sm text-gray-500">
                                    {{ $chirp->time->diffForHumans() }}
                                </p>

                            </div>

                            <div class="ml-auto flex items-center gap-3">

                                <a href="{{ url('/v1/chirps/' . $chirp->id . '/edit') }}"
                                 class="text-sm font-medium text-blue-600
                                     hover:text-blue-800 transition">
                                     Edit
                                </a>

                                <form method="POST"
                                      action="{{ url('/v1/chirps/' . $chirp->id) }}"
                                      onsubmit="return confirm('Tem certeza que deseja remover este Chirp?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="text-sm font-medium text-red-600
                                                   hover:text-red-800 transition">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                        <div class="mt-5">

                            <p class="text-gray-800 text-base leading-7">
                                {{ $chirp->message }}
                            </p>

                        </div>

                        <div class="border-t border-gray-100 mt-5 pt-3">

                            <div class="flex items-center gap-6">

                                <button class="text-gray-500 hover:text-blue-600
                                               text-sm font-medium transition">
                                    Like
                                </button>

                                <button class="text-gray-500 hover:text-blue-600
                                               text-sm font-medium transition">
                                    comment
                                </button>

                                <button class="text-gray-500 hover:text-blue-600
                                               text-sm font-medium transition">
                                    share
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <p class="text-gray-500 text-center py-8">
                    No chirps yet. Be the first to post!
                </p>

            @endforelse

        </div>

    </div>
</x-layout>