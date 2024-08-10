/*
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-09-11 11:38:58
 * @LastEditors: xunzhaotech
 * @LastEditTime: 2024-08-10 15:30:27
 * @FilePath: \micro-design-docs\docs\.vitepress\config.ts
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
import { demoBlockPlugin } from 'vitepress-theme-demoblock'
import { SearchPlugin } from "vitepress-plugin-search";
import { defineConfig } from 'vitepress'
import { nav, sidebar } from './configs'
// https://vitepress.dev/reference/site-config
const config = defineConfig({
  base: '/micro-design-docsite/',
  lang: 'en-US',
  title: 'MicroDocs',
  description: '基于MicroDesgn微服务的文档系统',

  lastUpdated: true,
  cleanUrls: true,
  themeConfig: {
     // https://vitepress.dev/reference/default-theme-config
    logo: "logo.png",
    // siteTitle: "MicroDocs",
    nav,
    sidebar,
    outline: 2,
    outlineTitle: '快速导航',
    lastUpdatedText: '最近更新',
    editLink: {
      pattern: 'https://gitee.com/MicroDesign/micro-design-docs/tree/master/docs/:path',
      text: '在线编辑'
    },
    socialLinks: [
      { icon: "github", link: "https://gitee.com/MicroDesign/micro-design-docs.git" },
      // { icon: "twitter", link: "..." },
      // { icon: "discord", link: "..." },
      // { icon: "facebook", link: "..." },
      // { icon: "instagram", link: "..." },
      // { icon: "linkedin", link: "..." },
      // { icon: "slack", link: "..." },
      // { icon: "youtube", link: "..." },
      // You can also add custom icons by passing SVG as string:
      // {
      //   icon: {
      //     svg: '<svg role="img" viewBox="0 0 24 24" xmlns="SVG namespace"><title>Dribbble</title><path d="M12...6.38z"/></svg>',
      //   },
      //   link: "...",
      // },
    ],
        // sidebar: [
          // {
          //   text: "Button 按钮",
          //   link: "/components/button/"
          // },
          // {
          //   text: "Icon 图标",
          //   link: "/components/icon/"
          // },
    // ],
    // 展示搜索框
    // algolia: {
    //   appKey: '12122121212',
    //   indexName: '',
    //   searchParameters: {
    //     faeFilters: ['tags:guide,api']
    //   }
    // },
    docFooter: {
      prev: '上一篇',
      next: '下一篇'
    },
    footer: {
      message: 'Released under the MIT License.',
      copyright: 'Copyright © 2022-present MicroDesign UI'
    },
    // algolia: {
    //   appId: '8J64VVRP8K',
    //   apiKey: 'a18e2f4cc5665f6602c5631fd868adfd',
    //   indexName: 'vitepress'
    // },
    carbonAds: {
      code: 'CEBDT27Y',
      placement: 'vuejsorg'
    }
  },
  markdown: {
    config: (md) => {
      md.use(demoBlockPlugin)
    },
    lineNumbers: true
  },
 })
export default config
  