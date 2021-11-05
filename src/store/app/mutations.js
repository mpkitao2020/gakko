export default {
  /**
   * Theme and Layout
   */
  setGlobalTheme: (state, theme) => {
    this.$vuetify.framework.theme.dark = theme === 'dark'
    state.globalTheme = theme
  },
  setRTL: (state, isRTL) => {
    this.$vuetify.framework.rtl = isRTL
    state.isRTL = isRTL
  }
}
