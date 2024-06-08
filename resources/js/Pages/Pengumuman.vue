
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({ pengumuman: Array });
console.log(props.pengumuman);  // Log the props to verify data
</script>

<template>
    <AppLayout title="Pengumuman">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pengumuman
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Event</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th colspan="2" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="item in props.pengumuman" :key="item.pengumuman_id">
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.event.nama_event }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.tgl_pengumuman }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ item.file_pengumuman }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="overflow-y-auto max-h-32">
                                            {{ item.keterangan }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
  <a :href="'/pengumuman/edit/' + item.pengumuman_id" class="text-blue-500 hover:text-blue-700 mx-2">
    <i class="fas fa-edit"></i>
  </a>
  <a :href="'/delpengumuman/' + item.pengumuman_id" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?')" class="text-red-500 hover:text-red-700 mx-2">
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
