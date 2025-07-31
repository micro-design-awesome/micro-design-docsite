<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-31 12:06:15
 * @LastEditTime: 2025-07-31 12:07:26
 * @LastEditors: xunzhaotech
-->
<script setup>
import { useData } from 'vitepress'
import { ref, onMounted } from 'vue'
const { site } = useData()
const darkMode = ref(false)
onMounted(() => {
  // 检测系统主题
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches
  darkMode.value = prefersDark
  // 切换主题
  toggleTheme(prefersDark)
})
function toggleTheme(isDark) {
  document.documentElement.classList.toggle('dark', isDark)
}
</script>
<template>
  <nav class="navbar">
    <div class="container">
      <a href="/" class="logo">{{ site.title }}</a>
      <div class="nav-links">
        <a v-for="item in site.themeConfig.nav" :href="item.link" class="nav-link">{{ item.text }}</a>
      </div>
      <button @click="darkMode = !darkMode; toggleTheme(darkMode)" class="theme-toggle">
        {{ darkMode ? '🌙' : '☀️' }}
      </button>
    </div>
  </nav>
</template>
<style scoped>
.navbar {
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.8);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 1rem 10%;
  position: sticky;
  top: 0;
  z-index: 10;
}
.dark .navbar {
  background: rgba(0, 0, 0, 0.5);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.logo {
  font-weight: bold;
  font-size: 1.5rem;
  }
.nav-links {
  display: flex;
  gap: 1.5rem;
}
.nav-link {
  text-decoration: none;
  color: inherit;
}
.theme-toggle {
  background: transparent;
  border: none;
  cursor: pointer;
  font-size: 1.2rem;
}
</style>