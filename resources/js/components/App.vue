<template>
    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/pegawai" class="nav-item nav-link">Pegawai List</router-link>
                    <router-link to="/pegawai/create" class="nav-item nav-link">Create Pegawai</router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>
