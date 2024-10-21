# myRafiki Theme Development Journal

This README documents the step-by-step process of creating two WordPress themes, starting with a simple portfolio theme and progressing into a more complex tourism platform, **myRafiki**. The goal of this project is to develop a custom theme compatible with WordPress’s Gutenberg editor and starter templates like those in **Kadence** and **Astra**.

---

## Phase 1: myPortfolio Theme (Simple Prototype)

### Project Overview
The **myPortfolio** theme was designed as a simple WordPress-friendly theme to serve as a **proof of concept** for creating custom themes. It focuses on creating a portfolio for an engineer, structured with essential WordPress components like the **header, footer, index**, and **content sections** split into template parts.

### Development Steps
1. **Setting Up Theme Structure**:
   - We created a custom theme with the following key files:
     - `style.css` – for defining the theme’s styling.
     - `functions.php` – to register the theme features (menus, scripts, etc.).
     - `header.php` and `footer.php` – for site-wide components like navigation and footers.
     - `index.php` – as the main template file.
     - `template-parts/` – to handle reusable sections like `content-home.php` and `content-about.php`.

2. **WordPress Integration**:
   - The theme was built with WordPress functions like `get_header()`, `get_footer()`, and `wp_nav_menu()` to make it fully compatible with WordPress’s template hierarchy.
   - We registered a custom navigation menu and loaded CSS styles via `wp_enqueue_scripts()`, ensuring dynamic content rendering.

3. **Deployment**:
   - The theme was deployed as a **WordPress theme** by placing it under `/wp-content/themes/kelvin-portfolio/` and activating it via the WordPress dashboard.

---

## Phase 2: myRafiki Theme (Tourism Platform)

### Project Overview
The **myRafiki** theme is an advanced tourism platform, designed to connect travelers with local tour guides based on location. The theme will allow users to pin a travel location and find guides with reviews and availability. The project aims to emulate popular services like Airbnb but focus on **personalized tour guide experiences**.

### Stage 1: Initial Theme Setup

#### Theme Requirements
We started by designing the initial structure for **myRafiki** inspired by the **Kadence** theme and the **Astra** theme. This stage involved:
- Creating a custom theme structure with a landing page, a hidden "Plan Now" page that appears post-registration, and a location-based search feature.
- Ensuring the theme is **Gutenberg-compatible** for future editing.

#### Development Steps

1. **Custom Theme Structure**:
   - We organized the theme following a Kadence-style structure:
     - `assets/` – containing all static resources (CSS, JS, fonts, images).
     - `inc/` – to hold important custom functions and theme components.
     - `template-parts/` – to manage reusable sections like headers and footers.
   - The theme also includes standard WordPress files like `style.css`, `functions.php`, `header.php`, `footer.php`, and `index.php`.

2. **Functionality and WordPress Hooks**:
   - We implemented WordPress hooks and theme supports in `functions.php`, adding features like custom menus, post thumbnails, and script enqueueing.
   - The use of **wp_enqueue_style()** and **wp_enqueue_script()** ensures that styles and scripts are loaded properly.

3. **Webpack Configuration**:
   - Integrated **webpack.config.js** to manage asset compilation, ensuring better control over loading JavaScript and CSS files.
   
4. **Basic Pages**:
   - Developed the **landing page** (home) and the structure for a hidden "Plan Now" page that users access post-registration.
   - The **"Plan Now" page** will later support location-based filtering and guide/attraction display, based on user-selected travel destinations.

---

### Next Steps

In **Stage 2**, we will focus on:
- Building the **location-based search functionality** for guides and attractions.
- Finalizing the **MVP** with initial locations, tour guides, and featured attractions.
- Testing the theme with **real content** and preparing for deployment as a fully functional tourism platform.

