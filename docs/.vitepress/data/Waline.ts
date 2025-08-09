/*
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-08-09 12:00:48
 * @LastEditTime: 2025-08-09 12:03:31
 * @LastEditors: xunzhaotech
 */
import type { WalineData } from '@theojs/lumen'

export const Waline_Data: WalineData = {
  serverURL: 'https://waline.theojs.cn/.netlify/functions/comment',
  lang: 'zh-CN',
  noCopyright: true,
  // imageUploader: async (file) => {
  //   const formData = new FormData()
  //   formData.append('image', file)

  //   const { success, data, message } = await (
  //     await fetch(import.meta.env.VITE_IMGBB_URL, { method: 'POST', body: formData })
  //   ).json()

  //   if (success) return data.url
  //   throw new Error(`上传失败: ${message}`)
  // }
}