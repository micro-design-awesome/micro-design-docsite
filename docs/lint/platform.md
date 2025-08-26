# 后端平台模板文档

基于 `micro-cloud-platform` 项目的后端模板和最佳实践指南。

## Spring Boot Starter 模块

### 1. Web 开发模板 (micro-spring-boot-starter-web)
- SpringMVC 入门指南
- API 接口文档 Swagger 使用
- 统一响应体封装
- 全局异常处理

### 2. 数据库操作模板 (micro-spring-boot-starter-mybatis)
- MyBatis Plus 使用指南
- 多数据源配置（读写分离）
- 数据库连接池配置
- 分页查询实现

### 3. 缓存模板 (micro-spring-boot-starter-redis)
- Redis 集成与配置
- Spring Cache 使用
- 分布式锁实现
- 缓存策略设计

### 4. 安全框架模板 (micro-spring-boot-starter-security)
- Spring Security 配置
- 认证与授权实现
- Token 管理
- 权限控制注解使用

### 5. 定时任务模板 (micro-spring-boot-starter-job)
- 定时任务配置
- 异步任务处理
- XXL-Job 集成

### 6. 消息队列模板 (micro-spring-boot-starter-mq)
- 事件机制 Event 使用
- Kafka/RabbitMQ/RocketMQ 集成
- 消息发送与消费模板

### 7. Excel 操作模板 (micro-spring-boot-starter-excel)
- Excel 导入导出
- 大数据量处理

### 8. WebSocket 模板 (micro-spring-boot-starter-websocket)
- WebSocket 连接管理
- 实时消息推送

## 代码生成器模板

### Java 代码模板
- Controller 模板（REST API 控制器）
- Service 接口与实现模板
- Mapper（DAO）模板
- Entity（DO）数据对象模板
- VO（视图对象）模板
- 单元测试模板

### 前端代码模板
- Vue2 页面模板（列表页、表单页）
- Vue3 页面模板（element-plus 版本）
- Vue3 Vben 模板（ant-design-vue 版本）
- API 接口调用模板

### SQL 脚本模板
- 建表语句模板
- 初始化数据模板

## 微服务架构模板

### 网关配置模板
- Spring Cloud Gateway 配置
- 路由规则配置
- 过滤器配置

### 服务注册与配置
- Nacos 注册中心配置
- 配置中心使用

### 服务保障
- Sentinel 限流降级配置
- Seata 分布式事务配置

## 业务模块模板

### 系统管理模块
- 用户管理 CRUD 模板
- 角色权限管理模板
- 菜单管理模板
- 部门组织架构模板
- 租户管理（SaaS）模板

### 基础设施模块
- 文件上传下载模板
- 短信发送模板
- 邮件发送模板
- 操作日志记录模板

### 工作流模块
- 流程定义模板
- 任务处理模板
- 流程监听器模板

### 支付模块
- 支付订单处理模板
- 退款处理模板
- 支付回调模板

## 配置文件模板

### 应用配置模板
- application.yaml 基础配置
- 多环境配置（dev/test/prod）
- 日志配置（logback-spring.xml）

### Docker 部署模板
- Dockerfile 模板
- docker-compose.yml 模板
- 部署脚本模板

## 数据库脚本模板

### 多数据库支持
- MySQL 脚本模板
- PostgreSQL 脚本模板
- Oracle 脚本模板
- 达梦等国产数据库脚本

## 测试模板

### 单元测试模板
- Service 层测试模板
- Controller 层测试模板
- Mock 数据模板

## 开发规范

### 代码规范
- Java 开发规范（基于阿里巴巴规范）
- RESTful API 设计规范
- 数据库设计规范

### Git 规范
- 分支管理策略
- 提交信息规范

## 最佳实践指南

### 性能优化
- 数据库查询优化
- 缓存策略设计
- 接口性能优化

### 安全实践
- 参数校验
- SQL 注入防护
- XSS 防护

## 第三方服务集成

### 集成指南
- 微信支付/支付宝集成
- 短信服务集成
- OSS 存储集成
- 微信公众号集成

## 项目特性

### 技术栈
- **Java 版本**: JDK 8 + Spring Boot 2.7 / JDK 17/21 + Spring Boot 3.2
- **微服务框架**: Spring Cloud Alibaba
- **注册中心**: Nacos
- **配置中心**: Nacos
- **服务网关**: Spring Cloud Gateway
- **服务保障**: Sentinel
- **分布式事务**: Seata
- **定时任务**: XXL-Job
- **消息队列**: Redis/RabbitMQ/Kafka/RocketMQ
- **缓存**: Redis + Redisson
- **数据库**: MySQL/Oracle/PostgreSQL/SQL Server等
- **ORM框架**: MyBatis Plus
- **工作流**: Flowable
- **监控**: Spring Boot Admin + SkyWalking

### 内置功能
- ✅ 用户管理、角色管理、菜单管理、部门管理
- ✅ 租户管理（SaaS 多租户）
- ✅ 字典管理、参数配置
- ✅ 操作日志、登录日志
- ✅ 错误码管理、通知公告
- ✅ 短信管理、邮件管理
- ✅ 文件管理、在线用户
- ✅ 定时任务、消息队列
- ✅ 代码生成器
- ✅ 数据库文档
- ✅ 工作流引擎
- ✅ 支付系统
- ✅ 商城系统
- ✅ 会员中心
- ✅ CRM 系统
- ✅ ERP 系统
- ✅ AI 大模型

## 相关链接

- [项目源码](https://gitee.com/zhijiantianya/micro-cloud)
- [在线演示](http://dashboard-vue3.micro.iocoder.cn)
- [开发文档](https://cloud.iocoder.cn)