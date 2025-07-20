/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-07-12 12:34:15
 * @LastEditors: xunzhaotech
 */
import { h } from 'vue'
import DefaultTheme from 'vitepress/theme'
import 'vitepress-theme-demoblock/dist/theme/styles/index.css'
import Documate from '@documate/vue'
import '@documate/vue/dist/style.css'
import { useComponents } from './useComponents'
import './style.css'
import './styles/custom.css'
import './styles/tailwind.css'
import Button from '../../../src/components/Button.vue'
import '../../../src/styles/index.css'

export default {
  ...DefaultTheme,
  Layout: h(DefaultTheme.Layout, null, {
    'nav-bar-content-before': () => h(Documate, {
      endpoint: '',
    }),
  }),
  enhanceApp(ctx) {
    DefaultTheme.enhanceApp(ctx)
    useComponents(ctx.app)
    ctx.app.component(Button.name, Button)
    ctx.provide('collapsedIcon', {
        open: '▼', // 展开时的图标
        closed: '▶' // 折叠时的图标
      })
  }
}
