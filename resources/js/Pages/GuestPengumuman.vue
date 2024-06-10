<script setup>
import { defineProps } from "vue";
import GuestNavbar from "@/Components/GuestNavbar.vue";
import Foot from "@/Components/Foot.vue";

// Properti event telah didefinisikan dengan menggunakan defineProps
const { pengumuman } = defineProps({ pengumuman: Array });
console.log(pengumuman); // Log the props to verify data
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
                    <div v-for="item in pengumuman"
        :key="item.event.event_id"

                        class="flex items-start bg-white rounded-lg shadow-md p-4"
                    >
                        <div class="flex items-center justify-center mr-4">
                            <img
                               :src="'storage/' + item.event.gambar"
                                class="h-20 w-20 object-contain"
                            />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold">
                                {{ item.event.nama_event }}
                            </h3>
                            <p>
                                {{item.keterangan}}
                            </p>
                            <a
                                :href="'/unduhpengumuman/' + item.pengumuman_id"
                                class="bg-blue-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-blue-700"
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
