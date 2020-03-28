import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./campuses', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/campuses',
    component: RouterView,
    meta: {
        breadcrumb: 'campuses',
        route: 'campuses.index',
    },
    children: routes,
};
