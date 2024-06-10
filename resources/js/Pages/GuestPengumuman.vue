<script setup>
import { defineProps } from "vue";
import GuestNavbar from "@/Components/GuestNavbar.vue";
import Foot from "@/Components/Foot.vue";

// Define props
const { pengumuman, event, eventWithAnnouncements } = defineProps({
  pengumuman: Array,
  event: Array,
  eventWithAnnouncements: Array
});

console.log(pengumuman); // Log the props to verify data
console.log(event);
console.log(eventWithAnnouncements);
</script>

<template>
  <div>
    <GuestNavbar />
    <div class="flex flex-col space-y-6">
      <section>
        <header class="bg-blue-700 text-white py-12">
          <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Pengumuman Open Recruitment</h1>
          </div>
        </header>
        <div class="mt-8 space-y-8 container mx-auto px-4">
          <!-- Display events -->
          <div v-for="item in event" :key="item.event_id" class="flex items-start p-4 rounded-lg shadow-md" :class="{'bg-gray-300': !eventWithAnnouncements.includes(item.event_id), 'bg-white': eventWithAnnouncements.includes(item.event_id)}">
            <div class="flex items-center justify-center mr-4">
              <img :src="'/storage/' + item.gambar" class="h-20 w-20 object-contain" />
            </div>
            <div class="flex flex-col flex-grow">
              <h3 class="text-lg font-semibold">{{ item.nama_event }}</h3>
              <p v-if="eventWithAnnouncements.includes(item.event_id)">
                <!-- Find the corresponding pengumuman for the event -->
                {{ getAnnouncementText(item.event_id) }}
              </p>
              <p v-else class="text-gray-500">Pengumuman belum tersedia</p>
              <a v-if="eventWithAnnouncements.includes(item.event_id)" :href="'/unduhpengumuman/' + getAnnouncementId(item.event_id)" class="bg-blue-500 text-white py-1 px-4 rounded mt-4 inline-block hover:bg-blue-700">
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

<script>
import { defineProps } from "vue";

const props = defineProps({
  pengumuman: Array,
  event: Array,
  eventWithAnnouncements: Array
});

export default {
  methods: {
    getAnnouncementText(eventId) {
      const announcement = this.pengumuman.find(p => p.event.event_id === eventId);
      return announcement ? announcement.keterangan : 'Pengumuman belum tersedia';
    },
    getAnnouncementId(eventId) {
      const announcement = this.pengumuman.find(p => p.event.event_id === eventId);
      return announcement ? announcement.pengumuman_id : null;
    }
  }
};
</script>
