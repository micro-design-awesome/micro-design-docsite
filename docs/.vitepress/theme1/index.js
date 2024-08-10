/*
 * @Author: luyb luyb@xunzhaotech.com
 * @Date: 2022-12-25 21:36:51
 * @LastEditors: luyb luyb@xunzhaotech.com
 * @LastEditTime: 2023-03-18 06:34:58
 * @FilePath: \micro-design-docs\docs\.vitepress\theme1\index.js
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
// import Theme from 'vitepress/dist/client/theme-default/index.js'
import './styles/fonts.css';
import './styles/vars.css';
import './styles/base.css';
import './styles/utils.css';
import './styles/components/custom-block.css';
import './styles/components/vp-code.css';
import './styles/components/vp-doc.css';
import './styles/components/vp-sponsor.css';
import 'ant-design-vue/dist/antd.css';
// 主题样式
import 'vitepress-theme-demoblock/dist/theme/styles/index.css';
import Antd from 'ant-design-vue';
import VPBadge from './components/VPBadge.vue';
import Layout from './Layout.vue';
import NotFound from './NotFound.vue';
// import MicroUI from '../../../src/index.ts'
// 插件的组件，主要是demo组件
import Demo from 'vitepress-theme-demoblock/dist/client/components/Demo.vue';
import DemoBlock from 'vitepress-theme-demoblock/dist/client/components/DemoBlock.vue';
import Message from 'vitepress-theme-demoblock/dist/client/components/message.vue';
export { default as VPHomeHero } from './components/VPHomeHero.vue';
export { default as VPHomeFeatures } from './components/VPHomeFeatures.vue';
export { default as VPHomeSponsors } from './components/VPHomeSponsors.vue';
export { default as VPDocAsideSponsors } from './components/VPDocAsideSponsors.vue';
export { default as VPTeamPage } from './components/VPTeamPage.vue';
export { default as VPTeamPageTitle } from './components/VPTeamPageTitle.vue';
export { default as VPTeamPageSection } from './components/VPTeamPageSection.vue';
export { default as VPTeamMembers } from './components/VPTeamMembers.vue';
const theme = {
    // ...Theme, // 默认主题
    Layout,
    NotFound,
    enhanceApp: ({ app }) => {
        // app.use(MicroUI)
        app.use(Antd);
        app.component('Demo', Demo);
        app.component('DemoBlock', DemoBlock);
        app.component('Message', Message);
        app.component('Badge', VPBadge);
    }
};
export default theme;
