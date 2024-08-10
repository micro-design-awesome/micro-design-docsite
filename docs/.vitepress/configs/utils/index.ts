/*
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-12-25 20:29:27
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2022-12-25 20:41:34
 * @FilePath: \micro-design-docs\docs\.vitepress\configs\utils\index.ts
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
const getComponentsSideBar = () => {

}
const getSidebars = (componetConfig) => {
    return {
        '/components/': getComponentsSideBar(),
    }
}
export {
    getSidebars
}