function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'challenges', component: page('challanges/challenges.vue') },
  { path: '/my-challanges', name: 'my-challenges', component: page('challanges/my-challenges.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '*', component: page('errors/404.vue') }
]
