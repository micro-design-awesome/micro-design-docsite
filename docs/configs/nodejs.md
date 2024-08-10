<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-04-28 22:09:47
 * @LastEditTime: 2024-04-28 22:19:37
 * @LastEditors: xunzhaotech
-->

# NodeJS安装
Node.js 是一个基于 Chrome V8 引擎的 JavaScript 运行环境，它允许在服务器端运行 JavaScript 代码，从而实现各种后端开发任务。以下教程涵盖了 macOS、Linux（以 Ubuntu 为例）、Windows 系统的 Node.js 安装方法。请注意，版本号和具体命令可能会随着 Node.js 的更新而变化，建议访问 [Node.js 官网](https://nodejs.org/) 获取最新的安装信息。
## 官网
> 官网:https://nodejs.org/

## Windows 安装 Node.js

1. **通过官网下载**：
   - 访问 [Node.js 官网](https://nodejs.org/zh-cn/download/) 下载 `.msi` 或 `.zip` 安装包。
   - 双击下载的文件并按照提示进行安装。

2. **自定义安装选项**：
   - 在安装过程中，可以选择安装 `Node.js runtime`，`npm package manager`，`online documentation shortcuts`，以及是否 `Add to PATH`。

3. **环境变量配置**：
   - 如果选择添加到 PATH，安装程序会自动配置环境变量。
   - 如果需要自定义安装路径，可以在安装过程中指定，或安装后手动设置环境变量。

4. **验证安装**：
   - 打开命令提示符（CMD），输入 `node -v` 和 `npm -v` 检查 Node.js 和 npm 的版本。
## macOS 安装 Node.js

1. **通过官网下载**：
   - 访问 [Node.js 官网](https://nodejs.org/zh-cn/download/) 下载 `.pkg` 安装包。
   - 双击下载的文件并按照提示进行安装。

2. **使用 Homebrew 安装**：
   - 打开终端，执行以下命令安装 Homebrew：
     ```shell
     ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
     ```
   - 安装 Node.js：
     ```shell
     brew install node
     ```
   - 安装完成后，使用 `node -v` 和 `npm -v` 检查 Node.js 和 npm 的版本。

3. **使用 n 升级 Node.js**：
   - 清除 npm 缓存并安装 n（Node 版本管理器）：
     ```shell
     sudo npm cache clean -f
     sudo npm install -g n
     ```
   - 使用 n 安装或升级 Node.js：
     ```shell
     sudo n latest  # 安装最新版本
     sudo n stable  # 安装稳定版本
     sudo n xx.xx   # 安装具体版本号
     ```

## Linux 安装 Node.js

1. **使用 APT（以 Ubuntu 为例）**：
   - 添加 NodeSource 仓库：
     ```shell
     curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
     ```
   - 安装 Node.js：
     ```shell
     sudo apt-get install -y nodejs
     ```

2. **使用 nvm（Node Version Manager）**：
   - 安装 nvm：
     ```shell
     curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
     ```
   - 安装特定版本的 Node.js：
     ```shell
     nvm install v12.16.3  # 替换为所需版本号
     ```
   - 使用 nvm 切换 Node.js 版本：
     ```shell
     nvm use v12.16.3
     ```

3. **源码编译安装**：
   - 下载 Node.js 源码：
     ```shell
     wget https://nodejs.org/dist/v14.1.0/node-v14.1.0.tar.gz
     ```
   - 解压并编译安装：
     ```shell
     tar -vxf node-v14.1.0.tar.gz -C /usr/local
     cd /usr/local/node-v14.1.0
     ./configure
     make
     make install
     ```