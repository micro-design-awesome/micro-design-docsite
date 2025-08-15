---
layout: home
hero:
  name: MicroDesign Ecosystem Framework
  text: 一个基于微服务架构生态文档系统框架 
  textsuffix: 一站式服务
  tagline: 极致体验，用心创造，让开发文档书写更简单、更优雅、更高效!
  image:
    src: https://s1.ax1x.com/2022/12/17/zbmcHs.png
    alt: home
    fetchpriority: high
    width: 320
    height: 320
  Notice:
    title: '<span class="promo-title">优惠码大放送!</span>'
    desc: |
      · 85折<span class="promo-text"> 阿里云服务器</span>
      · 8折<span class="promo-text"> 阿里云服务器 </span>
      · 配合优惠码折上折，最高可达<span class="promo-text">48折</span>
    # date: '7月31号23点59分'
    # dateText: '活动截止至'
    link: https://itheo.top/qyt
    rel: sponsored noreferrer
  actions:
    - theme: brand
      text: 开发文档
      type: primary
      link: /guide/index.md
    - theme: alt
      text: 在线演示
      type: secondary
      link: /pages/docs/README.md
    - theme: alt
      text: GitHub
      link: https://github.com/vuejs/vitepress
    - theme: alt author
      text: Gitee
      link: https://github.com/vuejs/vitepress
    - theme: alt logo
      text: 加入讨论群
      link: https://github.com/vuejs/vitepress
features:
  - icon: ⚡️
    title: 定制組件
    details: 深入业务场景，定制满足用户体验的系统化组件，可升级可扩展。
    link: /streaming/netflix-guide
    linkText: 查看更多
  - icon: 🖖
    title: 定制插件
    details: 根据业务场景，定制满足用户功能的插件，实现一切皆为插件，即插即用。
    link: /streaming/netflix-guide
    linkText: 查看更多
  - icon: 🛠️
    title: 定制主题
    details: 提供大厂网页、商城、直播等主题，可自由扩展定制，满足各类业务场景。
    link: /streaming/netflix-guide
    linkText: 查看更多
  - icon: 🛠️
    title: 系统架构
    details: 前后端提供前后端分离的单体服务和微服务架构的系统架构，包括SaaS和单体。
    link: /streaming/netflix-guide
    linkText: 查看更多
  - icon: 🛠️
    title: 系统监控
    details: 提供一体化监控系统，随时随地掌控你网站系统的Bug、性能和访问量。
    link: /streaming/netflix-guide
    linkText: 查看更多
  - icon: 🛠️
    title: 生态支持
    details: 完善的文档视频、为开发文档、部署文档、直播间问题解答保证问题有回应，件件有着落。
  - icon: 🛠️
    title: 脚手架
    details: 通过脚手架柯快速、简单搭建标准化项目，创建即使用。
  - icon: 🛠️
    title: 开发文档
    details: 提供完善的设计文档、开发文档、测试报告、系统说明书，保证项目文档完整。
  - icon: 🛠️
    title: 技术支持
    details: 免费系统升级，上下兼容，生态体系不断升级，支持满足80%以上业务场景。
  - icon: ⚡️
    title: 极速开发体验
    details: 基于 Vite 的即时服务器启动和闪电般快速的 HMR
  - icon: 🛠️
    title: 强大的 Markdown 扩展
    details: 支持 Vue 组件、自定义容器和代码块高亮
  - icon: 🎨
    title: 灵活的主题定制
    details: 轻松定制主题以满足品牌需求
  - icon: 🌓
    title: 深色模式支持
    details: 开箱即用的深色/浅色模式切换
  - icon: 🔍
    title: 内置搜索功能
    details: 无需额外配置的全文搜索支持
  - icon: 📱
    title: 响应式设计
    details: 在各种设备上提供完美的阅读体验
---

<div class="custom-container">
<!-- iconify 图标 + 无链接 -->
<Links
  :items="[
    {
      icon: { icon: 'line-md:iconify2-static', color: '#1769AA' },
      size: 48,
      name: 'iconify',
      desc: '开源的图标库，提供了数以万计的矢量图标，支持多种框架和平台。它允许开发者轻松地在项目中使用各种图标，并且支持深浅模式切换。'
    }
  ]"
/>

<Links
  :grid="3"
  :items="[
    // 深浅色模式的 iconify 图标 + v-html 渲染
    {
      icon: { light: 'ion:logo-vercel', dark: 'ion:logo-vercel', color: { light: '#000000', dark: '#FFFFFF' } },
      name: `<p style='margin:0; font-style: italic;'>Vercel</p>`,
      desc: '适用于前端框架的无服务器部署平台，支持静态生成和即时预览。',
      link: 'https://vercel.com/'
    },
    // 深浅模式 iconify 图标，无 color
    {
      icon: { light: 'skill-icons:vite-dark', dark: 'skill-icons:vite-light' },
      name: 'Vite',
      desc: '极速的现代前端构建工具，支持热更新与按需加载。',
      link: 'https://vitejs.dev/'
    },
    // 无图标
    {
      name: 'MDN Web Docs',
      desc: '权威的 Web 技术文档库，涵盖 HTML、CSS 和 JavaScript。',
      link: 'https://developer.mozilla.org/'
    }
  ]"
/>
## 项目案例展示
<div class="feature-grid">
  <div class="feature-card">
    <div class="feature-icon">
    <img src="/images/bi/bi.png" height="200" />
    </div>
    <h3>物联网BI可视</h3>
    <p>技术栈Vue3+Element+pina+echars+axios+typescript+unocss</p>
  </div>
  
  <div class="feature-card">
    <div class="feature-icon">
       <img src="/images/erp/login.png" height="200" />
    </div>
    <h3>ERP系统</h3>
    <p>技术栈Vue3+Element+pina+axios+typescript+unocss</p>
  </div>
  
  <div class="feature-card">
    <div class="feature-icon">
       <img src="/images/erp/login.png" height="200" />
    </div>
    <h3>CRM系统</h3>
    <p>技术栈Vue3+Element+pina+axios+typescript+unocss</p>
  </div>
</div>

</div>

<style>
/* 自定义样式 */
.custom-container {
  max-width: 1200px;
  margin: 4rem auto;
  padding: 0 2rem;
}

.feature-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-top: 2rem;
}

.feature-card {
  background: var(--vp-c-bg-soft);
  border-radius: 12px;
  padding: 1.5rem;
  border: 1px solid var(--vp-c-divider-light);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.feature-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  heigh:200px;
}

.feature-card h3 {
  color: var(--vp-c-brand);
  margin-bottom: 0.8rem;
}

.feature-card p {
  color: var(--vp-c-text-2);
}
</style>