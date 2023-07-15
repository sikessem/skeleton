<div align="center">

[![sikessem-logo]][sikessem-link]

<br/>

[![php-icon]][php-link]
[![packagist-version-icon]][packagist-version-link]
[![packagist-download-icon]][packagist-download-link]
[![license-icon]][license-link]
[![actions-icon]][actions-link]
[![pr-icon]][pr-link]
[![twitter-icon]][twitter-link]

</div>

[sikessem-logo]: https://github.com/sikessem/art/blob/HEAD/images/sikessem.svg
[sikessem-link]: https://github.com/sikessem "Sikessem"

[php-icon]: https://img.shields.io/badge/PHP-ccc.svg?style=flat&logo=php
[php-link]: https://github.com/sikessem/skeleton/search?l=php "PHP code"

[packagist-version-icon]: https://img.shields.io/packagist/v/sikessem/skeleton
[packagist-version-link]: https://packagist.org/packages/sikessem/skeleton "Skeleton Releases"

[packagist-download-icon]: https://img.shields.io/packagist/dt/sikessem/skeleton
[packagist-download-link]: https://packagist.org/packages/sikessem/skeleton "Skeleton Downloads"

[actions-icon]: https://github.com/sikessem/skeleton/workflows/CI/badge.svg
[actions-link]: https://github.com/sikessem/skeleton/actions "Skeleton status"

[pr-icon]: https://img.shields.io/badge/PRs-welcome-brightgreen.svg?color=brightgreen
[pr-link]: https://github.com/sikessem/.github/blob/HEAD/CONTRIBUTING.md "PRs welcome!"

[twitter-icon]: https://img.shields.io/twitter/follow/sikessem.svg?label=@sikessem_tweets
[twitter-link]: https://twitter.com/intent/follow?screen_name=sikessem_tweets "Ping Sikessem"

[license-icon]: https://img.shields.io/badge/license-MIT-blue.svg
[license-link]: https://github.com/sikessem/skeleton/blob/HEAD/LICENSE "Skeleton License"
[conduct-link]: https://github.com/sikessem/skeleton/blob/HEAD/CODE_OF_CONDUCT.md
[discuss-link]: https://github.com/orgs/sikessem/discussions
[docs-link]: https://github.com/sikessem/skeleton#readme "Skeleton Documentation"

***

# 📦️ Sikessem Skeleton

Create a new [Sikessem][sikessem-link] project based on this template.

## 🔖 Contents

- [📦️ Sikessem Skeleton](#️-sikessem-skeleton)
  - [🔖 Contents](#-contents)
  - [📋 Requirements](#-requirements)
  - [🎉 Getting Started](#-getting-started)
    - [⚡️ Installation](#️-installation)
    - [🧑‍💻 Usage](#-usage)
    - [🧪 Testing and debugging](#-testing-and-debugging)
  - [📖 Documentation](#-documentation)
  - [👏 Contribution](#-contribution)
    - [👷 Code of Conduct](#-code-of-conduct)
    - [👥 Contributing Guide](#-contributing-guide)
    - [🔒️ Good First Issues](#️-good-first-issues)
    - [💬 Discussions](#-discussions)
  - [🔐 Security Reports](#-security-reports)
  - [📄 License](#-license)

## 📋 Requirements

> - **Requires [PHP 8.1+](https://php.net/releases/)** (at least 8.1.19 recommended to avoid potential bugs).
> - **Requires [Composer v2+](https://getcomposer.org/)** to manage PHP dependencies.

## 🎉 Getting Started

### ⚡️ Installation

[Use this template](https://github.com/sikessem/skeleton/generate) or create a new [Sikessem][sikessem-link] library via the [Composer](https://getcomposer.org/) `create-project` command (recommended):

```bash
composer create-project sikessem/skeleton --prefer-source my-lib
```

### 🧑‍💻 Usage

```php
<?php

use Sikessem\Skeleton\Program;

$vendor_dir = __DIR__.'/vendor'; // Replace it by your vendor directory

include_once $vendor_dir.'/autoload.php';

Program::main(); // Print "Hello World!"
```

### 🧪 Testing and debugging

🧹 Keep a modern codebase with **Pint**:

```bash
composer lint
```

⚗️ Run static analysis:

- Using **PHPStan**:

```bash
composer analyse
```

- Using **Psalm**:

```bash
composer inspect
```

✅ Run unit tests using **PEST**

```bash
composer test
```

🐛 Check all code bugs:

```bash
composer debug
```

🚀 Fix the entire code:

```bash
composer fix
```

## 📖 Documentation

The full documentation for the Sikessem Skeleton can be found on [this address][docs-link].

## 👏 Contribution

The main purpose of this repository is to continue evolving Sikessem. We want to make contributing to this project as easy and transparent as possible, and we are grateful to the community for contributing bug fixes and improvements. Read below to learn how you can take part in improving Sikessem.

### [👷 Code of Conduct][conduct-link]

Sikessem has adopted a Code of Conduct that we expect project participants to adhere to.
Please read the [full text][conduct-link] so that you can understand what actions will and will not be tolerated.

### 👥 [Contributing Guide][pr-link]

Read our [**Contributing Guide**][pr-link] to learn about our development process, how to propose bugfixes and improvements, and how to build and test your changes to Sikessem.

### 🔒️ Good First Issues

We have a list of [good first issues][gfi] that contain bugs which have a relatively limited scope. This is a great place to get started, gain experience, and get familiar with our contribution process.

[gfi]: https://github.com/sikessem/skeleton/labels/good%20first%20issue

### 💬 Discussions

Larger discussions and proposals are discussed in [**Sikessem's GitHub discussions**][discuss-link].

## 🔐 Security Reports

If you discover a security vulnerability within [Sikessem][sikessem-link], please email [SIGUI Kessé Emmanuel](https://sigui.ci) at [contact@sigui.ci](mailto:contact@sigui.ci). All security vulnerabilities will be promptly addressed.

## 📄 License

The Sikessem Skeleton is open-sourced software licensed under the  [MIT License](https://opensource.org/licenses/MIT) - see the [LICENSE][license-link] file for details.

***

<div align="center"><sub>Made with ❤︎ by <a href="https://twitter.com/intent/follow?screen_name=siguici" style="content:url(https://img.shields.io/twitter/follow/siguici.svg?label=@siguici);margin-bottom:-6px">@siguici</a>.</sub></div>
