<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-1/4 bg-white p-6 shadow-lg sticky top-0 h-screen flex flex-col justify-between">
            <div>
                <div class="flex items-center mb-8">
                    <img src="https://pbs.twimg.com/profile_images/1775455225014607872/uy6WUXI3_400x400.jpg" alt="Logo BEM" class="h-12 w-12">
                    <span class="ml-4 font-bold text-lg text-blue-900">BahteraKarsa</span>
                </div>
                <nav>
                    <ul class="space-y-1">
                        <li>
                            <NavLink 
                                :href="route('dashboard')" 
                                class="flex items-center p-1 rounded-lg text-gray-700" 
                                :active="route().current('dashboard')"
                            >
                                <i class="fas fa-home-alt mr-3"></i> Dashboard
                            </NavLink>
                        </li>
                        <li>
                            <NavLink 
                                :href="route('event.index')" 
                                class="flex items-center p-1 rounded-lg text-gray-700" 
                                :active="route().current('event.index')"
                            >
                                <i class="fas fa-calendar-alt mr-3"></i> Event
                            </NavLink>
                        </li>
                        <li>
                            <NavLink 
                                :href="route('pendaftar.index')" 
                                class="flex items-center p-1 rounded-lg text-gray-700" 
                                :active="route().current('pendaftar.index')"
                            >
                                <i class="fas fa-user-alt mr-3"></i> Pendaftar
                            </NavLink>
                        </li>
                        <li>
                            <NavLink 
                                :href="route('pengumuman.index')" 
                                class="flex items-center p-1 rounded-lg text-gray-700" 
                                :active="route().current('pengumuman.index')"
                            >
                                <i class="fas fa-bullhorn mr-3"></i> Pengumuman
                            </NavLink>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Logout Link -->
            <div>
                <ul class="space-y-1">
                    <li>
                        <a @click="logout" class="flex items-center p-1 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-900 cursor-pointer">
                            <i class="fas fa-sign-out-alt mr-3"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page Content -->
        <div class="w-3/4 bg-gray-100 p-6">
            <slot/>
        </div>
    </div>
</template>

<style scoped>
html, body {
    height: 100%;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.bg-cover {
    background-size: cover;
}

.bg-center {
    background-position: center;
}

/* Adjust spacing for closer items */
ul.space-y-1 > li {
    margin-bottom: 0.25rem;
}

/* Ensure sidebar is sticky */
.sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
}
</style>
