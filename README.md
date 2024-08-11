# Vitepress Demo

基于 [vitepress-theme-demoblock](https://github.com/xinlei3166/vitepress-theme-demoblock) 插件来实现 `Vue` 组件的支持。

- [x] Vue 组件

```js
<demo-block>
  <md-button>默认按钮</md-button>
  <md-button type="primary">主要按钮</md-button>
  <md-button type="success">成功按钮</md-button>
  <md-button type="info">信息按钮</md-button>
  <md-button type="warning">警告按钮</md-button>
  <md-button type="danger">危险按钮</md-button>
</demo-block>
```

![image](https://github.com/xinlei3166/vitepress-demo/assets/22881872/13820eb2-c0fb-4cd8-95d0-8431782bb6ac)


- [x] Vue 代码自动渲染并且显示对应 Code

:::demo
```vue
<template>
  <md-button>默认按钮</md-button>
  <md-button type="primary">主要按钮</md-button>
  <md-button type="success">成功按钮</md-button>
  <md-button type="info">信息按钮</md-button>
  <md-button type="warning">警告按钮</md-button>
  <md-button type="danger">危险按钮</md-button>
</template>
```
:::

![vitepress-demo-example](https://github.com/xinlei3166/vitepress-demo/assets/22881872/67638b21-c995-4870-b5e7-fbdc85eddfea)




