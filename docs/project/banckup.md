<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2025-08-25 19:00:00
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2025-08-25 19:10:00
 * @FilePath: \micro-design-docsite\docs\project\banckup.md
 * @Description: 后端项目合集
-->
# 后端项目合集

## 在线体验
- [演示地址【Vue3 + element-plus】](http://dashboard-vue3.micro.iocoder.cn)
- [演示地址【Vue3 + vben(ant-design-vue)】](http://dashboard-vben.micro.iocoder.cn)
- [演示地址【Vue2 + element-ui】](http://dashboard.micro.iocoder.cn)
- [演示地址【管理后台 APP】](http://dashboard-vue3.micro.iocoder.cn)

## 后端项目模板

### 微服务架构模板

| 模板名称 | 说明 | GitHub | Gitee |
| --- | --- | --- | --- |
| **micro-cloud-platform** | 基于 Spring Cloud Alibaba 的微服务架构平台，提供完整的微服务解决方案和企业级功能模块 | [GitHub](https://github.com/YunaiV/micro-cloud) | [Gitee](https://gitee.com/zhijiantianya/micro-cloud) |
| **micro-design-cloud** | MicroDesign 云服务后端，专注于设计系统的后端服务支撑 | | [Gitee](https://gitee.com/MicroDesign/micro-design-cloud) |
| **micro-cloud-mini** | 精简版微服务架构，只包含系统功能、基础设施功能 | | [Gitee](https://gitee.com/microcode/micro-cloud-mini) |

### Spring Boot 单体模板

| 模板名称 | 说明 | GitHub | Gitee |
| --- | --- | --- | --- |
| **micro-cloud-platform** | Spring Boot 多模块架构版本，适合中小型项目快速开发 | [GitHub](https://github.com/YunaiV/micro-cloud-platform) | [Gitee](https://gitee.com/zhijiantianya/micro-cloud-platform) |
| **Spring-Boot-Labs** | Spring Boot & Cloud 学习案例，涵盖各种技术栈的实践示例 | [GitHub](https://github.com/microcode/SpringBoot-Labs) | [Gitee](https://gitee.com/microcode/SpringBoot-Labs) |

## 后端优秀开源项目

### 业务系统项目

| 项目名称 | 说明 | GitHub | Gitee |
| --- | --- | --- | --- |
| **商城系统** | 包含商品管理、订单管理、营销活动、会员中心等完整电商功能 | | |
| **CRM系统** | 客户管理、商机跟踪、合同管理、数据分析等企业客户关系管理 | | |
| **ERP系统** | 采购管理、销售管理、库存管理、财务管理等企业资源计划 | | |
| **工作流系统** | 基于 Flowable 的工作流引擎，支持 BPMN 流程设计和管理 | | |
| **支付系统** | 支持支付宝、微信等多渠道支付，包含支付、退款、对账等功能 | | |

### 基础设施项目

| 项目名称 | 说明 | GitHub | Gitee |
| --- | --- | --- | --- |
| **代码生成器** | 支持前后端代码生成，包含 CRUD、树表、主子表等模板 | | |
| **文件服务** | 支持本地、S3、OSS、COS等多种存储方式的文件管理服务 | | |
| **消息服务** | 短信、邮件、站内信等多渠道消息发送服务 | | |
| **监控平台** | 基于 Spring Boot Admin + SkyWalking 的监控解决方案 | | |
| **任务调度** | 基于 XXL-Job 的分布式任务调度平台 | | |

## 后端技术栈

### 微服务框架
- **Spring Cloud Alibaba**: 微服务一站式解决方案
- **Spring Cloud Gateway**: API 网关
- **Nacos**: 注册中心 & 配置中心
- **Sentinel**: 服务保障
- **Seata**: 分布式事务

### 核心框架
- **Spring Boot**: 快速开发框架
- **Spring Security**: 安全框架
- **MyBatis Plus**: ORM 框架
- **Flowable**: 工作流引擎

### 中间件
- **MySQL**: 关系型数据库
- **Redis**: 缓存数据库
- **RocketMQ**: 消息队列
- **XXL-Job**: 任务调度
- **Elasticsearch**: 搜索引擎

### 监控运维
- **SkyWalking**: APM 监控
- **Spring Boot Admin**: 应用监控
- **Prometheus + Grafana**: 指标监控
- **ELK Stack**: 日志分析

### 开发工具
- **Maven/Gradle**: 项目构建
- **Jenkins**: CI/CD
- **Docker**: 容器化
- **Kubernetes**: 容器编排
- **Git**: 版本控制

## 核心功能模块

### 系统管理
- 用户管理、角色管理、菜单管理
- 部门管理、岗位管理、字典管理
- 参数配置、通知公告、日志管理
- 租户管理（SaaS 多租户）

### 基础设施
- 代码生成、文件管理、配置管理
- 定时任务、消息队列、WebSocket
- API 文档、数据库文档、系统监控

### 工作流程
- 流程设计、表单设计、流程管理
- 待办任务、已办任务、流程监控

### 数据报表
- 报表设计器、大屏设计器
- 数据可视化、导出功能

## 部署方案

### 开发环境
- JDK 8 / JDK 17 / JDK 21
- Maven 3.6+
- MySQL 5.7+ / 8.0+
- Redis 5.0+ / 6.0+

### 部署方式
- Docker 容器化部署
- Kubernetes 集群部署
- 传统服务器部署
- 云原生部署

## 更新日志
- V3.0.0：新增 AI 大模型功能
- V2.0.0：升级 Spring Boot 3.x
- V1.0.0：初始版本发布

## 常见问题
- 多数据源配置问题
- 分布式事务处理
- 微服务拆分原则
- 性能优化方案

## 贡献指南
- Gitee: https://gitee.com/zhijiantianya/micro-cloud
- GitHub: https://github.com/YunaiV/micro-cloud

## 问题反馈
- microdesign@xunzhaotech.com
- QQ群：请查看项目主页
- Issues：[Gitee Issues](https://gitee.com/zhijiantianya/micro-cloud/issues)