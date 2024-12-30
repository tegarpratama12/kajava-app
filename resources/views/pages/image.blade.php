<x-layout>
    <x-slot:title>Upload Gambar</x-slot:title>

    <div class="max-w-md mx-auto mt-10">
        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded-lg p-8">
            @csrf
            <h2 class="text-2xl font-bold text-center mb-6">Upload Gambar</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2" for="image">
                    Pilih Gambar
                </label>
                <input type="file" name="image" id="image" accept="image/*" required
                    class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-slate-950 font-semibold py-2 px-6 rounded focus:outline-none focus:shadow-outline transition duration-200">
                    Upload
                </button>
            </div>
        </form>
    </div>
</x-layout>
