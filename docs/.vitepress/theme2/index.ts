import Theme from 'vitepress/dist/client/theme-default/index.js'
// import SmartyUI from '../../../src/entry'
export default {
    ...Theme, // 默认主题
    enhanceApp({ app }) {
        console.log(app)
    //   app.use(SmartyUI)
    },
  }