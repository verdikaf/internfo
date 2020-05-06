import AllBidangProfesi from './components/AllBidangProfesi.vue';
import AddBidangProfesi from './components/AddBidangProfesi.vue';
import EditBidangProfesi from './components/EditBidangProfesi.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
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
    }
];