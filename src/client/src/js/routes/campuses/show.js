const CampusShow = () => import('../../pages/campuses/Show.vue');

export default {
    name: 'campuses.show',
    path: ':campus',
    component: CampusShow,
    meta: {
        breadcrumb: 'show',
        title: 'Show Campus',
    },
};
