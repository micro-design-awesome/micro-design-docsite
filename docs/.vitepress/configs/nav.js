/*
 * @Description:
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2025-01-04 21:44:41
 * @LastEditors: xunzhaotech
 */
import { createRequire } from 'module'
const require = createRequire(import.meta.url)
const pkg = require('../../../package.json')
export default [
  { text: '指南', link: '/guide/', activeMatch: '^/guide/' },
  { text: '配置', link: '/config/', activeMatch: '^/config/' },
  { text: '文档', link: '/docs/', activeMatch: '^/docs/' },
  { text: '组件', link: '/components/', activeMatch: '^/components/' },
  { text: '项目', link: '/project/', activeMatch: '^/project/' },
  { text: '规范', link: '/lint/', activeMatch: '^/lint/' },
  { text: '课程', link: '/course/', activeMatch: '^/course/' },
  { text: '案例', link: '/store/', activeMatch: '^/store/' },
  { text: 'API 参考', link: '/api/' },
  { text: '工具', link: '/tools/' },
  { text: '资源', link: '/awesome/' },
  { text: 'AI工具', link: '/ai/' },
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
