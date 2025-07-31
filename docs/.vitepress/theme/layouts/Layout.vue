<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-31 12:03:30
 * @LastEditTime: 2025-07-31 15:54:58
 * @LastEditors: xunzhaotech
-->
<script setup>
import { useData } from 'vitepress'
import { ref, watchEffect } from 'vue'
const { page, frontmatter } = useData()
const isHome = ref(false)
watchEffect(() => {
  isHome.value = frontmatter.value.layout === 'home'
})
</script>
<template>
  <div class="theme-container">
    <!-- 导航栏 -->
    <NavBar v-if="!isHome" />
    <!-- 主内容 -->
    <main class="content">
      <Content />
    </main>
    
    <!-- 页脚 -->
    <Footer v-if="!isHome" />
  </div>
</template>
<style scoped>
.theme-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
.content {
  flex: 1;
  padding: 2rem 10%;
}
</style>