import Vue from "vue";
import VueRouter from "vue-router";
import Admin from './components/Admin.vue';
import dataUser from './components/AdminComponent.vue';
import Person from './components/Personal.vue';
import Education from './components/Education.vue';
import Work from './components/Work.vue';
import Known from './components/Known.vue';
import Technical from './components/Technical.vue';
import Preference from './components/Preference.vue';
import employeeEdit from './components/employeeEdit.vue';
import Personal from "./components/Personal";

// const  = {template: "<v-alert type='error'>I'm foo</v-alert>"}
Vue.use(VueRouter)

const routes = [
    {
        path:'/',
        component:Personal,
    },
    {
        path:'/list',
        component:dataUser,
    },
    {
        path:'/employee/edit/:employeeId',
        component:employeeEdit,
    },
    {
        path:'/admin',
        component:Admin,
    },
    {
        path:'/education',
        component:Education,
    }
];

export default new VueRouter({routes});
