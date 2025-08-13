/*
 * @Description:
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-08-13 08:55:39
 * @LastEditors: xunzhaotech
 */
import { createRequire } from 'module'
import { text } from 'stream/consumers'
const require = createRequire(import.meta.url)
const pkg = require('../../../package.json')
export default [
  { text: '指南', link: '/guide/', activeMatch: '^/guide/' },
  { text: '配置', link: '/config/', activeMatch: '^/config/' },
  {
    text: '项目案例',
    items: [
      { text: '项目', link: '/project/', activeMatch: '^/project/' },
      { text: '案例', link: '/store/', activeMatch: '^/store/' },
      { text: '文档', link: '/docs/', activeMatch: '^/docs/' },
  ]},
  {
    text: '插件市场',
    items: [
      { text: 'WEB端', link: '/components/', activeMatch: '^/components/' },
      { text: '桌面端', link: '/components/desktop', activeMatch: '^/components/desktop' },
      { text: '移动端', link: '/components/mobile', activeMatch: '^/components/mobile' },
      { text: '小程序', link: '/components/wechat/', activeMatch: '^/components/wechat' },
    ]
  },
  {
    text: '学习资源',
    items: [
     { text: '规范', link: '/lint/', activeMatch: '^/lint/' },
     { text: '课程', link: '/course/', activeMatch: '^/course/' },
     { text: '博客', link: '/blog/', activeMatch: '^/blog/' },
  ] },
  {
    text: '工具资源',
      items: [
        // { text: '在线工具', link: '/tools/online/', activeMatch: '^/tools/online/' },
        // { text: '本地工具', link: '/tools/local/', activeMatch: '^/tools/local/' },
        { text: '工具', link: '/tools/', activeMatch: '^/tools/' },
        { text: '资源', link: '/awesome/' , activeMatch: '^/awesome/' },
        { text: 'AI工具', link: '/ai/', activeMatch: '^/ai/' }
      ]
    },
  { text: '定制开发', link: '/cooperate/', activeMatch: '^/cooperate/' },
  { text: '低价云服务器', link: '/cloud/', activeMatch: '^/cloud/' },
  { text: '赞赏', link: '/zan/', activeMatch: '^/zan/' },
  { text: 'API 参考', link: '/api/', activeMatch: '^/api/' },
  { text: '更新日志', link: '/logs/', activeMatch: '^/logs/' },
  {
    text: pkg.version,
    items: [
      {
        text: '更新日志',
        link: 'https://github.com/vuejs/vitepress/blob/main/CHANGELOG.md',
      },
      {
        text: '参与贡献',
        link: 'https://github.com/vuejs/vitepress/blob/main/.github/contributing.md',
      },
    ],
  },
]
