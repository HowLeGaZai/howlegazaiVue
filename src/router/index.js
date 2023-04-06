import { createRouter, createWebHashHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
// import contact from '../views/contact.vue'
import Home from '../views/Home.vue'

const routes = [
  {
    // 前台 首頁
    path: '/',
    name: 'home',
    component: Home
  },
  {

    // 前台 歡迎頁、前後台入口頁
    path: '/welcome',
    name: 'welcome',
    component: () => import(/* webpackChunkName: "about" */ '../views/welcome.vue')
  },
  // {
  //   path: '/',
  //   name: 'home',
  //   component: () => import(/* webpackChunkName: "about" */ '../views/index.vue')
  // },
  // {
  //   path: '/about',
  //   name: 'about',
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // },
  {
    // 前台 聯絡里辦頁
    path: '/contact',
    name: 'contact',
    component:() => import(/* webpackChunkName: "about" */ '../views/contact.vue')
  },
  {
    // 前台 最新消息總覽頁
    path: '/news',
    name: 'news',
    component:() => import(/* webpackChunkName: "about" */ '../views/news.vue')
  },
  {
    // 前台 討論區總覽頁
    path: '/chat',
    name: 'chat',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat.vue')
  },
  {
    // 前台 討論區發布消息（文字編輯器）
    path: '/chat_new',
    name: 'chat_new',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat_new.vue')
  },
  {
    // 前台 討論區單篇文章
    path: '/chat_info',
    name: 'chat_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/chat_info.vue')
  },
  {
    // 前台 活動總覽頁
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
    // 前台 活動報名 步驟一、報名資訊填寫
    path: '/activity_registStep1',
    name: 'activity_registStep1',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_registStep1.vue')
  },
  {
    // 前台 活動報名 步驟三、感謝報名
    path: '/activity_registStep3',
    name: 'activity_registStep3',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_registStep3.vue')
  },
  {
    // 前台 活動 活動介紹頁
    path: '/activity_info',
    name: 'activity_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_info.vue')
  },
  {
    // 前台 空間預約總覽
    path: '/space',
    name: 'space',
    component:() => import(/* webpackChunkName: "about" */ '../views/space.vue')
  },
  {
    // 前台 空間 空間介紹頁
    path: '/space_info',
    name: 'space_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_info.vue')
  },
  {
    // 前台 空間預約總覽 步驟二、確認預約
    path: '/space_reserve_check',
    name: 'space_reserve_check',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve_check.vue')
  },
  {
    // 前台 空間預約總覽 步驟三、預約成功
    path: '/space_reserve_confirm',
    name: 'space_reserve_confirm',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve_confirm.vue')
  },
  {
    // 前台 空間預約總覽 步驟一、填寫預約單
    path: '/space_reserve',
    name: 'space_reserve',
    component:() => import(/* webpackChunkName: "about" */ '../views/space_reserve.vue')
  },
  {
    // 前台 帳戶管理 個人資訊
    path: '/account_user',
    name: 'account_user',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user.vue')
  },
  {
    // 前台 帳戶管理 成員管理
    path: '/account_user_manage',
    name: 'account_user_manage',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_manage.vue')
  },
  {
    // 前台 帳戶管理 貼文刊登紀錄
    path: '/account_user_chat',
    name: 'account_user_chat',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_chat.vue')
  },
  {
    // 前台 帳戶管理 空間預約紀錄
    path: '/account_user_space',
    name: 'account_user_space',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_space.vue')
  },
  {
    // 前台 帳戶管理 活動報名紀錄
    path: '/account_user_activity',
    name: 'account_user_activity',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_activity.vue')
  },
  {
    // 前台 帳戶管理 變更密碼
    path: '/account_user_change_pwd',
    name: 'account_user_change_pwd',
    component:() => import(/* webpackChunkName: "about" */ '../views/account_user_change_pwd.vue')
  },
  {
    // 前台 隱私權聲明
    path: '/privacy',
    name: 'privacy',
    component:() => import(/* webpackChunkName: "about" */ '../views/privacy.vue')
  },
  {
    // 前台 最新消息 公告內容頁
    path: '/news_info',
    name: 'news_info',
    component:() => import(/* webpackChunkName: "about" */ '../views/news_info.vue')
  },
  {
    // 前台 登入介面 
    path: '/login',
    name: 'login',
    component:() => import(/* webpackChunkName: "about" */ '../views/login.vue')
  },
  {  // 前台 忘記密碼介面 
    path: '/forgetpassword',
    name: 'forgetpassword',
    component:() => import(/* webpackChunkName: "about" */ '../views/forgetpassword.vue')
  },
  {  // 前台 註冊第一頁介面 
    path: '/signup1',
    name: 'signup1',
    component:() => import(/* webpackChunkName: "about" */ '../views/signup1.vue')
  },
  {  // 前台 註冊第二頁介面 
    path: '/signup2',
    name: 'signup2',
    component:() => import(/* webpackChunkName: "about" */ '../views/signup2.vue')
  },
  {// 前台 修改密碼
    path: '/updatepassword',
    name: 'updatepassword',
    component:() => import(/* webpackChunkName: "about" */ '../views/updatepassword.vue')
  },
  
  
  /*--------------------------  backend --------------------------*/

  
  {
    // 後台 登入頁
    path: '/backend_login',
    name: 'backend_login',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_login.vue')
  },
  {
    // 後台 首頁
    path: '/backend_index',
    name: 'backend_index',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_index.vue')
  },
  {
    // 後台 討論區列表
    path: '/backend_chat_list',
    name: 'backend_chat_list',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_chat_list.vue')
  },
  {
    // 後台 網站管理 網站基本設定
    path: '/backend_websiteinfo',
    name: 'backend_websiteinfo',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_websiteinfo.vue')
  },
  {
    // 後台 網站管理 聯絡里辦資訊
    path: '/backend_officeinfo',
    name: 'backend_officeinfo',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_officeinfo.vue')
  },
  {
    // 後台 網站管理 常見問題設定
    path: '/backend_faq',
    name: 'backend_faq',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_faq.vue')
  },
  {
    // 後台 活動管理 活動列表
    path: '/backend_activity',
    name: 'backend_activity',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity.vue')
  },
  {
    // 後台 活動管理 活動列表 參加名單
    path: '/backend_activity_memberlist',
    name: 'backend_activity_memberlist',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity_memberlist.vue')
  },
  {
    // 後台 活動管理 新增活動
    path: '/backend_activity_input',
    name: 'backend_activity_input',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_activity_input.vue')
  },
  {
    // 後台 帳戶管理 帳戶總列表
    path: '/backend/account/overview',
    name: 'backend_account_overview',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_overview.vue')
  },
  {
    // 後台 帳戶管理 已刪除帳戶
    path: '/backend/account/cancel',
    name: 'backend_account_cancel',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_cancel.vue')
  },
  {
    // 後台 帳戶管理 待審核帳戶
    path: '/backend/account/new',
    name: 'backend_account_new',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_account_new.vue')
  },
  {
    // 後台 空間管理 空間列表
    path: '/backend_space_list',
    name: 'backend_space_list',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_space_list.vue')
  },
  {
    // 後台 空間管理 新增空間
    path: '/backend_space_add',
    name: 'backend_space_add',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_space_add.vue')
  },
  {
    // 後台 空間管理 空間管理
    path: '/backend_space_management',
    name: 'backend_space_management',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_space_management.vue')
  },


  // 最新消息預留檔名（消息列表＋新增消息）
  {
    path: '/backend/news',
    name: 'backend_news',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_news.vue')
  },
// 最新消息 (增加消息)
  {
    path: '/backend/news/add',
    name: 'backend_news_add',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_news_add.vue')
  },
  
  {
    // 後台 手機不支援
    path: '/backend_mobileNotSupport',
    name: 'backend_mobileNotSupport',
    component:() => import(/* webpackChunkName: "about" */ '../views/backend_mobileNotSupport.vue')
  },
  
  
  
]


const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes
})





export default router


