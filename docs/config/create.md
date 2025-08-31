<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-08-02 11:05:43
 * @LastEditTime: 2025-08-02 11:47:20
 * @LastEditors: xunzhaotech
-->
# 项目创建
本指南将带您从零开始，通过 Vite（官方推荐）和 Vue CLI 两种方式创建 Vue3 项目，并覆盖环境准备、项目配置、运行、打包部署全流程，适用于新手入门与项目初始化参考。
:::tip 前提条件
  - Node.js：v18.x 及以上（推荐 LTS 版本，包含 npm 包管理器）
  - 可选包管理器：yarn 或 pnpm（推荐，提升依赖安装效率）
:::
## 验证安装
打开终端 / 命令提示符，执行以下命令，若显示版本号则安装成功：
```bash
node -v  # 示例输出：v20.10.0
npm -v   # 示例输出：10.2.3
```
## 安装可选包管理器（推荐）
若您偏好 yarn 或 pnpm，可通过以下命令全局安装：
::: code-group
```bash[管理器安装]
# 安装 yarn
npm install -g yarn
# 验证
yarn -v  # 示例输出：1.22.21

# 或安装 pnpm
npm install -g pnpm
# 验证
pnpm -v  # 示例输出：8.15.0
```
:::
::: tip 推荐版本
- node: v20.12.0
- npm: 10.8.1
- pnpm: 9.0.6
- yarn： 1.22.4
:::
## 项目创建
::: code-group
```bash [npm]
npm create vite@latest
```
```bash [yarn]
yarn create vite
```
```bash [pnpm]
pnpm create vite
```
:::
### 1. **Vite (官方推荐)**
```bash
# 创建基础 Vue 3 项目
{{ $command }} create vite@latest my-project --template vue

# 创建 Vue 3 + TypeScript 项目
{{ $command }} create vite@latest my-project --template vue-ts

# 创建 Vue 3 + Pinia + Vue Router 项目
{{ $command }} create vue@latest my-project
```

### 2. **Vue CLI (传统方式)**
```bash
# 全局安装 CLI
{{ $command }} install -g @vue/cli

# 创建项目 (需手动选择 Vue 3)
vue create my-project

# 直接创建 Vue 3 项目
vue create my-project --preset vite
```

### 3. **Nuxt 3 (SSR/SSG)**
```bash
# 创建基础 Nuxt 3 项目
{{ $command }} create nuxt@latest my-project

# 创建带 TypeScript 的 Nuxt 3 项目
{{ $command }} create nuxt@latest my-project --ts

# 使用官方启动模板
git clone https://github.com/nuxt/starter.git my-project
cd my-project
{{ $command }} install
```

### 4. **Quasar Framework**
```bash
# 全局安装 CLI
{{ $command }} install -g @quasar/cli

# 创建项目 (交互式选择 Vue 3)
quasar create my-project

# 直接创建 Vue 3 + Vite 项目
quasar create my-project --branch next --kit vite
```

### 5. **Vitepress (文档站点)**
```bash
# 快速初始化
{{ $command }} create vitepress@latest

# 完整创建流程
mkdir my-docs && cd my-docs
{{ $command }} init
{{ $command }} install
```

### 6. **Vue Umi (企业级)**
```bash
# 创建项目
{{ $command }} create umi@4 my-project

# 选择 Vue 3 模板
? Pick template › vue
? Pick vue version › vue@3
```

### 7. **手动创建 (CDN 引入)**
```html
<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
  <div id="app">{{ message }}</div>

  <script>
    const { createApp, ref } = Vue
    
    createApp({
      setup() {
        const message = ref('Hello Vue 3!')
        return { message }
      }
    }).mount('#app')
  </script>
</body>
</html>
```

### 8. **企业级模板**
```bash
# Vue 3 + Vite + Electron
{{ $command }} create electron-vite my-project --template vue

# Vue 3 + Vite + Capacitor (跨平台)
{{ $command }} create vue-capacitor@latest my-project

# Vue 3 + Vite + Micro Frontends
git clone https://github.com/vue-microfrontends/root-config
```

### 9. **Monorepo 项目**
```bash
# 使用 pnpm workspace (推荐)
mkdir my-monorepo && cd my-monorepo
echo "packages/*" > .npmrc
{{ $command }} init
mkdir packages

# 创建子项目
cd packages
{{ $command }} create vite app1 --template vue-ts
{{ $command }} create vite app2 --template vue-ts
```

### 10. **自定义模板**
```bash
# 使用官方 create-vue
{{ $command }} create vue@latest my-project

# 选择特性:
√ Add TypeScript? ... Yes
√ Add JSX Support? ... No
√ Add Vue Router? ... Yes
√ Add Pinia? ... Yes
√ Add Vitest? ... No
√ Add ESLint? ... Yes
```

### 11. **微前端架构**
```bash
# 基于 qiankun
vue create main-app   # 主应用
vue create sub-app    # 子应用

# 配置主应用
npm install qiankun -S
```

### 创建后通用步骤
```bash
# 进入项目目录
cd my-project

# 安装依赖
{{ $command }} install

# 启动开发服务器
{{ $command }} run dev

# 生产构建
{{ $command }} run build
```

### 框架特性对比

| 工具        | 优点                          | 适用场景               |
|-------------|-------------------------------|-----------------------|
| **Vite**    | 极速 HMR，轻量                | SPA/组件库           |
| **Nuxt 3**  | SSR/SSG 开箱即用              | 内容型网站/SEO 优化  |
| **Quasar**  | 跨平台 (Web/iOS/Android)      | 企业级应用/PWA       |
| **Vue CLI** | 成熟生态，稳定                | 传统项目迁移         |
| **Vitepress** | Markdown 优先                | 技术文档/博客        |

### 自定义模板参考
```js
// vite.config.js 扩展配置
export default defineConfig({
  plugins: [
    vue({
      template: {
        compilerOptions: {
          // 自定义元素配置
          isCustomElement: tag => tag.startsWith('ion-')
        }
      }
    })
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
    }
  }
})
```

### 升级现有项目到 Vue 3
```bash
# 使用官方迁移工具
npx @vue/compat@latest

# 逐步迁移步骤:
1. 安装 Vue 3: {{ $command }} install vue@3
2. 更新依赖: vue-router@4, vuex@4
3. 运行迁移工具
4. 解决兼容性警告
```

### 创建自定义 CLI
```bash
# 初始化 CLI 项目
mkdir vue-cli-plugin-demo && cd $_
npm init -y

# 创建模板文件
mkdir generator/templates/src
touch generator/index.js
```

```js
// generator/index.js
module.exports = (api) => {
  api.extendPackage({
    dependencies: {
      "axios": "^1.0.0"
    }
  })
  
  api.render('./template')
}
```

使用：`vue create --preset ./vue-cli-plugin-demo my-project`

### 常见问题解决
**1. 旧浏览器兼容问题**  
```bash
# 安装 legacy 插件
{{ $command }} install @vitejs/plugin-legacy

# vite.config.js
import legacy from '@vitejs/plugin-legacy'

export default {
  plugins: [
    legacy({
      targets: ['defaults', 'not IE 11']
    })
  ]
}
```

**2. 端口冲突**  
```bash
# package.json
"scripts": {
  "dev": "vite --port 3000"
}
```

**3. 全局样式注入**  
```js
// main.js
import './styles/global.less'
```

**4. 代理配置**  
```js
// vite.config.js
export default {
  server: {
    proxy: {
      '/api': {
        target: 'http://localhost:8080',
        changeOrigin: true
      }
    }
  }
}
```

根据项目需求选择合适的创建方式，Vite + Vue 3 组合适合大多数现代应用，Nuxt 3 适合内容驱动型网站，Quasar 适合跨平台应用开发。
## 插件配置
unplugin-vue-components是一个Vue组件自动导入的插件。它支持Vue 2和Vue 3,并且支持多种构建工具如Vite、Webpack、Rspack等。它可以自动导入组件,无需手动导入和注册组件,并且支持按需加载,只注册使用到的组件。它还提供了对流行UI库的内置支持,如Ant Design Vue、Element Plus等。
<!-- `unplugin-vue-components` 是一个强大的 Vue 组件自动导入插件，支持 Vite、Webpack、Rollup 等构建工具。它能自动导入 Vue 组件，无需手动编写 import 语句，大幅提升开发效率。 -->
> https://github.com/unjs/unplugin?tab=readme-ov-file
---

### 核心功能
1. **自动导入组件** - 在模板中使用的组件自动导入
2. **按需加载** - 只打包实际使用的组件
3. **UI 库支持** - 内置 Element Plus、Ant Design Vue 等流行库的解析器
4. **类型支持** - 自动生成 TypeScript 类型声明
5. **自定义组件** - 支持项目本地组件自动导入

---

### 安装
```bash
npm install unplugin-vue-components -D
# 或
yarn add unplugin-vue-components -D
# 或
pnpm add unplugin-vue-components -D
```

---

### 基础配置 (Vite)
```js
// vite.config.js
import Components from 'unplugin-vue-components/vite'

export default {
  plugins: [
    Components({ /* 配置选项 */ })
  ]
}
```

---

### 完整配置示例
```js
// vite.config.js
import Components from 'unplugin-vue-components/vite'
import {
  ElementPlusResolver,
  AntDesignVueResolver,
  VantResolver,
  HeadlessUiResolver,
  NaiveUiResolver
} from 'unplugin-vue-components/resolvers'

export default {
  plugins: [
    Components({
      // 自定义组件目录 (默认 'src/components')
      dirs: ['src/components', 'src/layouts'],
      
      // 组件文件扩展名
      extensions: ['vue', 'tsx'],
      
      // 是否包含子目录
      deep: true,
      
      // 解析器配置 (UI 库)
      resolvers: [
        ElementPlusResolver({
          importStyle: 'sass', // 自动导入样式
          ssr: true,          // SSR 支持
        }),
        AntDesignVueResolver({
          resolveIcons: true // 自动解析图标
        }),
        VantResolver(),
        NaiveUiResolver()
      ],
      
      // 生成类型声明文件
      dts: 'src/components.d.ts',
      
      // 目录别名
      directoryAsNamespace: true,
      
      // 排除组件
      exclude: [/[\\/]node_modules[\\/]/, /[\\/]\.git[\\/]/],
      
      // 自定义转换器
      transformer: 'vue3', // 'vue2' | 'vue3'
      
      // 全局类型定义
      types: [{
        from: 'vue-router',
        names: ['RouterLink', 'RouterView'],
      }]
    })
  ]
}
```

---

### 支持的 UI 库解析器
| UI 库 | 解析器 | 额外配置 |
|-------|--------|----------|
| **Element Plus** | `ElementPlusResolver` | `importStyle: 'css' \| 'sass'` |
| **Ant Design Vue** | `AntDesignVueResolver` | `importStyle: true` |
| **Vant** | `VantResolver` | `importStyle: true` |
| **Naive UI** | `NaiveUiResolver` | - |
| **Headless UI** | `HeadlessUiResolver` | - |
| **Quasar** | `QuasarResolver` | - |
| **Ionic** | `IonicResolver` | - |

---

### 本地组件自动导入
```js
Components({
  // 自动导入 src/components 下的所有组件
  dirs: ['src/components'],
  
  // 组件命名方式 (默认 kebab-case)
  directoryAsNamespace: true,
  
  // 文件名转换规则
  filePatterns: ['**/*.vue'],
  
  // 全局组件类型
  globalComponentsDeclaration: true
})
```

在模板中直接使用：
```vue
<!-- 自动导入 src/components/Button/BaseButton.vue -->
<base-button>Click</base-button>
```

---

### 自定义解析器
```js
Components({
  resolvers: [
    // 自定义组件解析
    (name) => {
      if (name.startsWith('My'))
        return { 
          importName: name.slice(2), 
          path: `my-components/${name}`
        }
    },
    
    // 第三方库解析
    (name) => {
      if (name === 'CustomCalendar')
        return { 
          importName: 'Calendar', 
          path: 'awesome-calendar' 
        }
    }
  ]
})
```

---

### 图标自动导入
```js
import IconsResolver from 'unplugin-icons/resolver'

Components({
  resolvers: [
    // 自动导入图标 (需要安装 unplugin-icons)
    IconsResolver({
      prefix: 'i', // 图标组件前缀 <i-mdi-account />
      enabledCollections: ['mdi', 'fa']
    })
  ]
})
```

---

### 类型声明生成
设置 `dts: true` 自动生成类型声明文件：
```js
Components({
  dts: 'src/components.d.ts' // 生成位置
})
```

生成文件示例：
```ts
// components.d.ts
declare module 'vue' {
  export interface GlobalComponents {
    BaseButton: typeof import('./components/BaseButton.vue')['default']
    RouterLink: typeof import('vue-router')['RouterLink']
    // ...
  }
}
```

---

### 与 unplugin-auto-import 配合
```js
import AutoImport from 'unplugin-auto-import/vite'
import Components from 'unplugin-vue-components/vite'

export default {
  plugins: [
    AutoImport({
      imports: ['vue', 'vue-router', 'pinia'],
      dts: 'src/auto-imports.d.ts'
    }),
    Components({
      dts: 'src/components.d.ts'
    })
  ]
}
```

---

### 框架集成示例

#### Nuxt 3
```ts
// nuxt.config.ts
export default defineNuxtConfig({
  modules: [
    'unplugin-vue-components/nuxt',
  ],
  components: {
    dirs: ['~/components']
  }
})
```

#### Vue CLI
```js
// vue.config.js
const Components = require('unplugin-vue-components/webpack')

module.exports = {
  configureWebpack: {
    plugins: [
      Components({ /* 配置选项 */ })
    ]
  }
}
```

---

### 性能优化
1. **按需加载图标**：
```js
IconsResolver({
  customCollections: ['my-icons']
})
```

2. **排除未使用组件**：
```js
Components({
  resolvers: [
    ElementPlusResolver({ 
      exclude: /^ElBreadcrumb/ 
    })
  ]
})
```

3. **SSR 优化**：
```js
Components({
  resolvers: [
    ElementPlusResolver({ ssr: true })
  ],
  ssr: true
})
```

---

### 常见问题解决

**问题1：组件重复导入**
```js
// 关闭 Vue 默认的组件自动注册
Components({
  include: [/\.vue$/, /\.vue\?vue/],
  exclude: [/[\\/]node_modules[\\/]/]
})
```

**问题2：样式丢失**
```js
// 确保启用样式自动导入
ElementPlusResolver({
  importStyle: 'sass'
})
```

**问题3：TypeScript 类型错误**
```json
// tsconfig.json
{
  "include": [
    "src/components.d.ts",
    "src/**/*.vue"
  ]
}
```

**问题4：自定义组件未识别**
```js
Components({
  dirs: ['src/components', 'src/layouts'],
  deep: true,
  directoryAsNamespace: true
})
```

---

### 高级用法

#### 动态组件支持
```js
Components({
  resolvers: [
    (name) => {
      if (name === 'DynamicComponent')
        return {
          importName: 'defineAsyncComponent',
          path: 'vue',
          sideEffects: 'dynamic-component.css'
        }
    }
  ]
})
```

#### 指令自动导入
```js
Components({
  resolvers: [
    {
      type: 'directive',
      resolve: (name) => {
        if (name === 'focus') 
          return { 
            name: 'VFocus', 
            from: 'v-focus-directive' 
          }
      }
    }
  ]
})
```

#### 虚拟组件
```js
Components({
  resolvers: [
    (name) => {
      if (name === 'VirtualList') 
        return { 
          importName: 'VirtualList', 
          path: 'vue-virtual-scroller',
          virtual: true 
        }
    }
  ]
})
```

---

### 最佳实践
1. **项目结构**：
```
src/
├─ components/
│  ├─ ui/         # UI 组件
│  ├─ layout/     # 布局组件
│  └─ icons/      # 图标组件
├─ composables/   # 组合式函数
└─ views/         # 页面组件
```

2. **命名规范**：
- 基础组件：`BaseButton.vue`
- 功能组件：`AppSearchBar.vue`
- 布局组件：`MainLayout.vue`

3. **配置分离**：
```js
// build/componentes.js
import { defineConfig } from 'unplugin-vue-components'

export default defineConfig({
  resolvers: [/* ... */],
  dts: 'src/components.d.ts'
})

// vite.config.js
import componentsConfig from './build/components'

export default {
  plugins: [
    Components(componentsConfig)
  ]
}
```

`unplugin-vue-components` 通过自动化组件导入，显著减少样板代码，提升开发体验。结合 UI 库解析器和类型生成功能，是现代 Vue 3 项目的必备工具。
```bash
// https://github.com/unplugin/unplugin-vue-components
npm i unplugin-vue-components -D
```
::: code-group

```ts [Vite]
// vite.config.ts
import Components from 'unplugin-vue-components/vite'

export default defineConfig({
  plugins: [
    Components({ /* options */ }),
  ],
})
```

```js [Rollup]
// rollup.config.js
import Components from 'unplugin-vue-components/rollup'

export default {
  plugins: [
    Components({ /* options */ }),
  ],
}
```
```js [Webpack]
// webpack.config.js
module.exports = {
  /* ... */
  plugins: [
    require('unplugin-vue-components/webpack')({ /* options */ }),
  ],
}
```
```js [Rspack]
// rspack.config.js
module.exports = {
  /* ... */
  plugins: [
    require('unplugin-vue-components/rspack')({ /* options */ }),
  ],
}
```
```js [Esbuild]
// esbuild.config.js
import { build } from 'esbuild'
import Components from 'unplugin-vue-components/esbuild'

build({
  /* ... */
  plugins: [
    Components({
      /* options */
    }),
  ],
})
```
```js [Vue CLI]
// vue.config.js
module.exports = {
  /* ... */
  plugins: [
    require('unplugin-vue-components/webpack')({ /* options */ }),
  ],
}
```
```js [Quasar]
// vite.config.js [Vite]
import Components from 'unplugin-vue-components/vite'
import { defineConfig } from 'vite'

export default defineConfig({
  plugins: [
    Components({ /* options */ })
  ]
})
// quasar.config.js
export default defineConfig(() => {
  return {
    build: {
      vitePlugins: [
        ['unplugin-vue-components/vite', { /* options */ }],
      ]
    },
  }
})
```
```js [Nuxt]
// https://github.com/nuxt/components
@nuxt/components
export default {
  buildModules: ['@nuxt/components', 'awesome-ui/nuxt']
}
```
:::
## 组件配置
> https://github.com/unplugin/unplugin-vue-components?tab=readme-ov-file#migrate-from-vite-plugin-components
### 内置解析器支持
- **Ant Design Vue** (v2/v3)
- **Element UI** (Vue 2)
- **Element Plus** (Vue 3)
- **Naive UI**
- **Vant** (v3/v4)
- **Headless UI** (通过 @headlessui/vue)
- **PrimeVue**
- **Quasar**
- **Varlet UI**
- **Vuetify** (Vue 3)

### 社区维护解析器
- **Arco Design Vue**
- **TDesign** (腾讯设计体系)
- **View UI** (原 iView)
- **VueUse Components**
- **Element Pro**
> unplugin-vue-components 内置支持以下主流 UI 库的自动导入解析器：

```artifact
id: ui-libs
name: 支持库列表
type: markdown
content: |-
  ### 内置解析器支持
  - **Ant Design Vue** (v2/v3)
  - **Element UI** (Vue 2)
  - **Element Plus** (Vue 3)
  - **Naive UI**
  - **Vant** (v3/v4)
  - **Headless UI** (通过 @headlessui/vue)
  - **PrimeVue**
  - **Quasar**
  - **Varlet UI**
  - **Vuetify** (Vue 3)

  ### 社区维护解析器
  - **Arco Design Vue**
  - **TDesign** (腾讯设计体系)
  - **View UI** (原 iView)
  - **VueUse Components**
  - **Element Pro**
```

#### 扩展说明：
1. **按需加载机制**  
通过 `Components({ resolvers: [...] })` 配置，可同时启用多个解析器。例如同时支持 Element Plus 和 Naive UI：
```typescript
Components({
  resolvers: [
    ElementPlusResolver(),
    NaiveUiResolver()
  ]
})
```

2. **样式自动导入**  
部分 UI 库（如 Element Plus）需要配合 [unplugin-auto-import](https://github.com/antfu/unplugin-auto-import) 实现完整自动导入：
```typescript
AutoImport({
  imports: ['element-plus']
})
```

3. **自定义解析器**  
可通过实现 `ComponentResolver` 接口支持任意组件库：
```typescript
const CustomResolver = (name: string) => {
  if (name.startsWith('MyLib'))
    return { importName: name.slice(5), path: 'my-custom-lib' }
}
```

#### 典型配置示例：
````typescript
// vite.config.ts
import Components from 'unplugin-vue-components/vite'
import { ElementPlusResolver, AntDesignVueResolver } from 'unplugin-vue-components/resolvers'

export default defineConfig({
  plugins: [
    Components({
      resolvers: [
        ElementPlusResolver({ importStyle: 'sass' }),
        AntDesignVueResolver({ resolveIcons: true })
      ],
      dts: true // 生成类型声明文件
    })
  ]
})
````

该插件通过动态解析机制，在编译时自动生成按需导入语句，最终产物中仅包含实际使用的组件代码，可有效优化打包体积（典型场景可减少 30%-60% 的 bundle size）。