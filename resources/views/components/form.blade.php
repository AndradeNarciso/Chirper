


<form method="POST" action="/chirps"
      class="w-full bg-white border border-gray-200 rounded-xl shadow-sm p-5">

    @csrf

    <div>
        <label for="message" class="block mb-2 text-sm font-semibold text-gray-700">
            What's on your mind?
        </label>
        
        @if (session('success'))
            <div class="mb-6 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <textarea
            id="message"
            name="message"
            rows="5"
            placeholder="Write your message..."
            maxlength="255"
            minlength="5"
            class="w-full px-4 py-3 border rounded-lg
                   resize-none text-gray-800 placeholder-gray-400
                   focus:outline-none focus:ring-2 focus:ring-blue-500
                   focus:border-transparent transition
                   @error('message') border-red-500 @else border-gray-300 @enderror"
        >{{ old('message') }}</textarea>

        @error('message')
            <p class="mt-1 text-sm text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="flex justify-end mt-4">
        <button
            type="submit"
            class="px-5 py-2.5 text-sm font-semibold text-white
                   bg-blue-600 rounded-lg
                   hover:bg-blue-700 transition"
        >
            Send Chirp
        </button>
    </div>

</form>