<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-28 17:00:15
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2023-02-28 11:48:45
 * @FilePath: \micro-design-docs\docs\pages\links\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# 前端工程化解决方案
<!-- [[TOC]] -->
## 【第1节】 文档搭建解决方案
### 官网
- [官方文档](https://vitepress.vuejs.org/)
### 特点
- Vitepress是在Vite之上构建的Vue驱动的静态站点生成器。
- 建立在Vite而非Webpack上，因此启动时间，热重装等更快
- 使用Vue3来减少JS的有效负载
- 轻量级
- 两款支持vitepress的demo展示插件`vitepress-theme-demoblock`和`vitepress-for-component`
## 【第2节】 前端监控系统解决方案
### 说明
前端经常被线上的各种问题弄的焦头烂额，不是出现适配问题，就是出现功能异常,这个时候就需要一套监控系统来帮助我们分析和发现问题，通过系统我们可以实时掌控前端性能，还可以实时分析前端监控状态。
### 支持
- PC端
- H5端
- 微信小程序
- UNIAPP
### 功能
- 你可以通过它来对线上的流量数据、用户量统计、页面访问趋势、用户活跃量趋势等等指标有一个非常清晰直观的了解。并且，你还可以深入分析每个用户的行为。系统记录了用户的所有行为，为了提高查找效率，系统支持使用多种检索条件进行搜索。
- 你可以通过它来分析系统的健康情况包括js报错趋势、自定义异常趋势、静态资源加载报错确实等等指标。并且，你还可以清晰地看到报错的详细情况，这样可以帮助你精细化分析每个报错问题。
- 你可以通过它来分析系统的性能情况包括页面和接口性能，加载耗时，成功率.
- 你还可以使用它来分析用户的地域分布情况。
- 提供了更加灵活的自定义埋点，满足更多定制化的业务场景。
### 地址
- 官网:https://www.webfunny.cn
- GitHub:https://github.com/a597873885/webfunny_monitor
## 【第3节】 前端工程部署方案
### 说明
[Vercel](https://vercel.com/) 你可以理解为一个部署工具，支持部署静态网页和Node服务，部署后你还可以访问它自带生成的域名https。
### 支持
- Nuxt.js: Vue的SSR框架
- Hexo: 快速生成博客网站
- Remix： 一款边缘原生的全栈 JavaScript 框架
- 模版多达30种..
## 【第4节】 自动生成API文档方案
### 说明
文档是项目维护的关键产物，但是由于开发任务重，我们往往没有时间单独的时间去编写文档，这个时候架构自动生成文档就显得非常重要，今天我们讲述如何通过文档工具 TypeDoc 自动为 TypeScript 项目生成文档。
### 目标
- TypeScript 编写文档注释。
- 使用 TypeDoc 自动生成文档。
- TypeDoc 与静态页面工具 VitePress 的配合使用。
## 【第5节】 前端全局搜索方案
### 官网
- 