const CampusCreate = () => import('../../pages/campuses/Create.vue');

export default {
    name: 'campuses.create',
    path: 'create',
    component: CampusCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Campus',
    },
};
