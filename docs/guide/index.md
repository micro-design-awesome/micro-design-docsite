<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2025-07-20 21:24:41
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# 开发指南
MIcroDesign 系列项目依赖于前端工程化进行开发，所以依赖于 npm 管理安装此模块，也正式因为如此，您需要安装[Node.js](https://nodejs.org/zh-cn)，如果您的电脑已经安装过了 [Node.js](https://nodejs.org/zh-cn) ，那么您可以直接往下继续看，若没有，这里推荐您安装并使用一个多 [Node.js](https://nodejs.org/zh-cn) 版本管理工具 [nvm](https://github.com/nvm-sh/nvm)（Windows 下使用 [nvm-windows](https://github.com/coreybutler/nvm-windows)）（当然也有其他的版本管理工具，这里只是作者推荐在用的一个） [fnm](https://github.com/Schniz/fnm) 来管理[Node.js](https://nodejs.org/zh-cn) 版本 ，方便以后用于管理多个[Node.js](https://nodejs.org/zh-cn) 可以自由切换，或者您也可以只安装 [Node.js](https://nodejs.org/zh-cn) 。
::: tip 说明

1. Vue 3 项目可以通过 Vue CLI 或 Vite 来创建和管理。Vue CLI 是 Vue 官方提供的命令行工具，它为单页面应用 (SPA) 快速搭建繁杂的脚手架，并提供了功能齐备的构建设置。对于 Vue 3，应该使用 npm 上可用的 Vue CLI v4.5 作为 @vue/cli。要升级，需要全局重新安装最新版本的 @vue/cli 
2. 对于使用 Vite 创建 Vue 3 项目，通常要求 Node.js 18 或更高版本，因为新版本的 Vite 及其插件利用了 Node.js 18 中的新 API 和性能改进。如果开发者使用较低版本的 Node.js（如 16.x），可能会遇到兼容性问题，如不兼容警告（如 EBADENGINE）或构建错误，由于缺少某些现代 API，可能会导致构建过程失败 。

:::
关于安装 Node.js 和 nvm 的安装，这里就不再赘述了，相关的安装教程可以在百度可以搜索到。

- [nodejs 官网](https://nodejs.org/zh-cn)
- [nvm 官网](https://github.com/coreybutler/nvm-windows/releases)
- [fnm官网](https://github.com/Schniz/fnm) 

下面以在 mac 下安装 nvm 为例：
```sh
$ curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
# 安装 node 14 版本
$ nvm install 14
# 使用 node 14
$ nvm use 14
# 验证 node 是否安装成功
$ node -v
v14.19.3
```
## 包管理工具
安装 Node.js 后，默认会包含 npm。除此以外，还有其他的包管理工具：

- [pnpm](https://pnpm.io/)（推荐）
- [cnpm](https://www.npmjs.com/package/cnpm)（推荐）
- [yarn](https://yarnpkg.com/)

安装 pnpm 示例如下：
```sh
$ npm i pnpm -g --register=https://registry.npmmirror.com/
# 验证 pnpm 是否安装成功
$ pnpm -v
7.1.7
```
## IDE

推荐使用 IDE 进行前端应用开发和调试，会有更好的调试体验。目前比较流行的 IDE 有：

- [Visual Studio Code](https://code.visualstudio.com/)（推荐）
- [WebStorm](https://www.jetbrains.com/webstorm/)（推荐）
- [Sublime Text](https://www.sublimetext.com/)
- [Atom](https://atom.io/)
## 小程序开发者工具[](https://v3.ice.work/docs/guide/basic/development#%E5%B0%8F%E7%A8%8B%E5%BA%8F%E5%BC%80%E5%8F%91%E8%80%85%E5%B7%A5%E5%85%B7)

目前小程序开发调试均需使用对应的开发者工具，在此附上小程序开发者工具下载链接：

- [微信开发者工具](https://developers.weixin.qq.com/miniprogram/dev/devtools/download.html)
- [阿里小程序开发者工具](https://opendocs.alipay.com/mini/ide/download)

## 环境要求        
- [Vue](https://cn.vuejs.org/)
- [Vite](https://cn.vitejs.dev/)
- [UnoCSS](https://unocss.dev/)
- [Naive UI](https://www.naiveui.com/zh-CN/os-theme)
- [OpenJDK 17 LTS](https://github.com/openjdk/jdk)
- [Node.js 20 LTS](https://nodejs.org/)
- [pnpm 9](https://pnpm.io/)
- [IntelliJ IDEA](https://www.jetbrains.com/idea/)
- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)（可选）
## 文档地址

- [文档地址]()
- [在线预览]()

## 后端项目

| 项目                                                         | 说明 | GitHub | Gitee                                            |
| ------------------------------------------------------------ | ---- | ------ | ------------------------------------------------ |
| [micro-design-cloud](https://gitee.com/MicroDesign/micro-design-cloud) |      |        | https://gitee.com/MicroDesign/micro-design-cloud |
## 在线体验
- [演示地址【micro-design-ai】](https://microdesign.gitee.io/micro-design-ai/)
- [演示地址【micro-design-ui】](https://microdesign.gitee.io/micro-design-ui/)
- [演示地址【micro-design-admin】](https://microdesign.gitee.io/micro-design-admin/)
- [演示地址【micro-design-docs】](https://microdesign.gitee.io/micro-design-docs/)
## 使用框架
| 框架                                                                                          | 说明               | 版本          | 学习指南                                                                |
|---------------------------------------------------------------------------------------------|------------------|-------------|---------------------------------------------------------------------|
| [Spring Cloud Alibaba](https://github.com/alibaba/spring-cloud-alibaba)                     | 微服务框架            | 2021.0.4.0  | [文档](https://github.com/YunaiV/SpringBoot-Labs)                     |
| [Nacos](https://github.com/alibaba/nacos)                                                   | 配置中心 & 注册中心      | 2.0.4       | [文档](https://www.iocoder.cn/categories/Nacos/?yudao)                |
| [RocketMQ](https://github.com/apache/rocketmq)                                              | 消息队列             | 4.9.4       | [文档](https://www.iocoder.cn/categories/RocketMQ/?yudao)             |
| [Sentinel](https://github.com/alibaba/sentinel)                                             | 服务保障             | 1.8.6       | [文档](https://www.iocoder.cn/categories/Sentinel/?yudao)             |
| [XXL Job](https://github.com/xuxueli/xmd-job)                                               | 定时任务             | 2.3.1       | [文档](https://www.iocoder.cn/Xmd-JOB/good-collection/?yudao)         |
| [Spring Cloud Gateway](https://github.com/spring-cloud/spring-cloud-gateway)                | 服务网关             | 3.4.1       | [文档](https://www.iocoder.cn/categories/Spring-Cloud-Gateway/?yudao) |
| [Seata](https://github.com/seata/seata)                                                     | 分布式事务            | 1.6.1       | [文档](https://www.iocoder.cn/categories/Seata/?yudao)                |
| [MySQL](https://www.mysql.com/cn/)                                                          | 数据库服务器           | 5.7 / 8.0+  |                                                                     |
| [Druid](https://github.com/alibaba/druid)                                                   | JDBC 连接池、监控组件    | 1.2.19      | [文档](http://www.iocoder.cn/Spring-Boot/datasource-pool/?yudao)      |
| [MyBatis Plus](https://mp.baomidou.com/)                                                    | MyBatis 增强工具包    | 3.5.3.1     | [文档](http://www.iocoder.cn/Spring-Boot/MyBatis/?yudao)              |
| [Dynamic Datasource](https://dynamic-datasource.com/)                                       | 动态数据源            | 3.6.0       | [文档](http://www.iocoder.cn/Spring-Boot/datasource-pool/?yudao)      |
| [Redis](https://redis.io/)                                                                  | key-value 数据库    | 5.0 / 6.0   |                                                                     |
| [Redisson](https://github.com/redisson/redisson)                                            | Redis 客户端        | 3.18.0      | [文档](http://www.iocoder.cn/Spring-Boot/Redis/?yudao)                |
| [Spring MVC](https://github.com/spring-projects/spring-framework/tree/master/spring-webmvc) | MVC 框架           | 5.3.24      | [文档](http://www.iocoder.cn/SpringMVC/MVC/?yudao)                    |
| [Spring Security](https://github.com/spring-projects/spring-security)                       | Spring 安全框架      | 5.7.5       | [文档](http://www.iocoder.cn/Spring-Boot/Spring-Security/?yudao)      |
| [Hibernate Validator](https://github.com/hibernate/hibernate-validator)                     | 参数校验组件           | 6.2.5       | [文档](http://www.iocoder.cn/Spring-Boot/Validation/?yudao)           |
| [Flowable](https://github.com/flowable/flowable-engine)                                     | 工作流引擎            | 6.7.2       | [文档](https://doc.iocoder.cn/bpm/)                                   |
| [Knife4j](https://gitee.com/xiaoym/knife4j)                                                 | Swagger 增强 UI 实现 | 4.0.0       | [文档](http://www.iocoder.cn/Spring-Boot/Swagger/?yudao)              |
| [SkyWalking](https://skywalking.apache.org/)                                                | 分布式应用追踪系统        | 8.12.0      | [文档](http://www.iocoder.cn/Spring-Boot/SkyWalking/?yudao)           |
| [Spring Boot Admin](https://github.com/codecentric/spring-boot-admin)                       | Spring Boot 监控平台 | 2.7.10      | [文档](http://www.iocoder.cn/Spring-Boot/Admin/?yudao)                |
| [Jackson](https://github.com/FasterXML/jackson)                                             | JSON 工具库         | 2.13.3      |                                                                     |
| [MapStruct](https://mapstruct.org/)                                                         | Java Bean 转换     | 1.5.5.Final | [文档](http://www.iocoder.cn/Spring-Boot/MapStruct/?yudao)            |
| [Lombok](https://projectlombok.org/)                                                        | 消除冗长的 Java 代码    | 1.18.26     | [文档](http://www.iocoder.cn/Spring-Boot/Lombok/?yudao)               |
| [JUnit](https://junit.org/junit5/)                                                          | Java 单元测试框架      | 5.8.2       | -                                                                   |
| [Mockito](https://github.com/mockito/mockito)                                               | Java Mock 框架     | 4.8.0       | -                                                                   |
## 更新日志
- V1.0.0
## 常见问题
- Vue2组件兼容性问题
## 贡献指南
- Gitee:https://gitee.com/MicroDesign
- GitHub：https://github.com/micro-design-awesome
## 问题反馈
- microdesign@xunzhaotech.com
- Email:xuanzhaotech@aliyun.com
