<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="bg-black bg-opacity-50 p-10 shadow-lg">
        <div class="relative">
            <div class="flex overflow-hidden">
                {{-- Loop untuk menampilkan gambar --}}
                @foreach ($images as $index => $image)
                    <div class="image-container min-w-0 flex-shrink-0 w-1/3 p-2"
                        style="display: {{ $index < 3 ? 'block' : 'none' }};">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Image {{ $index + 1 }}"
                                class="w-full h-64 object-cover">
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-lg p-4 shadow-md"
                onclick="prevImages()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-lg p-4 shadow-md"
                onclick="nextImages()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</x-layout>

<script>
    let currentIndex = 0; // Indeks gambar pertama yang ditampilkan
    const images = @json($images); // Mengambil data gambar dari server
    const totalImages = images.length;
    const visibleCount = 3; // Jumlah gambar yang ditampilkan sekaligus

    function nextImages() {
        currentIndex = (currentIndex + 1) % totalImages; // Pindah ke gambar berikutnya
        updateImages();
    }

    function prevImages() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Pindah ke gambar sebelumnya
        updateImages();
    }

    function updateImages() {
        const imageContainers = document.querySelectorAll('.image-container');
        imageContainers.forEach((container, index) => {
            // Hitung indeks gambar yang harus ditampilkan
            const imageIndex = (currentIndex + index) % totalImages;
            if (index < visibleCount) {
                container.style.display = 'block'; // Tampilkan gambar
                container.querySelector('img').src = `{{ asset('storage/') }}/${images[imageIndex].image}`;
                container.querySelector('img').alt = `Image ${imageIndex + 1}`;
            } else {
                container.style.display = 'none'; // Sembunyikan gambar lain
            }
        });
    }

    // Inisialisasi gambar awal
    document.addEventListener('DOMContentLoaded', () => {
        updateImages();
    });
</script>
