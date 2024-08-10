/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-03-30 11:17:36
 * @LastEditTime: 2024-03-30 11:33:43
 * @LastEditors: xunzhaotech
 */
import { defineConfig } from 'vitepress'
// import { genFeed } from './genFeed.js'

export default defineConfig({
  title: 'The Vue Point',
  description: 'The official blog for the Vue.js project',
  cleanUrls: true,
  head: [
    ['meta', { name: 'twitter:site', content: '@vuejs' }],
    ['meta', { name: 'twitter:card', content: 'summary' }],
    [
      'meta',
      {
        name: 'twitter:image',
        content: 'https://vuejs.org/images/logo.png'
      }
    ],
    [
      'link',
      {
        rel: 'icon',
        type: 'image/x-icon',
        href: '/favicon.ico'
      }
    ],
    [
      'script',
      {
        src: 'https://cdn.usefathom.com/script.js',
        'data-site': 'NYHGSGQV',
        'data-spa': 'auto',
        defer: ''
      }
    ]
  ],
  // buildEnd: genFeed
})
