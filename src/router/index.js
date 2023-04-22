import { createRouter, createWebHistory } from 'vue-router'
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
    component: () => import(/* webpackChunkName: "about" */ '../views/contact.vue')
  },
  {
    // 前台 最新消息總覽頁
    path: '/news',
    name: 'news',
    component: () => import(/* webpackChunkName: "about" */ '../views/news.vue')
  },

  {
    // 前台 最新消息 公告內容頁
    path: '/news_info/:Id',
    name: 'news_info',
    component: () => import(/* webpackChunkName: "about" */ '../views/news_info.vue')
  },

  {
    // 前台 討論區總覽頁
    path: '/chat',
    name: 'chat',
    component: () => import(/* webpackChunkName: "about" */ '../views/chat.vue')
  },
  {
    // 前台 討論區發布消息（文字編輯器）
    path: '/chat_new/:Id',
    // path: '/chat_new/',
    name: 'chat_new',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/chat_new.vue'),
    // props: (route) => ({ id: route.params.id || Math.floor(Math.random() * 1000) })
  },
  {
    // 前台 討論區單篇文章
    path: '/chat_info/:Id',
    name: 'chat_info',
    component: () => import(/* webpackChunkName: "about" */ '../views/chat_info.vue')
  },
  {
    // 前台 討論區 文章預覽頁
    path: '/chat_info/preview/:Id',
    name: 'chat_preview',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/chat_info_preview.vue')
  },
  {
    // 前台 討論區單篇文章
    path: '/chat_info/:Id',
    name: 'chat_info',
    component: () => import(/* webpackChunkName: "about" */ '../views/chat_info.vue')
  },
  {
    // 前台 活動總覽頁
    path: '/activity',
    name: 'activity',
    component: () => import(/* webpackChunkName: "about" */ '../views/activity.vue')
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
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/activity_registStep1.vue')
  },
  {
    // 前台 活動報名 步驟三、感謝報名
    path: '/activity_registStep3',
    name: 'activity_registStep3',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/activity_registStep3.vue')
  },
  {
    // 前台 活動 活動介紹頁
    path: '/activity_info',
    name: 'activity_info',
    component: () => import(/* webpackChunkName: "about" */ '../views/activity_info.vue')
  },
  {
    // 前台 活動 活動介紹頁
    path: '/activity_info/:Id',
    name: 'activity_infoo',
    component:() => import(/* webpackChunkName: "about" */ '../views/activity_info.vue')
  },
  {
    // 前台 空間預約總覽
    path: '/space',
    name: 'space',
    component: () => import(/* webpackChunkName: "about" */ '../views/space.vue')
  },
  {
    // 前台 空間 空間介紹頁
    path: '/space_info/:Id',
    name: 'space_info',
    component: () => import(/* webpackChunkName: "about" */ '../views/space_info.vue')
  },
  {
    // 前台 空間預約總覽 步驟二、確認預約
    path: '/space_reserve_check/:Id',
    name: 'space_reserve_check',
    component: () => import(/* webpackChunkName: "about" */ '../views/space_reserve_check.vue')
  },
  {
    // 前台 空間預約總覽 步驟三、預約成功
    path: '/space_reserve_confirm',
    name: 'space_reserve_confirm',
    component: () => import(/* webpackChunkName: "about" */ '../views/space_reserve_confirm.vue')
  },
  {
    // 前台 空間預約總覽 步驟一、填寫預約單
    path: '/space_reserve/:Id',
    name: 'space_reserve',
    component: () => import(/* webpackChunkName: "about" */ '../views/space_reserve.vue')
  },
  {
    // 前台 帳戶管理 個人資訊
    path: '/account_user',
    name: 'account_user',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user.vue')
  },
  {
    // 前台 帳戶管理 成員管理
    path: '/account_user_manage',
    name: 'account_user_manage',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user_manage.vue')
  },
  {
    // 前台 帳戶管理 貼文刊登紀錄
    path: '/account_user_chat',
    name: 'account_user_chat',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user_chat.vue')
  },
  {
    // 前台 帳戶管理 空間預約紀錄
    path: '/account_user_space',
    name: 'account_user_space',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user_space.vue')
  },
  {
    // 前台 帳戶管理 活動報名紀錄
    path: '/account_user_activity',
    name: 'account_user_activity',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user_activity.vue')
  },
  {
    // 前台 帳戶管理 變更密碼
    path: '/account_user_change_pwd',
    name: 'account_user_change_pwd',
    meta: {
      requiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/account_user_change_pwd.vue')
  },
  {
    // 前台 隱私權聲明
    path: '/privacy',
    name: 'privacy',
    component: () => import(/* webpackChunkName: "about" */ '../views/privacy.vue')
  },

  {
    // 前台 登入介面 
    path: '/login',
    name: 'login',
    meta: {
      requiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/login.vue')
  },
  {  // 前台 忘記密碼介面 
    path: '/forgetpassword',
    name: 'forgetpassword',
    meta: {
      requiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/forgetpassword.vue')
  },
  {  // 前台 註冊第一頁介面 
    path: '/signup1',
    name: 'signup1',
    meta: {
      requiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/signup1.vue'),

  },
  {  // 前台 註冊第二頁介面 
    path: '/signup2',
    name: 'signup2',
    meta: {
      requiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/signup2.vue'),
  },
  {// 前台 修改密碼
    path: '/updatepassword',
    name: 'updatepassword',
    meta: {
      requiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/updatepassword.vue')
  },


  /*--------------------------  backend --------------------------*/


  {
    // 後台 登入頁
    path: '/backend_login',
    name: 'backend_login',
    meta: {
      backrequiresNoAuth: true // 添加一個 meta 屬性來標記需要未登錄才能訪問的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_login.vue')
  },
  {
    // 後台 首頁
    path: '/backend_index',
    name: 'backend_index',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_index.vue')
  },
  {
    // 後台 討論區列表
    path: '/backend_chat_list',
    name: 'backend_chat_list',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_chat_list.vue')
  },
  {
    // 後台 網站管理 網站基本設定
    path: '/backend_websiteinfo',
    name: 'backend_websiteinfo',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_websiteinfo.vue')
  },
  {
    // 後台 網站管理 聯絡里辦資訊
    path: '/backend_officeinfo',
    name: 'backend_officeinfo',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_officeinfo.vue')
  },
  {
    // 後台 網站管理 常見問題設定
    path: '/backend_faq',
    name: 'backend_faq',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_faq.vue')
  },
  {
    // 後台 活動管理 活動列表
    path: '/backend_activity',
    name: 'backend_activity',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_activity.vue')
  },
  {
    // 後台 活動管理 活動列表 參加名單
    path: '/backend_activity_memberlist',
    name: 'backend_activity_memberlist',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_activity_memberlist.vue')
  },
  {
    // 後台 活動管理 新增活動
    path: '/backend_activity_input',
    name: 'backend_activity_input',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_activity_input.vue')
  },
  {
    // 後台 帳戶管理 帳戶總列表
    path: '/backend/account/overview',
    name: 'backend_account_overview',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_account_overview.vue')
  },
  {
    // 後台 帳戶管理 已刪除帳戶
    path: '/backend/account/cancel',
    name: 'backend_account_cancel',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_account_cancel.vue')
  },
  {
    // 後台 帳戶管理 待審核帳戶
    path: '/backend/account/new',
    name: 'backend_account_new',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_account_new.vue')
  },
  {
    // 後台 空間管理 待審核訂單 
    path: '/backend_space_list',
    name: 'backend_space_list',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_space_list.vue')
  },
  {
    // 後台 空間管理 預約列表（潤：應該是待審核預約）
    path: '/backend_space_reservation',
    name: 'backend_space_reservation',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_space_reservation.vue')
  },
  {
    // 後台 空間管理 新增空間
    path: '/backend_space_add',
    name: 'backend_space_add',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_space_add.vue')
  },
  {
    // 後台 空間管理 空間總覽
    path: '/backend_space_management',
    name: 'backend_space_management',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_space_management.vue')
  },


  // 最新消息預留檔名（消息列表＋新增消息）
  {
    path: '/backend_news',
    name: 'backend_news',
    meta: {
      backrequiresAuth: true // 添加一個 meta 屬性來標記需要登錄的頁面
    },
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_news.vue')
  },
  // 最新消息 (新增消息)
  {
    path: '/backend_news_add/:Id',
    name: 'backend_news_add',
    component: () => import(/* webpackChunkName: "about" */ '../views/backend_news_add.vue')
  },

  // 預覽新增消息 (新增消息)
  {
    path: '/news_info_preview/:Id',
    name: 'news_info_preview',
    component: () => import(/* webpackChunkName: "about" */ '../views/news_info_preview.vue')
  },




  // 後台 手機不支援


]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

const noAuthPages = ['/login', '/signup1','/signup2','/forgetpassword','/updatepassword'];


router.beforeEach((to, from, next) => {
  // 檢查是否有登錄憑證
  const token = getCookie('account');
 


  if (noAuthPages.includes(to.path) && token) {
    // 如果要訪問的頁面需要未登錄，但用戶已經登錄，則跳轉到受保護的頁面
    next('/');
  } else if (to.matched.some(record => record.meta.requiresAuth) && !token) {
    // 如果要訪問的頁面需要登錄，但用戶未登錄，則跳轉到登錄頁面
    next('/login');
  } else {
    next();
  }


});

const backnoAuthPages = ['/backend_login'];
router.beforeEach((to, from, next) => {
  const token2 = sessionStorage.getItem('login');
  
  if (backnoAuthPages.includes(to.path) && token2) {
    // 如果要訪問的頁面需要未登錄，但用戶已經登錄，則跳轉到受保護的頁面
    next('/backend_index');
  } else if (to.matched.some(record => record.meta.backrequiresAuth) && !token2) {
    // 如果要訪問的頁面需要登錄，但用戶未登錄，則跳轉到登錄頁面
    next('/backend_login');
  } else {
    next();
  }

});

// 讀取 Cookie
function getCookie(name) {
  const cookieString = document.cookie;
  const cookies = cookieString.split('; ');
  for (let i = 0; i < cookies.length; i++) {
    const [cookieName, cookieValue] = cookies[i].split('=');
    if (cookieName === name) {
      return cookieValue;
    }
  }
  return null;
}




export default router


