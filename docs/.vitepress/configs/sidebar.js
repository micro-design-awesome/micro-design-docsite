/*
 * @Description:
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2024-10-26 10:42:02
 * @LastEditors: xunzhaotech
 */
export default {
  '/api/': getApiSidebar(),
  '/docs/': getDocsSidebar(),
  '/config/': getConfigSidebar(),
  '/components/': getComponentsSidebar(),
  '/guide/': getGuideSidebar(),
  '/awesome/': getAwesomeSidebar(),
}

function getApiSidebar() {
  return [
    {
      text: '功能',
      collapsible: true,
      items: [
        {
          text: '已实现',
          link: '/api/',
        },
      ],
    },
  ]
}

function getComponentsSidebar() {
  return [
    {
      text: '基础组件',
      items: [
        {
          text: 'Button 按钮',
          link: '/components/button',
        },
        {
          text: 'Tabs 标签页',
          link: '/components/tabs',
        },
        {
          text: 'Modal 对话框',
          link: '/components/modal',
        },
        {
          text: 'Tag 标签',
          link: '/components/tag',
        },
        {
          text: 'Vue 引用组件',
          link: '/components/vue',
        },
        {
          text: 'Vue Script',
          link: '/components/vue-script',
        },
      ],
    },
  ]
}
function getDocsSidebar() {
  return [
    {
      text: '介绍',
      items: [
        {
          text: '简介',
          link: '/guide/',
        },
        {
          text: '演示',
          link: '/guide/introduce',
        },
        {
          text: '源码',
          link: '/guide/source',
        },
      ],
    },
  ]
}
function getConfigSidebar() {
  return [
    {
      text: '介绍',
      items: [
        {
          text: '简介',
          link: '/guide/',
        },
        {
          text: '演示',
          link: '/guide/introduce',
        },
        {
          text: '源码',
          link: '/guide/source',
        },
      ],
    },
  ]
}
function getGuideSidebar() {
  return [
    {
      text: '开发指南',
      items: [
        {
          text: '开发环境',
          link: '/guide/',
        },
        {
          text: 'NPM源配置',
          link: '/guide/introduce',
        },
        {
          text: '源码',
          link: '/guide/source',
        },
      ],
    },
  ]
}

function getAwesomeSidebar() {
  return [
    {
      text: '工具资源',
      items: [
        {
          text: '博客相关',
          link: '/guide/',
        },
        {
          text: '面试系列',
          link: '/guide/button',
        },
        {
          text: '书籍大全',
          link: '/guide/modal',
        },
      ],
    },
  ]
}
