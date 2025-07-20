# Node.js 包管理器（npm/yarn/pnpm）的详细设置教程，涵盖镜像配置、缓存管理、权限优化等核心内容，适用于 Windows/macOS/Linux 系统：
---

### 一、npm 基础配置
#### 1. **镜像源管理（加速下载）**
```bash
# 查看当前源
npm config get registry

# 切换淘宝镜像（国内推荐）
npm config set registry https://registry.npmmirror.com/

# 恢复官方源
npm config set registry https://registry.npmjs.org/
```

#### 2. **全局安装路径设置（避免权限问题）**
```bash
# 自定义全局包安装目录（Windows示例）
npm config set prefix "D:\nodejs\global"

# macOS/Linux示例
npm config set prefix "~/.npm-global"

# 将路径添加到系统环境变量 PATH
# Windows: 添加 D:\nodejs\global
# Linux/macOS: 在 ~/.bashrc 或 ~/.zshrc 添加：
export PATH=~/.npm-global/bin:$PATH
```

#### 3. **缓存管理**
```bash
# 查看缓存目录
npm config get cache

# 自定义缓存路径（Windows示例）
npm config set cache "D:\nodejs\npm-cache"

# 清理缓存
npm cache clean --force
```

---

### 二、高级配置
#### 1. **代理设置（企业网络需配置）**
```bash
# 设置代理
npm config set proxy http://proxy.company.com:8080
npm config set https-proxy http://proxy.company.com:8080

# 删除代理
npm config delete proxy
npm config delete https-proxyarn config set registry https://registry.npmmirror.com/
```

#### 2. **安装行为优化**
```bash
# 禁止自动生成 package-lock.json（不推荐）
npm config set package-lock false

# 忽略可选依赖（减少安装体积）
npm config set optional false

# 禁用安装时自动运行脚本（安全考虑）
npm config set ignore-scripts true
```

---

### 三、Yarn 配置
#### 1. **安装 Yarn**
```bash
npm install -g yarn
```

#### 2. **镜像源配置**
```bash
# 设置淘宝镜像
yarn config set registry https://registry.npmmirror.com/

# 查看配置
yarn config list
```

#### 3. **全局安装路径**
```bash
# 设置全局包目录
yarn config set global-folder "D:\nodejs\yarn-global"

# 添加到 PATH
# Windows: 添加 D:\nodejs\yarn-global\bin
# Linux/macOS: 添加 ~/.yarn/bin
```

---

### 四、PNPM 配置
#### 1. **安装 PNPM**
```bash
npm install -g pnpm
```

#### 2. **镜像源配置**
```bash
pnpm config set registry https://registry.npmmirror.com/
```

#### 3. **存储路径优化**
```bash
# 设置全局存储目录
pnpm config set store-dir "D:\nodejs\pnpm-store"
```

---

### 五、多源管理工具（NRM）
#### 1. **安装 NRM**
```bash
npm install -g nrm
```

#### 2. **常用命令**
```bash
# 列出所有镜像源
nrm ls

# 测试源速度
nrm test

# 切换源（如淘宝）
nrm use taobao

# 添加自定义源
nrm add company http://npm.company.com/
```

---

### 六、安全配置
#### 1. **SSL 验证**
```bash
# 禁用SSL验证（仅内网环境使用）
npm config set strict-ssl false
```

#### 2. **审计功能**
```bash
# 关闭安装时的安全审计（提升速度）
npm config set audit false
```

---

### 七、项目级配置
在项目根目录创建 `.npmrc` 覆盖全局设置：
```ini
# 示例：指定私有源和严格引擎检查
registry=https://registry.npmmirror.com/
engine-strict=true
save-exact=true
```

---

### 八、常用命令速查
| 功能                | npm                     | yarn                  | pnpm                  |
|---------------------|-------------------------|-----------------------|-----------------------|
| 安装依赖            | `npm install`           | `yarn`                | `pnpm install`        |
| 全局安装            | `npm install -g`        | `yarn global add`     | `pnpm add -g`         |
| 清除缓存            | `npm cache clean --force`| `yarn cache clean`    | `pnpm store prune`    |
| 查看配置            | `npm config list`       | `yarn config list`    | `pnpm config list`    |

---

### 九、常见问题解决
1. **权限错误（EACCES）**  
   - 解决方案：使用 `--force` 或修改全局安装路径  
   ```bash
   npm install -g package --force
   ```

2. **镜像源证书错误**  
   - 临时方案：  
   ```bash
   npm config set strict-ssl false
   ```

3. **全局包找不到**  
   - 检查 `PATH` 是否包含全局路径：  
   ```bash
   echo $PATH  # Linux/macOS
   echo %PATH% # Windows
   ```

---

通过以上配置，你可以优化包管理器的下载速度、安全性和稳定性。建议将常用配置（如镜像源）写入全局 `.npmrc` 文件。

### **一、核心配置文件位置**
1. **全局配置**  
   - 路径：`%USERPROFILE%\.npmrc`（Windows）或 `~/.npmrc`（Linux/macOS）
   - 查看当前配置：
     ```bash
     npm config list -l  # 查看所有配置（包括默认值）
     ```

2. **项目级配置**  
   - 路径：项目根目录下的 `.npmrc` 文件（优先级高于全局配置）

---

### **二、关键配置项**
#### 1. **镜像源管理**
```bash
# 查看当前源
npm config get registry

# 切换源（国内推荐使用淘宝源）
npm config set registry https://registry.npmmirror.com/

# 恢复官方源
npm config set registry https://registry.npmjs.org/
```

#### 2. **全局安装路径**
```bash
# 设置全局包安装目录（避免权限问题）
npm config set prefix "D:\nodejs\npm-global"

# 将路径添加到系统环境变量 PATH 中
# Windows: 添加 D:\nodejs\npm-global
# Linux/macOS: 添加 ~/.npm-global/bin
```

#### 3. **缓存管理**
```bash
# 查看缓存目录
npm config get cache

# 自定义缓存路径
npm config set cache "D:\nodejs\npm-cache"

# 清理缓存
npm cache clean --force
```

#### 4. **代理设置（企业网络需配置）**
```bash
# 设置代理
npm config set proxy http://proxy.company.com:8080
npm config set https-proxy http://proxy.company.com:8080

# 删除代理
npm config delete proxy
npm config delete https-proxy
```

#### 5. **包安装行为**
```bash
# 禁止自动生成 package-lock.json（不推荐）
npm config set package-lock false

# 设置安装时忽略可选依赖
npm config set optional false

# 允许安装时运行脚本（安全性考虑）
npm config set ignore-scripts false
```

---

### **三、多包管理器镜像配置**
#### 1. **Yarn 镜像配置**
```bash
yarn config set registry https://registry.npmmirror.com/
```

#### 2. **PNPM 镜像配置**
```bash
pnpm config set registry https://registry.npmmirror.com/
```

#### 3. **通过 NRM 管理镜像（推荐）**
```bash
# 安装 nrm
npm install -g nrm

# 查看可用镜像
nrm ls

# 切换镜像
nrm use taobao
```

---

### **四、安全相关配置**
#### 1. **严格SSL验证**
```bash
# 禁用SSL验证（不推荐，仅内网环境使用）
npm config set strict-ssl false
```

#### 2. **审计配置**
```bash
# 禁用安装时的安全审计（提升速度）
npm config set audit false
```

#### 3. **Scope包权限**
```bash
# 设置@scope包的私有仓库地址
npm config set @myscope:registry http://npm.company.com/
```

---

### **五、性能优化配置**
#### 1. **网络超时设置**
```bash
# 增加超时时间（单位毫秒）
npm config set fetch-retry-mintimeout 20000
npm config set fetch-retry-maxtimeout 120000
```

#### 2. **并行下载数**
```bash
# 增加并发连接数
npm config set maxsockets 10
```

#### 3. **日志级别**
```bash
# 减少日志输出
npm config set loglevel warn
```

---

### **六、项目级特殊配置**
在项目根目录 `.npmrc` 中可覆盖全局设置：
```ini
# 示例：指定项目私有源
registry=https://npm.company.com/
engine-strict=true
save-exact=true
```

---

### **七、常用命令速查**
| 功能 | 命令 |
|-------|-------|
| 查看所有配置 | `npm config ls -l` |
| 编辑配置文件 | `npm config edit` |
| 删除配置项 | `npm config delete <key>` |
| 检查配置优先级 | `npm config list --show-source` |

---

### **八、常见问题解决**
1. **权限错误**  
   - 解决方案：使用 `--force` 或 `--legacy-peer-deps`
   ```bash
   npm install --force
   ```

2. **镜像源证书错误**  
   - 临时解决方案：
   ```bash
   npm config set strict-ssl false
   ```

3. **全局包找不到**  
   - 检查 `PATH` 是否包含全局安装路径：
   ```bash
   echo PATH
   ```

---

通过合理配置这些选项，可以显著提升 npm 的安装速度、安全性和稳定性。建议将常用配置（如镜像源）写入全局 `.npmrc` 文件。