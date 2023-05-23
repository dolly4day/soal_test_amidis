import Pegawai from './components/pegawai/Pegawai.vue';
import CreatePegawai from './components/pegawai/CreatePegawai.vue';
import EditPegawai from './components/pegawai/EditPegawai.vue';
 
export const routes = [
    {
        name: 'pegawai',
        path: '/pegawai',
        component: Pegawai
    },
    {
        name: 'create-pegawai',
        path: 'pegawai/create',
        component: CreatePegawai
    },
    {
        name: 'edit-pegawai',
        path: 'pegawai/edit/:id',
        component: EditPegawai
    }
];