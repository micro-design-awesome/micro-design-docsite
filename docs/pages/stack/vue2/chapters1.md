<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2023-03-19 07:44:06
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2023-03-19 07:55:53
 * @FilePath: \micro-design-docs\docs\pages\stack\vue2\chapter1.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# 第1节 Vue3中获取proxy包裹的数据
## 第一种：通过vue中的响应式对象可使用toRaw()方法获取原始对象 
```vue
import { toRaw } from 'vue'
const trueUserList=toRaw(userList) 
```
## 第二种：通过json序列化 
```
JSON.parse(JSON.stringify(userList))
```