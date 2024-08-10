/*
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-12-25 19:37:23
 * @LastEditors: xunzhaotech
 * @LastEditTime: 2024-01-01 21:15:05
 * @FilePath: \micro-design-docs\docs\.vitepress\configs\navConfig\index.ts
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
import { version } from '../../../package.json'
export default  [
    { text: 'Guide', link: '/guide/', activeMatch: '/guide/' },
    { text: 'Configs', link: '/configs/', activeMatch: '/configs/' },
    { 
      text: 'UI',
      items: [
        { text: 'micro-vue', link: '/pages/theme/', activeMatch: '/pages/theme/' },
        { text: 'micro-uni', link: '/components/', activeMatch: '/components/' },
      ] 
    },
    { text: 'Stack', link: '/pages/stack/', activeMatch: '/pages/stack/' },
    { text: 'Docs', link: '/pages/docs/', activeMatch: '/pages/docs/' },
    { text: 'About', link: '/pages/about/', activeMatch: '/pages/about/' },
    { text: 'Links', link: '/pages/links/', activeMatch: '/pages/links/' },
    { 
      text: 'Framework',
      items: [
        { text: 'Theme', link: '/pages/theme/', activeMatch: '/pages/theme/' },
        { text: 'Components', link: '/components/', activeMatch: '/components/' },
        { text: 'Plugins', link: '/pages/plugins/', activeMatch: '/pages/plugins/' },
        { text: 'Templates', link: '/pages/templates/', activeMatch: '/pages/templates/' },
      ] 
    },
    {
        text: version ,
        items: [
            {
            activeMatch: '/pages/logs/',
            text: 'Changelog',
            link: '/pages/logs/',
            // activeMatch: '/pages/logs/',
            },
        ]
    }
]