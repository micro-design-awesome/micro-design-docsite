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
