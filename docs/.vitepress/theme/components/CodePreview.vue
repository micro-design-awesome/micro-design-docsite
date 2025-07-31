<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-31 12:54:05
 * @LastEditTime: 2025-07-31 17:00:03
 * @LastEditors: xunzhaotech
-->
<template>
  <div class="theme-container">
    <!-- ... -->
    <main class="content">
      <Transition name="fade" mode="out-in">
        <Content />
      </Transition>
    </main>
    <!-- ... -->
  </div>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>