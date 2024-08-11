/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-08-11 11:40:49
 * @LastEditTime: 2024-08-11 16:26:17
 * @LastEditors: xunzhaotech
 */
import { createRequire } from 'module'
const require = createRequire(import.meta.url)
const pkg = require('../../../package.json')
export default [
  { text: '文档', link: '/guide/', activeMatch: '^/guide/' },
  { text: '组件', link: '/components/', activeMatch: '^/components/' },
  { text: 'API 参考', link: '/api/' },
  { text: '工具资源', link: '/awesome/' },
  {
    text: pkg.version,
      items: [
        {
          text: '更新日志',
          link: 'https://github.com/vuejs/vitepress/blob/main/CHANGELOG.md'
        },
        {
          text: '参与贡献',
          link: 'https://github.com/vuejs/vitepress/blob/main/.github/contributing.md'
        }
      ]
  }
]

