/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-08-02 10:08:24
 * @LastEditors: xunzhaotech
 */
import { h } from 'vue'
import DefaultTheme from 'vitepress/theme'
// import { InspiraUI } from 'inspira-ui';
// import 'inspira-ui/dist/style.css'; // 引入样式
import 'uno.css'
import 'vitepress-theme-demoblock/dist/theme/styles/index.css'
import Documate from '@documate/vue'
import '@documate/vue/dist/style.css'
import { useComponents } from './useComponents'
import './style.css'
import './fonts.css' // 如果单独管理字体
import './styles/main.css'
import './styles/custom.css'
import './styles/tailwind.css'
import Button from '../../../src/components/Button.vue'
import '../../../src/styles/index.css'
import Layout from './layouts/MyLayout.vue'

export default {
  // Layout,
  ...DefaultTheme,
   Layout,
  // Layout: h(DefaultTheme.Layout, null, {
  //   'nav-bar-content-before': () => h(Documate, {
  //     endpoint: '',
  //   }),
  // }),
  enhanceApp(ctx) {
    DefaultTheme.enhanceApp(ctx)
    useComponents(ctx.app)
    // ctx.app.use(InspiraUI)
    ctx.app.component(Button.name, Button)
    ctx.app.component('HomeHero', () => import('./components/HomeHero.vue'))
    ctx.app.component('CodePreview', () => import('./components/CodePreview.vue'))
    ctx.app.component('ProductHero', () => import('./components/ProductHero.vue'))
    ctx.app.component('FeatureCard', () => import('./components/FeatureCard.vue'))
    ctx.app.component('PricingCard', () => import('./components/PricingCard.vue'))
    ctx.app.component('AppFooter', () => import('./components/Footer.vue'))
    ctx.app.provide('collapsedIcon', {
        open: '▼', // 展开时的图标
        closed: '▶' // 折叠时的图标
      })
  }
}
