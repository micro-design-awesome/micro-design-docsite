<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2025-07-20 20:27:16
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# NRM（NPM Registry Manager）安装与配置详细教程

NRM是一个用于管理Npm镜像源的工具。Npm是Node.js的包管理器，用于安装、发布和管理JavaScript包。Npm的默认镜像源可能在某些地区或网络环境下访问较慢。NRM允许您轻松地切换Npm镜像源，以加速包的下载和安装。这对于加快Node.js项目的开发速度非常重要，特别是当您依赖大量第三方包时。

## 第一部分：NRM 安装

### 1. 安装前提
确保已安装 Node.js 和 npm：
```bash
node -v
npm -v
```
如果未安装，请先参考 Node.js 安装教程。

### 2. 全局安装 NRM
```bash
npm install -g nrm
```

### 3. 验证安装
```bash
nrm --version
```
成功安装会显示版本号（如 `1.2.1`）

## 第二部分：NRM 基本使用

### 1. 查看可用镜像源
```bash
nrm ls
```
输出示例：
```
* npm -------- https://registry.npmjs.org/
  yarn ------- https://registry.yarnpkg.com/
  cnpm ------- https://r.cnpmjs.org/
  taobao ----- https://registry.npmmirror.com/
  nj --------- https://registry.nodejitsu.com/
  npmMirror -- https://skimdb.npmjs.com/registry/
  edunpm ----- http://registry.enpmjs.org/
```

### 2. 切换镜像源
```bash
nrm use taobao
```

### 3. 测试镜像源速度
```bash
nrm test
```
输出显示各镜像源的响应时间

### 4. 添加自定义镜像源
```bash
nrm add <registry-name> <registry-url>
```
例如：
```bash
nrm add company http://npm.company.com/
```

### 5. 删除镜像源
```bash
nrm del <registry-name>
```

## 第三部分：环境变量配置（高级）

### 1. NRM 相关环境变量
NRM 本身不需要特殊环境变量配置，但可以配置 npm 相关变量：

#### 永久设置 npm 注册表（替代 nrm）
```bash
npm config set registry https://registry.npmmirror.com
```

#### 配置代理（如需）
```bash
npm config set proxy http://proxy.company.com:8080
npm config set https-proxy http://proxy.company.com:8080
```

### 2. 查看当前 npm 配置
```bash
npm config list
```

### 3. 清除代理设置
```bash
npm config delete proxy
npm config delete https-proxy
```

## 第四部分：常见问题解决

### 1. `nrm` 命令不可用
- 检查全局安装是否成功：
  ```bash
  npm list -g | grep nrm
  ```
- 确保 npm 全局路径在系统 PATH 中：
  ```bash
  echo $PATH  # Linux/macOS
  echo %PATH% # Windows
  ```
  应该包含类似 `C:\Users\YourName\AppData\Roaming\npm` 的路径

### 2. 切换源后仍使用默认源
- 检查当前生效的 registry：
  ```bash
  npm config get registry
  ```
- 确保没有项目级 `.npmrc` 文件覆盖设置

### 3. 速度测试不准确
- 可能是网络瞬时波动，多次测试取平均值
- 检查是否配置了代理

### 4. Windows 权限问题
- 使用管理员权限运行命令提示符
- 或重新安装 NRM：
  ```bash
  npm install -g nrm --force
  ```

## 第五部分：最佳实践

1. **项目级配置**：在项目根目录创建 `.npmrc` 文件指定源：
   ```
   registry=https://registry.npmmirror.com/
   ```

2. **与 yarn 配合使用**：
   ```bash
   yarn config set registry https://registry.npmmirror.com/
   ```

3. **定期更新 NRM**：
   ```bash
   npm update -g nrm
   ```

4. **常用命令别名**（Linux/macOS）：
   ```bash
   alias nr='nrm'
   alias nrt='nrm test'
   ```

现在你可以轻松管理 npm 镜像源，享受更快的包安装速度了！如需切换回官方源：
```bash
nrm use npm
```
