/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2024-08-11 12:55:35
 * @LastEditors: xunzhaotech
 */
import { defineConfig } from 'vitepress'
import { demoblockPlugin, demoblockVitePlugin } from 'vitepress-theme-demoblock'
import vueJsx from '@vitejs/plugin-vue-jsx'
import path from 'path'
import nav from './configs/nav'
import sidebar from './configs/sidebar'

export default defineConfig({
  lang: 'en-US',
  title: 'MicroDesign Docs',
  description: '使用 Vitepress 搭建组件库文档站点。',

  lastUpdated: true,
  cleanUrls: true,

  base: process.env.BASE || '/',
  head: [
    ['link', { rel: 'icon', type: 'image/svg+xml', href: '/logo.svg' }]
  ],

  markdown: {
    theme: { light: 'github-light', dark: 'github-dark' },

    config: (md) => {
      md.use(demoblockPlugin, {
        customClass: 'demoblock-custom'
      })
    }
  },

  vite: {
    plugins: [demoblockVitePlugin(), vueJsx()],
    resolve: {
      alias: {
        '@alias': path.resolve(__dirname, '../')
      }
    }
  },

  // vue: {},

  themeConfig: {
    outlineTitle: '本页目录',
    lastUpdatedText: '上次更新',
    logo: 'https://s1.ax1x.com/2022/12/17/zbmcHs.png',

    search: {
      provider: 'local',
      provider: 'algolia',
      options: {
        appId: 'X51HWTCQJJ',
        apiKey: 'ca20f15eb8a667898b65d13f4213ae3d',
        indexName: 'vitepress-demo'
      }
    },

    // nav
    nav,

    // sidebar
    sidebar,

    editLink: {
      pattern: 'https://github.com/xinlei3166/vitepress-demo/edit/master/docs/:path',
      text: '在 GitHub 上编辑此页'
    },

    socialLinks: [
      { icon: 'github', link: 'https://github.com/xinlei3166/vitepress-demo' }
    ],

    footer: {
      message: 'Released under the MIT License.',
      copyright: 'Copyright © 2022-present MicroDesign'
    }
  }
})
