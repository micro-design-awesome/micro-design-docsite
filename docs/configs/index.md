<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 12:40:12
 * @LastEditors: xunzhaotech
 * @LastEditTime: 2024-04-28 22:34:15
 * @FilePath: \micro-design-docs\docs\configs\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# 前端环境配置
## 环境要求
安装NodeJs：版本要求14.16.1及以上， 17.0以下。
## NPM源配置
- npm ---------- https://registry.npmjs.org/
- yarn --------- https://registry.yarnpkg.com/
- tencent ------ https://mirrors.cloud.tencent.com/npm/
- cnpm --------- https://r.cnpmjs.org/
- taobao ------- https://registry.npmmirror.com/
- npmMirror ---- https://skimdb.npmjs.com/registry/
- npm 官方原始镜像网址是：https://registry.npmjs.org/
- 淘宝最新 NPM 镜像：https://registry.npmmirror.com
- 阿里云 NPM 镜像：https://npm.aliyun.com
- 腾讯云 NPM 镜像：https://mirrors.cloud.tencent.com/npm/
- 华为云 NPM 镜像：https://mirrors.huaweicloud.com/repository/npm/
- 网易 NPM 镜像：https://mirrors.163.com/npm/
- 中科院大学开源镜像站：http://mirrors.ustc.edu.cn/
- 清华大学开源镜像站：https://mirrors.tuna.tsinghua.edu.cn/
## 快速开始
### 安装
```sh
npm install micro-design-ui -D
```
<!-- ## 配置相关
## 部署相关 -->
## 详细流程
作为一名前端程序员，运营一个关于前端最新技术推文的公众号是一个很好的方式，来分享知识、交流想法，并与社区保持联系。以下是一些建议，帮助你更好地管理和发展你的公众号：

1. **定期更新**：保持一定的更新频率，比如每周或每两周发布一篇关于前端技术的文章。

2. **精选内容**：分享你认为有趣、有价值或前沿的前端技术，如React, Vue, Angular的新特性，或是WebAssembly, GraphQL等技术的最新动态。

3. **教程和指南**：提供一些实用的教程或最佳实践指南，帮助读者解决实际问题。

4. **行业新闻**：关注并分享前端领域的重大新闻、会议或技术更新。

5. **代码示例**：提供实际的代码示例，让读者可以更直观地理解某个概念或技术。

6. **互动交流**：鼓励读者在文章下留言，提问或分享自己的见解，增加互动性。

7. **工具和资源**：推荐一些有用的工具、库或资源，帮助前端开发者提高工作效率。

8. **职业发展**：提供前端职业发展的建议，如面试技巧、简历编写等。

9. **案例研究**：分享一些成功的前端项目案例，分析其技术实现和设计思路。

10. **技术比较**：对不同的前端技术或框架进行比较，帮助读者做出选择。

11. **错误和解决方案**：分享常见的前端开发问题以及你是如何解决这些问题的。

12. **趋势分析**：定期分析前端技术的发展趋势，预测未来的技术走向。

13. **个人见解**：提供你对前端技术的看法和见解，增加文章的个性化和深度。

14. **SEO优化**：确保你的文章对搜索引擎友好，使用合适的关键词和标签。

15. **社交媒体**：在其他社交媒体平台上宣传你的公众号，吸引更多的读者。

16. **反馈和改进**：根据读者的反馈不断改进你的内容和写作风格。

17. **合作和访谈**：与其他前端开发者或专家合作，进行访谈或共同创作内容。

18. **安全性**：讨论前端安全问题，如如何防止XSS和CSRF攻击。

19. **性能优化**：分享前端性能优化的技巧，如懒加载、代码分割等。

20. **可访问性**：强调网站可访问性的重要性，并提供实现方法。

通过这些方法，你可以建立一个有价值、有吸引力的前端技术公众号，为前端社区做出贡献。
## 配置说明
一个项目一般会有**开发版本、测试版本、灰度版本和线上版本**，每个版本会对应相同或不同的数据库、API地址。为了方便管理，我们通常做成配置文件的形式，根据不同的环境，加载不同的文件。如果手动修改代码中加载配置文件的路径也可以，但是太麻烦。
- 开发版本
- 测试版本
- 灰度版本
- 线上版本
## 实现原来
采用nodejs顶层对象中的process.env（进程环境，返回一个包含用户环境信息的对象。）属性，根据各个环境的配置文件区分和切换环境。
## 具体操作（以vue项目为例））
1. 安装依赖：`npm install process`
2. 在根目录新增五个文件(根据自身情况增减)， .env 和 .env.dev 和 .env.pre和 .env.prod和 .env.sit和 .env.uat，分别为默认配置、本地开发配置、灰度配置、生产配置、测试配置1、测试配置2，(ps: VUE_APP是统一标志，后面的拓展名可以任取)
> .env
```
VUE_APP_TITLE='dev'
```
>  .dev
```
NODE_ENV = 'development'
VUE_APP_TITLE = 'development'
 
/*请求接口地址*/
VUE_APP_INTERFACE_URL="https://xxx"
 
/*首页地址*/
VUE_APP_URL="http://xxx"
 
/*proxy代理地址*/
VUE_APP_PROXYURL='http://xxx'
        .prod
 
NODE_ENV = production
VUE_APP_TITLE = 'prod'
 
/*请求接口地址*/
VUE_APP_INTERFACE_URL="https://xxx"
 
/*首页地址*/
VUE_APP_URL="http://xxx"
```
3. 设置项目启动时默认的环境
> 只需要在项目启动命令后面修改需要的环境就行，例如我这是npm run dev，把–mode dev改成–mode uat就行了
## Script执行命令配置
```JSON
package.json
{
    "scripts": {
      "dev": "vue-cli-service serve --mode dev",
      "build": "vue-cli-service build --mode dev",
      "lint": "vue-cli-service lint",
      "build-sit": "vue-cli-service build --mode sit",
      "build-uat": "vue-cli-service build --mode uat",
      "build-pre": "vue-cli-service build --mode pre",
      "docs:dev": "vitepress dev . --open",
      "docs:build": "vitepress build .",
      "docs:serve": "vitepress serve ."
      },
}
```
4. 查看环境是否配置成功
> 在main.js里打印当前环境，输出就成功了
```
console.log(process.env.NODE_NEV)
```
## TypeScript学习资料
- [TypeScript官网](https://www.typescriptlang.org/)
- [深入理解 TypeScript](https://jkchao.github.io/typescript-book-chinese/)
- [TypeScript 使用指南手册](http://www.patrickzhong.com/TypeScript/PREFACE.html)
- [TypeScript 入门到进阶系统教程](https://ts.yayujs.com/)
## Vue知识进阶
- [KeepAlive定义](https://github1s.com/vuejs/core)
- [缓存定义](https://github1s.com/vuejs/core/blob/HEAD/packages/runtime-core/src/components/KeepAlive.ts#L102-L103)
- [缓存组件](https://github1s.com/vuejs/core/blob/HEAD/packages/runtime-core/src/components/KeepAlive.ts#L215-L216)
- [获取缓存组件](https://github1s.com/vuejs/core/blob/HEAD/packages/runtime-core/src/components/KeepAlive.ts#L241-L242)
- 
## 文档系统
- [VitePress](https://vitepress.vuejs.org/)
- [VitePress中文网](https://vitejs.cn/vitepress/)
## 包管理工具
- [pnpm](https://pnpm.io/zh/)
## 打包工具
- [Vite中文网](https://vitejs.cn/)
## 框架工具
- [Ant Design 5.0](https://ant.design/)
- [Ant Design Vue](https://www.antdv.com/)
- [Surely Form](https://form.antdv.com/)
- [Surely Table](https://surely.cool/)
# 后端学习
## Java
- [advanced-java](https://github.com/doocs/advanced-java?utm_source=gold_browser_extension)
- [spring-boot-demo](https://github.com/xkcoding/spring-boot-demo)
- [MyBatisCodeHelper-Pro](https://gejun123456.github.io/MyBatisCodeHelper-Pro/#/?id=mybatiscodehelper-pro)
- [java-eight-part](https://github.com/CoderLeixiaoshuai/java-eight-part?utm_source=gold_browser_extension)