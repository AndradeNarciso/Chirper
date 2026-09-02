<x-layout>
    <x-slot:title>
        Edit Chirp
    </x-slot:title>

    <div class="w-full max-w-2xl mx-auto mt-12 px-4">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Edit Chirp
            </h1>

            <p class="mt-1 text-gray-500">
                Update your message.
            </p>
        </div>

        <form method="POST"
              action="{{ url('/v1/chirps/' . $chirp->id) }}"
              class="w-full bg-white border border-gray-200 rounded-xl shadow-sm p-5">

            @csrf
            @method('PUT')

            <div>

                <label for="message"
                       class="block mb-2 text-sm font-semibold text-gray-700">
                    Message
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    maxlength="255"
                    minlength="5"
                    class="w-full px-4 py-3 border rounded-lg
                           resize-none text-gray-800
                           focus:outline-none focus:ring-2
                           focus:ring-blue-500
                           focus:border-transparent
                           transition
                           @error('message')
                               border-red-500
                           @else
                               border-gray-300
                           @enderror"
                >{{ old('message', $chirp->message) }}</textarea>

                @error('message')
                    <p class="mt-1 text-sm text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="flex justify-end gap-3 mt-4">

                <a href="{{ url('/') }}"
                   class="px-5 py-2.5 text-sm font-semibold
                          text-gray-600 hover:text-gray-800
                          transition">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-5 py-2.5 text-sm font-semibold
                           text-white bg-blue-600 rounded-lg
                           hover:bg-blue-700 transition">
                    Update Chirp
                </button>

            </div>

        </form>

    </div>
</x-layout> 