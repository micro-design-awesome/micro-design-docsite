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