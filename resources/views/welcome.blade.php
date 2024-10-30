<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Container Utama -->
    <div class="max-w-5xl mx-auto py-8">

        <!-- Baris 1: Gambar utama galeri -->
        <div class="flex justify-center mb-6">
            <div class="w-full bg-gray-200 h-32 flex items-center justify-center">
                <img src="/path-to-your-image" alt="Gambar Galeri" class="h-full object-cover">
            </div>
        </div>

        <!-- Baris 2: Galeri Kegiatan dan Agenda Sekolah -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <!-- Kolom Galeri Kegiatan -->
            <div class="bg-green-200 p-4">
                <h2 class="text-lg font-bold mb-2">Judul</h2>
                <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipiscing elit. Donec vel orci non nulla malesuada tempor. Nullam vehicula pellentesque magna, ac elementum odio consequat.</p>
            </div>
            <!-- Kolom Agenda Sekolah -->
            <div class="bg-red-400 p-4">
                <h2 class="text-lg font-bold mb-2">Agenda Sekolah</h2>
                <ul class="list-disc list-inside text-sm text-white">
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Mi viverra pellentesque magna diam id.</li>
                    <li>Ut donec in tellus dolor tellus sed.</li>
                    <li>Mi libero consectetur faucibus lectus.</li>
                </ul>
            </div>
        </div>

        <!-- Baris 3: Informasi Terkini dan Prestasi -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <!-- Kolom Prestasi Juara -->
            <div class="bg-gray-200 p-4">
                <h2 class="text-lg font-bold mb-2">Prestasi Juara 1 Lomba Kompetensi</h2>
                <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipiscing elit. Mi viverra pellentesque magna.</p>
                <div class="bg-gray-400 h-24 mt-2"></div> <!-- Placeholder untuk gambar -->
            </div>
            <!-- Kolom Informasi Terkini -->
            <div class="bg-gray-300 p-4">
                <h2 class="text-lg font-bold mb-2">Informasi Terkini</h2>
                <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipiscing elit. Rhoncus pellentesque dictum magna.</p>
            </div>
        </div>

        <!-- Baris 4: Peta Sekolah -->
        <div class="bg-blue-300 p-4">
            <h2 class="text-lg font-bold mb-2">Peta Sekolah</h2>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur non tempor magna.</p>
            <div class="bg-gray-400 h-40 mt-2"></div> <!-- Placeholder untuk gambar peta -->
        </div>
        
    </div>

</body>
</html>
