import axios from 'axios'

export const state = () => ({
  // お知らせ一覧
  newsList: [
    {
      id: '',
      title: '',
      content: '',
      img: ''
    }
  ],
  // TOPページ用お知らせ一覧
  topNewsList: [
    {
      id: '',
      title: '',
      content: '',
      img: ''
    }
  ]
})

export const mutations = {
  // お知らせ一覧
  addNewsList: (state, list) => {
    state.newsList = list.contents
  },
  // TOPページ用お知らせ一覧
  addTopNewsList: (state, list) => {
    state.topNewsList = list.contents
  }
}

export const actions = {
  // お知らせ一覧
  getNewsList({ commit }, payload) {
    axios.get('https://kojima.microcms.io/api/v1/blog', {
      headers: { 'X-API-KEY': '2b9e306c-fb4f-482d-ad0d-2343a060383c' }
    })
      .then((response) => {
        const content = response.data

        commit('addNewsList', content)
      }).catch((err) => {
        console.log(err)
      })
  },
  // TOPページ用お知らせ一覧
  getTopNewsList({ commit }, payload) {
    axios.get('https://kojima.microcms.io/api/v1/blog?limit=3', {
      headers: { 'X-API-KEY': '2b9e306c-fb4f-482d-ad0d-2343a060383c' }
    })
      .then((response) => {
        const content = response.data

        commit('addTopNewsList', content)
      }).catch((err) => {
        console.log(err)
      })
  }
}

export const getters = {
  // お知らせ一覧
  news: (state) => {
    return state.newsList
  },
  // TOPページ用お知らせ一覧
  topNews: (state) => {
    return state.topNewsList
  }
}
