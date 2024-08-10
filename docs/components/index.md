<!--
 * @Description: 
 * @Author: xunzhaotech
 * @Email: luyb@xunzhaotech.com
 * @QQ: 1525572900
 * @Date: 2024-01-01 19:33:00
 * @LastEditTime: 2024-01-14 15:58:08
 * @LastEditors: xunzhaotech
-->
# 快速上手
编译器将开发者的代码进行编译，编译的输出物由各个终端的runtime进行解析，每个平台（Web、Android App、iOS App、各家小程序）都有各自的runtime。
## 基本语言
- micro-uni代码编写，基本语言包括js、vue、css。以及ts、scss等css预编译器。
- App端[nvue](https://uniapp.dcloud.net.cn/tutorial/nvue-outline.html)，以及可以编译为kotlin和swift的[uts](https://doc.dcloud.net.cn/uni-app-x/uts/)
- 只要掌握js，你可以开发web、Android、iOS、各家小程序以及服务器等全栈应用。
## 开发规范
- 页面文件遵循 Vue 单文件组件 (SFC) 规范，即每个页面是一个.vue文件
- 组件标签靠近小程序规范，详见uni-app 组件规范
- 接口能力（JS API）靠近小程序规范，但需将前缀 wx、my 等替换为 uni，详见uni-app接口规范
- 数据绑定及事件处理同 Vue.js 规范，同时补充了应用生命周期及页面的生命周期
- 如需兼容app-nvue平台，建议使用flex布局进行开发
## Windows PowerShell
版权所有（C） Microsoft Corporation。保留所有权利。

安装最新的 PowerShell，了解新功能和改进！https://aka.ms/PSWindows
```
PS C:\Users\Administrator> nrm
Usage: cli [options] [command]

Options:
  -V, --version                    output the version number
  -h, --help                       display help for command

Commands:
  ls                               List all the registries
  current [options]                Show current registry name or URL
  use <name>                       Change current registry
  add <name> <url> [home]          Add custom registry
  login [options] <name> [base64]  Set authorize information for a custom registry with a base64 encoded string or
                                   username and password
  set-hosted-repo <name> <repo>    Set hosted npm repository for a custom registry to publish package
  set-scope <scopeName> <url>      Associating a scope with a registry
  del-scope <scopeName>            Remove a scope
  set [options] <name>             Set a custom registry attribute
  rename <name> <newName>          Change custom registry name
  del <name>                       Delete custom registry
  home <name> [browser]            Open the homepage of registry with optional browser
  test [registry]                  Show response time for specific or all registries
  help [command]                   display help for command
  npm ---------- https://registry.npmjs.org/
  yarn --------- https://registry.yarnpkg.com/
  tencent ------ https://mirrors.cloud.tencent.com/npm/
  cnpm --------- https://r.cnpmjs.org/
  taobao ------- https://registry.npmmirror.com/
  npmMirror ---- https://skimdb.npmjs.com/registry/
* csscii ------- http://192.10.169.216:4873/
```