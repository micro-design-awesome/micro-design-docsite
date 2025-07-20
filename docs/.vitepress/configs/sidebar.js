/*
 * @Description:
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-07-20 19:24:24
 * @LastEditors: luyb luyb@xunzhaotech.com
 */
export default {
  '/guide/': getGuideSidebar(),
  '/config/': getConfigSidebar(),
  '/docs/': getDocsSidebar(),
  '/components/': getComponentsSidebar(),
  '/project/': getProject(),
  '/lint/': getLint(),
  '/course/': getCourse(),
  '/store/': getStore(),
  '/api/': getApiSidebar(),
  '/tools/': getTools(),
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
      text: '环境配置',
      items: [
        {
          text: 'Node.js配置',
          link: '/config/',
        },
        {
          text: 'NVM配置',
          link: '/config/nvm',
        },
        {
          text: 'NRM配置',
          link: '/config/nrm',
        },
      ],
    },
    {
      text: '创建项目',
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
     {
      text: '创建项目',
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
    {
      text: '项目集成',
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
    {
      text: '代码规范',
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
     {
      text: '打包部署',
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
    {
      text: 'SSL 证书配置（如果需要）',
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
          link: '/awesome/blog',
        },
        {
          text: '面试系列',
          link: '/awesome/interview',
        },
        {
          text: '书籍大全',
          link: '/awesome/book',
        },
        {
          text: '模板资源',
          link: '/awesome/templates',
        },
        {
          text: 'UI组件库',
          link: '/awesome/ui',
        },
        {
          text: '免费图标',
          link: '/awesome/icon',
        },
        {
          text: '网站插图',
          link: '/awesome/Illustrations',
        },
        {
          text: '设计资源',
          link: '/awesome/design',
        },
      ],
    },
  ]
}
function getProject() {
  return [
    {
      text: '项目',
      items: [
        {
          text: '前端项目',
          link: '/project/',
        },
        {
          text: '后端项目',
          link: '/project/banckup',
        },
      ],
    },
  ]
}
function getLint() {
  return [
    {
      text: '规范',
      items: [
        {
          text: 'JavaScript规范',
          link: '/lint/',
        },
        {
          text: '后端规范',
          link: '/lint/banckup',
        },
      ],
    },
  ]
}
function getCourse() {
  return [
    {
      text: '课程',
      items: [
        {
          text: '前端课程',
          link: '/course/',
        },
        {
          text: '后端课程',
          link: '/course/banckup',
        },
      ],
    },
  ]
}
function getTools() {
  return [
    {
      text: '工具',
      items: [
        {
          text: '前端工具',
          link: '/tools/',
        }
      ]
    },
    {
      text: '前端工具',
      items: [
        {
          text: '前端工具',
          link: '/tools/',
        }
      ]
    },
    {
      text: '后端工具',
      items: [
        {
          text: '后端工具',
          link: '/tools/backend',
        }
      ]
    },
  ]
}
function getStore() {
  return [
    {
      text: '成功案例',
      items: [
        {
          text: '介绍',
          link: '/store/',
        },
        // {
        //   text: '演示',
        //   link: '/store/introduce',
        // },
        // {
        //   text: '源码',
        //   link: '/store/source',
        // },
        {
          text: '桌面端',
          link: '/store/executable',
        },
        {
          text: '管理端',
          link: '/store/web',
        },
         {
          text: '小程序',
          link: '/store/wechat',
        },
          {
          text: 'APP端',
          link: '/store/app',
        },
        {
          text: '可视化',
          link: '/store/bi',
        },
      ],
    },
  ]
}
