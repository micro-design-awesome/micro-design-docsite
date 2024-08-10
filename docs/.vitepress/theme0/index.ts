/*
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-01-01 19:33:00
 * @LastEditTime: 2024-01-06 16:28:12
 * @LastEditors: xunzhaotech
 */
import { h, App } from 'vue'
import { useData } from 'vitepress'
import Theme from 'vitepress/theme'
export default Object.assign({}, Theme, {
    Layout: () => {
      const props: Record<string, any> = {}
      // 获取 frontmatter
      const { frontmatter } = useData()
  
      /* 添加自定义 class */
      if (frontmatter.value?.layoutClass) {
        props.class = frontmatter.value.layoutClass
      }
  
      return h(Theme.Layout, props)
    },
    enhanceApp({ app }) {
      // register global components
      // app.component('MyGlobalComponent' /* ... */)
    }
  })