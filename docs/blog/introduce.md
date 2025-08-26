<!--
 * @Description: 博客系统演示介绍
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-08-25 16:00:00
 * @LastEditTime: 2025-08-25 16:00:00
 * @LastEditors: xunzhaotech
-->

# MicroBlog 博客系统演示

## 系统简介

MicroBlog 是一个基于微服务架构的现代化博客系统，采用前后端分离设计，提供完整的博客发布、管理和交互功能。系统致力于为个人博客、企业官方博客和技术团队博客提供专业的解决方案。

## 演示地址

🌐 **在线演示**: [https://blog.microdesign.com](https://blog.microdesign.com)

- **前台博客**: 博客展示和阅读体验
- **后台管理**: 内容管理和系统配置
- **移动端**: 响应式设计，支持移动设备访问

## 功能展示

### 博客前台功能
- **文章展示**: 支持富文本、Markdown、代码高亮
- **分类标签**: 灵活的分类和标签体系
- **搜索功能**: 全文搜索，支持关键词高亮
- **评论互动**: 多级评论系统，支持点赞和回复
- **用户系统**: 用户注册、登录、个人资料管理

### 博客后台管理
- **文章管理**: 写作编辑器、草稿保存、定时发布
- **媒体库**: 图片上传、文件管理、CDN 加速
- **分类管理**: 分类层级管理、标签云展示
- **评论审核**: 评论管理、垃圾评论过滤
- **数据统计**: 访问统计、文章阅读量分析

### 系统特色功能
- **SEO 优化**: 自动生成 sitemap、meta 标签优化
- **主题定制**: 多套精美主题，支持在线切换
- **插件系统**: 丰富的插件扩展生态
- **API 开放**: RESTful API，支持第三方集成

## 主题展示

<div class="product-grid">
  <div class="product-card">
    <img src="/images/blog/theme-default.png" alt="默认主题" style="width: 100%; object-fit: cover;">
    <div style="padding: 15px;">
      <h4>经典主题</h4>
      <p>简洁大方的经典设计风格</p>
    </div>
  </div>
  <div class="product-card">
    <img src="/images/blog/theme-dark.png" alt="深色主题" style="width: 100%; object-fit: cover;">
    <div style="padding: 15px;">
      <h4>暗色主题</h4>
      <p>护眼的暗色模式设计</p>
    </div>
  </div>
  <div class="product-card">
    <img src="/images/blog/theme-tech.png" alt="技术主题" style="width: 100%; object-fit: cover;">
    <div style="padding: 15px;">
      <h4>技术主题</h4>
      <p>专为技术博客打造的主题</p>
    </div>
  </div>
</div>

## 技术架构

### 前端技术栈
- **框架**: Vue 3.x + TypeScript
- **UI 组件**: Element Plus / Ant Design Vue
- **状态管理**: Pinia
- **路由**: Vue Router 4
- **构建工具**: Vite
- **编辑器**: Monaco Editor / TinyMCE

### 后端技术栈
- **框架**: Spring Boot 2.7+
- **数据库**: MySQL 8.0+ / PostgreSQL
- **缓存**: Redis 6.0+
- **搜索**: Elasticsearch
- **文件存储**: 阿里云 OSS / 腾讯云 COS
- **消息队列**: RabbitMQ

### 部署架构
- **容器化**: Docker + Docker Compose
- **反向代理**: Nginx
- **负载均衡**: Nginx / HAProxy
- **监控**: Prometheus + Grafana
- **日志**: ELK Stack

## 系统截图

### 博客首页
![博客首页](/images/blog/homepage.png)

### 文章详情页
![文章详情页](/images/blog/article-detail.png)

### 后台管理界面
![后台管理](/images/blog/admin-dashboard.png)

### 文章编辑器
![文章编辑器](/images/blog/editor.png)

## 功能特性

### 内容管理
- ✅ 富文本编辑器，支持实时预览
- ✅ Markdown 编辑器，支持语法高亮
- ✅ 图片拖拽上传，自动压缩优化
- ✅ 文章草稿自动保存
- ✅ 定时发布功能
- ✅ 文章版本历史记录

### 用户体验
- ✅ 响应式设计，适配各种设备
- ✅ 夜间模式切换
- ✅ 阅读进度指示器
- ✅ 文章目录导航
- ✅ 代码块语法高亮
- ✅ 数学公式渲染支持

### 社交功能
- ✅ 文章点赞、收藏、分享
- ✅ 多级评论系统
- ✅ 用户关注和粉丝
- ✅ 社交媒体一键分享
- ✅ RSS 订阅支持

### SEO 和性能
- ✅ 自动生成 sitemap.xml
- ✅ 结构化数据标记
- ✅ 页面缓存优化
- ✅ 图片懒加载
- ✅ CDN 加速
- ✅ 搜索引擎友好的 URL

## 部署说明

### 环境要求
- **Node.js**: 16.0+
- **Java**: JDK 11+
- **MySQL**: 8.0+
- **Redis**: 6.0+
- **Nginx**: 1.18+

### 快速启动
```bash
# 克隆项目
git clone https://github.com/micro-design-awesome/micro-blog.git

# 安装前端依赖
cd micro-blog-frontend
pnpm install

# 启动前端开发服务器
pnpm run dev

# 启动后端服务
cd ../micro-blog-backend
mvn spring-boot:run
```

### Docker 部署
```bash
# 使用 Docker Compose 一键部署
docker-compose up -d

# 访问博客
# 前台: http://localhost:3000
# 后台: http://localhost:3000/admin
```

## 文档和支持

- **在线文档**: [https://docs.microdesign.com/blog](https://docs.microdesign.com/blog)
- **API 文档**: [https://api.microdesign.com/blog/docs](https://api.microdesign.com/blog/docs)
- **GitHub**: [https://github.com/micro-design-awesome/micro-blog](https://github.com/micro-design-awesome/micro-blog)
- **技术支持**: microdesign@xunzhaotech.com
- **QQ 群**: 1525572900

## 更新日志

- **V2.1.0** - 新增暗色主题、优化移动端体验
- **V2.0.0** - 全面升级 Vue 3，重构后台管理界面
- **V1.5.0** - 新增插件系统、主题定制功能
- **V1.0.0** - 基础博客功能发布

## 开源协议

本项目基于 MIT 协议开源，欢迎贡献代码和提出建议。