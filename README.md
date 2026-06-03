# ToShop

> A Laravel-powered e-commerce website with integrated cart and authentication features.

![GitHub stars](https://img.shields.io/github/stars/rahimihesam/ToShop?style=for-the-badge&logo=github) ![GitHub forks](https://img.shields.io/github/forks/rahimihesam/ToShop?style=for-the-badge&logo=github) ![GitHub issues](https://img.shields.io/github/issues/rahimihesam/ToShop?style=for-the-badge&logo=github) ![Last commit](https://img.shields.io/github/last-commit/rahimihesam/ToShop?style=for-the-badge&logo=github) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white) ![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white) ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)

## 📑 Table of Contents

- [Description](#description)
- [Key Features](#key-features)
- [Use Cases](#use-cases)
- [Tech Stack](#tech-stack)
- [Quick Start](#quick-start)
- [Environment Variables](#environment-variables)
- [Available Scripts](#available-scripts)
- [Project Structure](#project-structure)
- [Development Setup](#development-setup)
- [Contributing](#contributing)

## 📝 Description

ToShop is a traditional e-commerce web application originally developed by sybogroup. It combines a backend powered by the Laravel framework with standard web interfaces to deliver a functional shopping website experience, featuring product browsing, cart management, and user authentication resources.

## ✨ Key Features

- **🛡️ Laravel Backend Architecture** — Utilizes the Laravel framework to handle backend application logic, database connections, and session management.
- **🔑 Built-In Authentication Flows** — Includes dedicated directories and structures designed for managing user login and credentials.
- **🛒 Integrated Shopping Cart Interface** — Features dedicated files for cart handling and checkout processes to guide users from product selection to purchase.
- **⚡ Vite Asset Compilation** — Leverages Vite to bundle frontend assets efficiently through customizable build and dev scripts.

## 🎯 Use Cases

- Maintaining or upgrading an older Laravel-based online shop site.
- Studying a classic Laravel architecture configured with static and dynamic e-commerce layouts.

## 🛠️ Tech Stack

- 🟨 **JavaScript**
- ⬢ **Node.js**
- 🐘 **PHP**
- ⚡ **Vite**

**Notable libraries:** Laravel

## ⚡ Quick Start

```bash

# 1. Clone the repository
git clone https://github.com/rahimihesam/ToShop.git

# 2. Install dependencies
npm install

# 3. Configure environment
cp .env.example .env   # then fill in the values

# 4. Start the dev server
npm run dev
```

## 🔑 Environment Variables

The following environment variables are required (see `.env.example`):

```bash
APP_NAME=
APP_ENV=
APP_KEY=
APP_DEBUG=
APP_URL=
LOG_CHANNEL=
LOG_DEPRECATIONS_CHANNEL=
LOG_LEVEL=
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
BROADCAST_DRIVER=
CACHE_DRIVER=
FILESYSTEM_DISK=
QUEUE_CONNECTION=
SESSION_DRIVER=
SESSION_LIFETIME=
MEMCACHED_HOST=
REDIS_HOST=
REDIS_PASSWORD=
REDIS_PORT=
MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=
PUSHER_SCHEME=
PUSHER_APP_CLUSTER=
VITE_PUSHER_APP_KEY=
VITE_PUSHER_HOST=
VITE_PUSHER_PORT=
VITE_PUSHER_SCHEME=
VITE_PUSHER_APP_CLUSTER=
```

## 🚀 Available Scripts

- **dev** — `npm run dev`
- **build** — `npm run build`

## 📁 Project Structure

```
.
├── about.html
├── assemble auto
│   ├── SaveWeb2zip-toshope-ir.zip
│   ├── assembleauto.html
│   ├── css
│   │   ├── body.css
│   │   ├── bootstrap.rtl.css
│   │   ├── fontawesome.css
│   │   ├── footer.css
│   │   ├── preloader.css
│   │   ├── style.css
│   │   └── style2.css
│   ├── fonts
│   │   ├── Lalezar-Regular.eot
│   │   ├── Lalezar-Regular.ttf
│   │   ├── Lalezar-Regular.woff
│   │   ├── Lalezar-Regular.woff2
│   │   ├── Nazanin.eot
│   │   ├── Nazanin.ttf
│   │   ├── Nazanin.woff
│   │   ├── Vazir.eot
│   │   ├── Vazir.ttf
│   │   ├── Vazir.woff
│   │   ├── fa-brands-400.eot
│   │   ├── fa-brands-400.svg
│   │   ├── fa-brands-400.ttf
│   │   ├── fa-brands-400.woff
│   │   ├── fa-brands-400.woff2
│   │   ├── fa-regular-400.eot
│   │   ├── fa-regular-400.svg
│   │   ├── fa-regular-400.ttf
│   │   ├── fa-regular-400.woff
│   │   ├── fa-regular-400.woff2
│   │   ├── fa-solid-900.eot
│   │   ├── fa-solid-900.svg
│   │   ├── fa-solid-900.ttf
│   │   ├── fa-solid-900.woff
│   │   └── fa-solid-900.woff2
│   ├── images
│   │   ├── 0eHlOjvOfdGNzvOYPSPBd2il2xZ2zCJ1G8TcNH1i.jpg
│   │   ├── 1.jpg
│   │   ├── 1lMd5klMJTYDrPt96GRCDm1WXpv5DCwmIoja4lJc.jpg
│   │   ├── 4HJCMSoV5LxeYfOGPhH92zoZlliv5uhiA0xm1A07.jpg
│   │   ├── 8Yo54xFpPPLZO0Gmtw9Fc78VxB3CczSMCZw0KBtX.jpg
│   │   ├── 8dDbBB6UvQzrA3iLl5SfNpQGOoe23VTGTUlYCzSy.jpg
│   │   ├── HJMGLs1iKMn8LUSlYBUqf3cFQFpZL32WJcGrOuT8.jpg
│   │   ├── LPqHFdFSw1wseSqSMHaz0F8a68JYe8qzv7UHcTTt.jpg
│   │   ├── LVm6x5FotRPb2621oRcZDh9nhS75yIvFFnDl2VxG.jpg
│   │   ├── MAeUbHf7BZMZXAkvRyisRRgaCKbyYFwINpfbRZ4H.jpg
│   │   ├── N2Sa42udWprwSMbCmIprn2Jct2UnVtiKXa4eJ6A3.jpg
│   │   ├── Rk63YydAXOX7frCNhZowRsQmEvFnd2LFdyebKt7I.jpg
│   │   ├── Up6ELNUljbWLjac3oDB0mvgz6XZV0WiQZsT5nIkg.jpg
│   │   ├── VlqAxsmvCiIC099OjJblGGZcpuXl48CsK0fcC110.jpg
│   │   ├── XwFWbVAeXjqepGsbDZSA7CNJxGIVgMs1nlomPqOs.jpg
│   │   ├── Zj0ta9dskpBnCWciH7UYgWMbwh5bdaTvFSerC3Hj.jpg
│   │   ├── aMbPpaFQ0mYHOQHWD2xqnsAyYJMgOEZGDNDs2juF.jpg
│   │   ├── black-back.jpg
│   │   ├── bxQTXhnWe6Cz7caGzq48PxiJyEmh87daPotxebYQ.jpg
│   │   ├── ee3zpmhi3WK71y55kpYVDCWSGayzr16TI6qJdsyF.jpg
│   │   ├── gamepad.png
│   │   ├── hfqQFOKCyEcYZniSXR69Etlehp8XExLG4NmmEqKB.jpg
│   │   ├── kv-pd.webp
│   │   ├── lY27z3OHR4bXHKgcUbBDMwciiLxzXkrOFozMVWUM.jpg
│   │   ├── logo.png
│   │   ├── m2f2zwtRw0kWiSnwd7DVxMajLtxgsxqLre7PRH53.jpg
│   │   ├── om1mZMlkUGyJTpo8F8JjMBI7MoPCWkzRjfYsothq.jpg
│   │   ├── pTP3rK2l7mci0UMYSP5DKRdwnKgOTpZ3G7llvBY2.jpg
│   │   ├── rGfJmZvDFjRITiyokxlxzZDD6bPx1GWuTn4iyhqX.jpg
│   │   ├── s7gNvGbKkyppio1zjyDh2UbLF9vJyc8DhnwjTciI.jpg
│   │   ├── sCtiKOl6zpeKDN4GUGEvdOY557YsbOAWIWUdHBah.jpg
│   │   ├── wSfGRBuzBZKGpMlmxSGqJZC5OTbPNaotuzqQDSzI.jpg
│   │   ├── whgYMS2sb6v6b0kmlSV9rf5ln9XOFeH0FgxPttRd.jpg
│   │   ├── zZkkQ9Wwj6aPl1sEI7wFQXOBYDgql4WaUR8Y2Kp0.jpg
│   │   ├── Ø§Ø³ Ø§Ø³ Ø¯Û_.png
│   │   ├── Ø®Ù_Ú© Ú©Ù_Ù_Ø¯Ù_.png
│   │   ├── Ø±Ù_.png
│   │   ├── Ø³Û_ Ù¾Û_ Û_Ù_.png
│   │   ├── Ù_Ø§Ø¯Ø±Ø¨Ø±Ø¯.png
│   │   ├── Ù_Ø§Ø±Ø¯.png
│   │   ├── Ù¾Ø§Ù_Ø±.png
│   │   ├── Ú©Ø§Ø±Øª Ú¯Ø±Ø§Ù_Û_Ú©.png
│   │   └── Ú©Û_Ø³.png
│   └── js
│       ├── bootstrap.min_1.js
│       ├── custom.js
│       ├── livewire.js
│       └── main.js
├── assets
│   ├── css
│   │   └── custom.css
│   ├── img
│   │   └── art.jpg
│   ├── js
│   │   └── bootstrap.bundle.js
│   ├── login
│   │   ├── fonts
│   │   │   ├── vazir.eot
│   │   │   ├── vazir.ttf
│   │   │   ├── vazir.woff
│   │   │   └── vazir.woff2
│   │   ├── images
│   │   │   ├── 2.jpg
│   │   │   ├── 2.svg
│   │   │   ├── back.jpg
│   │   │   ├── back.svg
│   │   │   ├── backtwo.jpg
│   │   │   ├── backtwo.svg
│   │   │   └── logo.svg
│   │   └── styles
│   │       ├── reset.css
│   │       ├── responsive.css
│   │       └── style.css
│   └── webfonts
│       ├── VazirFD.eot
│       ├── VazirFD.ttf
│       ├── VazirFD.woff
│       └── VazirFD.woff2
├── cart
│   ├── bootstrap.rtl.css
│   ├── fontawesome.css
│   ├── index.html
│   ├── javaS.js
│   └── style.css
├── cart.html
├── contact.html
├── header.html
├── index.html
├── login
│   ├── fonts
│   │   ├── vazir.eot
│   │   ├── vazir.ttf
│   │   ├── vazir.woff
│   │   └── vazir.woff2
│   ├── images
│   │   ├── 2.jpg
│   │   └── 2.svg
│   ├── login.html
│   ├── register.html
│   └── styles
│       ├── reset.css
│       ├── responsive.css
│       └── style.css
├── login2
│   └── form
│       ├── index.html
│       ├── js.js
│       └── style.css
├── mag
│   ├── cart
│   │   ├── bootstrap.rtl.css
│   │   ├── cart.html
│   │   └── fontawesome.css
│   ├── css
│   │   ├── black.css
│   │   ├── blue.css
│   │   ├── bootstrap-icons.css
│   │   ├── font-awesome.css
│   │   ├── orange.css
│   │   ├── preloader.css
│   │   ├── red.css
│   │   ├── skins
│   │   │   ├── black.css
│   │   │   ├── blue.css
│   │   │   ├── orange.css
│   │   │   ├── purple.css
│   │   │   ├── red.css
│   │   │   └── styleSwitcher.css
│   │   ├── style.css
│   │   └── styleSwitcher.css
│   ├── fonts
│   │   ├── Vazir.eot
│   │   ├── Vazir.ttf
│   │   ├── Vazir.woff
│   │   ├── fa-brands-400.eot
│   │   ├── fa-brands-400.svg
│   │   ├── fa-brands-400.ttf
│   │   ├── fa-brands-400.woff
│   │   ├── fa-brands-400.woff2
│   │   ├── fa-regular-400.eot
│   │   ├── fa-regular-400.svg
│   │   ├── fa-regular-400.ttf
│   │   ├── fa-regular-400.woff
│   │   ├── fa-regular-400.woff2
│   │   ├── fa-solid-900.eot
│   │   ├── fa-solid-900.svg
│   │   ├── fa-solid-900.ttf
│   │   ├── fa-solid-900.woff
│   │   ├── fa-solid-900.woff2
│   │   ├── star-of-life-solid.svg
│   │   └── star-solid.svg
│   ├── images
│   │   ├── 1.jpg
│   │   ├── 1.png
│   │   ├── 11.png
│   │   ├── 2.jpg
│   │   ├── 3.jpg
│   │   ├── 4.jpg
│   │   ├── 4HJCMSoV5LxeYfOGPhH92zoZlliv5uhiA0xm1A07.jpg
│   │   ├── 5.jpg
│   │   ├── Fek3P9itVncpbc0zu3MLSAh0ZQDmlwG6XIt8VoME.jpg
│   │   ├── LPqHFdFSw1wseSqSMHaz0F8a68JYe8qzv7UHcTTt.jpg
│   │   ├── PE6NNnJhu8E6pl8nzgDvuqdxIDQUZUbzFmGY7rYW.jpg
│   │   ├── Rk63YydAXOX7frCNhZowRsQmEvFnd2LFdyebKt7I.jpg
│   │   ├── Up6ELNUljbWLjac3oDB0mvgz6XZV0WiQZsT5nIkg.jpg
│   │   ├── contactusbanner.png
│   │   ├── ee3zpmhi3WK71y55kpYVDCWSGayzr16TI6qJdsyF.jpg
│   │   ├── lY27z3OHR4bXHKgcUbBDMwciiLxzXkrOFozMVWUM.jpg
│   │   ├── logo.png
│   │   ├── om1mZMlkUGyJTpo8F8JjMBI7MoPCWkzRjfYsothq.jpg
│   │   ├── owl.video.play.png
│   │   ├── product
│   │   │   ├── 1.jpg
│   │   │   ├── 2.jpg
│   │   │   ├── 3.jpg
│   │   │   ├── 4.jpg
│   │   │   ├── 5.jpg
│   │   │   ├── 6.jpg
│   │   │   └── 8.jpg
│   │   ├── testimonial.jpg
│   │   ├── tetimonial
│   │   │   ├── 1.jpg
│   │   │   ├── 2.jpg
│   │   │   ├── 3.jpg
│   │   │   ├── 4.jpg
│   │   │   └── 5.jpg
│   │   └── whgYMS2sb6v6b0kmlSV9rf5ln9XOFeH0FgxPttRd.jpg
│   ├── index.html
│   └── js
│       ├── custom.js
│       ├── font-awesome.js
│       ├── script.js
│       └── styleSwitcher.js
├── read-page.html
├── scss
│   ├── base
│   │   └── _base.scss
│   ├── components
│   │   ├── _breakpoints.scss
│   │   └── _header.scss
│   ├── config
│   │   └── _variables.scss
│   ├── layout
│   │   └── _layout.scss
│   └── styles.scss
├── shop.html
└── toshop
    ├── .env.example
    ├── app
    │   ├── Console
    │   │   └── Kernel.php
    │   ├── Exceptions
    │   │   └── Handler.php
    │   ├── Http
    │   │   ├── Controllers
    │   │   │   └── Controller.php
    │   │   ├── Kernel.php
    │   │   └── Middleware
    │   │       ├── Authenticate.php
    │   │       ├── EncryptCookies.php
    │   │       ├── PreventRequestsDuringMaintenance.php
    │   │       ├── RedirectIfAuthenticated.php
    │   │       ├── TrimStrings.php
    │   │       ├── TrustHosts.php
    │   │       ├── TrustProxies.php
    │   │       ├── ValidateSignature.php
    │   │       └── VerifyCsrfToken.php
    │   ├── Models
    │   │   └── User.php
    │   └── Providers
    │       ├── AppServiceProvider.php
    │       ├── AuthServiceProvider.php
    │       ├── BroadcastServiceProvider.php
    │       ├── EventServiceProvider.php
    │       └── RouteServiceProvider.php
    ├── artisan
    ├── bootstrap
    │   └── app.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── cors.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── hashing.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── sanctum.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── factories
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 2014_10_12_000000_create_users_table.php
    │   │   ├── 2014_10_12_100000_create_password_reset_tokens_table.php
    │   │   ├── 2019_08_19_000000_create_failed_jobs_table.php
    │   │   └── 2019_12_14_000001_create_personal_access_tokens_table.php
    │   └── seeders
    │       └── DatabaseSeeder.php
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── css
    │   │   ├── New folder
    │   │   │   └── style.css
    │   │   ├── app.css
    │   │   ├── bootstrap.rtl.css
    │   │   ├── custom cart .css
    │   │   ├── custom.bk.css
    │   │   ├── custom.css
    │   │   ├── fontawesome.css
    │   │   ├── mgmenu.css
    │   │   ├── rsmenu.css
    │   │   ├── slick-theme.css
    │   │   └── templatemo.css
    │   ├── favicon.ico
    │   ├── img
    │   │   ├── 1.jpg
    │   │   ├── 11.jpg
    │   │   ├── 12.jpeg
    │   │   ├── Picsart_23-06-19_09-25-36-277.jpg
    │   │   ├── about-hero.svg
    │   │   ├── add1.jpg
    │   │   ├── add12.jpg
    │   │   ├── add13.jpg
    │   │   ├── add3.jpg
    │   │   ├── add4.jpg
    │   │   ├── ajax-loader.gif
    │   │   ├── banner-s1.jpg
    │   │   ├── banner-s2.jpg
    │   │   ├── banner.jpg
    │   │   ├── banner2.jpg
    │   │   ├── banner3.jpg
    │   │   ├── banner_img_01.jpg
    │   │   ├── banner_img_02.jpg
    │   │   ├── banner_img_03.jpg
    │   │   ├── brand_01.png
    │   │   ├── brand_02.png
    │   │   ├── brand_03.png
    │   │   ├── brand_04.png
    │   │   ├── category_img_01.jpg
    │   │   ├── category_img_01.png
    │   │   ├── category_img_02.jpg
    │   │   ├── category_img_02.png
    │   │   ├── category_img_03.jpg
    │   │   ├── category_img_03.png
    │   │   ├── category_img_04.png
    │   │   ├── cooler-master.jpg
    │   │   ├── favicon.ico
    │   │   ├── feature_prod_01.jpg
    │   │   ├── feature_prod_02.jpg
    │   │   ├── feature_prod_03.jpg
    │   │   ├── keyboard-raizer.jpg
    │   │   ├── logo.png
    │   │   ├── product
    │   │   │   ├── 1.jpg
    │   │   │   ├── 2.jpg
    │   │   │   ├── 3.jpg
    │   │   │   ├── 4.jpg
    │   │   │   ├── 5.jpg
    │   │   │   ├── 6.jpg
    │   │   │   └── 8.jpg
    │   │   ├── product_single_01.jpg
    │   │   ├── product_single_02.jpg
    │   │   ├── product_single_03.jpg
    │   │   ├── product_single_04.jpg
    │   │   ├── product_single_05.jpg
    │   │   ├── product_single_06.jpg
    │   │   ├── product_single_07.jpg
    │   │   ├── product_single_08.jpg
    │   │   ├── product_single_09.jpg
    │   │   ├── product_single_10.jpg
    │   │   ├── s-banner1.jpg
    │   │   ├── s-banner2.jpg
    │   │   ├── shop_01.jpg
    │   │   ├── shop_02.jpg
    │   │   ├── shop_03.jpg
    │   │   ├── shop_04.jpg
    │   │   ├── shop_05.jpg
    │   │   ├── shop_06.jpg
    │   │   ├── shop_07.jpg
    │   │   ├── shop_08.jpg
    │   │   ├── shop_09.jpg
    │   │   ├── shop_10.jpg
    │   │   ├── shop_11.jpg
    │   │   ├── steelseries.jpg
    │   │   └── شقف.تحل
    │   ├── index.php
    │   ├── js
    │   │   ├── app.js
    │   │   ├── bootstrap.js
    │   │   ├── custom.js
    │   │   ├── menu.js
    │   │   ├── menuapp.js
    │   │   ├── switch.js
    │   │   └── templatemo.js
    │   ├── robots.txt
    │   └── webfonts
    │       ├── AbrilFatface-Regular.ttf
    │       ├── B-NAZANIN.TTF
    │       ├── HammersmithOne-Regular.ttf
    │       ├── KoodakBold.ttf
    │       ├── KoodakBold.woff
    │       ├── Lalezar-Regular.ttf
    │       ├── Nazanin.eot
    │       ├── Nazanin.ttf
    │       ├── Nazanin.woff
    │       ├── Rye-Regular.ttf
    │       ├── Yekan.eot
    │       ├── Yekan.ttf
    │       ├── Yekan.woff
    │       ├── Yekan.woff2
    │       ├── fa-brands-400.eot
    │       ├── fa-brands-400.svg
    │       ├── fa-brands-400.ttf
    │       ├── fa-brands-400.woff
    │       ├── fa-brands-400.woff2
    │       ├── fa-regular-400.eot
    │       ├── fa-regular-400.svg
    │       ├── fa-regular-400.ttf
    │       ├── fa-regular-400.woff
    │       ├── fa-regular-400.woff2
    │       ├── fa-solid-900.eot
    │       ├── fa-solid-900.svg
    │       ├── fa-solid-900.ttf
    │       ├── fa-solid-900.woff
    │       ├── fa-solid-900.woff2
    │       ├── hekayat.ttf
    │       ├── iran.ttf
    │       ├── slick.eot
    │       ├── slick.svg
    │       ├── slick.ttf
    │       └── slick.woff
    ├── resources
    │   └── views
    │       ├── about.blade.php
    │       ├── contant.blade.php
    │       ├── index.blade.php
    │       ├── layout
    │       │   └── master.blade.php
    │       ├── login.blade.php
    │       ├── shop-single.blade.php
    │       ├── shop.blade.php
    │       └── welcome.blade.php
    ├── routes
    │   ├── api.php
    │   ├── channels.php
    │   ├── console.php
    │   └── web.php
    ├── tests
    │   ├── CreatesApplication.php
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    └── vite.config.js
```

## 🛠️ Development Setup

### Node.js / JavaScript
1. Install Node.js (v18+ recommended)
2. Install dependencies: `npm install` (or `yarn` / `pnpm install` / `bun install`)
3. Start the dev server: see the **Quick Start** above

## 👥 Contributing

Contributions are welcome! Here's the standard flow:

1. **Fork** the repository
2. **Clone** your fork: `git clone https://github.com/rahimihesam/ToShop.git`
3. **Branch**: `git checkout -b feature/your-feature`
4. **Commit**: `git commit -m 'feat: add some feature'`
5. **Push**: `git push origin feature/your-feature`
6. **Open** a pull request

Please follow the existing code style and include tests for new behavior where applicable.

---

# toshop
created by sybogroup 
year : 2023
