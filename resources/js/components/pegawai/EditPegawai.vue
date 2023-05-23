<template>
    <div>
        <h3 class="text-center">Edit Pegawai</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePegwai">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="pegawai.name">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                pegawai: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/pegawai/${this.$route.params.id}`)
                .then((res) => {
                    this.pegawai = res.data;
                });
        },
        methods: {
            updatePegawai() {
                this.axios
                    .patch(`http://localhost:8000/api/pegawai/${this.$route.params.id}`, this.pegawai)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>