<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <div class="min-h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('/path/to/your/background-image.jpg');">
        <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
        <div class="relative z-10 w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-6">
                <img src="storage/assets/logoitem.png" alt="BahteraKarsa" class="mx-auto h-12 w-auto">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Selamat Datang</h2>
                <p class="mt-2 text-xs text-gray-600">
                    Silakan masukkan kredensial Anda untuk akses ke kontrol
                </p>
            </div>

            <form @submit.prevent="submit">
                <div class="mb-4">
                    <div class="flex items-center border border-gray-300 rounded-md">
                        <span class="inline-flex items-center px-3 text-gray-500">
                            <i class="fas fa-user"></i>
                        </span>
                        <input 
                            id="email" 
                            v-model="form.email" 
                            type="email" 
                            placeholder="Masukan email"
                            class="form-input flex-1 block w-full border-none focus:ring-0"
                            required 
                            autofocus 
                            autocomplete="email"
                        />
                    </div>
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mb-4">
                    <div class="flex items-center border border-gray-300 rounded-md">
                        <span class="inline-flex items-center px-3 text-gray-500">
                            <i class="fas fa-eye"></i>
                        </span>
                        <input 
                            id="password" 
                            v-model="form.password" 
                            type="password" 
                            placeholder="Masukan Password"
                            class="form-input flex-1 block w-full border-none focus:ring-0"
                            required 
                            autocomplete="current-password"
                        />
                    </div>
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" :disabled="form.processing">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.form-input {
    padding-left: 0.75rem; /* Adjust if needed */
    padding-right: 0.75rem; /* Adjust if needed */
    height: 2.5rem; /* Adjust if needed */
}
</style>
