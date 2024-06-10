<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({ event: Array });
console.log(props.event);  // Log the props to verify data
</script>

<template>
    <AppLayout title="Event">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Event
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Event Name</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                    <th colspan="2" scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="item in props.event" :key="item.event_id">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ item.event_id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.nama_event }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.deskripsi }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 square-column">
    <img :src="'storage/' + item.gambar" alt="Image Description" class="w-full h-full object-cover rounded-md shadow-md">
</td>



<td class="px-6 py-4 text-sm text-gray-500">
  <a :href="'/event/edit/' + item.event_id" class="text-blue-500 hover:text-blue-700 mx-2">
    <i class="fas fa-edit"></i>
  </a>
  </td>
  <td class="px-6 py-4 text-sm text-gray-500">
  <a :href="'/delevent/' + item.event_id" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')" class="text-red-500 hover:text-red-700 mx-2">
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
