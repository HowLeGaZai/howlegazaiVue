import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
// import contact from '../views/contact.vue'
import Home from '../views/Home.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/welcome',
    name: 'welcome',
    component: () => import(/* webpackChunkName: "about" */ '../views/welcome.vue')
  },
  // {
  //   path: '/',
  //   name: 'home',
  //   component: () => import(/* webpackChunkName: "about" */ '../views/index.vue')
  // },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/contact',
    name: 'contact',
    component:() => import(/* webpackChunkName: "about" */ '../views/contact.vue')
  },
  {
    path: '/news',
    name: 'news',
    component:() => import(/* webpackChunkName: "about" */ '../views/news.vue')
  },
  {
    path: '/chat',
    name: 'chat',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat.vue')
  },
  {
    path: '/chat_new',
    name: 'chat_new',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat_new.vue')
  },
  {
    path: '/chat_info',
    name: 'chat_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat_info.vue')
  },
  {
    path: '/activity',
    name: 'activity',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity.vue')
  },
  // {
  //   path: '/EventCard',
  //   name: 'EventCard',
  //   component:() => import(/* webpackChunkName: "about" */ '../components/EventCard.vue')
  // },
  {
    path: '/activity_registStep1',
    name: 'activity_registStep1',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_registStep1.vue')
  },
  {
    path: '/activity_registStep3',
    name: 'activity_registStep3',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_registStep3.vue')
  },
  {
    path: '/activity_info',
    name: 'activity_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_info.vue')
  },
  {
    path: '/space',
    name: 'space',
    component:() => import(/* webpackChunkName: "about" */ '../views/space.vue')
  },
  {
    path: '/space_info',
    name: 'space_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_info.vue')
  },
  {
    path: '/space_reserve_check',
    name: 'space_reserve_check',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve_check.vue')
  },
  {
    path: '/space_reserve_confirm',
    name: 'space_reserve_confirm',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve_confirm.vue')
  },
  {
    path: '/space_reserve',
    name: 'space_reserve',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve.vue')
  },
  {
    path: '/account_user',
    name: 'account_user',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user.vue')
  },
  {
    path: '/account_user_manage',
    name: 'account_user_manage',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_manage.vue')
  },
  {
    path: '/account_user_chat',
    name: 'account_user_chat',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_chat.vue')
  },
  {
    path: '/account_user_space',
    name: 'account_user_space',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_space.vue')
  },
  {
    path: '/account_user_activity',
    name: 'account_user_activity',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_activity.vue')
  },
  {
    path: '/account_user_change_pwd',
    name: 'account_user_change_pwd',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_change_pwd.vue')
  },
  
  
  /*--------------------------  backend --------------------------*/

  {
    path: '/backend_index',
    name: 'backend_index',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_index.vue')
  },
  {
    path: '/backend_chat_list',
    name: 'backend_chat_list',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_chat_list.vue')
  },
  {
    path: '/backend_websiteinfo',
    name: 'backend_websiteinfo',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_websiteinfo.vue')
  },
  {
    path: '/backend_officeinfo',
    name: 'backend_officeinfo',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_officeinfo.vue')
  },
  {
    path: '/backend_faq',
    name: 'backend_faq',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_faq.vue')
  },
  {
    path: '/backend_activity',
    name: 'backend_activity',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity.vue')
  },
  {
    path: '/backend_activity_memberlist',
    name: 'backend_activity_memberlist',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity_memberlist.vue')
  },
  {
    path: '/backend_activity_input',
    name: 'backend_activity_input',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity_input.vue')
  },
  {
    path: '/backend/account/overview',
    name: 'backend_account_overview',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_overview.vue')
  },
<<<<<<< HEAD
  


  
  
  
  
=======
  {
    path: '/backend/account/new',
    name: 'backend_account_new',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_new.vue')
  },
  {
    path: '/backend/account/cancel',
    name: 'backend_account_cancel',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_cancel.vue')
  },
>>>>>>> fa45fe1e6c2f29e98daac1ddbec4040623477353
  
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})





export default router


