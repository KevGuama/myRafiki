# myRafiki App/Website

This project is a custom website developed from scratch using PHP, JavaScript, and CSS. The goal was to create a portfolio site for an engineer named Kelvin, designed to be CMS-friendly (similar to WordPress) and easily editable with page builders like the Gutenberg builder. The site was organized into key sections such as the header, footer, and content, using PHP functions like `get_header()`, `get_footer()`, and `wp_nav_menu()` to ensure compatibility with WordPress.

### Development Steps
1. **Initial Structure**: Created the essential structure by emulating/cloning WordPress files (style.css, functions.php, header.php, footer.php, and index.php) and split the content into template parts (content-home.php, content-about.php).
2. **Functionality**: Registered navigation menus, added theme support for post thumbnails, and used `wp_enqueue_scripts()` to load styles. Each PHP section (header, footer, index) was designed with WordPress-specific functions for dynamic content rendering. The project is now ready to be deployed as a WordPress theme by placing it under `/wp-content/themes/kelvin-portfolio/` and activating it in the dashboard.
####
Final round cleanup of the project
