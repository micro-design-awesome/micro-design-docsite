/*
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-09-11 12:26:32
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2022-09-11 22:34:21
 * @FilePath: \micro-design-docs\docs\vite.config.ts
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
import { defineConfig } from 'vite'
import vueJsx from '@vitejs/plugin-vue-jsx'
import { VitePWA } from 'vite-plugin-pwa'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vueJsx(),
    VitePWA()
  ]
})