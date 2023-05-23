<template>
    <div>
        <h2 class="text-center">Data Pegawai</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="pegawai in data_pegawai" :key="pegawai.id">
                <td>{{ pegawai.id }}</td>
                <td>{{ pegawai.name }}</td>
                <td>{{ pegawai.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: pegawai.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletePegawai(pegawai.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                data_pegawai: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/pegawai/')
                .then(response => {
                    this.data_pegawai = response.data;
                });
        },
        methods: {
            deletePegawai(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/pegawai/${id}`)
                    .then(response => {
                        let i = this.data_pegawai.map(data => data.id).indexOf(id);
                        this.data_pegawai.splice(i, 1)
                    });
            }
        }
    }
</script>