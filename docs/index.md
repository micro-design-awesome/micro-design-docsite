---
layout: home
hero:
  name: MicroDocs Framework
  text: 一个基于微服务架构生态的文档框架
  tagline: 极致体验，用心创造，让开发文档书写更简单、更优雅、更高效!
  image:
    src: https://s1.ax1x.com/2022/12/17/zbmcHs.png
    alt: VitePress
  actions:
    - theme: brand
      text: 开发文档
      type: primary
      link: /guide/index.md
    - theme: alt
      text: 在线演示
      type: secondary
      link: /pages/docs/README.md
    # - theme: alt
    #   text: GitHub
    #   link: https://github.com/vuejs/vitepress
    # - theme: alt
    #   text: Gitee
    #   link: https://github.com/vuejs/vitepress
    # - theme: alt
    #   text: 加入讨论群
    #   link: https://github.com/vuejs/vitepress
features:
  - icon: ⚡️
    title: 定制組件
    details: 深入业务场景，定制满足用户体验的系统化组件，可升级可扩展。
  - icon: 🖖
    title: 定制插件
    details: 根据业务场景，定制满足用户功能的插件，实现一切皆为插件，即插即用。
  - icon: 🛠️
    title: 定制主题
    details: 提供大厂网页、商城、直播等主题，可自由扩展定制，满足各类业务场景。
  - icon: 🛠️
    title: 系统架构
    details: 前后端提供前后端分离的单体服务和微服务架构的系统架构，包括SaaS和单体。
  - icon: 🛠️
    title: 系统监控
    details: 提供一体化监控系统，随时随地掌控你网站系统的Bug、性能和访问量。
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

## 项目案例展示

<div class="feature-grid">
  <div class="feature-card">
    <div class="feature-icon">🚀</div>
    <h3>性能优化</h3>
    <p>基于 Vite 的构建系统确保闪电般快速的加载和构建时间</p>
  </div>
  
  <div class="feature-card">
    <div class="feature-icon">🔌</div>
    <h3>插件系统</h3>
    <p>丰富的插件生态系统扩展 Vitepress 的功能</p>
  </div>
  
  <div class="feature-card">
    <div class="feature-icon">💡</div>
    <h3>智能路由</h3>
    <p>自动根据文件结构生成路由，无需手动配置</p>
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
}

.feature-card h3 {
  color: var(--vp-c-brand);
  margin-bottom: 0.8rem;
}

.feature-card p {
  color: var(--vp-c-text-2);
}
</style>