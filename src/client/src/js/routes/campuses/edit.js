const CampusEdit = () => import('../../pages/campuses/Edit.vue');

export default {
    name: 'campuses.edit',
    path: ':campus/edit',
    component: CampusEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Campus',
    },
};
