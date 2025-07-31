/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-31 20:37:20
 * @LastEditTime: 2025-07-31 20:37:20
 * @LastEditors: xunzhaotech
 */
import { defineConfig } from 'unocss'
import presetUno from '@unocss/preset-uno'
import presetAttributify from '@unocss/preset-attributify'
import presetIcons from '@unocss/preset-icons'

export default defineConfig({
  presets: [
    presetUno(),
    presetAttributify(),
    presetIcons({
      scale: 1.2,
      extraProperties: {
        'display': 'inline-block',
        'vertical-align': 'middle',
      }
    })
  ],
  theme: {
    colors: {
      primary: '#6366f1',
      secondary: '#10b981',
      accent: '#f59e0b'
    }
  },
  shortcuts: {
    'btn': 'px-4 py-2 rounded font-semibold transition',
    'btn-primary': 'btn bg-primary text-white hover:bg-primary-600',
    'card': 'bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6'
  }
})