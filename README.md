# NurseDoc

NurseDoc is a PHP-based senior care and medical services website. It is a responsive, mostly static marketing site with reusable PHP layout includes, bundled front-end libraries, service pages, contact-oriented forms, and a large collection of local images and theme assets.

Repository: <https://github.com/SagsMan/NURSEDOC>

Maintainer: **Sagiru Garba** (`@SagsMan`)

## Current project status

- **Application type:** Server-rendered PHP website
- **Primary branch:** `main`
- **Runtime:** PHP with a web server such as Apache, Nginx, or PHP's built-in development server
- **Database:** None included
- **Package manager:** None included; front-end dependencies are committed under `assets/vendors`
- **Build step:** None required
- **Deployment model:** Upload the repository to a PHP-capable host and point the document root at the repository

This repository is currently a front-end/template implementation. It does not include user authentication, a database, a CMS, an admin panel, payment processing, or a custom API.

## Technology stack

### Server-side

- **PHP** for page rendering and shared layout includes
- `include("header.php")` and `include("footer.php")` provide the common site shell on the pages that use shared partials
- No framework is currently used
- No Composer configuration is currently included

### Front-end

- **HTML5** page markup
- **CSS3** responsive styling
- **Bootstrap 5.3.0** for layout and components
- **jQuery 3.7.1** for DOM behavior and plugin integration
- **Careold theme styles** in `assets/css/careold.css`
- **Google Fonts:** DM Sans and Urbanist, loaded remotely from Google Fonts
- **Font Awesome Free 5.15.1** for icons
- Custom site behavior in `assets/js/careold.js`

### Bundled JavaScript plugins

The site includes local copies of the following front-end libraries:

- Bootstrap and Bootstrap Select
- jQuery UI
- Owl Carousel 2.3.4
- Slick Carousel
- Tiny Slider
- Isotope
- ImagesLoaded
- Jarallax
- Magnific Popup
- jQuery Validate
- jQuery AjaxChimp
- noUiSlider and wNumb
- WOW.js and Animate.css
- GSAP 3.12.2, ScrollTrigger, and SplitText
- Tilt
- Countdown
- jQuery Circle Progress
- jQuery Lettering and CircleType

The vendor files are loaded from `footer.php` and, on some standalone template pages, from the page itself.

## Features and page inventory

### Main site pages

- `index.php` — home page with hero slider and service highlights
- `about.php` — about page
- `services.php` — services overview
- `services-carousel.php` — carousel-style services page
- `contact.php` — contact page and contact form
- `faq.php` — frequently asked questions
- `reviews.php` — testimonials/reviews page
- `gallery.php` — image gallery
- `portfolio.php` — portfolio listing
- `portfolio-details.php` — portfolio detail page
- `team-details.php` — team/member detail page
- `blog-details.php` — blog detail template
- `404.php` — not-found page

### Service detail pages

- `service-d-home.php`
- `service-d-nursing.php`
- `service-d-medical.php`
- `service-d-disability.php`
- `service-d-companion.php`
- `service-d-personalized.php`

### Commerce and account UI templates

- `cart.php` — cart interface template
- `checkout.php` — checkout interface template
- `login.php` — login interface template

These pages are currently presentation templates. They do not process orders, payments, or authentication without additional backend implementation.

## Project structure

```text
NURSEDOC/
├── 404.php
├── about.php
├── blog-details.php
├── cart.php
├── checkout.php
├── contact.php
├── faq.php
├── footer.php
├── gallery.php
├── header.php
├── index.php
├── login.php
├── portfolio-details.php
├── portfolio.php
├── reviews.php
├── service-d-companion.php
├── service-d-disability.php
├── service-d-home.php
├── service-d-medical.php
├── service-d-nursing.php
├── service-d-personalized.php
├── services-carousel.php
├── services.php
├── team-details.php
└── assets/
    ├── css/
    │   ├── careold.css
    │   ├── careold-dark.css
    │   ├── careold-rtl.css
    │   └── other theme stylesheets
    ├── images/
    │   ├── backgrounds/
    │   ├── blog/
    │   ├── careold-landing/
    │   ├── favicons/
    │   ├── gallery/
    │   ├── portfolio/
    │   ├── products/
    │   ├── resources/
    │   ├── shapes/
    │   ├── team/
    │   ├── logo-dark.png
    │   ├── logo-light.png
    │   └── loader.png
    ├── js/
    │   └── careold.js
    └── vendors/
        ├── animate/
        ├── bootstrap/
        ├── bootstrap-select/
        ├── careold-icons/
        ├── careold-toolbar/
        ├── countdown/
        ├── fontawesome/
        ├── gsap/
        ├── imagesloaded/
        ├── isotope/
        ├── jarallax/
        ├── jquery/
        ├── jquery-ajaxchimp/
        ├── jquery-appear/
        ├── jquery-circle-progress/
        ├── jquery-circleType/
        ├── jquery-lettering/
        ├── jquery-magnific-popup/
        ├── jquery-ui/
        ├── jquery-validate/
        ├── nouislider/
        ├── owl-carousel/
        ├── slick/
        ├── tilt/
        ├── tiny-slider/
        ├── wnum/
        └── wow/
```

The repository contains 312 tracked files, including PHP templates, CSS, JavaScript, fonts, SVGs, and image assets.

## How the application is assembled

### Shared layout

Pages that use the shared layout follow this pattern:

```php
<?php include("header.php"); ?>

<!-- page-specific markup -->

<?php include("footer.php"); ?>
```

`header.php` contains the document head, favicon references, Google Fonts, global stylesheets, navigation, and the opening page structure. `footer.php` contains the footer, search overlay, and JavaScript dependencies.

Some of the longer template pages contain their own complete markup and asset references instead of using both shared includes. When adding a new page, prefer the shared layout pattern so navigation, styles, and scripts stay consistent.

### Styling

- `assets/css/careold.css` is the primary theme stylesheet.
- `assets/css/careold-dark.css` contains dark-theme styles.
- `assets/css/careold-rtl.css` contains right-to-left layout styles.
- `assets/css/careold-custom-rtl.css` contains custom RTL adjustments.
- Page markup uses the Careold BEM-style class naming convention.

### JavaScript behavior

`assets/js/careold.js` initializes and controls interactive behavior such as:

- Responsive navigation and sticky headers
- Sliders and carousels
- Search and popup interactions
- Date pickers
- Counters and progress bars
- Checkout accordion behavior
- Form validation hooks
- Isotope filtering
- Scroll and entrance animations
- Custom cursor behavior
- Gallery and lightbox interactions

## Local development

### Requirements

- PHP 7.4 or newer recommended; PHP 8.x is preferred for production
- A browser
- Optional: Apache or Nginx for a production-like environment

No `npm install`, Composer install, or asset compilation is required for the current version.

### Run with PHP's built-in server

```bash
git clone https://github.com/SagsMan/NURSEDOC.git
cd NURSEDOC
php -S localhost:8000
```

Open <http://localhost:8000> in a browser.

### Run with Apache

1. Place the repository inside the Apache document root.
2. Ensure PHP is enabled.
3. Open the project directory through the local Apache host.
4. Confirm that `index.php` is configured as a directory index.

### Run with Nginx and PHP-FPM

Configure the server block so:

- The site root points to the repository directory.
- `.php` requests are passed to PHP-FPM.
- Static files under `assets/` are served directly.
- `index.php` is used as the default index file.

## Configuration and content updates

### Branding and global contact details

Global branding, navigation, contact details, social links, and footer content are primarily located in:

- `header.php`
- `footer.php`

Update the placeholder address, email address, phone/opening hours, social URLs, and logo references before production launch.

### Page content

Most page content is written directly in the relevant `.php` file. Service copy and calls to action are distributed across the service overview and service detail pages.

### Images and icons

Place replacement images in the matching `assets/images/` category and update the corresponding `src` or CSS `background-image` reference. Keep filenames lowercase and use descriptive names where possible.

## Forms and integrations

The current repository contains the visual form interfaces but not a complete application backend:

- The contact and team forms currently point to the original Careold template email endpoint and should be replaced with a controlled, server-side endpoint.
- Newsletter forms use the placeholder `MAILCHIMP_FORM_URL` and require a real provider URL or a custom backend.
- Search, coupon, cart, checkout, and login forms are UI templates with `#` actions unless a backend is added.
- There is no database connection, mail service configuration, session-based authentication, or payment gateway in this repository.

Before accepting real customer data, add server-side validation, CSRF protection, rate limiting, spam protection, secure mail delivery, and an appropriate privacy policy.

## Known gaps before production

1. **Missing template routes:** Some navigation and footer links reference additional template files that are not currently in this repository, including alternate blog, gallery, product, portfolio, review, team, and home-page variants. Either add those pages or update the links to routes that exist.
2. **Placeholder content:** Several Careold theme labels, dates, addresses, social links, and marketing phrases remain and should be replaced with NurseDoc content.
3. **Forms:** Replace third-party demo form actions and placeholder newsletter configuration.
4. **Authentication and commerce:** Implement a real backend before using `login.php`, `cart.php`, or `checkout.php` for user accounts or transactions.
5. **SEO and accessibility:** Review page titles, descriptions, canonical URLs, heading hierarchy, image alt text, structured data, keyboard navigation, and color contrast.
6. **Asset licensing:** Confirm the licenses for the theme, fonts, icons, images, and bundled vendor libraries before commercial deployment.
7. **Performance:** Optimize large images, enable compression and caching, and consider a CDN for production traffic.

## Deployment checklist

- [ ] Replace all placeholder NurseDoc/Careold content.
- [ ] Update global navigation, contact information, and social links.
- [ ] Replace or remove links to pages that are not included.
- [ ] Configure real contact and newsletter processing.
- [ ] Add HTTPS and secure headers.
- [ ] Add server-side validation and CSRF protection to every form.
- [ ] Review third-party asset licenses.
- [ ] Optimize images and enable browser/server caching.
- [ ] Test on mobile, tablet, and desktop breakpoints.
- [ ] Test all page links, forms, keyboard interactions, and 404 handling.
- [ ] Add analytics only after reviewing consent and privacy requirements.

## Contributing

1. Create a feature branch.
2. Make the smallest focused change possible.
3. Test the affected pages using a local PHP server.
4. Check browser console errors and broken asset links.
5. Commit with a clear message.
6. Open a pull request against `main`.

## License

No project-specific license file is currently included. Before redistributing or deploying the site, document the license for the NurseDoc code and verify the licenses of the original Careold theme and all bundled assets.