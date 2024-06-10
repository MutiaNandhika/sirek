<script setup>
import { defineProps } from "vue";
import GuestNavbar from "@/Components/GuestNavbar.vue";
import Foot from "@/Components/Foot.vue";

// Properti event telah didefinisikan dengan menggunakan defineProps
const { event } = defineProps({ event: Array });
console.log(event); // Log the props to verify data
</script>

<template>
    <div>
        <GuestNavbar />
        <div class="flex flex-col space-y-6">
            <section>
                <header class="bg-blue-700 text-white py-12">
                    <div class="container mx-auto text-center">
                        <h1 class="text-5xl font-bold mb-4">
                            Pengumuman Open Recruitment
                        </h1>
                    </div>
                </header>
                <div class="mt-8 space-y-8 container mx-auto px-4">
                    <!-- Menampilkan informasi tentang setiap acara -->
                    <div
                        class="flex items-start bg-white rounded-lg shadow-md p-4"
                    >
                        <div class="flex items-center justify-center mr-4">
                            <img
                                src="/storage/assets/s3.png"
                                alt="Event Logo"
                                class="h-20 w-20 object-contain"
                            />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold">
                                Soedirman Student Summit
                            </h3>
                            <p>
                                Event ini sudah selesai Open Recruitment. Untuk
                                melihat Pengumuman silahkan tekan tombol dibawah
                                ini.
                            </p>
                            <a
                                href=""
                                class="bg-blue-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-blue-700"
                            >
                                Unduh Pengumuman
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex items-start bg-white rounded-lg shadow-md p-4"
                    >
                        <div class="flex items-center justify-center mr-4">
                            <img
                                src="/storage/assets/desacita.png"
                                alt="Event Logo"
                                class="h-20 w-20 object-contain"
                            />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold">Desa Cita</h3>
                            <p>
                                Event ini sudah selesai Open Recruitment. Untuk
                                melihat Pengumuman silahkan tekan tombol dibawah
                                ini.
                            </p>
                            <a
                                href="/storage/app/public/pengumuman_files/pengumumandesacita.pdf"
                                class="bg-blue-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-gray-700"
                            >
                                Unduh Pengumuman
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex items-start bg-white rounded-lg shadow-md p-4"
                    >
                        <div class="flex items-center justify-center mr-4">
                            <img
                                src="/storage/assets/starfestclose.png"
                                alt="Event Logo"
                                class="h-20 w-20 object-contain"
                            />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold">Starfest</h3>
                            <p>
                                Event ini belum selesai Open Recruitment. Open
                                Recruitment sedang berjalan, untuk mendaftar
                                silahkan ke halaman Event.
                            </p>
                            <a
                                href="#"
                                class="bg-gray-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-gray-700"
                            >
                                Unduh Pengumuman
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex items-start bg-white rounded-lg shadow-md p-4"
                    >
                        <div class="flex items-center justify-center mr-4">
                            <img
                                src="/storage/assets/sdsclose.png"
                                alt="Event Logo"
                                class="h-20 w-20 object-contain"
                            />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold">
                                Soedirman Digital School
                            </h3>
                            <p>
                                Event ini belum selesai Open Recruitment. Open
                                Recruitment sedang berjalan, untuk mendaftar
                                silahkan ke halaman Event.
                            </p>
                            <a
                                href="#"
                                class="bg-gray-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-gray-700"
                            >
                                Unduh Pengumuman
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <Foot />
    </div>
</template>
