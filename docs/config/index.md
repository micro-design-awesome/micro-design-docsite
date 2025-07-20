<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: xunzhaotech
 * @LastEditTime: 2024-04-28 21:51:04
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# 环境配置
## 准备工作
MicroDesign 系列项目依赖于前端工程化进行开发，所以依赖于 npm 管理安装此模块，也正式因为如此，您需要准备 nodejs 进行安装，如果您的电脑已经安装过了 nodejs ，那么您可以直接往下继续看，若没有，这里推荐您安装并使用一个多 nodejs 版本管理工具 nvm（当然也有其他的版本管理工具，这里只是作者推荐在用的一个），方便以后用于管理多个 nodejs 可以自由切换，或者您也可以只安装 nodejs 。
## 背景介绍

当谈到Node.js、NVM（Node Version Manager）和NRM（Npm Registry Manager）时，这些是在Node.js开发中非常重要的工具和概念。以下是对它们的简要介绍：

**Node.js**

Node.js是一个基于Chrome V8引擎的JavaScript运行时环境，用于构建[服务器](https://cloud.tencent.com/product/cvm?from_column=20065&from=20065)端和网络应用程序。它允许您使用JavaScript语言在服务器端编写高性能的应用程序，而不仅仅是在浏览器中执行JavaScript。Node.js具有非阻塞、事件驱动的特性，适用于构建高吞吐量的实时应用程序，如Web服务器、API服务器、聊天应用程序等。Node.js还有一个强大的包管理器NPM，用于管理依赖项和模块。

**NVM（Node Version Manager）：**

NVM是一个用于管理Node.js版本的工具。它允许您在同一台计算机上同时安装多个Node.js版本，并且能够轻松切换这些版本以适应不同的项目需求。NVM在开发中尤其有用，因为不同的项目可能需要不同版本的Node.js来运行。通过NVM，您可以在项目之间自由切换Node.js版本，而无需重新安装或卸载。

**NRM（Npm Registry Manager）：**

NRM是一个用于管理Npm镜像源的工具。Npm是Node.js的包管理器，用于安装、发布和管理JavaScript包。Npm的默认镜像源可能在某些地区或网络环境下访问较慢。NRM允许您轻松地切换Npm镜像源，以加速包的下载和安装。这对于加快Node.js项目的开发速度非常重要，特别是当您依赖大量第三方包时。

**总结：**

- Node.js是一个强大的JavaScript运行时环境，用于构建服务器端和网络应用程序。
- NVM是用于管理Node.js版本的工具，使开发者能够轻松切换不同版本的Node.js。
- NRM是用于管理Npm镜像源的工具，用于加速包的下载和安装。

这些工具在Node.js开发中起着关键作用，使开发者能够更有效地管理依赖和版本，提高开发效率。

关于安装 nodejs 和 nvm 的安装，这里就不再赘述了，相关的安装教程可以在百度可以搜索到。

- [nodejs 官网](https://nodejs.org/zh-cn)
- [nvm 官网](https://github.com/coreybutler/nvm-windows/releases)

## 环境要求        

- [OpenJDK 17 LTS](https://github.com/openjdk/jdk)
- [Node.js 20 LTS](https://nodejs.org/)
- [pnpm 9](https://pnpm.io/)
- [IntelliJ IDEA](https://www.jetbrains.com/idea/)
- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)（可选）
## 技术栈 
- 编程语言：TypeScript 5.x + JavaScript
- 构建工具：Vite 5.x
- 前端框架：Vue 3.x
- 路由工具：Vue Router 4.x
- 状态管理：Vuex 4.x
- UI 框架：Element Plus
- CSS 预编译：Stylus / Sass/ Less
- HTTP 工具：Axios
- Git Hook 工具：husky + lint-staged
- 代码规范：EditorConfig + Prettier + ESLint + Airbnb JavaScript Style Guide
- 提交规范：Commitizen + Commitlint
- 单元测试：vue-test-utils +  jest + vue-jest + ts-jest
- 自动部署：GitHub Actions