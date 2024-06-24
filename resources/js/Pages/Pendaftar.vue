<!-- Pendaftar.vue -->
<template>
    <AppLayout title="Pendaftar">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pendaftar
        </h2>
        <div class="mt-2 flex justify-end">
            <select v-model="selectedEvent" @change="handleEventChange" class="appearance-none block px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm bg-white">
                <option value="">Pilih Event</option>
                <option v-for="event in uniqueEvents" :value="event.event_id" :key="event.event_id">{{ event.nama_event }}</option>
            </select>
        </div>

        <!-- Tabel Pendaftar -->
        <div class="py-5">
   <!-- Notifikasi -->
   <div v-if="$page.props.flash && $page.props.flash.success" class="alert alert-success">
      {{ $page.props.flash.success }}
    </div>
    <div v-if="$page.props.flash && $page.props.flash.error" class="alert alert-danger">
      {{ $page.props.flash.error }}
    </div>
            <div class="max-w-full ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIM</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fakultas</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Angkatan</th>
                                    <th colspan="3" scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="item in filteredPendaftar" :key="item.pendaftar_id">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ item.event.nama_event }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.nama }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.nim }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.jurusan }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.fakultas }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.angkatan }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 flex items-center justify-center space-x-2">
                                        <a :href="'/detailpendaftar/' + item.pendaftar_id" class="text-blue-500 hover:text-blue-700">
                                            <i class="fa-solid fa-eye"></i> 
                                        </a>
                                        <a :href="'/pendaftar/edit/' + item.event_id + '/'+  item.pendaftar_id " class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-edit"></i> 
                                        </a>
                                        <a :href="'/delpendaftar/' + item.pendaftar_id" onclick="return confirm('Apakah Anda yakin ingin menghapus pendaftar ini?')" class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash-alt"></i> 
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { ref, computed, defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';

// Props
const props = defineProps({ pendaftar: Array, flash: Object });
console.log(props.flash);
console.log(props.pendaftar); 
// State
const selectedEvent = ref('');
const filteredPendaftar = ref(props.pendaftar);

// Methods
function handleEventChange() {
    if (selectedEvent.value !== '') {
        filteredPendaftar.value = props.pendaftar.filter(item => item.event.event_id === selectedEvent.value);
    } else {
        filteredPendaftar.value = props.pendaftar;
    }
}

// Computed
const uniqueEvents = computed(() => {
    const uniqueEventIds = [];
    const uniqueEvents = [];
    props.pendaftar.forEach(item => {
        if (!uniqueEventIds.includes(item.event.event_id)) {
            uniqueEventIds.push(item.event.event_id);
            uniqueEvents.push(item.event);
        }
    });
    return uniqueEvents;
});
</script>
<style>
/* Tambahkan styling untuk notifikasi jika diperlukan */
.alert {
  padding: 10px;
  margin: 10px 0;
}

.alert-success {
  background-color: #d4edda;
  color: #155724;
}

.alert-danger {
  background-color: #f8d7da;
  color: #721c24;
}
</style>