# Twenty Twenty-Five

Welcome to the development repository for the default theme that will launch with WordPress 6.7.

## About

While ideating Twenty Twenty-Five, one recurring idea was that simple things should be intuitive while complex things should be possible. This concept of simplicity and complexity leads to a reliable foundation for extending a default WordPress experience to make it yours.

Twenty Twenty-Five embodies ultimate flexibility and adaptability, showcasing the many ways WordPress enables people to tell their stories with many patterns and styles to choose from. The glimpses of natural beauty and ancestry woven into the theme evoke ideas of impermanence, the passage of time, and continuous evolution.

[Introducing Twenty Twenty-Five](https://make.wordpress.org/core/2024/08/15/introducing-twenty-twenty-five/)

Twenty Twenty-Five is built as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

## Contributing

Connect your GitHub account to your WordPress.org account to receive props for your contributions.
Please see the tutorials on [Linking your GitHub and w.org profiles](https://make.wordpress.org/core/handbook/tutorials/linking-your-github-and-w-org-profiles/).

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentyfive/issues) is a great place to start looking for tasks. [Pull requests](https://github.com/WordPress/twentytwentyfive/pulls) are preferred when linked to an existing issue.

Contributing is not just for developers! There are many opportunities to help with [testing](#getting-started), triage, discussion, design, building patterns and templates, and more. Please look through [open issues](https://github.com/WordPress/twentytwentyfive/issues), and join in wherever you feel most comfortable.

If you'd like to help with triage, open a new issue and one of the maintainers will help you get set up with the ability to add labels to issues and PRs.

### Getting Started

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to Docker. Alternatively you can use [WordPress Playground](https://developer.wordpress.org/playground/) to test the theme directly in the browser.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory.

### Tips for Contributors

- As stated above, a goal for the theme is to have as little CSS as possible. Much of the theme's visual treatments should be handled by the Block Editor and Global Styles. As a general rule, if multiple themes would benefit from the CSS you're considering adding, it might reasonably be provided by Gutenberg instead. Let's include clear code comments for any CSS we do include.
- Similarly, let's refrain from building any custom-built PHP or JavaScript-based workarounds for functionality that might reasonably be provided by the Block Editor, let's keep the code simple to help with future maintenance.
- In accordance to those last two bullets, this theme has no required build process.
- Refrain from creating pull requests for translatable strings until all patterns, parts, and templates are completed.


## Requirements

- Gutenberg plugin (latest)
- WordPress 6.6+ (Will be 6.7 at the time of release)
- PHP 7.2.24+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require the development version of Gutenberg and will be described or tagged accordingly.

## Resources

- [The theme design on Figma](https://www.figma.com/design/dzGCSntVch4EQdVERTqyVK/Twenty-Twenty-Five)

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Theme Developer Handbook](https://developer.wordpress.org/themes/getting-started/what-is-a-theme/)
- [Block Edtior Handbook: Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Block Edtior Handbook: theme.json reference](https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/)

## Timeline

The theme will be released with WordPress 6.7 and follow the key dates / milestones associated with its future development schedule.
