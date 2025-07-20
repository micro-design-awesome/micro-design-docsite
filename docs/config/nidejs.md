<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2025-07-20 20:20:01
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# NodeJS配置
Node.js是一个基于Chrome V8引擎的JavaScript运行时环境，用于构建服务器端和网络应用程序。它允许您使用JavaScript语言在服务器端编写高性能的应用程序，而不仅仅是在浏览器中执行JavaScript。Node.js具有非阻塞、事件驱动的特性，适用于构建高吞吐量的实时应用程序，如Web服务器、API服务器、聊天应用程序等。Node.js还有一个强大的包管理器NPM，用于管理依赖项和模块。
## Node.js 安装与配置详细教程（Windows版）

## 第一部分：Node.js 安装

#### 1. 下载 Node.js 安装包
1. 访问 Node.js 官方网站：[https://nodejs.org/](https://nodejs.org/)
2. 推荐下载 **LTS（长期支持版）**，这是更稳定的版本
3. 点击下载 Windows Installer (.msi) 版本

#### 2. 运行安装程序
1. 双击下载的 .msi 文件运行安装程序
2. 在欢迎界面点击 "Next"
3. 阅读并接受许可协议，点击 "Next"
4. 选择安装位置（默认是 `C:\Program Files\nodejs\`），建议保持默认，点击 "Next"
5. 在自定义安装页面，保持默认选择（包括 Node.js runtime、npm package manager 和 Online documentation shortcuts），点击 "Next"
6. 勾选 "Automatically install the necessary tools"（可选），这将安装编译本地模块所需的工具
7. 点击 "Install" 开始安装
8. 安装完成后点击 "Finish"

#### 3. 验证安装
1. 打开命令提示符（Win+R，输入 `cmd`，回车）
2. 输入以下命令检查 Node.js 版本：
   ```bash
   node -v
   ```
   应该显示类似 `v18.12.1` 的版本号
3. 输入以下命令检查 npm 版本：
   ```bash
   npm -v
   ```
   应该显示类似 `8.19.2` 的版本号

## 第二部分：环境变量配置

#### 1. 检查环境变量是否自动配置
Node.js 安装程序通常会自动配置环境变量，但我们可以验证一下：

1. 在命令提示符中输入：
   ```bash
   path
   ```
   检查输出中是否包含 Node.js 的安装路径（如 `C:\Program Files\nodejs\`）

#### 2. 手动配置环境变量（如果需要）

如果上述检查没有找到 Node.js 路径，可以手动配置：

1. 右键点击"此电脑"或"我的电脑"，选择"属性"
2. 点击"高级系统设置"
3. 在"系统属性"窗口中点击"环境变量"按钮
4. 在"系统变量"部分，找到并选择"Path"，然后点击"编辑"
5. 点击"新建"，添加 Node.js 的安装路径（如 `C:\Program Files\nodejs\`）
6. 点击"确定"保存所有更改

#### 3. 配置全局模块安装路径（可选但推荐）

默认情况下，全局安装的模块会放在 `C:\Users\你的用户名\AppData\Roaming\npm`，我们可以自定义这个位置：

1. 在你喜欢的位置创建两个文件夹，例如：
   - `D:\nodejs\node_global` （用于全局模块）
   - `D:\nodejs\node_cache` （用于缓存）

2. 配置 npm 使用这些路径：
   打开命令提示符，执行：
   ```bash
   npm config set prefix "D:\nodejs\node_global"
   npm config set cache "D:\nodejs\node_cache"
   ```

3. 将全局模块路径添加到系统环境变量：
   - 按照前面步骤打开环境变量设置
   - 在"系统变量"中点击"新建"
     - 变量名：`NODE_PATH`
     - 变量值：`D:\nodejs\node_global\node_modules`
   - 编辑"Path"变量，添加：`D:\nodejs\node_global`

4. 验证配置：
   ```bash
   npm config get prefix
   npm config get cache
   ```
   应该显示你设置的路径

## 第三部分：测试 Node.js 环境

#### 1. 创建测试文件
1. 创建一个新文件夹，如 `D:\nodejs-test`
2. 在文件夹中新建文件 `app.js`，内容如下：
   ```javascript
   const http = require('http');

   const hostname = '127.0.0.1';
   const port = 3000;

   const server = http.createServer((req, res) => {
     res.statusCode = 200;
     res.setHeader('Content-Type', 'text/plain');
     res.end('Hello, Node.js!\n');
   });

   server.listen(port, hostname, () => {
     console.log(`Server running at http://${hostname}:${port}/`);
   });
   ```

#### 2. 运行测试
1. 打开命令提示符，导航到测试文件夹：
   ```bash
   cd D:\nodejs-test
   ```
2. 运行 Node.js 应用：
   ```bash
   node app.js
   ```
3. 你应该看到输出：`Server running at http://127.0.0.1:3000/`
4. 打开浏览器访问 `http://127.0.0.1:3000`，应该看到 "Hello, Node.js!"
5. 按 Ctrl+C 停止服务器

## 第四部分：更新 npm 和安装常用工具

#### 1. 更新 npm 到最新版本
```bash
npm install -g npm@latest
```

#### 2. 安装常用全局工具
```bash
npm install -g yarn nodemon typescript @angular/cli create-react-app
```

## 常见问题解决

1. **'node' 不是内部或外部命令**
   - 检查环境变量配置是否正确
   - 确保 Node.js 安装路径已添加到 Path 中

2. **权限问题**
   - 以管理员身份运行命令提示符
   - 或者修改 npm 全局安装路径到用户目录

3. **安装慢或失败**
   - 可以配置淘宝镜像：
     ```bash
     npm config set registry http://registry.npmmirror.com(√)
     npm config set registry https://registry.npm.taobao.org(×)
     ```
   - 或使用 nrm 管理镜像源：
     ```bash
     npm install -g nrm
     nrm use taobao
     ```
> 如果你在使用 `npm config set registry https://registry.npm.taobao.org` 后仍然无法下载或安装依赖包，可能是由于以下原因及解决方案：

---

### **1. 淘宝镜像已迁移到新域名**
淘宝 NPM 镜像已从 `registry.npm.taobao.org` 迁移到 `npmmirror.com`，旧域名可能不稳定或无法访问。

#### **解决方案**
改用新镜像地址：
```bash
npm config set registry https://registry.npmmirror.com
```
或者：
```bash
npm config set registry https://registry.npmjs.org/  # 切换回官方源
```

---

### **2. 网络问题（代理、防火墙、DNS 解析失败）**
即使设置了镜像源，仍可能由于网络问题导致下载失败。

#### **解决方案**
- **检查网络连接**：确保能正常访问外网。
- **关闭 VPN/代理**（如果使用）：
  ```bash
  npm config delete proxy
  npm config delete https-proxy
  ```
- **清除 npm 缓存**：
  ```bash
  npm cache clean --force
  ```
- **更换 DNS**（如 8.8.8.8 或 114.114.114.114）。

---

### **3. 依赖包本身的问题**
某些包可能在镜像源中不存在或版本不匹配。

#### **解决方案**
- 尝试直接使用官方源：
  ```bash
  npm config set registry https://registry.npmjs.org/
  ```
- 指定包的完整版本号安装：
  ```bash
  npm install package@latest  # 或指定具体版本
  ```

---

### **4. 权限问题（全局安装失败）**
在 Windows/Linux 上，全局安装可能需要管理员权限。

#### **解决方案**
- **Windows**：以管理员身份运行 CMD/PowerShell。
- **Linux/macOS**：使用 `sudo`（不推荐，可能导致权限混乱）：
  ```bash
  sudo npm install -g package
  ```
- **更安全的做法**：配置 npm 使用用户目录（避免 `sudo`）：
  ```bash
  mkdir ~/.npm-global
  npm config set prefix '~/.npm-global'
  export PATH=~/.npm-global/bin:$PATH  # 添加到 .bashrc/.zshrc
  ```

---

### **5. 镜像源证书问题（HTTPS 错误）**
某些企业网络或旧系统可能因证书问题无法访问 HTTPS 镜像源。

#### **解决方案**
- 临时改用 HTTP（不推荐长期使用）：
  ```bash
  npm config set registry http://registry.npmmirror.com
  ```
- 更新系统根证书（Windows/Linux 需检查系统时间是否准确）。

---

### **6. 使用 `yarn` 或 `pnpm` 替代**
如果 npm 仍然失败，可以尝试其他包管理工具：
```bash
npm install -g yarn  # 或 pnpm
yarn add package     # 使用 yarn 安装
```
Yarn/Pnpm 通常有更好的缓存和重试机制。

---

### **7. 终极排查方法**
如果问题依旧，运行以下命令查看详细错误：
```bash
npm install --verbose
```
根据错误日志进一步排查（如超时、404 等）。

---

### **总结命令**
```bash
# 1. 切换镜像源（推荐新淘宝源或官方源）
npm config set registry https://registry.npmmirror.com

# 2. 清除缓存
npm cache clean --force

# 3. 关闭代理（如有）
npm config delete proxy
npm config delete https-proxy

# 4. 重新安装
npm install
```

如果问题仍未解决，请提供具体的错误信息（如 `npm install --verbose` 的输出），以便进一步分析！
现在你已经成功安装并配置了 Node.js 开发环境！可以开始你的 Node.js 开发之旅了。