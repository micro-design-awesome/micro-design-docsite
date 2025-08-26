# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

MicroDesign Docs - A comprehensive documentation platform built with VitePress featuring component libraries, plugin marketplaces, API documentation, development guides, and learning resources for both frontend and backend development.

## Commands

### Development
```bash
pnpm run docs:dev              # Start development server (includes component registration)
pnpm run register:components   # Register components for VitePress
```

### Build & Deploy
```bash
pnpm run docs:build    # Build for production (base path: /micro-design-docsite/)
pnpm run docs:serve    # Preview production build locally
pnpm run deploy        # Deploy to GitHub Pages via gh-pages.sh script
```

## Architecture

### Documentation Site Structure
- **VitePress 1.3.2**: Static site generator with Vue 3 support
- **Component System**: Auto-import via `unplugin-vue-components`, demo blocks via `vitepress-theme-demoblock`
- **Styling**: TailwindCSS + UnoCSS + PostCSS with custom theme layers
- **Search**: Local search provider configured, Algolia integration ready
- **Theme**: Extended default theme with custom components and layouts

### Content Organization
```
docs/
├── .vitepress/           # VitePress configuration
│   ├── config.js         # Main config with plugins, markdown settings
│   ├── configs/          # Navigation and sidebar definitions
│   └── theme/            # Custom theme with component registration
├── api/                  # API documentation and SDK guides
├── blog/                 # Blog system demos and source code docs
├── components/           # Component library documentation
├── course/               # Frontend/backend courses
├── lint/                 # Coding standards (JavaScript, Java)
├── project/              # Project showcases and templates
├── store/                # Application store and demos
└── tools/                # Development tools documentation
```

### Key Configuration Files
- **Navigation**: `docs/.vitepress/configs/nav.js` - Top navigation with 15+ sections
- **Sidebar**: `docs/.vitepress/configs/sidebar.js` - Multi-level sidebar for each section
- **Component Registration**: Auto-registration via `vitepress-rc` command
- **Theme Extensions**: Custom components in `theme/components/` and `src/components/`

### Frontend/Backend Separation
- **Frontend Docs**: Vue3, React, component libraries, UI frameworks
- **Backend Docs**: Spring Boot, microservices, Java standards (`/lint/banckup.md`)
- **Platform Templates**: Comprehensive backend templates documentation (`/lint/platform.md`)

## Important Technical Context

- **Package Manager**: pnpm (required) with specific peer dependency rules
- **Node Version**: >= 16.0.0
- **Module System**: ESM (`"type": "module"`)
- **Component Demo**: Uses `:::demo` markdown blocks for live component previews
- **JSX Support**: Enabled via `@vitejs/plugin-vue-jsx`
- **Build Output**: `docs/.vitepress/dist/`
- **Base Path**: Configurable via `process.env.BASE` or defaults to `/`

## Git Commit Convention

Follow Vue/Angular conventions:
- feat: New features
- fix: Bug fixes
- docs: Documentation changes
- style: Code style changes
- refactor: Code refactoring
- test: Test additions/changes
- chore: Build/dependency updates