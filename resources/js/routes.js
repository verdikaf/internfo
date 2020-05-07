import Default from './components/Default.vue';
import AllPelamar from './components/AllPelamar.vue';
import AllPerusahaan from './components/AllPerusahaan.vue';
import AllBidangProfesi from './components/AllBidangProfesi.vue';
import AddBidangProfesi from './components/AddBidangProfesi.vue';
import EditBidangProfesi from './components/EditBidangProfesi.vue';

export const routes = [
    { path: '*', redirect: '/default' },
    {
        path: '/default',
        component: Default
    },
    {
        name: 'home',
        path: '/bidangprofesi',
        component: AllBidangProfesi
    },
    {
        name: 'add',
        path: '/add',
        component: AddBidangProfesi
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBidangProfesi
    },
    {
        name: 'pelamar',
        path: '/pelamar',
        component: AllPelamar
    },
    {
        name: 'perusahaan',
        path: '/perusahaan',
        component: AllPerusahaan
    }
];