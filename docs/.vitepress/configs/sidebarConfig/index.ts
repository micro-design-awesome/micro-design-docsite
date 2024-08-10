// import configJson from '../../../components/index.json'
// import { getSidebars } from '../utils'
// getSidebars(configJson),
export default {
    '/guide/': [
      {
        text: '使用指南',
        collapsible: true,
        items: [
          { text: '开发环境', link: '/guide/' }, // /guide/index.md
          { text: '代码仓库', link: '/guide/one' }, // /guide/one.md
          { text: '更新日志', link: '/guide/two' }, // /guide/two.md
          { text: '问题反馈', link: '/guide/two' }, // /guide/two.md
          { text: '友情链接', link: '/guide/two' }, // /guide/two.md
      
        ]
      },
      {
        text: '知识储备',
        collapsible: true,
        items: [
          { text: '开发环境', link: '/guide/' }, // /guide/index.md
          { text: '代码仓库', link: '/guide/one' }, // /guide/one.md
          { text: '更新日志', link: '/guide/two' }, // /guide/two.md
          { text: '问题反馈', link: '/guide/two' }, // /guide/two.md
          { text: '友情链接', link: '/guide/two' }, // /guide/two.md
      
        ]
      },
      {
        text: '常用工具',
        collapsible: true,
        items: [
          { text: '开发环境', link: '/guide/' }, // /guide/index.md
          { text: '代码仓库', link: '/guide/one' }, // /guide/one.md
          { text: '更新日志', link: '/guide/two' }, // /guide/two.md
          { text: '问题反馈', link: '/guide/two' }, // /guide/two.md
          { text: '友情链接', link: '/guide/two' }, // /guide/two.md
      
        ]
      }
    ],
  '/configs/': [
      {
        text: '环境配置',
        collapsible: true,
        items: [
          { text: 'NodeJS', link: '/configs/nodejs' }, // /guide/two.md
          { text: '镜像源设置', link: '/configs/config' }, // /guide/one.md
        ]
      },
      {
        text: '工具配置',
        collapsible: true,
        items: [
          { text: 'ESLint', link: '/configs/eslint' }, // /guide/two.md
          { text: 'Prettier', link: '/configs/prettier' }, // /guide/one.md
        ]
      },
      {
        text: '项目配置',
        collapsible: true,
        items: [
          { text: 'ESLint', link: '/configs/eslint' }, // /guide/two.md
          { text: 'Prettier', link: '/configs/prettier' }, // /guide/one.md
        ]
      }
    ],
    '/components/': [
      {
        text: '开发指南',
        collapsible: true,
        items: [
          { text: '介绍', link: '/guide/about' }, // /guide/index.md
          { text: '关于MicroUI', link: '/guide/' }, // /guide/index.md
      
        ]
      },
      {
        text: '快速开发',
        collapsible: true,
        items: [
          { text: '新特性', link: '/components/button/index' }, // /guide/index.md
      
        ]
      },
      {
        text: '基础组件',
        collapsible: true,
        items: [
          { text: '按钮(Button)', link: '/components/basic/button/index.md' }, // /guide/index.md
          { text: '图标(Icon)', link: '/components/basic/icon/index.md/' }, // /guide/one.md
          { text: '图片(Image)', link: '/components/basic/image/index.md' }, // /guide/two.md
          { text: '加载图标(Loading)', link: '/components/loading/index.md' }, // /guide/index.md
          { text: '标签(Tag)', link: '/components/basic/tag/index.md' }, // /guide/one.md
          { text: '提示(Toast)', link: '/components/basic/toast/index.md' } // /guide/two.md
        ]
      },
      {
        text: '业务组件',
        collapsible: true,
        items: [
          { text: '按钮', link: '/components/' }, // /guide/index.md
          { text: 'One', link: '/components/one' }, // /guide/one.md
          { text: 'Two', link: '/components/two' } // /guide/two.md
      
        ]
      },
      {
        text: '系统组件',
        collapsible: true,
        items: [
          { text: '按钮', link: '/components/' }, // /guide/index.md
          { text: 'One', link: '/components/one' }, // /guide/one.md
          { text: 'Two', link: '/components/two' } // /guide/two.md
      
        ]
      },
      {
        text: '更多资料',
        collapsible: true,
        items: [
          { text: '架构说明', link: '/components/introduce/' }, // /guide/index.md
          { text: '整用说明', link: '/components/introduce/' },
        ]
      },
      {
        text: '更新日志',
        collapsible: true,
        items: [
          { text: '新特性', link: '/components/button/' }, // /guide/index.md
      
        ]
      },
    ],
    '/pages/plugins/' : [
      {
        text: '插件',
        collapsible: true,
        items: [
          { text: '按钮', link: '/components/' }, // /guide/index.md
          { text: 'One', link: '/components/one' }, // /guide/one.md
          { text: 'Two', link: '/components/two' } // /guide/two.md
      
        ]
      },
    ],
    '/pages/theme/' : [
      {
        text: '主题',
        collapsible: true,
        items: [
          { text: '按钮', link: '/components/' }, // /guide/index.md
          { text: 'One', link: '/components/one' }, // /guide/one.md
          { text: 'Two', link: '/components/two' } // /guide/two.md
      
        ]
      },
    ],
    '/pages/templates/': [
      {
        text: '模板',
        collapsible: true,
        items: [
          { text: '按钮', link: '/components/' }, // /guide/index.md
          { text: 'One', link: '/components/one' }, // /guide/one.md
          { text: 'Two', link: '/components/two' } // /guide/two.md
      
        ]
      },
    ],
    '/pages/docs/': [
      {
        text: '系统文档',
        collapsible: true,
        items: [
          { text: 'base', link: '/pages/docs/README.md' }, // /guide/index.md
          { text: 'modules', link: '/pages/docs/modules.md' }, // /guide/one.md
          { text: 'classes', link: '/pages/docs/classes/MyClass.md' }, // /guide/two.md
          { text: 'interfaces', link: '/pages/docs/interfaces/MyInterface.md' } // /guide/two.md
      
        ]
      },
      {
        text: '注释文档',
        collapsible: true,
        items: [
          { text: 'base', link: '/pages/docs/README.md' }, // /guide/index.md
          { text: 'modules', link: '/pages/docs/modules.md' }, // /guide/one.md
          { text: 'classes', link: '/pages/docs/classes/MyClass.md' }, // /guide/two.md
          { text: 'interfaces', link: '/pages/docs/interfaces/MyInterface.md' } // /guide/two.md
      
        ]
      },
      {
        text: 'API文档',
        collapsible: true,
        items: [
          { text: 'base', link: '/pages/docs/README.md' }, // /guide/index.md
          { text: 'modules', link: '/pages/docs/modules.md' }, // /guide/one.md
          { text: 'classes', link: '/pages/docs/classes/MyClass.md' }, // /guide/two.md
          { text: 'interfaces', link: '/pages/docs/interfaces/MyInterface.md' } // /guide/two.md
      
        ]
      },
    ],
    '/pages/about/': [
      {
        text: '产品使命',
        items: [
          { 
            text: '简单',
            link: '/dist/modules' 
          },
          { 
            text: '高效',
            link: '/dist/modules' 
          },
          { 
            text: '系统',
            link: '/dist/modules' 
          },
          { 
            text: '智能',
            link: '/dist/modules' 
          },
        ],
      },
    ],
    'pages/stack/': [
      {
        text: 'Vue',
        items: [
          { 
            text: '第1节 Vue3中获取proxy包裹的数据',
            link: '/pages/stack/vue2/chapters1' 
          },
        ],
      },
      {
        text: 'Vue3',
        items: [
          { 
            text: 'Entry',
            link: '/dist/modules' 
          },
        ],
      },
    ],
    '/pages/links/': [
      {
        text: '设计开源',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '前端开源',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '后端开源',
        items: [
          { text: 'SpringBoot', link: '/pages/links/backend/springboot.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '测试开源',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '运维开源',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '开源模板',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
      {
        text: '开源工具',
        items: [
          { text: '移动端', link: '/pages/links/templates/mobile.md' },
          { text: '管理端', link: '/pages/links/templates/admin.md' },
          { text: '网页端', link: '/pages/links/templates/ssr.md' },
        ],
      },
    ],
    '/pages/logs/': [
        {
            text: 'V 1.0.0',
            items: [
              { text: '1.0.1', link: '/logs/v1_0_1.md' },
              { text: '1.0.2', link: '/logs/v1_0_2.md' },
              { text: '1.0.3', link: '/logs/v1_0_3.md' },
            ],
        },
        {
            text: 'V 2.0.0',
            items: [
              { text: '2.0.1', link: '/logs/v2_0_1.md' },
              { text: '2.0.2', link: '/logs/v2_0_2.md' },
              { text: '2.0.3', link: '/logs/v2_0_3.md' },
            ],
        },
    ]
  }