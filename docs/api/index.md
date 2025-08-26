# API 文档

## 概览

MicroDesign 云平台提供完整的 RESTful API 服务，支持微服务架构、高并发处理和企业级安全保障。本文档详细介绍了平台的 API 使用方法、认证机制、数据格式和最佳实践。

### 设计原则

- **RESTful 架构**: 遵循 REST 架构设计原则，资源导向的 URL 设计
- **统一响应格式**: 标准化的 JSON 响应结构
- **版本控制**: 支持 API 版本管理，向后兼容
- **安全第一**: JWT 令牌认证，HTTPS 传输，权限控制
- **高性能**: 支持缓存、限流、分页等性能优化

### 基础信息

| 属性 | 值 |
|------|-----|
| **基础URL** | `https://api.microdesign.com` |
| **当前版本** | `v1.0` |
| **协议** | HTTPS |
| **数据格式** | JSON |
| **字符编码** | UTF-8 |

## 认证与授权

### JWT 认证

平台使用 JWT (JSON Web Token) 进行身份认证，支持以下认证方式：

#### 1. 用户名密码认证

```bash
POST /api/v1/auth/login
Content-Type: application/json

{
  "username": "admin",
  "password": "password123",
  "captcha": "1234"
}
```

**响应示例:**
```json
{
  "code": 200,
  "message": "登录成功",
  "data": {
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...",
    "refreshToken": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...",
    "expiresIn": 7200,
    "user": {
      "id": 1,
      "username": "admin",
      "nickname": "管理员",
      "avatar": "https://example.com/avatar.jpg",
      "roles": ["ADMIN"]
    }
  }
}
```

#### 2. OAuth2 集成

支持主流第三方登录：

```bash
# 微信登录
GET /api/v1/auth/oauth/wechat?redirect_uri=https://yourapp.com/callback

# 钉钉登录
GET /api/v1/auth/oauth/dingtalk?redirect_uri=https://yourapp.com/callback
```

#### 3. API Key 认证

适用于服务器到服务器的调用：

```bash
GET /api/v1/users
Authorization: ApiKey your-api-key-here
```

### 权限控制

基于角色的访问控制 (RBAC)：

| 角色 | 权限描述 |
|------|----------|
| **SUPER_ADMIN** | 超级管理员，拥有所有权限 |
| **ADMIN** | 系统管理员，管理用户和基础配置 |
| **USER** | 普通用户，基础业务操作权限 |
| **GUEST** | 访客用户，只读权限 |

## API 响应格式

### 统一响应结构

所有 API 响应都遵循以下格式：

```typescript
interface ApiResponse<T> {
  code: number;           // 响应状态码
  message: string;        // 响应消息
  data?: T;              // 响应数据
  timestamp?: number;     // 时间戳
  traceId?: string;      // 链路追踪ID
}
```

### 状态码说明

| 状态码 | 说明 |
|--------|------|
| **200** | 请求成功 |
| **400** | 请求参数错误 |
| **401** | 未认证或认证失败 |
| **403** | 权限不足 |
| **404** | 资源不存在 |
| **409** | 资源冲突 |
| **429** | 请求频率过高 |
| **500** | 服务器内部错误 |

### 分页响应

```json
{
  "code": 200,
  "message": "查询成功",
  "data": {
    "records": [...],
    "total": 100,
    "size": 10,
    "current": 1,
    "pages": 10,
    "hasNext": true,
    "hasPrevious": false
  }
}
```

## 核心 API 模块

### 用户管理 API

#### 用户注册

```bash
POST /api/v1/users/register
Content-Type: application/json

{
  "username": "newuser",
  "password": "password123",
  "email": "newuser@example.com",
  "phone": "13800138000",
  "nickname": "新用户"
}
```

#### 用户信息查询

```bash
GET /api/v1/users/{userId}
Authorization: Bearer {token}
```

#### 用户列表查询

```bash
GET /api/v1/users?page=1&size=10&keyword=admin
Authorization: Bearer {token}
```

### 系统管理 API

#### 系统配置

```bash
# 获取系统配置
GET /api/v1/system/config
Authorization: Bearer {token}

# 更新系统配置
PUT /api/v1/system/config
Authorization: Bearer {token}
Content-Type: application/json

{
  "systemName": "MicroDesign Platform",
  "logo": "https://example.com/logo.png",
  "copyright": "© 2024 MicroDesign"
}
```

#### 字典管理

```bash
# 获取字典数据
GET /api/v1/system/dict/{dictType}

# 示例响应
{
  "code": 200,
  "data": [
    {
      "label": "启用",
      "value": "1",
      "sort": 1
    },
    {
      "label": "禁用",
      "value": "0",
      "sort": 2
    }
  ]
}
```

### 文件上传 API

#### 单文件上传

```bash
POST /api/v1/files/upload
Authorization: Bearer {token}
Content-Type: multipart/form-data

# Form Data:
# file: <binary data>
# path: /uploads/images/
```

**响应示例:**
```json
{
  "code": 200,
  "message": "上传成功",
  "data": {
    "id": "f47ac10b-58cc-4372-a567-0e02b2c3d479",
    "originalName": "image.jpg",
    "fileName": "20241201_143022_image.jpg",
    "filePath": "/uploads/images/20241201_143022_image.jpg",
    "fileSize": 1024000,
    "contentType": "image/jpeg",
    "url": "https://cdn.example.com/uploads/images/20241201_143022_image.jpg"
  }
}
```

#### 文件下载

```bash
GET /api/v1/files/download/{fileId}
Authorization: Bearer {token}
```

### 通知消息 API

#### 发送通知

```bash
POST /api/v1/notifications
Authorization: Bearer {token}
Content-Type: application/json

{
  "type": "SYSTEM",
  "title": "系统维护通知",
  "content": "系统将于今晚22:00-24:00进行维护",
  "recipients": ["user1", "user2"],
  "channels": ["EMAIL", "SMS", "PUSH"]
}
```

#### 获取用户通知

```bash
GET /api/v1/notifications/user?page=1&size=20&status=UNREAD
Authorization: Bearer {token}
```

## WebSocket API

### 连接建立

```javascript
const ws = new WebSocket('wss://api.microdesign.com/ws');

// 认证
ws.onopen = function() {
    ws.send(JSON.stringify({
        type: 'AUTH',
        token: 'your-jwt-token'
    }));
};
```

### 消息协议

#### 订阅事件

```javascript
// 订阅用户消息
ws.send(JSON.stringify({
    type: 'SUBSCRIBE',
    channel: 'user.notifications',
    userId: 123
}));

// 订阅系统广播
ws.send(JSON.stringify({
    type: 'SUBSCRIBE',
    channel: 'system.broadcast'
}));
```

#### 接收消息

```javascript
ws.onmessage = function(event) {
    const message = JSON.parse(event.data);
    
    switch(message.type) {
        case 'NOTIFICATION':
            handleNotification(message.data);
            break;
        case 'SYSTEM_BROADCAST':
            handleSystemBroadcast(message.data);
            break;
    }
};
```

## SDK 集成

### JavaScript/TypeScript SDK

#### 安装

```bash
npm install @microdesign/api-client
```

#### 使用示例

```typescript
import { MicroDesignClient } from '@microdesign/api-client';

const client = new MicroDesignClient({
    baseURL: 'https://api.microdesign.com',
    token: 'your-jwt-token'
});

// 用户登录
const loginResult = await client.auth.login({
    username: 'admin',
    password: 'password123'
});

// 获取用户列表
const users = await client.users.list({
    page: 1,
    size: 10
});

// 上传文件
const file = document.getElementById('file').files[0];
const uploadResult = await client.files.upload(file);
```

### Java SDK

#### Maven 依赖

```xml
<dependency>
    <groupId>com.microdesign</groupId>
    <artifactId>microdesign-sdk</artifactId>
    <version>1.0.0</version>
</dependency>
```

#### 使用示例

```java
import com.microdesign.sdk.MicroDesignClient;
import com.microdesign.sdk.model.User;

MicroDesignClient client = new MicroDesignClient.Builder()
    .baseUrl("https://api.microdesign.com")
    .token("your-jwt-token")
    .build();

// 用户查询
List<User> users = client.users().list(1, 10);

// 文件上传
File file = new File("path/to/file.jpg");
FileUploadResult result = client.files().upload(file);
```

### Python SDK

#### 安装

```bash
pip install microdesign-python-sdk
```

#### 使用示例

```python
from microdesign_sdk import MicroDesignClient

client = MicroDesignClient(
    base_url='https://api.microdesign.com',
    token='your-jwt-token'
)

# 用户列表查询
users = client.users.list(page=1, size=10)

# 系统配置更新
config = client.system.update_config({
    'systemName': 'My Application',
    'logo': 'https://example.com/logo.png'
})
```

## API 测试

### Postman 集合

我们提供完整的 Postman 测试集合，包含所有 API 接口的示例请求。

**下载地址**: [MicroDesign API Collection](https://api.microdesign.com/postman/collection.json)

#### 环境变量配置

```json
{
  "baseUrl": "https://api.microdesign.com",
  "token": "{{auth_token}}",
  "apiVersion": "v1"
}
```

### 自动化测试

#### 接口测试脚本

```javascript
// tests/api/users.test.js
const { MicroDesignClient } = require('@microdesign/api-client');

describe('Users API', () => {
    let client;
    
    beforeAll(() => {
        client = new MicroDesignClient({
            baseURL: process.env.API_BASE_URL,
            token: process.env.API_TOKEN
        });
    });
    
    test('should get user list', async () => {
        const response = await client.users.list({ page: 1, size: 10 });
        expect(response.code).toBe(200);
        expect(response.data.records).toBeInstanceOf(Array);
    });
    
    test('should create new user', async () => {
        const userData = {
            username: 'testuser',
            password: 'password123',
            email: 'test@example.com'
        };
        
        const response = await client.users.create(userData);
        expect(response.code).toBe(200);
        expect(response.data.username).toBe(userData.username);
    });
});
```

### Mock 服务器

基于 WireMock 的 API Mock 服务：

```json
{
  "request": {
    "method": "GET",
    "urlPattern": "/api/v1/users/.*"
  },
  "response": {
    "status": 200,
    "headers": {
      "Content-Type": "application/json"
    },
    "bodyFileName": "user-response.json"
  }
}
```

## 最佳实践

### API 安全

1. **HTTPS 传输**: 所有 API 调用必须使用 HTTPS
2. **令牌管理**: 
   - JWT 令牌建议设置合理的过期时间
   - 使用 Refresh Token 机制自动刷新令牌
   - 敏感操作需要二次验证

3. **请求限流**:
   ```bash
   # 每个用户每分钟最多 100 次请求
   X-RateLimit-Limit: 100
   X-RateLimit-Remaining: 95
   X-RateLimit-Reset: 1640995200
   ```

4. **数据验证**: 严格验证所有输入参数
5. **敏感信息**: 不在 URL 中传递敏感信息

### 性能优化

1. **缓存策略**:
   ```bash
   # 设置适当的缓存头
   Cache-Control: public, max-age=3600
   ETag: "33a64df551425fcc55e4d42a148795d9f25f89d4"
   ```

2. **分页查询**: 大数据量查询必须使用分页
3. **字段筛选**: 支持字段筛选减少数据传输
   ```bash
   GET /api/v1/users?fields=id,username,email
   ```

4. **压缩传输**: 启用 GZIP 压缩

### 版本管理

1. **URL 版本控制**: `/api/v1/`, `/api/v2/`
2. **向后兼容**: 新版本保持对旧版本的兼容
3. **废弃通知**: 提前通知 API 废弃计划

```bash
# 响应头中标识版本信息
X-API-Version: 1.0
X-API-Deprecated: false
```

### 错误处理

1. **统一错误格式**:
   ```json
   {
     "code": 400,
     "message": "参数验证失败",
     "details": {
       "field": "email",
       "error": "邮箱格式不正确"
     },
     "traceId": "f47ac10b-58cc-4372-a567-0e02b2c3d479"
   }
   ```

2. **详细错误信息**: 提供足够的错误信息便于调试
3. **链路追踪**: 每个请求生成唯一的 traceId

## 组件演示

### Vue 组件集成

以下展示了如何在 Vue 项目中集成 MicroDesign 组件库：

```vue
<demo-block>
  <md-button>默认按钮</md-button>
  <md-button type="primary">主要按钮</md-button>
  <md-button type="success">成功按钮</md-button>
  <md-button type="info">信息按钮</md-button>
  <md-button type="warning">警告按钮</md-button>
  <md-button type="danger">危险按钮</md-button>
</demo-block>
```

### 交互式代码演示

:::demo

```vue
<template>
  <div class="api-demo">
    <h4>API 调用示例</h4>
    <md-button @click="fetchUsers" type="primary">获取用户列表</md-button>
    <md-button @click="uploadFile" type="success">上传文件</md-button>
    
    <div v-if="loading" class="loading">
      加载中...
    </div>
    
    <div v-if="users.length > 0" class="user-list">
      <h5>用户列表:</h5>
      <ul>
        <li v-for="user in users" :key="user.id">
          {{ user.username }} - {{ user.email }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loading: false,
      users: []
    }
  },
  methods: {
    async fetchUsers() {
      this.loading = true;
      try {
        // 模拟 API 调用
        const response = await fetch('/api/v1/users');
        const result = await response.json();
        this.users = result.data.records;
      } catch (error) {
        console.error('获取用户失败:', error);
      } finally {
        this.loading = false;
      }
    },
    
    async uploadFile() {
      const input = document.createElement('input');
      input.type = 'file';
      input.onchange = async (e) => {
        const file = e.target.files[0];
        if (!file) return;
        
        const formData = new FormData();
        formData.append('file', file);
        
        try {
          const response = await fetch('/api/v1/files/upload', {
            method: 'POST',
            body: formData,
            headers: {
              'Authorization': `Bearer ${this.$store.state.token}`
            }
          });
          
          const result = await response.json();
          alert(`文件上传成功: ${result.data.url}`);
        } catch (error) {
          alert('文件上传失败');
        }
      };
      input.click();
    }
  }
}
</script>

<style scoped>
.api-demo {
  padding: 20px;
  border: 1px solid #e6e6e6;
  border-radius: 6px;
}

.loading {
  margin: 10px 0;
  color: #666;
}

.user-list {
  margin-top: 20px;
}

.user-list ul {
  list-style: none;
  padding: 0;
}

.user-list li {
  padding: 8px 0;
  border-bottom: 1px solid #f0f0f0;
}
</style>
```

:::

## 更多资源

### 文档链接

- [快速开始指南](/guide/)
- [组件文档](/components/)
- [配置说明](/config/)
- [最佳实践](/docs/)

### 社区支持

- **GitHub**: [https://github.com/microdesign/platform](https://github.com/microdesign/platform)
- **技术交流群**: 添加微信 `microdesign-support`
- **问题反馈**: [issues@microdesign.com](mailto:issues@microdesign.com)

### 更新日志

查看 [CHANGELOG.md](./CHANGELOG.md) 了解最新版本更新内容。




