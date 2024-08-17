# Twenty Twenty-Five

Welcome to the development repository for the default theme that will launch with WordPress 6.7.

## About

Twenty Twenty-Five is built as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

## Current status
As of July first 2024, the theme is in the planning stages, and ideas for the theme are being collected. There is no design to implement yet.

## Contributing

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentyfive/issues) is a great place to start looking for tasks. [Pull requests](https://github.com/WordPress/twentytwentyfive/pulls) are preferred when linked to an existing issue.

Contributing is not just for developers! There are many opportunities to help with [testing](#getting-started), triage, discussion, design, building patterns and templates, and more. Please look through [open issues](https://github.com/WordPress/twentytwentyfive/issues), and join in wherever you feel most comfortable.

If you'd like to help with triage, open a new issue and one of the maintainers will help you get set up with the ability to add labels to issues and PRs.

### Getting Started

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to docker. Alternatively you can use [WordPress Playground](https://developer.wordpress.org/playground/) to test the theme directly in the browser.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory.

### Tips for Contributors

- As stated above, a goal for the theme is to have as little CSS as possible. Much of the theme's visual treatments should be handled by the Block Editor and Global Styles. As a general rule, if multiple themes would benefit from the CSS you're considering adding, it might reasonably be provided by Gutenberg instead. Let's include clear code comments for any CSS we do include.
- Similarly, let's refrain from building any custom-built PHP or JavaScript-based workarounds for functionality that might reasonably be provided by the Block Editor, let's keep the code simple to help with future maintenance.
- In accordance to those last two bullets, this theme has no required build process.
- Refrain from creating pull requests for translatable strings until all patterns, parts, and templates are completed.
- If you've helped contribute to the theme in any way, you deserve credit! Folks will be updating [CONTRIBUTORS.md](CONTRIBUTORS.md) periodically with names of contributors, but feel free to open a PR or issue if we leave someone out.

## Requirements

- Gutenberg plugin (latest)
- WordPress 6.6+ (Will be 6.7 at the time of release)
- PHP 7.2.24+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require Gutenberg trunk and will be described or tagged accordingly.

## Testing

To run the tests locally, you'll need:

- **Node.js:** It's recommended to install Node.js using `nvm`, which helps manage the Node.js version required by the project.
- **Composer:**

Once you have these tools set up, install the necessary development dependencies by running:

```bash
npm i && composer install
```

You can then use the following commands to test the code:

- **`npm run lint:css`**: Lints all CSS files.
- **`npm run lint:css:fix`**: Lints and attempts to autofix any issues in the CSS files.
- **`npm run lint:php`**: Checks PHP files for syntax and standards errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/).
- **`npm run lint:php:fix`**: Attempts to automatically fix PHP errors.

## Resources

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Timeline

The theme will be released with WordPress 6.7 and follow the key dates / milestones associated with its future development schedule.
