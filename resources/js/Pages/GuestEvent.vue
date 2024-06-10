<script setup>
import { defineProps } from 'vue';
import GuestNavbar from '@/Components/GuestNavbar.vue';
import Foot from '@/Components/Foot.vue';
// Properti event telah didefinisikan dengan menggunakan defineProps
const { event } = defineProps({ event: Array });
console.log(event);  // Log the props to verify data
</script>

<template>
  <div>
    <GuestNavbar />
    <div class="flex flex-col space-y-6">
      <!-- Menampilkan informasi tentang setiap acara -->
      <section>
        <header class="bg-blue-700 text-white py-12">
          <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Event Bahtera Karsa 2024</h1>
          </div>
        </header>

        <div class="mt-8 space-y-8 container mx-auto px-4">
          <!-- Event 1 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img src="storage/assets/s3.png" alt="Event Image" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">Soedirman Student Summit</h2>
                <p class="text-gray-600 mt-2">Acara tahunan yang diselenggarakan oleh BEM Unsoed dalam rangka penyambutan mahasiswa baru 2023. Rangkaian acara tersebut terdiri dari stadium general, EXPO UKM, parade Fakultas serta serangkaian acara lainnya yang akan disusun lebih lanjut berdasarkan tema besar yang akan diangkat pada tahun 2024.</p>
                <a href="#" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
          <!-- Event 2 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img src="storage/assets/starfest.png" alt="Event Image" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">Starfest</h2>
                <p class="text-gray-600 mt-2">Starfest adalah kegiatan atau rangkaian acara yang diselenggarakan oleh Kementerian Minat dan Bakat sebagai wadah pengembangan dan pengkaryaan potensi mahasiswa Unsoed sekaligus menunjang prestasi dalam bidang seni.</p>
                <a href="#" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
          <!-- Event 3 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img src="storage/assets/desacita.png" alt="Event Image" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">Desa Cita</h2>
                <p class="text-gray-600 mt-2">Desa cita merupakan rangkaian kegiatan yang diselenggarakan oleh kementerian pengabdian masyarakat sebagai wadah pembinaan dan peningkatan kesejahteraan masyarakat desa binaan sebagai penerapan isi Tri Dharma Perguruan Tinggi yaitu pengabdian kepada masyarakat.</p>
                <a href="#" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
          <!-- Event 4 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img src="storage/assets/sds.png" alt="Event Image" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">Soedirman Digital School</h2>
                <p class="text-gray-600 mt-2">Sekolah Digital Soedirman (SDS) merupakan program pelatihan digital Unsoed yang diselenggarakan oleh Kementerian Media Komunikasi BEM UNSOED untuk membantu dalam mengembangkan dan melatih skill digital guna menghadapi era revolusi industri 4.0</p>
                <a href="#" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
          <!-- Event 5 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img src="storage/assets/solo.png" alt="Event Image" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">SOLO</h2>
                <p class="text-gray-600 mt-2">Kegiatan yang memfasilitasi mahasiswa Unsoed untuk meningkatkan potensi dan kontribusi dalam sebuah organisasi di tingkat Universitas dan dikemas melalui rangkaian SOLO yang terdiri dari Circle Organization dan Talkshow.</p>
                <a href="#" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <Foot />
</template>
  
