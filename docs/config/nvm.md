<!--
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-11-24 11:59:56
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2025-07-20 20:34:45
 * @FilePath: \micro-design-docs\docs\guide\index.md
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
# NVM（Node Version Manager）配置

NVM是一个用于管理Node.js版本的工具。它允许您在同一台计算机上同时安装多个Node.js版本，并且能够轻松切换这些版本以适应不同的项目需求。NVM在开发中尤其有用，因为不同的项目可能需要不同版本的Node.js来运行。通过NVM，您可以在项目之间自由切换Node.js版本，而无需重新安装或卸载。

## 第一部分：NVM-Windows 安装

### 1. 卸载现有 Node.js（如有）
如果你已经安装了 Node.js，建议先卸载：
1. 进入控制面板 → 程序和功能
2. 找到 Node.js 并卸载
3. 删除残留的 Node.js 文件夹（如 `C:\Program Files\nodejs`）

### 2. 下载 NVM-Windows
1. 访问 GitHub 发布页面：[https://github.com/coreybutler/nvm-windows/releases](https://github.com/coreybutler/nvm-windows/releases)
2. 下载最新版本的 `nvm-setup.exe`（安装版）

### 3. 安装 NVM-Windows
1. 双击运行 `nvm-setup.exe`
2. 接受许可协议，点击 "Next"
3. 选择安装路径（默认是 `C:\Users\<用户名>\AppData\Roaming\nvm`），建议保持默认
4. 设置 Node.js 的符号链接路径（默认是 `C:\Program Files\nodejs`），这是 NVM 管理 Node.js 版本的虚拟路径
5. 点击 "Install" 开始安装
6. 安装完成后点击 "Finish"

### 4. 验证安装
1. 打开新的命令提示符（CMD）或 PowerShell
2. 输入以下命令检查 NVM 是否安装成功：
   ```bash
   nvm version
   ```
   应该显示类似 `1.1.10` 的版本号

## 第二部分：使用 NVM 管理 Node.js 版本

### 1. 查看可用 Node.js 版本
```bash
nvm list available
```
这会显示所有可安装的 Node.js 版本（LTS 和最新版）

### 2. 安装特定 Node.js 版本
安装最新的 LTS 版本：
```bash
nvm install 18.12.1
```
或安装最新版本：
```bash
nvm install latest
```

### 3. 查看已安装的版本
```bash
nvm list
```
输出示例：
```
  * 18.12.1 (Currently using 64-bit executable)
    16.15.0
```
`*` 表示当前使用的版本

### 4. 切换 Node.js 版本
```bash
nvm use 18.12.1
```

### 5. 设置默认 Node.js 版本
```bash
nvm alias default 18.12.1
```

### 6. 卸载特定 Node.js 版本
```bash
nvm uninstall 16.15.0
```

## 第三部分：环境变量配置

### 1. 检查自动配置
NVM-Windows 安装时会自动配置以下环境变量：
- `NVM_HOME`：指向 NVM 安装目录（如 `C:\Users\<用户名>\AppData\Roaming\nvm`）
- `NVM_SYMLINK`：指向 Node.js 符号链接目录（如 `C:\Program Files\nodejs`）
- `Path`：添加了 `%NVM_HOME%` 和 `%NVM_SYMLINK%`

### 2. 手动检查/配置环境变量
1. 右键"此电脑" → "属性" → "高级系统设置" → "环境变量"
2. 检查"系统变量"中是否有：
   - `NVM_HOME` = `C:\Users\<用户名>\AppData\Roaming\nvm`
   - `NVM_SYMLINK` = `C:\Program Files\nodejs`
3. 检查"系统变量"中的 `Path` 是否包含：
   - `%NVM_HOME%`
   - `%NVM_SYMLINK%`

### 3. 配置 npm 全局安装路径（可选）
为避免权限问题，可以设置 npm 全局包安装到用户目录：
1. 创建目录（如 `D:\nodejs\npm-global`）
2. 配置 npm：
   ```bash
   npm config set prefix "D:\nodejs\npm-global"
   ```
3. 将 `D:\nodejs\npm-global` 添加到用户环境变量 `Path` 中
### 4. 证书地址配置
1. 打开NVM安装目录
2. 在NVM安装目录中打开'settings.txt'
    ```bash
    root: D:\Users\xxx\AppData\Roaming\nvm
    path: D:\Program Files\nodejs
    node_mirror: https://npmmirror.com/mirrors/node
    npm_mirror: https://npmmirror.com/mirrors/npm
    #node_mirror: https://npm.taobao.org/mirrors/node
    #npm_mirror: https://npm.taobao.org/mirrors/npm
    ```

## 第四部分：常见问题解决

### 1. `nvm` 命令不可用
- 确保安装后打开了新的命令提示符窗口
- 检查环境变量配置是否正确
- 尝试重新安装 NVM-Windows

### 2. 切换版本时报错 "exit status 1"
- 以管理员身份运行命令提示符
- 确保没有其他程序占用 Node.js 目录

### 3. 安装缓慢或失败
- 使用淘宝镜像加速 Node.js 下载：
  ```bash
  nvm node_mirror https://npmmirror.com/mirrors/node/
  nvm npm_mirror https://npmmirror.com/mirrors/npm/
  ```
- 或临时使用 HTTP：
  ```bash
  nvm node_mirror http://npmmirror.com/mirrors/node/
  ```

### 4. 全局安装的包在切换版本后不可用
这是正常现象，每个 Node.js 版本有独立的全局包，可以：
- 在新版本中重新安装所需全局包
- 或使用 `nvm reinstall-packages` 从旧版本复制：
  ```bash
  nvm install 18.12.1 --reinstall-packages-from=16.15.0
  ```

## 第五部分：日常使用建议

1. **长期项目**：使用 LTS 版本（偶数版本号，如 18.x）
2. **学习新技术**：可以尝试最新版
3. **多版本管理**：
   ```bash
   nvm install 16.15.0
   nvm install 18.12.1
   nvm use 16.15.0    # 切换到旧项目所需版本
   nvm use 18.12.1    # 切换到新项目所需版本
   ```
4. **定期更新**：
   ```bash
   nvm install latest
   nvm alias default latest  # 设置最新版为默认
   ```
## `nvm use 20.18.0` 时遇到了权限问题（"没有足够的权限执行此操作"）。以下是解决方案：

### 解决方案步骤：

1. **以管理员身份运行命令行**
   - 右键点击命令提示符(CMD)或PowerShell
   - 选择"以管理员身份运行"
   - 再次尝试 `nvm use 20.18.0`

2. **关闭所有可能占用Node.js的程序**
   - 关闭VS Code、WebStorm等IDE
   - 结束所有Node.js进程（任务管理器中检查）
   - 关闭正在运行的npm/yarn进程

3. **手动删除符号链接（如果存在）**
   ```
   rmdir /s /q "C:\Program Files\nodejs"
   ```

4. **重新尝试切换版本**
   ```
   nvm use 20.18.0
   ```

5. **检查防病毒软件**
   - 暂时禁用Windows Defender或其他安全软件
   - 再次尝试切换版本

### 如果问题仍然存在：

1. **完全卸载并重新安装nvm-windows**
   ```
   nvm uninstall 20.18.0
   nvm install 20.18.0
   nvm use 20.18.0
   ```

2. **检查环境变量**
   - 确保`NVM_HOME`和`NVM_SYMLINK`变量正确设置
   - `NVM_SYMLINK`应该指向`C:\Program Files\nodejs`

3. **尝试手动创建符号链接**
   ```
   mklink /D "C:\Program Files\nodejs" "C:\Users\15255\AppData\Roaming\nvm\v20.18.0"
   ```

### 永久解决方案：

将你的用户账户添加到`C:\Program Files`的完全控制权限：
1. 右键点击`C:\Program Files\nodejs`
2. 选择"属性" → "安全" → "编辑"
3. 添加你的用户账户
4. 勾选"完全控制"
5. 点击"确定"

现在你已经成功安装并配置了 NVM-Windows，可以方便地管理多个 Node.js 版本了！