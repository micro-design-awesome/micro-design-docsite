/*
 * @Description:
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-09-11 11:57:47
 * @LastEditors: xunzhaotech
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
  '/blog/': getBlogSidebar(),
  '/awesome/': getAwesomeSidebar(),
}

function getApiSidebar() {
  return [
    {
      text: 'API 概览',
      collapsible: true,
      collapsed: false,
      items: [
        {
          text: 'API 文档',
          link: '/api/',
        },
        {
          text: '快速开始',
          link: '/api/quickstart',
        },
        {
          text: '设计原则',
          link: '/api/principles',
        },
      ],
    },
    {
      text: '认证与安全',
      collapsible: true,
      collapsed: true,
      items: [
        {
          text: 'JWT 认证',
          link: '/api/auth/jwt',
        },
        {
          text: 'OAuth2 集成',
          link: '/api/auth/oauth2',
        },
        {
          text: 'API Key 管理',
          link: '/api/auth/apikey',
        },
        {
          text: '权限控制',
          link: '/api/auth/permissions',
        },
      ],
    },
    {
      text: '核心 API',
      collapsible: true,
      collapsed: true,
      items: [
        {
          text: '用户管理',
          link: '/api/modules/users',
        },
        {
          text: '系统管理',
          link: '/api/modules/system',
        },
        {
          text: '文件管理',
          link: '/api/modules/files',
        },
        {
          text: '通知消息',
          link: '/api/modules/notifications',
        },
        {
          text: 'WebSocket',
          link: '/api/modules/websocket',
        },
      ],
    },
    {
      text: 'SDK 与工具',
      collapsible: true,
      collapsed: true,
      items: [
        {
          text: 'JavaScript SDK',
          link: '/api/sdk/javascript',
        },
        {
          text: 'Java SDK',
          link: '/api/sdk/java',
        },
        {
          text: 'Python SDK',
          link: '/api/sdk/python',
        },
        {
          text: 'Postman 集合',
          link: '/api/tools/postman',
        },
        {
          text: 'Mock 服务',
          link: '/api/tools/mock',
        },
      ],
    },
    {
      text: '最佳实践',
      collapsible: true,
      collapsed: true,
      items: [
        {
          text: 'API 安全',
          link: '/api/best-practices/security',
        },
        {
          text: '性能优化',
          link: '/api/best-practices/performance',
        },
        {
          text: '版本管理',
          link: '/api/best-practices/versioning',
        },
        {
          text: '错误处理',
          link: '/api/best-practices/error-handling',
        },
      ],
    },
  ]
}

function getComponentsSidebar() {
  return [
    {
      text: '基础组件',
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
          text: '',
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
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: 'Node.js配置',
          link: '/config/nidejs',
        },
        {
          text: 'NVM配置',
          link: '/config/nvm',
        },
        {
          text: 'NRM配置',
          link: '/config/nrm',
        },
        {
          text: 'NPM配置',
          link: '/config/npm',
        },
      ],
    },
    {
      text: '项目创建',
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '创建项目',
          link: '/config/create',
        },
        {
          text: '集成路由',
          link: '/config/router',
        },
        {
          text: '状态管理',
          link: '/config/pinia',
        },
      ],
    },
    {
      text: '项目集成',
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '介绍',
          link: '/guide/',
        },
         {
          text: '快速开始',
          link: '/guide/start',
        },
        {
          text: 'NPM源配置',
          link: '/guide/introduce',
        },
        {
          text: '源码地址',
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: 'JavaScript规范',
          link: '/lint/',
        },
        {
          text: '后端规范',
          link: '/lint/banckup',
        },
        {
          text: '后端平台模板',
          link: '/lint/platform',
        },
      ],
    },
  ]
}
function getCourse() {
  return [
    {
      text: '课程',
      collapsible: true,
      collapsed: true, // 默认折叠
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
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '前端工具',
          link: '/tools/',
        }
      ]
    },
    {
      text: '前端工具',
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '前端工具',
          link: '/tools/',
        }
      ]
    },
    {
      text: '后端工具',
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '后端工具',
          link: '/tools/backend',
        }
      ]
    },
  ]
}
function getBlogSidebar () {
  return [
    {
      text: '博客',
      collapsible: true,
      collapsed: true, // 默认折叠
      items: [
        {
          text: '介绍',
          link: '/blog/',
        },
        {
          text: '演示',
          link: '/blog/introduce',
        },
        {
          text: '源码',
          link: '/blog/source',
        },
      ],
    },
  ]
}
function getStore() {
  return [
    {
      text: '成功案例',
      collapsible: true,
      collapsed: true, // 默认折叠
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
