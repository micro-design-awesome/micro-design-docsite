<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2025-07-12 17:23:51
 * @LastEditTime: 2025-07-31 16:05:43
 * @LastEditors: xunzhaotech
-->
在 uni-app 中，页面跳转是常见的交互需求，你提到的 `uni.navigateTo`、`uni.redirectTo`、`uni.reLaunch`、`uni.switchTab` 是四种核心跳转方法，它们各自有不同的使用场景和特性：

1. **`uni.navigateTo`**
   - 最常用的跳转方式，保留当前页面，跳转到新页面（入栈操作）
   - 新页面顶部会有返回按钮，可返回到上一级页面
   - 限制：不能跳转到 tabBar 页面
   ```javascript
   // 示例
   uni.navigateTo({
     url: '/pages/detail/detail?id=123' // 可携带参数
   });
   ```

2. **`uni.redirectTo`**
   - 关闭当前页面，跳转到新页面（替换当前页面，不入栈）
   - 新页面没有返回当前页面的按钮（因为原页面已被销毁）
   - 限制：同样不能跳转到 tabBar 页面
   ```javascript
   // 示例
   uni.redirectTo({
     url: '/pages/login/login'
   });
   ```

3. **`uni.reLaunch`**
   - 关闭所有页面，打开新页面（清空页面栈）
   - 可跳转到任意页面（包括 tabBar 页面）
   - 适用于需要完全重置页面状态的场景，如退出登录后跳转首页
   ```javascript
   // 示例
   uni.reLaunch({
     url: '/pages/index/index'
   });
   ```

4. **`uni.switchTab`**
   - 专门用于跳转到 tabBar 页面，并关闭其他所有非 tabBar 页面
   - url 只能是 tabBar 配置项中定义的页面路径
   - 跳转时会保留 tabBar 状态（如选中项）
   ```javascript
   // 示例（需在 pages.json 中配置 tabBar）
   uni.switchTab({
     url: '/pages/home/home'
   });
   ```

**补充说明**：
- 页面返回使用 `uni.navigateBack`，通过 `delta` 参数指定返回层级
- 跳转路径需在 `pages.json` 中注册
- 携带参数通过 url 拼接（`?key=value`），接收方在 `onLoad` 生命周期的参数中获取
- 对于频繁跳转的场景，可结合路由封装简化代码，统一处理路径和参数传递