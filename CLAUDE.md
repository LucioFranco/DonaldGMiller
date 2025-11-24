# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a memorial website built in 2012 as a tribute to Donald Gabriel Miller (1927-2012). Originally built in PHP as a first coding project, it has been converted to mdBook (a static site generator) in 2025 for easier long-term maintenance.

## Technology Stack

- **Static Site Generator**: mdBook (Rust-based)
- **Content Format**: Markdown
- **Output**: Static HTML/CSS/JavaScript
- **Deployment**: Can be served from any web server or static hosting service

## Development Commands

### mdBook Operations

```bash
# Install mdBook (one-time setup)
cargo install mdbook

# Serve with live reload during development
mdbook serve
# Access at: http://localhost:3000

# Build static HTML for production
mdbook build
# Output will be in the book/ directory
```

### Content Structure

All content is in Markdown format under `src/`:
- `src/SUMMARY.md` - Table of contents (defines the book structure)
- `src/*.md` - Chapter files organized by topic
- `src/images/` - All images used throughout the site
- `book.toml` - mdBook configuration file

## File Structure

```
/
├── book.toml              # mdBook configuration
├── src/                   # Source content
│   ├── SUMMARY.md         # Table of contents
│   ├── introduction.md    # Home page
│   ├── about/            # About section
│   ├── professional/     # Professional life content
│   ├── personal/         # Personal life content
│   ├── tributes/         # Tribute pages
│   ├── publications/     # Scientific publications by decade
│   ├── galleries/        # Photo galleries
│   ├── appendix/         # Additional materials
│   └── images/           # All site images
├── book/                 # Generated HTML (git-ignored)
└── archive/              # Original PHP files (archived)
```

## Working with Content

### Adding or Editing Pages

1. Edit or create Markdown files in the `src/` directory
2. Add new pages to `src/SUMMARY.md` to include them in the navigation
3. Use relative links: `[Link Text](../path/to/page.md)`
4. Images: `![Alt text](../images/photo.jpg)`

### mdBook Features

- Automatic table of contents from SUMMARY.md
- Built-in search functionality
- Responsive design
- Light/dark theme support
- Print-friendly output
- Fast static site generation

## Historical Context

Originally a PHP-based website created in 2012 as a first coding project. Converted to mdBook in 2025 to:
- Eliminate server-side dependencies
- Simplify long-term maintenance
- Enable easier hosting options
- Preserve content in a more maintainable format

The original PHP files are preserved in the `archive/` directory for reference.
