# Vue Script

## 基础用法

基础的按钮用法。

:::demo

```vue
<template>
  <input class="input" type="text" v-model="input"/>
  <md-button type="primary" @click="onSubmit">提交</md-button>
  <div style="margin-top: 16px">输出内容：{{ content }}</div>
</template>

<script>
import { ref, defineComponent } from 'vue'

export default defineComponent({
  name: 'InputDemo',
  setup() {
    const input = ref()
    const content = ref()

    function onSubmit() {
      content.value = input.value
    }

    return { input, content, onSubmit }
  }
})
</script>

<style lang="less" scoped>
.input {
  border: 1px solid #ebebeb;
  border-radius: 4px;
  padding: 14px;
  width: 300px;
  font-size: 16px;
  margin-right: 16px;
}
</style>
```

:::

## Setup TypeScript 用法

setup typescript 用法。

:::demo

```vue
<template>
  <input class="input" type="text" v-model="input"/>
  <md-button type="primary" @click="onSubmit">提交</md-button>
  <div style="margin-top: 16px">输出内容：{{ content }}</div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

interface IObject {
  [k: string]: any
}

const input = ref<any>()
const content = ref<any>()

function onSubmit() {
  content.value = input.value
}
</script>

<style lang="less" scoped>
.input {
  border: 1px solid #ebebeb;
  border-radius: 4px;
  padding: 14px;
  width: 300px;
  font-size: 16px;
  margin-right: 16px;
}
</style>
```

:::


## Tsx 用法

tsx 用法。

:::demo

```tsx
import { ref, defineComponent } from 'vue'
import '@alias/styles/index.css'

interface IObject {
  [k: string]: any
}

export default defineComponent({
  setup() {
    const input = ref<any>()
    const content = ref<any>()
    
    function onSubmit() {
      content.value = input.value
    }

    return () => (
    <>
      <input class="input input-tsx" type="text" v-model={input.value} />
      <md-button type="primary" onClick={onSubmit}>提交</md-button>
      <div style="margin-top: 16px">输出内容：{ content.value }</div>
    </>)
  }
})
```

:::
