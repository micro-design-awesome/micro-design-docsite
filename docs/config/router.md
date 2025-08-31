# 集成 Vue Router（路由）
若创建项目时未勾选 Router，可手动集成（Vue3 需使用 vue-router@4）
## 步骤 1：安装依赖

::: code-group
```bash [npm]
npm install vue-router@4
```
```bash [yarn]
yarn add vue-router@4
```
```bash [pnpm]
pnpm add vue-router@4
```
:::
安装完成后，可以在 package.json 文件中查看是否已正确添加依赖：
```json
"dependencies": {
  "vue": "^3.3.4",
  "vue-router": "^4.2.4"  // 确保版本号以 4 开头
}
```
## 步骤 2：创建路由配置文件
### 1. 建立路由目录结构
在 src 目录下创建 router 文件夹，并在其中新建以下文件：

```bash
src/
└── router/
    ├── index.ts       # 路由入口文件
    └── routes.ts      # 路由规则配置（可选，用于分离配置）
```
### 2. 定义路由规则（routes.ts）
在 router/routes.ts 中定义路由规则：
```javascript
// src/router/routes.ts
import { RouteRecordRaw } from 'vue-router'

// 懒加载导入页面组件
const Home = () => import('@/views/Home.vue')
const About = () => import('@/views/About.vue')
const Contact = () => import('@/views/Contact.vue')
const NotFound = () => import('@/views/NotFound.vue')

// 路由规则数组
const routes: RouteRecordRaw[] = [
  {
    path: '/',
    name: 'Home',
    component: Home,
    meta: {
      title: '首页'  // 可选：用于设置页面标题
    }
  },
  {
    path: '/about',
    name: 'About',
    component: About,
    meta: {
      title: '关于我们'
    }
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact,
    meta: {
      title: '联系我们'
    }
  },
  // 404 路由（放在最后）
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound,
    meta: {
      title: '页面未找到'
    }
  }
]

export default routes
```
### 3. 创建路由实例（index.ts）
在 router/index.ts 中创建并配置路由实例：
```typescript
// src/router/index.ts
import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router'
import routes from './routes'

// 创建路由实例
const router = createRouter({
  // 选择历史模式：
  // - createWebHistory: 无 # 号（需要后端配置支持）
  // - createWebHashHistory: 带 # 号（无需后端配置）
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
  // 滚动行为：切换路由时滚动到顶部
  scrollBehavior() {
    return { top: 0 }
  }
})

// 全局前置守卫：可用于权限控制、页面标题设置等
router.beforeEach((to, from, next) => {
  // 设置页面标题
  if (to.meta.title) {
    document.title = to.meta.title as string
  }
  next()
})

export default router
```
## 步骤 3：创建视图组件
在 src 目录下创建 views 文件夹，并添加对应的页面组件：
### 1. 首页（Home.vue）

```vue
<template>
  <div class="home-container">
    <h1>欢迎来到首页</h1>
    <p>这是通过 Vue Router 4 实现的路由示例</p>
  </div>
</template>

<script setup lang="ts">
// 首页逻辑
</script>

<style scoped>
.home-container {
  padding: 2rem;
  text-align: center;
}
</style>
```
### 2. 关于页面（About.vue）
```vue
<template>
  <div class="about-container">
    <h1>关于我们</h1>
    <p>这是一个 Vue3 + Vue Router 4 的示例项目</p>
  </div>
</template>

<script setup lang="ts">
// 关于页面逻辑
</script>

<style scoped>
.about-container {
  padding: 2rem;
}
</style>
```
### 3. 联系页面（Contact.vue）
```vue
<template>
  <div class="contact-container">
    <h1>联系我们</h1>
    <p>邮箱：contact@example.com</p>
  </div>
</template>

<script setup lang="ts">
// 联系页面逻辑
</script>

<style scoped>
.contact-container {
  padding: 2rem;
}
</style>
```
### 4. 404 页面（NotFound.vue）
```vue
<template>
  <div class="not-found">
    <h1>404</h1>
    <p>页面未找到</p>
    <router-link to="/" class="home-link">返回首页</router-link>
  </div>
</template>

<script setup lang="ts">
// 404页面逻辑
</script>

<style scoped>
.not-found {
  padding: 2rem;
  text-align: center;
}

.home-link {
  display: inline-block;
  margin-top: 1rem;
  color: #42b983;
  text-decoration: none;
}

.home-link:hover {
  text-decoration: underline;
}
</style>
```
## 步骤 4：在 Vue 应用中注册路由
修改 main.ts（或 main.js）文件，注册路由实例：
```typescript
// src/main.ts
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'  // 导入路由实例

// 创建应用实例
const app = createApp(App)

// 使用路由
app.use(router)

// 挂载应用
app.mount('#app')
```
## 步骤 5：修改根组件（App.vue）
更新 App.vue，添加路由导航和路由出口：
```vue
<template>
  <div id="app">
    <!-- 导航栏 -->
    <nav class="navbar">
      <router-link to="/" class="nav-link">首页</router-link>
      <router-link to="/about" class="nav-link">关于我们</router-link>
      <router-link to="/contact" class="nav-link">联系我们</router-link>
    </nav>
    
    <!-- 路由出口：匹配的组件将在这里渲染 -->
    <router-view class="content" />
  </div>
</template>

<script setup lang="ts">
// 根组件逻辑
</script>

<style>
/* 全局样式 */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.navbar {
  background-color: #333;
  padding: 1rem 2rem;
  display: flex;
  gap: 1rem;
}

.nav-link {
  color: white;
  text-decoration: none;
  padding: 0.5rem;
}

.nav-link:hover {
  background-color: #555;
  border-radius: 4px;
}

/* 路由激活状态样式 */
.nav-link.router-link-exact-active {
  background-color: #42b983;
}

.content {
  padding: 2rem;
}
</style>
```