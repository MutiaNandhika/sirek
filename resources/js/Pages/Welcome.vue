<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestNavbar from '@/Components/GuestNavbar.vue';
import Foot from '@/Components/Foot.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />
    
    <!-- Guest Navbar -->
    <GuestNavbar :canLogin="canLogin" :canRegister="canRegister" />
   

    <!-- Login/Logout Links -->
    <div v-if="canLogin" class="sm:absolute sm:top-0 sm:end-0 p-6 text-end z-10">
        <Link v-if="$page.props.auth?.user" :href="route('dashboard')"
              class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard
        </Link>
        <Link v-else :href="route('login')"
              class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Log in
        </Link>
    </div>

    <!-- Konten Utama -->
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="text-center p-6 sm:p-12">
            <h1 class="text-4xl font-bold text-gray-800">SMK <span class="text-blue-500">Negeri</span> Makassar</h1>
            <p class="mt-4 text-gray-600">sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan berprestasi di segala bidang yang dapat bersaing di dunia internasional</p>
            <div class="mt-6 flex justify-center space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Mulai</button>
                <button class="border border-blue-500 text-blue-500 px-4 py-2 rounded-lg">Video</button>
            </div>
            <div class="mt-6 relative">
                <img src="storage/assets/logo1.png" alt="Gambar Sekolah" class="rounded-lg shadow-lg">
                <div class="absolute top-2 left-2 bg-white p-2 rounded-lg shadow-lg">
                    <p class="text-sm">"Belajar itu Menyenangkan Kuncinya Jangan Pernah Menyerah Oleh Apapun Itu"</p>
                </div>
                <div class="absolute top-2 right-2 bg-white p-2 rounded-lg shadow-lg flex items-center space-x-2">
                    <img src="storage/assets/logo1.png" alt="Pengguna" class="w-6 h-6 rounded-full">
                    <div>
                        <p class="text-sm font-bold">Risnawati</p>
                        <p class="text-xs">Siswa Berprestasi</p>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-gray-600">Kami ada di Media Sosial:</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Kenapa Harus SMK Negeri Makassar -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Harus SMK Negeri Makassar?</h2>
            <p class="text-gray-600 mb-12">Alasan kenapa harus memilih untuk bergabung dengan SMK Telkom Makassar.</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-laptop-code text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Fasilitas Lengkap</h3>
                        <p class="text-gray-600">Deskripsi singkat tentang fasilitas lengkap yang disediakan.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-tree text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Lingkungan Nyaman</h3>
                        <p class="text-gray-600">Deskripsi singkat tentang lingkungan yang nyaman untuk belajar.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-user-friends text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Guru Profesional</h3>
                        <p class="text-gray-600">Deskripsi singkat tentang guru profesional yang mengajar.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-chalkboard-teacher text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kurikulum Berbasis Industri</h3>
                        <p class="text-gray-600">Deskripsi singkat tentang kurikulum berbasis industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Profil SMK Negeri -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-500 mb-4">Profil SMK Negeri Makassar</h2>
            <p class="text-gray-600 mb-8">Sambutan Kepala Sekolah SMK Negeri Makassar</p>
            <div class="flex justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <img src="storage/assets/logo1.png" alt="Kepala Sekolah" class="rounded-lg shadow-lg mb-4">
                    <p class="text-gray-600 mb-4">Kepala Sekolah SMK Negeri Makassar adalah seorang pemimpin yang berdedikasi untuk mencetak penerus bangsa yang berkualitas.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Baca Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Jurusan -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Jurusan di SMK Negeri Makassar</h2>
            <p class="text-gray-600 mb-8">Pilihan program keahlian di SMK Negeri Makassar</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-blue-500 p-6 rounded-lg shadow-lg text-white">
                        <i class="fas fa-network-wired text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Teknik Komputer dan Jaringan</h3>
                        <p class="text-white">Deskripsi singkat tentang jurusan ini.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-blue-500 p-6 rounded-lg shadow-lg text-white">
                        <i class="fas fa-stethoscope text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Perhotelan</h3>
                        <p class="text-white">Deskripsi singkat tentang jurusan ini.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-blue-500 p-6 rounded-lg shadow-lg text-white">
                        <i class="fas fa-robot text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Teknik Elektronika Industri</h3>
                        <p class="text-white">Deskripsi singkat tentang jurusan ini.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-blue-500 p-6 rounded-lg shadow-lg text-white">
                        <i class="fas fa-paint-brush text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Multimedia</h3>
                        <p class="text-white">Deskripsi singkat tentang jurusan ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Foot/>
</template>

