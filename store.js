import { createStore } from 'vuex'

const store = createStore({
  state(){
    return{
        // 定義狀態
        tinymceContent: ''
    }
  },
  mutations: {
    // 定義改變狀態的方法
      updateTinymceContent(state, content) {
          state.tinymceContent = content
        },
      setTinymceContent(state, content) {
        state.tinymceContent = content
      },
      clearTinymceContent(state) {
        state.ChatTitle = ''
        state.tinymceContent = ''
      },
    },
  actions: {
    // 定義非同步操作
    saveContent({ commit, state }) {
      const Tinymce = {
        title: state.ChatTitle,
        content: state.tinymceContent
      }
      commit('clearChat')
    }
  },
  modules: {
    // 定義模塊
  }
})

export default {
  namespaced: true,
  state,
  mutations,
  actions
}