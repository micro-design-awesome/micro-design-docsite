# Vue 引用组件

## 基础用法

基础的按钮用法。

<demo-block>
  <md-button>默认按钮</md-button>
  <md-button type="primary">主要按钮</md-button>
  <md-button type="success">成功按钮</md-button>
  <md-button type="info">信息按钮</md-button>
  <md-button type="warning">警告按钮</md-button>
  <md-button type="danger">危险按钮</md-button>
</demo-block>

## Attributes

| 参数    | 说明         | 类型     | 可选值       | 默认值 |
| ------- | ------------ | -------- | ------------ | ------ |
| visible | 是否展示     | boolean  | true / false | normal |
| ok      | 确认触发函数 | function | ()=>{}       | —      |
| cancel  | 取消触发函数 | function | ()=>{}       | —      |

