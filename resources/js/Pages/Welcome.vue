<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestNavbar from '@/Components/GuestNavbar.vue';

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
</template>
