import { createRouter, createWebHistory } from  "vue-router";
import AdminLayout from '../components/AdminLayout.vue'
import notFound from '../components/notFound.vue'
import HomeIndex from '../views/home/Index.vue'
import AboutIndex from '../views/about/Index.vue'
import AppointmentIndex from '../views/appointment/Index.vue'
import PriceIndex from '../views/price/Index.vue'
import TеаmIndex from '../views/team/Index.vue'
import ContactIndex from '../views/contact/Index.vue'
import ServiceIndex from '../views/service/Index.vue'
import RegisterIndex from '../views/registration/Index.vue'
import CalendarIndex from '../views/calendar/Index.vue'






const HomeRoutes = [
        {
            path:'/',
            name:'home.index',
            component:HomeIndex
        }
    ];
    const AboutRoutes = [
        {
            path:'/about',
            name:'about.index',
            component:AboutIndex
        }
    ];
    const AppointmentRoutes = [
        {
            path:'/appointment',
            name:'appointment.index',
            component:AppointmentIndex
        }
    ];
    const PriceRoutes = [
        {
            path:'/price',
            name:'price.index',
            component:PriceIndex
        }
    ];
    const TеаmRoutes = [

        {
            path:'/team',
            name:'team.index',
            component:TеаmIndex
        }
    ];
    const ServiceRoutes = [

        {
            path:'/service',
            name:'service.index',
            component:ServiceIndex
        }
    ];
    const ContactRoutes = [

        {
            path:'/contact',
            name:'contact.index',
            component:ContactIndex
        }
    ];
    const RegisterRoutes = [

        {
            path:'/register',
            name:'register.index',
            component:RegisterIndex
        }
    ]
    const CalendarRoutes = [

        {
            path:'/calendar',
            name:'calendar.index',
            component:CalendarIndex
        }
    ]
    // const notFoundRoutes = [
    //     {
    //         path:'/:any(.*)*',
    //         name:'notfound',
    //         component: notFound
    //     }
    // ]

    const routes = [
        {
            path: '/',
            componenet: AdminLayout,
            children: [
                ...HomeRoutes,
                ...AboutRoutes,
                ...AppointmentRoutes,
                ...PriceRoutes,
                ...TеаmRoutes,
                ...ContactRoutes,
                ...ServiceRoutes,
                ...RegisterRoutes,
                ...CalendarRoutes,

                // ...notFoundRoutes
            ]
        }
    ]

    const router = createRouter({
    history: createWebHistory(),
    routes
    })

    export default router
