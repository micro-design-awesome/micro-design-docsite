/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-08-09 12:00:29
 * @LastEditTime: 2025-08-09 12:13:59
 * @LastEditors: xunzhaotech
 */
import type { FooterData } from '@theojs/lumen'

export const Footer_Data: FooterData = {
  beian: { showIcon: false, icp: { number: 'Copyright © 2022-present MicroDesign' } },
  // author: { startYear: 2021, name: 'Theo', link: 'https://github.com/s-theo' },
  group: [
    {
      icon: 'mdi:github',
      title: 'GitHub Source',
      links: [
        { name: 'github', link: 'https://github.com/xunzhaotech' },
        { name: 'gitee', link: 'https://gitee.com/xunzhaotech' },
        // { name: '常用配置文件', link: 'https://github.com/s-theo/dotfiles' },
        // { name: 'Lumen', link: 'https://github.com/s-theo/lumen' }
      ]
    },
    {
      icon: 'heroicons:globe-alt-solid',
      title: '优质项目',
      links: [
        { name: 'Micro Design Admin', link: 'https://github.com/xunzhaotech', rel: 'sponsored noreferrer' },
        { name: 'Micro Design Pro', link: 'https://github.com/xunzhaotech', rel: 'sponsored noreferrer' },
        // { name: '青云梯', link: 'https://itheo.top/qyt', rel: 'sponsored noreferrer' },
        // { name: 'Galaxy - 银河云', link: 'https://itheo.top/yhy', rel: 'sponsored noreferrer' },
        // { name: 'TNT Cloud', link: 'https://itheo.top/tnt', rel: 'sponsored noreferrer' },
        // { name: 'FlyingBird - 飞鸟机场', link: 'https://itheo.top/flyingbird', rel: 'sponsored noreferrer' },
        // { name: 'Totoro - 龙猫云', link: 'https://itheo.top/totoro', rel: 'sponsored noreferrer' },
        // { name: '小蜜蜂', link: 'https://itheo.top/bee', rel: 'sponsored noreferrer' }
      ]
    },
    // {
    //   icon: 'heroicons:tv-solid',
    //   title: '流媒体合租',
    //   links: [
    //     { name: '银河录像局', link: 'https://itheo.top/yh', rel: 'sponsored noreferrer' },
    //     { name: '奈飞小铺', link: 'https://itheo.top/ihezu', rel: 'sponsored noreferrer' },
    //     { name: '蜜糖商店', link: 'https://itheo.top/metshop', rel: 'sponsored noreferrer' },
    //     { name: 'SMS-Activate', link: 'https://itheo.top/sms', rel: 'sponsored noreferrer' }
    //   ]
    // },
    {
      icon: 'heroicons:link-16-solid',
      title: '相关链接',
      links: [
        // { name: 'Theo-Docs', link: 'https://doc.theojs.cn/' },
        // { name: '玄学宝典', link: 'https://xx.theojs.cn/' },
        { name: 'VitePress', link: 'https://vitepress.dev/' }
      ]
    }
  ]
}