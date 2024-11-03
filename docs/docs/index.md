<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: xunzhaotech
 * @LastEditTime: 2024-04-28 21:51:04
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# MicroDocs Framework
## 项目简介
[MicroDocs Framework](https://microdesign.gitee.io/micro-design-docs/) 是一套基于MicroDesign体系的文档平台，致力于从用户体验、需求分析、系统架构、系统插件、系统组件、系统主题、系统测试、系统部署、开发文档和解决方面，解决企业痛点，为企业降本增效的的生态解决方案。
## 前端框架
以下是上述前端框架和库的对比表格：

| 特性       | Vanilla | Vue.js | React | Preact | Lit | Svelte | Solid.js | Qwik | Angular |
|------------|---------|--------|-------|--------|-----|--------|----------|------|---------|
| **类型**    | 原生JS   | 框架   | 库     | 库     | 库   | 框架   | 库       | 框架 | 框架     |
| **大小**    | 无      | 中等   | 中等  | 小     | 小   | 小     | 中等     | 小   | 大       |
| **性能**    | 高      | 高     | 高    | 非常高 | 高   | 非常高  | 高       | 非常高 | 中等     |
| **学习曲线** | 低      | 低     | 中等  | 低     | 低   | 低     | 中等     | 低   | 高       |
| **生态系统** | 广泛    | 广泛   | 广泛  | 广泛   | 新兴 | 较小    | 新兴     | 新兴 | 广泛     |
| **响应式**  | 手动    | 内置   | 手动  | 手动   | 内置 | 内置    | 内置     | 内置 | 内置     |
| **组件化**  | 手动    | 内置   | 内置  | 内置   | 内置 | 内置    | 内置     | 内置 | 内置     |
| **模板语法** | 无      | 可选   | JSX   | JSX    | HTML | 可选    | JSX      | JSX  | 模板     |
| **状态管理** | 手动    | Vuex   | Redux/Context | 手动 | 手动    | 手动     | 手动 | NgRx/Services |
| **双向数据绑定** | 无      | 支持   | 不支持 | 不支持 | 无   | 无     | 支持     | 无   | 支持     |
| **编译器**  | 无      | 无     | 无    | 无     | 无   | 有     | 无       | 有   | 有       |
| **Web组件** | 无      | 无     | 无    | 无     | 有   | 无     | 无       | 无   | 有       |
| **服务端渲染** | 手动    | 支持   | 支持  | 支持   | 支持 | 支持    | 支持     | 支持 | 支持     |
:::tip 说明:
请注意，这个表格只是一个大致的对比，每个框架和库都有其特定的特性和优势，实际的选择应该基于项目的具体需求和团队的技术栈。例如，Vue.js和Angular提供了更完整的解决方案，适合大型应用；而Svelte和Qwik则以其性能优势适合对性能要求极高的项目；React和Preact则因其灵活性和广泛的生态系统而受到许多开发者的喜爱。
:::
## 前端项目

| [micro-design-vue](https://gitee.com/MicroDesign/micro-design-vue) | 说明                         | GitHub | Gitee                                           |
| ------------------------------------------------------------ | ---------------------------- | ------ | ----------------------------------------------- |
| [micro-design-docsite](https://gitee.com/MicroDesign/micro-design-docsite) | Maven 依赖版本管理           |        | https://gitee.com/MicroDesign/micro-design-vue |
| [micro-design-ai](https://gitee.com/MicroDesign/micro-design-ai) | Java 框架拓展                |        |                                                 |
| [micro-design-ui](https://gitee.com/MicroDesign/micro-design-ui) | 管理后台 + 用户 APP 的服务端 |        |                                                 |
| [micro-design-admin](https://gitee.com/MicroDesign/micro-design-admin) | 系统功能的 Module 模块       |        |                                                 |
| [micro-design-docs](https://gitee.com/MicroDesign/micro-design-docs) | 会员中心的 Module 模块       |        |                                                 |
| [micro-design-theme](https://gitee.com/MicroDesign/micro-design-theme) | 基础设施的 Module 模块       |        |                                                 |
| [micro-design-awesome](https://gitee.com/MicroDesign/micro-design-awesome) | 工作流程的 Module 模块       |        |                                                 |
| [micro-design-nuxt](https://gitee.com/MicroDesign/micro-design-nuxt) | 支付系统的 Module 模块       |        |                                                 |
| [micro-design-uniapp](https://gitee.com/MicroDesign/micro-design-uniapp) | 商城系统的 Module 模块       |        |                                                 |
| [micro-uniapp-admin](https://gitee.com/MicroDesign/micro-uniapp-admin) | 微信公众号的 Module 模块     |        |                                                 |
| [micro-design-hono](https://gitee.com/MicroDesign/micro-design-hono) | 大屏报表 Module 模块         |        |                                                 |
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
