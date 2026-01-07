# Melhor Envio - WooCommerce Shipping Plugin

## Overview
This is a WordPress/WooCommerce plugin for shipping quotations using the Melhor Envio API (a Brazilian shipping service). The plugin allows store owners to offer shipping quotes from multiple carriers including Correios, Jadlog, Loggi, Azul, and others.

**Note:** This is a WordPress plugin, not a standalone web application. It must be installed in a WordPress environment with WooCommerce to function.

## Project Structure

```
├── assets/            # Frontend assets (Vue.js, CSS, images)
│   ├── src/          # Vue.js source files
│   │   ├── admin/    # Admin dashboard components
│   │   └── frontend/ # Frontend components
│   ├── stylus/       # Stylus CSS preprocessor files
│   ├── css/          # Compiled CSS
│   ├── js/           # Compiled JavaScript
│   └── images/       # Image assets
├── Controllers/       # PHP API controllers
├── Models/           # PHP data models
├── Services/         # PHP business logic services
├── Helpers/          # PHP utility helpers
├── Factory/          # PHP factory classes
├── includes/         # WordPress plugin integration files
├── services_methods/ # WooCommerce shipping method classes
├── languages/        # Translation files (PT-BR, EN-US, PT-PT)
└── docker/           # Docker development environment
```

## Tech Stack

- **Backend:** PHP 7.2+ (WordPress Plugin)
- **Frontend:** Vue.js 2 with Vuex and Vue Router
- **Build System:** Webpack 5 with Babel
- **CSS:** Stylus preprocessor with Jeet and Rupture
- **Package Managers:** npm (JavaScript), Composer (PHP)

## Development Commands

### Build JavaScript/CSS Assets
```bash
npm run build        # Production build (minified)
npm run dev          # Development build with watch mode
npm run dev-build    # Development build (single run)
```

### PHP Dependencies
```bash
composer install     # Install PHP autoloader
```

## Workflow

The "Build Assets" workflow runs `npm run dev` which watches for changes and rebuilds Vue.js/CSS assets automatically.

## Installation (in WordPress)

1. Copy this plugin folder to `wp-content/plugins/melhor-envio-cotacao/`
2. Run `composer install` to set up PHP autoloading
3. Run `npm install && npm run build` to compile frontend assets
4. Activate the plugin in WordPress admin
5. Configure API token via Melhor Envio dashboard

## Requirements

- WordPress 5.0+
- WooCommerce 4.0+
- PHP 7.2+
- Node.js 14.18+ (for development)

## Key Dependencies

- **woocommerce** - E-commerce platform
- **woocommerce-extra-checkout-fields-for-brazil** - Brazilian checkout fields
